<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
  
  <body>

 <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">
           <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       

          <h2 class="sub-header text-center">Student Admission Form</h2>
          <div class="container">


    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">
                          <div class="connecting-line"></div>
                          <ul class="nav nav-tabs text-center" role="tablist">
                              <li role="presentation" class="active">
                                  <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Personal<br/> Information<br/><br/></i></a>
                              </li>
                              <li role="presentation" class="">
                                  <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Family<br> Background<br/><br/></i></a>
                              </li>
                              <li role="presentation" class="">
                                  <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Sholastic<br> Data<br/><br/></i></a>
                              </li>
                              <li role="presentation" class="">
                                  <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Work Experience<br/> (if applicable)<br/><br/></i></a>
                              </li>
                              <li role="presentation" class="">
                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Extra <br/> Curricular Activities<br/><br/></i></a>
                              </li>
                              <li role="presentation" class="">
                              <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Personal <br/>Relationships<br/><br/></i></a>
                              </li>
                             <li role="presentation" class="">
                             <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i>Vocational<br/> Plans<br/><br/></i></a>
                            </li>
                            <li role="presentation" class="">
                              <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab">8</span> <i>Checklist<br/><br/></i></a>
                             </li>
                             <li role="presentation" class="">
                              <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"><span class="round-tab">9</span> <i>Review<br/><br/></i></a>
                             </li>
                            </ul>
                      </div>
      
                      <div role="form" action="#" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <h3 class="text-center">Personal Information</h3><hr>
                                  <div class="row">
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>First Name </label> 
                                              <input id="firstname" required="required"  class="form-control user_change" data-name="data-firstname" type="text" name="firstname" placeholder="First Name" onchange="myFunction()"> 
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Middle Name </label> 
                                              <input id="middlename" class="form-control " data-name="data-firstname"  type="text" name="middlename" placeholder="Middle Name" onchange="myFunction()"> 
                                          </div>
                                      </div>
                                    
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Last Name </label> 
                                              <input id="lastname" required="required" class="form-control" type="text" name="lastname" placeholder="Last Name" onchange="myFunction()"> 
                                          </div>
                                      </div>
                                      
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Suffix </label> 
                                              <input id="suffix" class="form-control" type="text" name="suffix" placeholder="Suffix" onchange="myFunction()"> 
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course </label> 
                                            <input id="YourCourse"  class="form-control" type="text" name="course" placeholder="Course" onchange="myFunction()" > 
                                        </div>
                                      </div><br/><br/>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Age </label> 
                                            <input id="YourAge" class="form-control" type="number" name="age" placeholder="Age" onchange="myFunction()"> 
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of Birth </label> 
                                            <input id="dateofbirth" class="form-control" type="date" name="dob" placeholder="Date of Birth"  onchange="myFunction()">

                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Place of Birth </label> 
                                            <input id="dateofplace" class="form-control" type="text" name="pob" placeholder="Place of Birth" onchange="myFunction()">
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Home Address</label> 
                                            <textarea id="homeaddress" class="form-control" id="homeaddress" name="homeaddress" rows="3" placeholder="Home Address" onchange="myFunction()"></textarea> 
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Present/Boarding House Address</label> 
                                            <textarea id="presentaddress" class="form-control"  name="presentaddress" rows="3" placeholder="Present/Boarding House Address" onchange="myFunction()"></textarea> 
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Number </label> 
                                            <input id="mycontact" class="form-control" type="text" name="contact" placeholder="Contact Number" onchange="myFunction()"> 
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address </label> 
                                            <input id="myemail" class="form-control" type="email" name="email" placeholder="Email Address"  onchange="myFunction()"> 
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>If Married, Name of Spouse</label> 
                                            <input id="nameofspouse" class="form-control" type="text" name="nameofspouse" placeholder="Name of Spouse" onchange="myFunction()"> 
                                        </div>
                                      </div>
                                      <div class="col-md-12"><hr></div>


                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name of Brother/Sister (from eldest to youngest)</label> 
                                            <input id="childtwo" class="form-control" type="text" name="childname[]" placeholder="Name of Child" onchange="myFunction()"> 
                                        </div>
                                      </div>

                                      <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input id="childtwoage" class="form-control" type="number" name="childage[]" placeholder="Age" onchange="myFunction()"> 
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sex</label>
                                            <!-- <input class="form-control" type="text" name="childtwogender" placeholder="Sex">  -->
                                            <select id="childtwogender" class="form-control" type="text" name="childgender[]" onchange="gender2(this);">
                                              <option disabled selected>-Select-</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="form-group">
                                        <div style="margin-top:24px;" class="form-group">
                                        <button class="btn btn-primary family_add_field_button">Add Family Member</button><br/><br/>
                                        </div>
                                        </div>
                                      </div>

                                      <div class="col-md-12"><div class="family_input_fields_wrap"></div></div>



                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Reason/s for studying in NEMSU</label> 
                                            <textarea id="reasonstudynemsu" class="form-control" id="reasonstudynemsu" name="reasonstudynemsu" rows="3" placeholder="Reason/s for studying in NEMSU" onchange="myFunction()"></textarea> 
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-check">
                                          <label class="form-check-label" for="exampleCheck1">Person/s you are living with</label>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="living-radio-button" name="living-radio-button" class="custom-control-input" value="Parents" onchange="radio(this);">
                                            <label class="custom-control-label" for="living-radio-button">Parents</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="living-radio-button" name="living-radio-button" class="custom-control-input" value="One of the parents" onchange="radio(this);">
                                            <label class="custom-control-label" for="living-radio-button">One of the parents</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="living-radio-button" name="living-radio-button" class="custom-control-input" value="Relatives" onchange="radio(this);">
                                            <label class="custom-control-label" for="living-radio-button">Relatives</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="living-radio-button" name="living-radio-button" class="custom-control-input" value="Others" onchange="radio(this);">
                                            <label class="custom-control-label" for="living-radio-button">Others</label>
                                            <input class="form-control" type="text" id="living-radio-button" name="other-person" class="custom-control-input" placeholder="Ïf others, please specify">
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-12">
                                        <hr>
                                        <h4 class="text-center">In case of Emergency, person to notify</h4>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Full Name</label> 
                                          <input id="emergencyfullname" class="form-control" type="text" name="emergencyfullname" placeholder="Full Name" onchange="myFunction()"> 
                                      </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Contact Number</label> 
                                          <input id="emergencyphone" class="form-control" type="text" name="emergencyphone" placeholder="Contact Number" onchange="myFunction()"> 
                                      </div>
                                      </div>
                                  </div>
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step2">
                                  <h3 class="text-center">Family Background</h3>
                                  <div class="row">
                                  <div class="col-md-12"><hr></div>
                                  <h5 class="text-center"><strong>Father's Information</strong></h5>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Father's Name</label> 
                                          <input class="form-control" type="text" name="father-name" placeholder="Father's Name"> 
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Age </label> 
                                          <input class="form-control" type="text" name="father-age" placeholder="Age"> 
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address </label> 
                                        <input class="form-control" type="text" name="father-address" placeholder="Address"> 
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number </label> 
                                        <input class="form-control" type="text" name="father-phone" placeholder="Contact Number"> 
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Occupation </label> 
                                        <input class="form-control" type="text" name="father-occupation" placeholder="Occupation"> 
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Highest Educational Attainment </label> 
                                        <input class="form-control" type="text" name="father-education" placeholder="Highest Educational Attainment"> 
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Monthly Income </label> 
                                        <input class="form-control" type="text" name="father-income" placeholder="Monthly Income"> 
                                    </div>
                                  </div>
                                  <!--<div class="col-md-6">
                                      <div class="form-group">
                                          <label>Country </label> 
                                          <select name="country" class="form-control" id="country">
                                              <option value="NG" selected="selected">Nigeria</option>
                                              <option value="NU">Niue</option>
                                              <option value="NF">Norfolk Island</option>
                                              <option value="KP">North Korea</option>
                                              <option value="MP">Northern Mariana Islands</option>
                                              <option value="NO">Norway</option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  
                                  
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Registration No.</label> 
                                          <input class="form-control" type="text" name="name" placeholder=""> 
                                      </div>
                                  </div>-->
                                  <div class="col-md-12"><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><h5 class="text-center"><strong>Mother's Information</strong></h5><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Name</label> 
                                        <input class="form-control" type="text" name="mother-name" placeholder="Mother's Name"> 
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age </label> 
                                        <input class="form-control" type="text" name="mother-age" placeholder="Age"> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Address </label> 
                                      <input class="form-control" type="text" name="mother-address" placeholder="Address"> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Contact Number </label> 
                                      <input class="form-control" type="text" name="mother-phone" placeholder="Contact Number"> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Occupation </label> 
                                      <input class="form-control" type="text" name="mother-occupation" placeholder="Occupation"> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Highest Educational Attainment </label> 
                                      <input class="form-control" type="text" name="mother-education" placeholder="Highest Educational Attainment"> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Monthly Income </label> 
                                      <input class="form-control" type="text" name="mothehr-income" placeholder="Monthly Income"> 
                                  </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                <div class="col-md-12">
                                  <div class="form-check">
                                    <label class="form-check-label" for="exampleCheck1">Parental Status</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="parental-status" name="parental-status" class="custom-control-input">
                                      <label class="custom-control-label" for="parental-status">Living together</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="parental-status" name="parental-status" class="custom-control-input">
                                      <label>Separated-not legally married</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="parental-status" name="parental-status" class="custom-control-input">
                                      <label>Solor parent</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="parental-status" name="parental-status" class="custom-control-input">
                                      <label>Others</label>
                                      <input class="form-control" type="text" id="parental-status" name="parental-status" class="custom-control-input" placeholder="If others, please specify">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><h5 class="text-center"><strong>Brothers/Sisters Information</strong></h5><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Please use the following format (Name/Age/School/Occupation)</label> 
                                      <textarea class="form-control" id="siblings" name="siblings" rows="3" placeholder="Name/Age/School/Occupation"></textarea> 
                                  </div>
                                  </div>
                                </div>
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="default-btn prev-step">Back</button></li>
                                      <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                      <li><button type="button" class="default-btn next-step">Continue</button></li>
                                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step3">
                                  <h3 class="text-center">Sholastic Data</h3>
                                  <div class="row">
                                  <div class="col-md-12"><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><h5 class="text-center"><strong>Elementary</strong></h5><hr></div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Name of School</label> 
                                          <input class="form-control" type="text" name="elementary" placeholder="Name of School"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Inclusive Years</label> 
                                          <input class="form-control" type="text" name="elem-inclusive-years" placeholder="Inclusive Years"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Honors/Awards Received</label> 
                                          <input class="form-control" type="text" name="elem-honor-awards" placeholder="Honors/Awards Received"> 
                                      </div>
                                  </div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><h5 class="text-center"><strong>High School</strong></h5><hr></div>
                                  <div class="col-md-3"></div>
                                  
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Name of School</label> 
                                          <input class="form-control" type="text" name="highschool" placeholder="Name of School"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Inclusive Years</label> 
                                          <input class="form-control" type="text" name="hi-inclusive-years" placeholder="Inclusive Years"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Honors/Awards Received</label> 
                                          <input class="form-control" type="text" name="hi-honor-awards" placeholder="Honors/Awards Received"> 
                                      </div>
                                  </div>
                                  <div class="col-md-3"></div>
                                  <div class="col-md-6"><h5 class="text-center"><strong>College</strong></h5><hr></div>
                                  <div class="col-md-3"></div>
                                  
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Name of School</label> 
                                          <input class="form-control" type="text" name="college" placeholder="Name of School"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Inclusive Years</label> 
                                          <input class="form-control" type="text" name="col-inclusive-years" placeholder="Inclusive Years"> 
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Honors/Awards Received</label> 
                                          <input class="form-control" type="text" name="col-honor-awards" placeholder="Honors/Awards Received"> 
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Course</label> 
                                        <input class="form-control" type="text" name="course" placeholder="Course"> 
                                    </div>
                                </div>
                                  <!--<div class="col-md-6">
                                      <div class="form-group">
                                          <label>Information</label> 
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Select file</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Number </label> 
                                          <input class="form-control" type="text" name="name" placeholder=""> 
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Input Number</label> 
                                          <input class="form-control" type="text" name="name" placeholder=""> 
                                      </div>
                                  </div>-->
                                </div>
                                  <ul class="list-inline pull-right">
                                      <li><button type="button" class="default-btn prev-step">Back</button></li>
                                      <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                      <li><button type="button" class="default-btn next-step">Continue</button></li>
                                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step4">
                            <h3 class="text-center">Work Experience (if applicable)</h3>
                          <div class="row">
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6"><h5 class="text-center"><strong>Present</strong></h5><hr></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label>Name of Work/Job</label> 
                                  <input class="form-control" type="text" name="present-work-experience" placeholder="Name of Work/Job"> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Name of Employer</label> 
                                  <input class="form-control" type="text" name="present-name-employer" placeholder="Name of Employer"> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Duration</label> 
                                  <input class="form-control" type="text" name="present-duration-of-work" placeholder="Duration"> 
                              </div>
                          </div>
                          <div class="col-md-3"></div>
                            <div class="col-md-6"><h5 class="text-center"><strong>Previous</strong></h5><hr></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label>Name of Work/Job</label> 
                                  <input class="form-control" type="text" name="previous-work-experience" placeholder="Name of Work/Job"> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Name of Employer</label> 
                                  <input class="form-control" type="text" name="previous-name-employer" placeholder="Name of Employer"> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Duration</label> 
                                  <input class="form-control" type="text" name="previous-duration-work" placeholder="Duration"> 
                              </div>
                          </div>
                          </div>
                          <ul class="list-inline pull-right">
                            <li><button type="button" class="default-btn prev-step">Back</button></li>
                            <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                            <li><button type="button" class="default-btn next-step">Continue</button></li>
                        </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step5">
                      <h3 class="text-center">Extra - Curricular Activities</h3>
                      <div class="row">
                      <div class="col-md-12"><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Clubs and Organization in the school you belong</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Clubs/Organization</label> 
                            <input class="form-control" type="text" name="club-name" placeholder="Name of Clubs/Organization"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position Held</label> 
                            <input class="form-control" type="text" name="club-position" placeholder="Position Held"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Clubs/Organization</label> 
                            <input class="form-control" type="text" name="club-name-two" placeholder="Name of Clubs/Organization"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Position Held</label> 
                          <input class="form-control" type="text" name="club-position-two" placeholder="Position Held"> 
                      </div>
                  </div>
                    <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Involvement in the community where you live</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Clubs/Organization</label> 
                            <input class="form-control" type="text" name="community-club-name" placeholder="Name of Clubs/Organization"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Specific activity conducted</label> 
                            <input class="form-control" type="text" name="community-activity" placeholder="Specific activity conducted"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Clubs/Organization</label> 
                            <input class="form-control" type="text" name="community-club-name-two" placeholder="Name of Clubs/Organization"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Specific activity conducted</label> 
                          <input class="form-control" type="text" name="community-activity-two" placeholder="Specific activity conducted"> 
                      </div>
                  </div>
                  </div>
                    <ul class="list-inline pull-right">
                      <li><button type="button" class="default-btn prev-step">Back</button></li>
                      <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                      <li><button type="button" class="default-btn next-step">Continue</button></li>
                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step6">
                      <h3 class="text-center">Personal Relationships</h3>
                      <div class="row">
                      <div class="col-md-12"><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Family</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><label class="radio-inline">1. I have a good relationships with my parents.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio1" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio1" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">2. I can easily approach or talk to my parents.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio2" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio2" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">3. I can share my problems to my siblings.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio3" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio3" >No
                        </label> 
                      </div>
                      <div class="col-md-12"><h5 class="text-center"></h5></div>
                    
                    <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Friends</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><label class="radio-inline">1. I have established good relationship with my friends.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio1A" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio1A" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">2. I can easily open up my problems with them.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio2A" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio2A" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">3. I usually spend most of my time with them than with my family.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio3A" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio3A" >No
                        </label> 
                      </div>
                      <div class="col-md-12"><h5 class="text-center"></h5></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Opposite Sex</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><label class="radio-inline">1. I am in a relationship right now.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio1B" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio1B" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">2. I often spend time with my girlfriend/boyfriend.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio2B" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio2B" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">3. I don’t have a relationship with the opposite sex at present.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio3B" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio3B" >No
                        </label> 
                      </div>
                      <div class="col-md-12"><h5 class="text-center"></h5></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><h5 class="text-center"><strong>Counselors</strong></h5><hr></div>
                      <div class="col-md-3"></div>
                      <div class="col-md-6"><label class="radio-inline">1. I have been to counseling session/s during my high school.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio1C" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio1C" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">2. I am comfortable sharing my personal problems with a counselor.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio2C" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio2C" >No
                        </label> 
                      </div>
                      <div class="col-md-6"><label class="radio-inline">3. I know that counselors can help me improve myself.</label></div>
                      <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="optradio3C" >Yes
                        </label> 
                        <label class="radio-inline">
                          <input type="radio" name="optradio3C" >No
                        </label> 
                      </div>
                      </div>
                    <ul class="list-inline pull-right">
                      <li><button type="button" class="default-btn prev-step">Back</button></li>
                      <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                      <li><button type="button" class="default-btn next-step">Continue</button></li>
                  </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step7">
                    <h3 class="text-center">Vocational Plans</h3>
                    <div class="row">
                    <div class="col-md-12"><hr></div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>What is your main reason in choosing your course?</label> 
                          <textarea class="form-control" id="reason-choose-nemsu" name="reason-choose-nemsu" rows="3" placeholder="What is your main reason in choosing your course?"></textarea> 
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>What occupation do you prefer in the future?</label> 
                          <textarea class="form-control" id="occupation-future-nemsu" name="occupation-future-nemsu" rows="3" placeholder="What occupation do you prefer in the future?"></textarea> 
                      </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-check">
                          <label>Please check the following characteristics which seem to describe you:</label>
                        </div> 
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Hardworking</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Responsible</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Resourceful</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Shy/Quiet</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Calm</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Good-natured</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Impatient</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Cheerful</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Easily Distracted</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Self-confident</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Cooperative</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Creative</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Serious</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Born-leader</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Approachable</label>
                        </div>
                      </div>
                      </div>
                  <ul class="list-inline pull-right">
                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step8">
                  <h3 class="text-center">Checklist</h3>
                  <div class="row">
                  <div class="col-md-12"><hr></div>
                  
                  
                  
                    <div class="col-md-12">
                      <div class="form-check">
                        <label>What are the problems/concern you encountered during your stay in NEMSU – Bislig Campus? Please check as many as you can:</label>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Conflict in class schedule</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Adjustment to college life</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Relationship with other students</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Overlapping of activities</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Peer Pressure</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Conflict with studies and work</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Relationship with teachers</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Relationship with opposite sex</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Relationship with parents</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Relationship with boyfriend/girlfriend</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Finances and living condition</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Family pressures</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Personal and emotion problems</label>
                      </div>
                      <label class="custom-control-label" for="living-radio-button">Others</label>
                      <input class="form-control" type="text" id="living-radio-button" name="other-person" class="custom-control-input" placeholder="Ïf others, please specify">
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-12">
                      <div class="form-check">
                        <label>Requirements Submitted</label>
                        <div class="checkbox">
                        <label><input type="checkbox" value="">Form 137</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Transcript of Record (TOR)</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">Philippine Statistics Authority (PSA)</label>
                      </div>
                      </div> 
                    </div>
                    </div>
                <ul class="list-inline pull-right">
                  <li><button type="button" class="default-btn prev-step">Back</button></li>
                  <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                  <li><button type="button" class="default-btn next-step">Continue</button></li>
              </ul>
                              </div>
                              <div class="tab-pane" role="tabpanel" id="step9">
                <form action="process/execute_admission.php" method="post">
                <h3 class="text-center">Review</h3>
                <div class="row">
                <div class="col-md-12"><hr></div>
                <div class="col-md-12">
                <div class="all-info-container">
                          <div class="list-content">
                              <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Personal Information <i class="fa fa-chevron-down"></i></a>
                              <div class="collapse in" id="listone">
                                  <div class="list-box">
                                      <div class="row">
                                          <div class="col-md-3">
                                          <div class="form-group">
                                              <label>First Name </label><br> 
                                              <!-- <p>John</p> -->
                                              <input id="view_firstname" type="text" name="view_firstname" readonly style="border: none;">
                                          </div>                                              
                                          </div>
                                          <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Last Name </label><br> 
                                              <!-- <p>Doe</p> -->
                                              <input id="view_lastname" type="text" name="view_lastname" readonly style="border: none;">
                                          </div>                                              
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name </label><br> 
                                                <!-- <p>Dela Cruz</p> -->
                                                <input id="view_middlename" type="text" name="view_middlename" readonly style="border: none;">
                                          </div>                                              
                                          </div>
                                          <div class="col-md-3">
                                          <div class="form-group">
                                                <label>Suffix </label><br> 
                                                <!-- <p>Jr</p> -->
                                                <input id="view_suffix" type="text" name="view_suffix" readonly style="border: none;">
                                          </div>  
                                                                                     
                                          </div>
                                          <div class="col-md-12">
                                            <hr> 
                                          <div class="form-group">
                                                <label>Course </label><br> 
                                                <input id="view_course" type="text" name="view_course" readonly style="border: none;">
                                          </div>
                                          <hr>                                               
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Age </label> <br>
                                              <!-- <p>18</p> -->
                                               <input id="view_age" type="text" name="view_age" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Date of Birth </label><br> 
                                              <!-- <p>12/12/1990</p> -->
                                              <input id="view_dateofbirth" type="text" name="view_dateofbirth" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Place of Birth </label> <br> 
                                              <!-- <p>Bislig City</p> -->
                                              <input id="view_birthplace" type="text" name="view_birthplace" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr> 
                                            <div class="form-group">
                                              <label>Home Address </label><br> 
                                              <!-- <p>Bislig City</p> -->
                                               <input id="view_homeaddress" type="text" name="view_homeaddress" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr> 
                                            <div class="form-group">
                                              <label>Present/Boarding House Address </label> <br> 
                                              <!-- <p>Bislig City</p> -->
                                               <input id="view_presentaddress" type="text" name="view_presentaddress" readonly style="border: none;">
                                            </div>
                                            <hr> 
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Contact Number </label><br> 
                                              <!-- <p>0956 644 6383</p> -->
                                               <input id="view_mycontact" type="text" name="view_mycontact" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Email Address </label><br> 
                                              <!-- <p>john.doe@gmail.com</p> -->
                                              <input id="view_myemail" type="text" name="view_myemail" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr> 
                                            <div class="form-group">
                                              <label>If Married, Name of Spouse </label> <br>
                                              <input id="view_spouse" type="text" name="view_spouse" readonly style="border: none;">
                                            </div>
                                            <hr> 
                                          </div>
                                           <div class="col-md-4">
                                            <div class="form-group">
                                              <div id="result"></div>
                                            </div>
                                           </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Name of Brother/Sister </label> <br>
                                             <input id="view_brotherName" type="text" name="siblings" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Age </label> <br>
                                             <input id="view_brotherAge" type="text" name="siblings" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Sex </label> <br>
                                              <!-- <p>N/A</p> -->
                                               <input id="view_brotherSex" type="text" name="siblings" readonly style="border: none;">
                                            </div>
                                          </div>
                                         

                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Name of Brother/Sister </label> <br>
                                              <input id="view_sisterName" type="text" name="view_sisterName" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Age </label> <br>
                                             <input id="view_sisterAge" type="text" name="view_sisterAge" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Sex </label> <br>
                                              <!-- <p>N/A</p> -->
                                               <input id="view_sisterSex" type="text" name="view_sisterSex" readonly style="border: none;">
                                            </div>
                                          </div>
                                        
                                          
                                          <div class="col-md-12">
                                            <hr> 
                                            <div class="form-group">
                                              <label>Reason/s for studying in NEMSU</label><br>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input id="view_nemsureason" type="text" name="view_nemsureason" readonly style="border: none;">
                                            </div>
                                            <hr> 
                                          </div>
                                          <div class="col-md-12">
                                           
                                            <div class="form-group">
                                              <label>Person/s you are living with</label><br>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <!-- <p>Parents</p> -->
                                              <input id="view_living_with" type="text" name="view_living_with" readonly style="border: none;">
                                            </div>
                                            <hr> 
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label>In case of Emergency, person to notify</label><br>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                             <input id="view_incasename" type="text" name="view_incasename" readonly style="border: none;">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                             <input id="view_incasecontact" type="text" name="view_incasecontact" readonly style="border: none;">
                                            </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="list-content">
                              <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Family Background <i class="fa fa-chevron-down"></i></a>
                              <div class="collapse" id="listtwo">
                                  <div class="list-box">
                                      <div class="row">
                                          
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Father's Name </label> 
                                                  <p>Foo Bar</p>
                                              </div>                                              
                                          </div>
                                          
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Age</label> 
                                                  <p>60</p>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Address </label> 
                                                  <p>Bislig</p>
                                              </div>
                                          </div>

                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Contact Number</label> 
                                                  <p>0912345678</p>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Occupation</label> 
                                                  <p>Engineer</p>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Highest Educational Attainment</label> 
                                                  <p>College</p>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Monthly Income</label> 
                                                  <p>30000</p> 
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="list-content">
                              <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Sholastic Data <i class="fa fa-chevron-down"></i></a>
                              <div class="collapse" id="listthree">
                                  <div class="list-box">
                                      <div class="row">
                                          <div class="col-md-12"><h4 class="text-center"><strong>Elementary</strong></h4></div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Name of School</label> 
                                                  <p>Bislig Elementary School</p> 
                                              </div>
                                          </div>
                                          
                                          
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Inclusive Years</label> 
                                                  <p>1998-2004</p>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Honors/Awards Received</label> 
                                                <p>Valedictorian</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12"><h4 class="text-center"><strong>Highschool</strong></h4></div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Name of School</label> 
                                                  <p>Bislig National High School</p> 
                                              </div>
                                          </div>
                                          
                                          
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>Inclusive Years</label> 
                                                  <p>2004-2008</p>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Honors/Awards Received</label> 
                                                <p>Valedictorian</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12"><h4 class="text-center"><strong>College</strong></h4></div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label>Name of School</label> 
                                                  <p>N/A</p> 
                                              </div>
                                          </div>
                                          
                                          
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label>Inclusive Years</label> 
                                                  <p>N/A</p>
                                              </div>
                                          </div>

                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Honors/Awards Received</label> 
                                                <p>N/A</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Course</label> 
                                              <p>N/A</p>
                                          </div>
                                      </div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="list-content">
                            <a href="#listFour" data-toggle="collapse" aria-expanded="false" aria-controls="listFour">Work Experience <i class="fa fa-chevron-down"></i></a>
                            <div class="collapse" id="listFour">
                                <div class="list-box">
                                    <div class="row">
                                      <div class="col-md-12"><h4 class="text-center"><strong>Present</strong></h4></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name of Work/Job </label> 
                                                <p>N/A</p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Name of Employer </label> 
                                              <p>N/A</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Duration </label> 
                                              <p>N/A</p>
                                          </div>
                                      </div>
                                      <div class="col-md-12"><h4 class="text-center"><strong>Previous</strong></h4></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name of Work/Job </label> 
                                                <p>N/A</p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Name of Employer </label> 
                                              <p>N/A</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Duration </label> 
                                              <p>N/A</p>
                                          </div>
                                      </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-content">
                          <a href="#listFive" data-toggle="collapse" aria-expanded="false" aria-controls="listFive">Extra - Curricular Activities <i class="fa fa-chevron-down"></i></a>
                          <div class="collapse" id="listFive">
                              <div class="list-box">
                                  <div class="row">
                                    <div class="col-md-12"><h4 class="text-center"><strong>Clubs and Organization in the school you belong</strong></h4></div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Name of Clubs/Organization </label> 
                                              <p>N/A</p>
                                          </div>
                                      </div>
                                      
                                      
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label>Position Held </label> 
                                              <p>N/A</p>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="list-content">
                        <a href="#listSix" data-toggle="collapse" aria-expanded="false" aria-controls="listSix">Personal Relationships <i class="fa fa-chevron-down"></i></a>
                        <div class="collapse" id="listSix">
                            <div class="list-box">
                                <div class="row">
                                  <div class="col-md-12"><h4 class="text-center"><strong>Family</strong></h4></div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>1. I have a good relationships with my parents. </label>
                                              <p>Yes</p>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                            <label>2. I can easily approach or talk to my parents</label>
                                            <p>Yes</p> 
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>3. I can share my problems to my siblings. </label>
                                            <p>Yes</p>
                                        </div>
                                    </div>
                                      
                                      <div class="col-md-12"><h4 class="text-center"><strong><hr>Friends</strong></h4></div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>1. I have established good relationship with my friends.  </label>
                                            <p>Yes</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>2. I can easily open up my problems with them.  </label>
                                          <p>Yes</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label>3. I usually spend most of my time with them than with my family. </label>
                                        <p>Yes</p>
                                    </div>
                                </div>
                                      
                                      <div class="col-md-12"><h4 class="text-center"><strong><hr>Opposite Sex</strong></h4></div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>1.  I am in a relationship right now.  </label>
                                            <p>Yes</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>2. I often spend time with my girlfriend/boyfriend.  </label>
                                          <p>Yes</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label>3. I don’t have a relationship with the opposite sex at present. </label>
                                        <p>Yes</p>
                                    </div>
                                </div>
                                      
                                      <div class="col-md-12"><h4 class="text-center"><strong><hr>Counselors</strong></h4></div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>1. I have been to counseling session/s during my high school.   </label>
                                            <p>Yes</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>2. I am comfortable sharing my personal problems with a counselor.  </label>
                                          <p>Yes</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label>3. I know that counselors can help me improve myself.  </label>
                                        <p>Yes</p>
                                    </div>
                                </div>
                                      
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-content">
                      <a href="#listSeven" data-toggle="collapse" aria-expanded="false" aria-controls="listSeven">Vocational Plans <i class="fa fa-chevron-down"></i></a>
                      <div class="collapse" id="listSeven">
                          <div class="list-box">
                              <div class="row">
                                  
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>What is your main reason in choosing your course? </label> 
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>What occupation do you prefer in the future? </label> 
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Please check the following characteristics which seem to describe you: </label> 
                                        <div class="col-md-12">
                                            <p>Hardworking</p>
                                            <p>Responsible</p>
                                            <p>Resourceful</p>
                                            <p>Calm</p>
                                            <p>Cheerful</p>
                                            <p>Easily Distracted</p>
                                            <p>Approachable</p>
                                         </div>
                                    </div>
                                </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="list-content">
                      <a href="#listEight" data-toggle="collapse" aria-expanded="false" aria-controls="listEight">Checklist <i class="fa fa-chevron-down"></i></a>
                      <div class="collapse" id="listEight">
                          <div class="list-box">
                              <div class="row">
                                  
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>What are the problems/concern you encountered during your stay in NEMSU – Bislig Campus? Please check as many as you can: </label> 
                                              <p>Conflict in class schedule</p>
                                              <p>Adjustment to college life</p>
                                              <p>Relationship with other students</p>
                                              <p>Overlapping of activities</p>
                                      </div>
                                  </div>  
                              </div>
                          </div>
                      </div>
                   </div>
                      </div>
                      </div>
                    </div>
                      <ul class="list-inline pull-right">
                          <li><button type="button" class="default-btn prev-step">Back</button></li>
                          <li><button name="btn_login" type="submit" class="default-btn next-step">Finish</button></li>
                      </ul>
                 
                              </div>
                             </form>
                          </div>
                      
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    

    <!--end multiStep-->



    <?php include 'footer.php'; ?>

  </body>
</html>