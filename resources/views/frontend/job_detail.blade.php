@extends('frontend.layouts.web')
@section('content')

<div class="job-detail-wrapper">
  <div class="container">
    <div class="row  mt-5 mb-5">
      <h3>Deputy Director Sports</h3>
      <div class="col-lg-9 col-md-12">
        {{-- short detail with icon  --}}
        <div class="row mt-2">
          <div class="col-lg-3 col-md-6">
            <i class="fa fa-calendar mr-1 career-apply"></i>
            <p class="apply-features">Engineering Wing</p>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="fa fa-map-marker mr-1 career-apply"></i>
            <p class="apply-features"> Part-Time </p>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="fa fa-clock-o mr-1 career-apply"></i>
            <p class="apply-features">20 min ago </p>
          </div>
          <div class="col-lg-5 col-md-6">
            <i class="fa fa-clock-o mr-1 career-apply"></i>
            <p class="apply-features">School of Computational Sciences </p>
          </div>
        </div>
        {{-- short detail with table  --}}
        <div class="table-detail mt-5 text-center table-responsive">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>
                  <p>Salary</p>
                  <h5>25,000-30000/Month</h5>
                </td>
                <td >
                  <p>Shift</p>
                  <h5>Morning</h5>
                </td>
                <td>
                  <p>Qualifications</p>
                  <h5>Bachelor</h5>                    
                </td>
              </tr>
              <tr>
                <td>
                  <p>Nonumber of Vacancies</p>
                  <h5>1 opening </h5>
                </td>
                <td >
                  <p>Experience</p>
                  <h5>2 Years</h5>
                </td>
                <td>
                  <p>Job Level</p>
                  <h5>Officer</h5>               
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- short detail with description  --}}
        <div class="description mt-5">
          <h3>Job Description</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsa expedita quo veritatis dolore magni molestiae quidem! Sed sint atque, similique cupiditate non aspernatur quam nostrum laudantium quisquam temporibus. Necessitatibus dolorem explicabo enim. Nostrum ullam, laudantium deserunt laborum voluptatibus enim quo est quia fuga culpa! Minus, laudantium placeat sequi sed dolor officiis voluptatum reprehenderit laboriosam quae commodi, fugit possimus aliquam nihil iste repellendus tenetur maxime labore dolorem totam. Quia repudiandae doloribus illo error, accusantium itaque unde dolorum quae culpa minus repellendus ab. Voluptate aspernatur molestias mollitia quae tempora perferendis in?</p>
        </div>
        <div class="requirement">
          <h3>Job Requirements</h3>
          <ul>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, reprehenderit?</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 sidebar-detail">
        <div class="row green-side pt-3 pb-3 mb-4" >
          <div class="col-md-3 clock-side text-center">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
          <div class="col-md-9 p-0">
            <p class="text-light mb-2 job-pera">Deadline</p>
            <h6 class="text-light job-pera">Feburary 20, 2022</h6>
          </div>
        </div>
        {{-- green box start here --}}
        <div class="text-center">
          <a href="" target="_blank">
          <button type="button" class="btn btn-secondary border-0 text-dark pl-5 pr-5 " style="background-color:#e5ba11;padding-right: 6.4rem !important;padding-left: 6.4rem !important;"><b>Apply now</b></button>
          </a>
        </div>
        <div class="quick-career-box mt-5 p-3">
          <h5 class="widget-title">QUICK CAREER TIPS</h5>
          <div class="three-phase mt-4">
            <span>Monsoon Plantation Drive</span>
            <img src="{{asset('/frontend/images/download-1.jfif')}}" class="py-2" alt="...">
            <span class="date">10-Aug-2021</span>
          </div>
          <div class="three-phase mt-4"> 
            <span>Monsoon Plantation Drive</span>
            <img src="{{asset('/frontend/images/download-1.jfif')}}" class="py-2" alt="...">
            <span class="date">10-Aug-2021</span>
          </div>
          <div class="three-phase my-4">
            <span>Monsoon Plantation Drive</span>
            <img src="{{asset('/frontend/images/download-1.jfif')}}" class="py-2" alt="...">
            <span class="date">10-Aug-2021</span>
          </div>
        </div>
        {{-- <div class="media">
          <img class="mr-3" src="{{asset('/frontend/images/sample.jpg')}}" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="mt-0">Media heading</h5>
            Cras sit amet  Donec lacinia congue felis in faucibus.
          </div>
        </div> --}}
      </div>
      {{-- side bar end here  --}}
    </div>
  </div>
</div>

@endsection