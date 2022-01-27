<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Departments extends Model
{
        use SoftDeletes;
      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $table = 'departments';
      protected $fillable = [
        'name','created_by','updated_by',
     ];
    
     public function users()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
}
