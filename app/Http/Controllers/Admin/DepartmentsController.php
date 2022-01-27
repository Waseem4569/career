<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main\Departments;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\User;
use Auth;
use DB;

class DepartmentsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:department-list', ['only' => ['index']]);
        $this->middleware('permission:department-create', ['only' => ['create','store']]);
        $this->middleware('permission:department-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:department-softdelete', ['only' => ['destroy']]);
        $this->middleware('permission:department-restore', ['only' => ['restore']]);
        $this->middleware('permission:department-delete', ['only' => ['delete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Departments::withTrashed()->latest()->paginate(10);
        return view('admin.departments.index', compact('data'))->with('i', ($request->input('page', 1) -1) * 10);
    }

    public function getdepartment(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
            $totalRecords = Departments::withTrashed()->select('count(*) as allcount')
            ->leftJoin('users','users.id','=','departments.created_by')
            ->orWhere('departments.name', 'like', '%' .$searchValue . '%')
            ->orderBy('id', 'DESC')
            ->count();

        $totalRecordswithFilter = Departments::withTrashed()
            ->select('count(*) as allcount')
            ->withTrashed()
            ->leftJoin('users','users.id','=','departments.created_by')
            ->orWhere('departments.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.name', 'like', '%' .$searchValue . '%')
            ->orderBy('id', 'DESC')
            ->count();
        // Fetch records
        $records = Departments::with('users')
            ->orderBy($columnName,$columnSortOrder)
            ->withTrashed()
            ->leftJoin('users','users.id','=','departments.created_by')
            ->orWhere('departments.name', 'like', '%' .$searchValue . '%')
            ->orWhere('users.name', 'like', '%' .$searchValue . '%')
            ->select('departments.*')
            ->orderBy('id', 'DESC')
            ->skip($start)
            ->take($rowperpage)
            ->get();
  
        $data_arr = array();

            foreach($records as $record){
                $id = $record->id;
                $name = $record->name;
                $createdBy = User::where('id', $record->created_by)->pluck('name','name')->first();
                $updatedBy = User::where('id', $record->updated_by)->pluck('name','name')->first();
                $deleted_at = $record->deleted_at;

                if($record->deleted_at == Null){
                    $deleted_at = '0';
                }
                if($record->deleted_at != Null){
                    $deleted_at = '1';
                }

                $data_arr[] = array(
                    "id" => $id,
                    "name" => $name,
                    "created_by"=> $createdBy,
                    "updated_by"=> $updatedBy,
                    "deleted_at" => $deleted_at,
                );
            }

            $response = array(
                "draw" => intval($draw),
                "iTotalRecords" => $totalRecords,
                "iTotalDisplayRecords" => $totalRecordswithFilter,
                "aaData" => $data_arr
            );

            echo json_encode($response);
            exit;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Departments::get();
        return view('admin.departments.create', compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['created_by']=Auth::user()->id;
        $data['updated_by']=Auth::user()->id;

        $this->validate($request,[
            'name' => 'required',
        ]);
        

        $departmentsStore = Departments::create($data);
 

        if($departmentsStore->save()){
            return redirect(route('departments.index'))
                    ->with('message','Departments Added Successfully');
          }
          else{
            return redirect(route('departments.create'))->with('message','There is something wrong please try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Departments::findOrFail($id);
        return view('admin.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            $updatedepartments = Departments::findOrFail($id);
    
            $data = $request->all();
    
            $data['updated_by']=Auth::user()->id;
        $this->validate($request, [
        ]);
    
        $updating_page=$updatedepartments->update($data);
    
            if($updating_page){
                return redirect(route('departments.index'))->with('message','Department  Updated Successfully');
              }
            else{
               return redirect(route('departments.index'))->with('message','There is something wrong please try again!');
              }

      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getdepartment = Departments::find($id);
        $destroyPage=$getdepartment->delete();
        if($destroyPage){
            return redirect(route('departments.index'))
                ->with('message','Department Deleted Successfully!');  
        }
        else{
            return redirect(route('departments.index'))
            ->with('message','There is something wrong please try again!'); 
        }
    }
// restore departments page 
    public function restore(Request $request, $id){
        $restoredepartment =Departments::onlyTrashed()->find($id);
        if ($restoredepartment->restore()) {
        return redirect(route('departments.index'))
                ->with('message','Department Restored Successfully!'); 
        }else {
            return redirect(route('departments.index'))
            ->with('message','There is something wrong please try again!'); 
        }
    }

    public function delete(Departments $department, $id)
      {
        $department = Departments::where('id', $id)->forceDelete();
        return redirect()->back()->with('message','Record Deleted Successfully!');
      }
}
