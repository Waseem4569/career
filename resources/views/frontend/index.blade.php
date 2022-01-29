@extends('frontend.layouts.web')
@section('content')

<div class="career-portal-wrapper">
  <div class="portal-background">
    <div class="container pt-5 pb-5">
      <div class="row" >
        <div class="col-md-12 banner-text">
          <h2 class="career-color pt-3 display-moblie" >Building Careers</h2> 
          <h3 class="text-white  display-moblie" > Leading to Success</h3> 
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <form action="" method="post" class="form">
        {{-- search bar start here --}}
      <div class="top-header-wrapper">
        <div class="row header-search">

          <div class="col-md-3">
            <div class="form-group">
              <label for="location"></label>
              <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Job title or Keyword">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="location"></label>
              <select name="location" class="form-control" value="" >
                <option value=""  placeholder="Job title or Keyword">Select Job Location</option>
                <option value="Health Science">Health Sciences Wing</option>
                <option  value="Engineering">Engineering Wing</option>
              </select>
            </div>
          </div>

          <div class="col-md-3 ">
            <div class="form-group">
              <label for="department_id"></label>
              <select name="department_id" class="form-control" id="department_id" value="" >
                <option value="0">Select Category</option>
                <option value="">Computer Science</option>
              </select>
            </div>
          </div>   

          <div class="col-md-3 ">
            <div class="form-group"><br>
              <button type="submit" class="btn btn-primary border-0 text-dark">Search</button>
            </div>
          </div> 

        </div>
      </div>
          {{-- search bar end here  --}}
    </form>
  </div>
  {{-- counter start here  --}}
  <section class="counts-section mt-4">
    <div class="py-5 counter-bg-head">
      <div class="container wrapper-counter-second">
        <div class="col-lg-12 col-12">
            <div class="row justify-content-center">
              <div class="col-sm-3 col-6 short-counter text-center"><!--col starts here -->
                <div class="service-icon">
                  <img src="{{asset('frontend/images/blue_1.svg')}}" alt="">
                  <h2 class="counter">200</h2>
                  <p>Numbers of job</p>
                </div>
              </div><!-- col ends here -->
              <div class="col-sm-3 col-6 short-counter text-center"><!--col starts here -->
                <div class="service-icon">
                  <img src="{{asset('frontend/images/blue_1.svg')}}" alt="">
                  <h2 class="counter">200</h2>
                  <p>Numbers of job</p>
                </div>
              </div><!-- col ends here -->
              <div class="col-sm-3 col-6 short-counter text-center"><!--col starts here -->
                <div class="service-icon">
                  <img src="{{asset('frontend/images/blue_1.svg')}}" alt="">
                  <h2 class="counter">200</h2>
                  <p>Numbers of job</p>
                </div>
              </div><!-- col ends here -->
              <div class="col-sm-3 col-6 short-counter text-center"><!--col starts here -->
                <div class="service-icon">
                  <img src="{{asset('frontend/images/blue_1.svg')}}" alt="">
                  <h2 class="counter">200</h2>
                  <p>Numbers of job</p>
                </div>
              </div><!-- col ends here -->
            </div> {{--  row end here  --}}
          </div>
      </div>
    </div>
  </section>
  {{-- counter end here  --}}
  {{-- jobs and vacancies start here  --}}
  <section>
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="tittle text-center mb-3">
          <h2>Jobs and vacancies</h2>
        </div>
          {{-- =====accordion start here=== --}}
        <div class="col-md-3 pb-5">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Date Posted
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body show">
                  <div class="card-body">
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="postedDate" value="1">Last Hour
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="postedDate" value="24">Last 24 Hours
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio3">
                        <input type="radio" class="form-check-input" id="radio3" name="postedDate" value="(24 * 7)">Last 7 days
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio4">
                        <input type="radio" class="form-check-input" id="radio4" name="postedDate" value="(24 * 14)">Last 14 days
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio5">
                        <input type="radio" class="form-check-input" id="radio5" name="postedDate" value="(24 * 30)">Last 30 days
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label postDate" for="radio6">
                        <input type="radio" class="form-check-input" id="radio6" name="postedDate" value="">All
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Experience
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="card-body">
                    <div class="form-check">
                      <label class="form-check-label" for="Experience1">
                        <input type="radio" class="form-check-input" id="Experience1" name="experience" value="Fresh">Fresh
                      </label>
                      <span class="sidebar-color">(7)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Experience2">
                        <input type="radio" class="form-check-input" id="Experience2" name="experience" value="6 Months">6 months
                      </label>
                      <span class="sidebar-color">(0)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Experience3">
                        <input type="radio" class="form-check-input" id="Experience3" name="experience" value="1 Years">1 year
                      </label>
                      <span class="sidebar-color">(1)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Experience4">
                        <input type="radio" class="form-check-input" id="Experience4" name="experience" value="2 Years">2 years
                      </label>
                      <span class="sidebar-color">(12)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Experience5">
                        <input type="radio" class="form-check-input" id="Experience5" name="experience" value="3 Years">3 Years
                      </label>
                      <span class="sidebar-color">(17)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Experience6">
                        <input type="radio" class="form-check-input" id="Experience6" name="experience" value="5 Years +">5 Years +
                      </label>
                      <span class="sidebar-color">(58)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  {{-- according 3  --}}
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Qualification
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="card-body">
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify1">
                        <input type="radio" class="form-check-input" id="Qualify1" name="qualification" value="Certificate">Certificate
                      </label>
                      <span class="sidebar-color">(0)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify2">
                        <input type="radio" class="form-check-input" id="Qualify2" name="qualification" value="Diploma">Diploma
                      </label>
                      <span class="sidebar-color">(0)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify3">
                        <input type="radio" class="form-check-input" id="Qualify3" name="qualification" value="Associate Degree">Associate Degree
                      </label>
                      <span class="sidebar-color">(0)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify4">
                        <input type="radio" class="form-check-input" id="Qualify4" name="qualification" value="Becholar Degree">Becholar Degree
                      </label>
                      <span class="sidebar-color">(5)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify5">
                        <input type="radio" class="form-check-input" id="Qualify5" name="qualification" value="Master Degree">Master's Degree
                      </label>
                      <span class="sidebar-color">(16)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify6">
                        <input type="radio" class="form-check-input" id="Qualify6" name="qualification" value="Doctorate Degree">Doctorate Degree
                      </label>
                      <span class="sidebar-color">(3)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify7">
                        <input type="radio" class="form-check-input" id="Qualify7" name="qualification" value="Ex Armed Forces Officer">Ex Armed Officer
                      </label>
                      <span class="sidebar-color">(1)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify8">
                        <input type="radio" class="form-check-input" id="Qualify8" name="qualification" value="Ex Armed Forces Subedar/Naib Subedar">Ex Armed Subedar
                      </label>
                      <span class="sidebar-color">(1)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Qualify8">
                        <input type="radio" class="form-check-input" id="Qualify8" name="qualification" value="Intermediate">Intermediate
                      </label>
                      <span class="sidebar-color">(1)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- 4 --}}
            <div class="accordion-item mb-2">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">Experience </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="card-body">
                    <div class="form-check">
                      <label class="form-check-label" for="Location1">
                        <input type="radio" class="form-check-input" id="Location1" name="location" value="Health Science">Health Sciences Wing
                      </label>
                      <span class="sidebar-color">(6)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Location2">
                        <input type="radio" class="form-check-input" id="Location2" name="location" value="Engineering">Engineering Wing
                      </label>
                      <span class="sidebar-color">(0)</span>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="Location3">
                        <input type="radio" class="form-check-input" id="Location3" name="location" value="">Both
                      </label>
                      <span class="sidebar-color">(94)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="job-search">
            <input type="submit" class="btn btn-block">
        </div>
        </div>
        {{-- =====accordion end here=== --}}
        {{-- ====job detail start here ==== --}}
        <div class="col-md-9">
          <div class="row mb-5">
            <div class="col-md-9 mb-5">
              <div class="job-repeat">
                <h4>Deputy Director Sports</h4>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-calendar mr-1 career-apply"></i>
                    <p class="apply-features">02/06/2020 - 10/06/2020</p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-map-marker mr-1 career-apply"></i>
                    <p class="apply-features"> Health Science | Engineering </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-clock-o mr-1 career-apply"></i>
                    <p class="apply-features">20 min ago </p>
                  </div>
                </div>
                <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                </p>
                <div class="row single-job">
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-briefcase career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Full Time</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-users career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Male</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="single-job-detail">
                      <i class="fa fa-calendar  career-apply"></i>
                      <p class="apply-features">Computer Science</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 pt-5 pb-5 m-auto text-center">
              {{-- <a href="{{route('job-detail', $parameter)}}" target="_blank"> --}}
              <button type="button" class="apply-button btn border-0 text-dark pl-5 pr-5"><b>Apply</b></button>
              </a>
            </div>
            {{-- second job --}}
            <div class="col-md-9 mb-5">
              <div class="job-repeat">
                <h4>Deputy Director Sports</h4>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-calendar mr-1 career-apply"></i>
                    <p class="apply-features">02/06/2020 - 10/06/2020</p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-map-marker mr-1 career-apply"></i>
                    <p class="apply-features"> Health Science | Engineering </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-clock-o mr-1 career-apply"></i>
                    <p class="apply-features">20 min ago </p>
                  </div>
                </div>
                <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                </p>
                <div class="row single-job">
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-briefcase career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Full Time</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-users career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Male</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="single-job-detail">
                      <i class="fa fa-calendar  career-apply"></i>
                      <p class="apply-features">Computer Science</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 pt-5 pb-5 m-auto text-center">
              {{-- <a href="{{route('job-detail', $parameter)}}" target="_blank"> --}}
              <button type="button" class="apply-button btn border-0 text-dark pl-5 pr-5"><b>Apply</b></button>
              </a>
            </div>
            {{-- job 3  --}}
            <div class="col-md-9 mb-5">
              <div class="job-repeat">
                <h4>Deputy Director Sports</h4>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-calendar mr-1 career-apply"></i>
                    <p class="apply-features">02/06/2020 - 10/06/2020</p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-map-marker mr-1 career-apply"></i>
                    <p class="apply-features"> Health Science | Engineering </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-clock-o mr-1 career-apply"></i>
                    <p class="apply-features">20 min ago </p>
                  </div>
                </div>
                <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                </p>
                <div class="row single-job">
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-briefcase career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Full Time</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-users career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Male</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="single-job-detail">
                      <i class="fa fa-calendar  career-apply"></i>
                      <p class="apply-features">Computer Science</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 pt-5 pb-5 m-auto text-center">
              {{-- <a href="{{route('job-detail', $parameter)}}" target="_blank"> --}}
              <button type="button" class="apply-button btn border-0 text-dark pl-5 pr-5"><b>Apply</b></button>
              </a>
            </div>
            {{-- job 4  --}}
            <div class="col-md-9">
              <div class="job-repeat">
                <h4>Deputy Director Sports</h4>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-calendar mr-1 career-apply"></i>
                    <p class="apply-features">02/06/2020 - 10/06/2020</p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-map-marker mr-1 career-apply"></i>
                    <p class="apply-features"> Health Science | Engineering </p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <i class="fa fa-clock-o mr-1 career-apply"></i>
                    <p class="apply-features">20 min ago </p>
                  </div>
                </div>
                <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                </p>
                <div class="row single-job">
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-briefcase career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Full Time</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="single-job-detail">
                      <i class="fa fa-users career-apply" aria-hidden="true"></i>
                      <p class="apply-features">Male</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="single-job-detail">
                      <i class="fa fa-calendar  career-apply"></i>
                      <p class="apply-features">Computer Science</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 pt-5 pb-5 m-auto text-center">
              {{-- <a href="{{route('job-detail', $parameter)}}" target="_blank"> --}}
              <button type="button" class="apply-button btn border-0 text-dark pl-5 pr-5"><b>Apply</b></button>
              </a>
            </div>
          </div>
          <h4>No Jobs Found</h4> 
        </div>
        {{-- ====job detail end here ==== --}}
      </div>
      {{-- career tips start here --}}
      <div class="row">
        <div class="tip-card-wrapper">
          <div class="message-text text-center mb-5">
            <h2>QUICK CAREER TIPSS</h2>
          </div>
          <div class="row">
            <div class="col-lg-4 mt-2 mb-5">
              <div class="card lower_card h-100">
                <div class="low_card_pic ">
                  <div class="card-img">
                    <img class="card-img-top" src="{{asset('/frontend/images/sample.jpg')}}" alt="news and events">
                  </div>
                </div>
                <div class="card-block mt-3 mb-2 mx-4">
                  <p>20 May 2022</p>
                  <h5 class="tip-card-title">Student Counseling Session with Psychiatrist</h5>
                  <p class="card-text">Mental health support is priority of the University. Proper counseling cell has been designated for the purpose.</p>
                  <div class="read-more-fixed mt-3">
                    <div class="read ">Read More</div>
                  </div>
                </div>
              </div>
            </div>
            {{-- 2nd  --}}
            <div class="col-lg-4 mt-2 mb-5">
              <div class="card lower_card h-100">
                <div class="low_card_pic ">
                  <div class="card-img">
                    <img class="card-img-top" src="{{asset('/frontend/images/sample.jpg')}}" alt="news and events">
                  </div>
                </div>
                <div class="card-block mt-3 mb-2 mx-4">
                  <p>20 May 2022</p>
                  <h5 class="tip-card-title">Student Counseling Session with Psychiatrist</h5>
                  <p class="card-text">Mental health support is priority of the University. Proper counseling cell has been designated for the purpose.</p>
                  <div class="read-more-fixed mt-3">
                    <div class="read ">Read More</div>
                  </div>
                </div>
              </div>
            </div>
            {{-- 3rd  --}}
            <div class="col-lg-4 mt-2 mb-5">
              <div class="card lower_card h-100">
                <div class="low_card_pic ">
                  <div class="card-img">
                    <img class="card-img-top" src="{{asset('/frontend/images/sample.jpg')}}" alt="news and events">
                  </div>
                </div>
                <div class="card-block mt-3 mb-2 mx-4">
                  <p>20 May 2022</p>
                  <h5 class="tip-card-title">Student Counseling Session with Psychiatrist</h5>
                  <p class="card-text">Mental health support is priority of the University. Proper counseling cell has been designated for the purpose.</p>
                  <div class="read-more-fixed mt-3">
                    <div class="read ">Read More</div>
                  </div>
                </div>
              </div>
            </div>
            {{-- end  --}}
            </div>
        </div>
      </div>
      {{-- career tips end here  --}}
    </div>
  </section>
  {{-- jobs and vacancies end here  --}}
</div>
@endsection