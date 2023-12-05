<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.ico">

    <title>NEMSU Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NEMSU Management System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <br/>
            <a href="#"><img src="img/north-eastern-mindanao-state-university-header-logo.png" class="img-fluid img-responsive center-block img-logo"></a>
            <hr>
            <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;Overview<span class="sr-only">(current)</span></a></li>
            <li><a href="student-admission.html"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Admission</a></li>
            <li><a href="exam-result.html"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;&nbsp;Exam Result</a></li>
            <li><a href="course-scheduling.html"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Course Scheduling</a></li>
            <li class="active">
                <a class=" dropdown-toggle report-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;&nbsp;Reports&nbsp;&nbsp;
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-style" aria-labelledby="dropdownMenu1">
                    <li><a href="reports-entrance-exam.html">Entrance Exam</a></li>
                    <li><a href="#">Enrolled Students</a></li>
                    <!--<li><a href="#">Reports</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Reports</a></li>-->
                  </ul>
            </li>
          </ul>
          <p class="text-center copyright">© NEMSU <span id="year"> </span></p>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header text-center">Generate Reports</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">
                          <!--<div class="connecting-line"></div>-->
                          <!--<ul class="nav nav-tabs text-center" role="tablist">
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
                            </ul>-->
                      </div>
      
                      <form role="form" action="#" class="form-style">
                        <div class="tab-content" id="main_form">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h3 class="text-center">Masterlist of Entrance Exam Result</h3><hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course </label> 
                                            <select class="form-control" name="select-course">
                                                <option hidden checked>Select Course</option> 
                                                <option value="bsf">BS in Forestry (BSF)</option> 
                                                <option value="btvted">BTV Teacher Education (BTVTEd)</option>
                                                <option value="bsed">BS in Education (BSED)</option>
                                                <option value="bsme">BS in Mechanical Engineering (BSME)</option>
                                                <option value="bsee">BS in Electrical Engineering BSEE</option>
                                                <option value="bsce">BS in Civil Engineering (BSCE)</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sort By </label> 
                                            <select class="form-control" name="sort-by">
                                                <option hidden checked>Sort by</option>
                                                <option value="bsf">Score</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <ul class="table-container">
                                            <li id="bsf">
                                            <div class="table-responsive">     
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">English (60)</th>
                                                    <th scope="col">Math (35)</th>
                                                    <th scope="col">Science (45)</th>
                                                    <th scope="col">Abstract (35)</th>
                                                    <th scope="col">Total Score (170)</th>
                                                    <th scope="col">First Choice</th>
                                                    <th scope="col">Second Choice</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>TALUNDE, JUNREY E.</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>100</td>
                                                    <td>BSF</td>
                                                    <td>BSME</td>

                                                  </tr>
                                                  <tr>
                                                    <td>ERMUNDA, JOANNA LORAINE C.</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>100</td>
                                                    <td>BSF</td>
                                                    <td>BSME</td>
                                                  </tr>
                                                  <tr>
                                                    <td>PINUTE, JOVELYN D.</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>20</td>
                                                    <td>100</td>
                                                    <td>BSF</td>
                                                    <td>BSED</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            </li>
                                           <li id="btvted">
                                            <div class="table-responsive">
                                             <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">English (60)</th>
                                                        <th scope="col">Math (35)</th>
                                                        <th scope="col">Science (45)</th>
                                                        <th scope="col">Abstract (35)</th>
                                                        <th scope="col">Total Score (170)</th>
                                                        <th scope="col">First Choice</th>
                                                        <th scope="col">Second Choice</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>CADAY, MERIAM N.</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>100</td>
                                                      <td>BTVED</td>
                                                      <td>BSF</td>
  
                                                    </tr>
                                                    <tr>
                                                      <td>FEROLINO, DHEXTER D.</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>100</td>
                                                      <td>BTVED</td>
                                                      <td>BSCE</td>
                                                    </tr>
                                                    <tr>
                                                      <td>OLAER, RENETH D.</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>20</td>
                                                      <td>100</td>
                                                      <td>BTVED</td>
                                                      <td>BSCE</td>
                                                    </tr>
                                                  </tbody>
                                             </table>
                                             </div>
                                            </li>
                                            <li id="bsed">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                       <thead>
                                                           <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">English (60)</th>
                                                            <th scope="col">Math (35)</th>
                                                            <th scope="col">Science (45)</th>
                                                            <th scope="col">Abstract (35)</th>
                                                            <th scope="col">Total Score (170)</th>
                                                            <th scope="col">First Choice</th>
                                                            <th scope="col">Second Choice</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                            </tr>
                                                         </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li id="bsme">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                       <thead>
                                                           <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">English (60)</th>
                                                            <th scope="col">Math (35)</th>
                                                            <th scope="col">Science (45)</th>
                                                            <th scope="col">Abstract (35)</th>
                                                            <th scope="col">Total Score (170)</th>
                                                            <th scope="col">First Choice</th>
                                                            <th scope="col">Second Choice</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                            </tr>
                                                         </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li id="bsee">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                       <thead>
                                                           <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">English (60)</th>
                                                            <th scope="col">Math (35)</th>
                                                            <th scope="col">Science (45)</th>
                                                            <th scope="col">Abstract (35)</th>
                                                            <th scope="col">Total Score (170)</th>
                                                            <th scope="col">First Choice</th>
                                                            <th scope="col">Second Choice</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                            </tr>
                                                         </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li id="bsce">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                       <thead>
                                                           <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">English (60)</th>
                                                            <th scope="col">Math (35)</th>
                                                            <th scope="col">Science (45)</th>
                                                            <th scope="col">Abstract (35)</th>
                                                            <th scope="col">Total Score (170)</th>
                                                            <th scope="col">First Choice</th>
                                                            <th scope="col">Second Choice</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                            </tr>
                                                         </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            
                                           </ul>
                                    </div>
                                    
                                      
                                    <div class="col-md-6">
                                    <ul class="list-inline pull-right">
                                        <li><button type="submit" class="default-btn next-step disabled">Submit</button></li>
                                    </ul>
                                    </div>
                                </div>
                                
                            </div>    
                        </div>
                    </form>          
                  </div>
              </div>
          </div>
      </div>
  </section>

 
    <!--end multiStep-->



     
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="assets/js/vendor/popper.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>
      <script src="assets/js/vendor/holder.min.js"></script>
         <!--Custom JS-->
    <script src="js/custom.js"></script>
      <script>
        // ------------step-wizard-------------
      $(document).ready(function () {
          $('.nav-tabs > li a[title]').tooltip();
          
          //Wizard
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

              var $target = $(e.target);
          
              if ($target.parent().hasClass('disabled')) { //naay disabled diri
                  return false;
              }
          });

          $(".next-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              $active.next().removeClass('disabled'); //naay disabled diri
              nextTab($active);

          });
          $(".prev-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              prevTab($active);

          });
      });

      function nextTab(elem) {
          $(elem).next().find('a[data-toggle="tab"]').click();
      }
      function prevTab(elem) {
          $(elem).prev().find('a[data-toggle="tab"]').click();
      }
     </script>
     <script>
      var input = document.getElementById("firstname").value;
      document.getElementById("firstname").innerHTML = input;
     </script>
     

     <!--version 3-->
  </body>
</html>
