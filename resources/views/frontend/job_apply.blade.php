@extends('frontend.layouts.web')
@section('content')

<section class="wizard-section">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-8 col-md-8">
        <div class="form-wizard">
          <form role="form" action="" class="login-box" method="POST" enctype="multipart/form-data">
            <div class="form-wizard-header">
              <ul class="list-unstyled form-wizard-steps clearfix">
                <li class="active"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
              </ul>
            </div>
            {{-- Personal Information start here  --}}
            <fieldset class="wizard-fieldset show">
              <h1 class="">Job Application</h1>
              <h4 class="mb-3">Personal Information</h4>
              <div class="row">

                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Full Name*</label>
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" id="fname" name="name" value="">
                    <input type="hidden" name="job_id" value="" />
                    <input type="hidden" name="download_status" value="1">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Email*</label>
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" id="email" name="email" value="">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Mobile*</label>
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" id="Mnumber" data-inputmask="'mask': '0399-99999999'" type = "number" maxlength = "12" name="mobile" value="">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Address*</label>
                    <input rows="4" cols="50" type="text" class="form-input bg-transparent p-3" id="remark" name="remark" value="" >
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Postel Address*</label>
                    <input rows="4" cols="50" type="text" class="form-input bg-transparent p-3" id="remark" name="remark" value="" >
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-input bg-transparent p-2 wizard-required" name="marital_status">
                      <option value="">Domicile*</option>
                      <option value="Married">Married</option>
                      <option value="Single">Single</option>
                    </select>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-input bg-transparent p-2 wizard-required" name="marital_status">
                      <option value="">Marital Status *</option>
                      <option value="Married">Married</option>
                      <option value="Single">Single</option>
                    </select>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-input" style="border: 0px;">
                      <div class=" justify-content-between">
                        <label>Gender * </label>
                        <div class="d-flex">
                          <div class="form-check form-check-inline mr-5">
                            <input class="form-check-input" type="radio" name="gander" id="inlineRadio1" value="Male" checked >
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gander" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mt-3">
                  <div class="form-group">
                    <input class="form-input p-3 wizard-required" type="number" id="quantity" name="age" value=""  placeholder=" Age*">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mt-3">
                  <div class="form-group">
                    <div class="form-input p-3 pr-3">
                      <div class="d-flex justify-content-between mt-2">
                        <input type="date" class="border-0 bg-transparent wizard-required pl-3" id="" name="date_of_birth" value=""  placeholder="Date of Birth" style="color: #666666;">
                        <div class="wizard-form-error">
                          Field is required*
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3" id="birthcity" name="birth_place" value="" placeholder="City">
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" id="postalAd" name="address" value="" placeholder="Postal Address *">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <h5 style="color:#666666;">Upload Resume *</h5>
                    <p  style="color:#666666;">(File Accepted:.pdf) Maximum File Size:2MBs</p>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input  type="file" id="myFile"  class="form-input bg-transparent p-2 p-3 wizard-required" name="cv">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>   
              </div>
              <ul class="list-inline pull-right">
                <li>
                  <button type="button" class="form-wizard-next-btn default-btn next-step">Continue to next step</button>
                </li>
              </ul>
            </fieldset>
            {{-- Personal Information end here  --}}

            {{-- academic requirement start here	 --}}
            <fieldset class="wizard-fieldset">
              <h1 class="">Job Application</h1>
              <h4 class="mb-5">Academic Information</h4>
              <div class="row template mt-4">
                
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" list="airports" name="degree_level"  placeholder="Degree Level *"> 
                    <datalist id="airports">
                      <option value="Undergraduate">
                      <option value="Graduate">
                      <option value="Post Graduate">
                    </datalist>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" list="DegreeName" name="degree_name"  placeholder="Degree Name *"> 
                    <datalist id="DegreeName">
                      <option value="Computer Science">
                      <option value="Electrical Engineering">
                      <option value="Civil Engineering">
                    </datalist>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" placeholder="Institution *" name="institute[]" value="" id="institute">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" placeholder="Major Subject *" name="major_subject[]" value="" id="major">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <select  name="session[]" class="form-input bg-transparent p-3 wizard-required">
                      <option value="">Session *</option>
                      <option value="2017">2020</option>
                      <option value="2016">2019</option>
                      <option value="2015">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2017">2014</option>
                      <option value="2016">2013</option>
                      <option value="2015">2012</option>
                      <option value="2017">2011</option>
                      <option value="2016">2010</option>
                      <option value="2015">2009</option>
                      <option value="2017">2008</option>
                      <option value="2016">2007</option>
                      <option value="2015">2006</option>
                      <option value="2017">2005</option>
                      <option value="2016">2004</option>
                      <option value="2015">2003</option>
                    </select>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mt-3">
                  <div class="form-group">
                    <select name="system[]" class="form-input bg-transparent p-3">
                      <option value="">Select System</option>
                      <option value="Annual">Annual</option>
                      <option value="Semester">Semester</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6 mt-3">
                  <div class="form-group">
                    <input class="form-input p-3 wizard-required" type="text" id="CGPA" name="cgpa[]" value="" placeholder="CGPA/Percentage *">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mt-3 mb-4">
                  <div class="form-group">
                    <input class="form-input p-3 wizard-required" type="number" id="ObtainMarks" name="obtained_marks[]" value="" placeholder="Obtained Marks *">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-3 mb-4">
                  <div class="form-group">
                    <input class="form-input p-3 wizard-required" type="number" id="TotalMarks" name="total_marks[]" value="" placeholder="Total Marks *">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>
              </div>

              {{-- more data add  --}}
              <a href="#" class="btn btn-black btn-md float-right" id="add-more"> More <i class="fa fa-plus ml-2"></i></a>
              <h4 class="mt-5">Other Information</h4>
              {{-- new row start here  --}}
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3" name="hobbies" value="" placeholder="Hobbies">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" name="skill" value="" placeholder="Skills *">
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>
              </div>
              <ul class="list-inline pull-right">
                <li>
                  <button type="button" class="form-wizard-previous-btn default-btn prev-step">Back</button>
                </li>
                <li>
                  <button type="button" class="form-wizard-next-btn default-btn next-step">Continue</button>
                </li>
              </ul>
            </fieldset>
            {{-- academic requirement end here	 --}}

            {{-- Professional Information start here  --}}
            <fieldset class="wizard-fieldset">
              <h1 class="">Job Application</h1>
              <h4 class="mb-5">Professional Information</h4>
              <div class="row Proftemplate">
                {{-- row Professional Information start here  --}}
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" list="Institution" name="job_institution[]" value="" placeholder="Institution/Organization *"> 
                    <datalist id="Institution">
                      <option value="UET Taxila">
                      <option value="The University of Faisalabad">
                      <option value="Punjab University">
                    </datalist>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3 wizard-required" list="Designation" name="job_designation[]" value="" placeholder="Designation *"> 
                    <datalist id="Designation">
                      <option value="Professor">
                      <option value="Asst. Professor">
                      <option value="lecturer">
                    </datalist>
                    <div class="wizard-form-error">
                      Field is required*
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <div class=" justify-content-between">
                      <label>Start Date</label>
                      <input class="form-input p-3 wizard-required" type="date" id="StartYear" name="starting_date[]" value="" placeholder="Starting Year *">
                      <div class="wizard-form-error">
                        Field is required*
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-4">
                  <div class="form-group">
                    <div class=" justify-content-between">
                      <label>End Date</label>
                      <input class="form-input p-3 wizard-required" type="date" id="EndingYear" name="ending_date[]" value="" placeholder="Ending Year *">
                      <div class="wizard-form-error">
                        Field is required*
                      </div>
                    </div>
                  </div>
                </div> 
              </div> {{-- end row here  --}}
              <a href="#" class="btn btn-black btn-md float-right" id="add-more-prof"> More <i class="fa fa-plus ml-2"></i></a>
              <h4 class="mt-5 mb-5">Workshops/Research Information</h4>
              {{-- new row start here workshop information  --}}
              <div class="row Worktemplate mb-5">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3" name="workshop_name[]" value="" placeholder="Title Name">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-input bg-transparent p-3" name="organization_name[]" value="" placeholder="Organization/Journal Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-input p-3" type="number" id="workyear" name="workshop_year[]" value="" placeholder="Year">
                  </div>
                </div>
              </div> {{-- new row end here workshop information  --}}
              <div>
                <a href="#" class="btn btn-black btn-md float-right mb-4" id="add-more-work"> More <i class="fa fa-plus ml-2"></i></a>
              </div>
              <ul class="list-inline pull-right mt-5" style="position: inherit;left: 100px;">
                <li><button type="button" class="form-wizard-previous-btn default-btn prev-step">Back</button></li>
                <li><button type="submit" class="form-wizard-submit default-btn next-step">Submit</button></li>
              </ul>
              <div class="clearfix">
              </div>
            </fieldset>	
            {{-- Professional Information end here  --}}
          </form>
        </div>
      </div>
      <div class="col-md-4" style="padding-top:187px;">        
      </div>
    </div>
  </div>
</section>
@push('js')
<script>

  jQuery(document).ready(function() {
      // click on next button
      jQuery('.form-wizard-next-btn').click(function() {
          var parentFieldset = jQuery(this).parents('.wizard-fieldset');
          var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
          var next = jQuery(this);
          var nextWizardStep = true;
          parentFieldset.find('.wizard-required').each(function(){
              var thisValue = jQuery(this).val();

              if( thisValue == "") {
                  jQuery(this).siblings(".wizard-form-error").slideDown();
                  nextWizardStep = false;
              }
              else {
                  jQuery(this).siblings(".wizard-form-error").slideUp();
              }
          });
          if( nextWizardStep) {
              next.parents('.wizard-fieldset').removeClass("show","400");
              currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
              next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
              jQuery(document).find('.wizard-fieldset').each(function(){
                  if(jQuery(this).hasClass('show')){
                      var formAtrr = jQuery(this).attr('data-tab-content');
                      jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                          if(jQuery(this).attr('data-attr') == formAtrr){
                              jQuery(this).addClass('active');
                              var innerWidth = jQuery(this).innerWidth();
                              var position = jQuery(this).position();
                              jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                          }else{
                              jQuery(this).removeClass('active');
                          }
                      });
                  }
              });
          }
      });
      //click on previous button
      jQuery('.form-wizard-previous-btn').click(function() {
          var counter = parseInt(jQuery(".wizard-counter").text());;
          var prev =jQuery(this);
          var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
          prev.parents('.wizard-fieldset').removeClass("show","400");
          prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
          currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
          jQuery(document).find('.wizard-fieldset').each(function(){
              if(jQuery(this).hasClass('show')){
                  var formAtrr = jQuery(this).attr('data-tab-content');
                  jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                      if(jQuery(this).attr('data-attr') == formAtrr){
                          jQuery(this).addClass('active');
                          var innerWidth = jQuery(this).innerWidth();
                          var position = jQuery(this).position();
                          jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                      }else{
                          jQuery(this).removeClass('active');
                      }
                  });
              }
          });
      });
      //click on form submit button
      jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
          var parentFieldset = jQuery(this).parents('.wizard-fieldset');
          var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
          parentFieldset.find('.wizard-required').each(function() {
              var thisValue = jQuery(this).val();
              if( thisValue == "" ) {
                  jQuery(this).siblings(".wizard-form-error").slideDown();
              }
              else {
                  jQuery(this).siblings(".wizard-form-error").slideUp();
              }
          });
      });
      // focus on input field check empty or not
      jQuery(".form-control").on('focus', function(){
          var tmpThis = jQuery(this).val();
          if(tmpThis == '' ) {
              jQuery(this).parent().addClass("focus-input");
          }
          else if(tmpThis !='' ){
              jQuery(this).parent().addClass("focus-input");
          }
      }).on('blur', function(){
          var tmpThis = jQuery(this).val();
          if(tmpThis == '' ) {
              jQuery(this).parent().removeClass("focus-input");
              jQuery(this).siblings('.wizard-form-error').slideDown("3000");
          }
          else if(tmpThis !='' ){
              jQuery(this).parent().addClass("focus-input");
              jQuery(this).siblings('.wizard-form-error').slideUp("3000");
          }
      });
  });
  $('#add-more').click(function () {
              $(this).before($(".template:eq(0)").clone()); 
          });

          $('#add-more-prof').click(function () {
          $(this).before($(".Proftemplate:eq(0)").clone());
          });

          $('#add-more-work').click(function () {
          $(this).before($(".Worktemplate:eq(0)").clone());
          });

</script>
@endpush

@endsection