<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
   <?php include('connection.php');?>

  <body>

   <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">
         <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        

          <h2 class="sub-header text-center">Encode Exam Result</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">
                       
                      </div>
      
                      <form role="form" action="process/execute_exam.php" method="post" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <!--<h3 class="text-center">Personal Information</h3><hr>-->
                                  <div class="row">
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>First Name </label> 
                                              <input id="firstname" class="form-control user_change" data-name="data-firstname" type="text" name="firstname" placeholder="First Name"> 
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Middle Name </label> 
                                              <input class="form-control" type="text" name="middlename" placeholder="Middle Name"> 
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Family Name </label> 
                                              <input class="form-control" type="text" name="lastname" placeholder="Family Name"> 
                                          </div>
                                      </div>
                                      
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Suffix </label> 
                                              <input class="form-control" type="text" name="suffix" placeholder="Suffix"> 
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Desire Course</label> 

                                            <select  name="desire_course" class="form-control" id="desire_course">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `course_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row['course_code'].",".$row['course_desc']; ?>">
                                                                        <?php echo $row['course_desc'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                    ?>

                                            </select>
                                        </div>

                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>University/High School from</label> 
                                            <input type="text"  id="school" class="form-control" name="school" placeholder="">
                                            
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender </label> 
                                            <select  name="gender" class="form-control" id="gender">
                                              <option hidden>Select Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Age </label> 
                                            <input class="form-control" type="text" name="age" placeholder="Age"> 
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of Test </label> 
                                            <input class="form-control" type="date" name="date" placeholder="Date of Test"> 
                                        </div>
                                      </div>
                                    
                                    

                                    <div class="col-md-12"><hr></div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="english-result" class="col-sm-2 col-form-label">Areas</label>
                                            <div class="col-sm-5">
                                                <label for="english-result" class="col-sm-2 col-form-label">HPS</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <label for="english-result" class="col-sm-2 col-form-label">Result</label>
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="form-group row">
                                            <label for="english-result" class="col-sm-2 col-form-label">English</label>
                                            <div class="col-sm-5">
                                              <input type="text" class="form-control" id="english-result" name="hps-eng" placeholder="HPS" >
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="english-result" name="score-eng" placeholder="Score" onchange="addValues()">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="mathematics-result" class="col-sm-2 col-form-label">Mathematics</label>
                                            <div class="col-sm-5">
                                              <input type="text" class="form-control" id="mathematics-result" name="hps-math" placeholder="HPS">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="mathematics-result" name="score-math" placeholder="Score" onchange="addValues()">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="science-result" class="col-sm-2 col-form-label">Science</label>
                                            <div class="col-sm-5">
                                              <input type="text" class="form-control" id="science-result" name="hps-sci" placeholder="HPS">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="science-result" name="score-sci" placeholder="Score">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="abstract-result" class="col-sm-2 col-form-label">Abstract Reasoning</label>
                                            <div class="col-sm-5">
                                              <input type="text" class="form-control" id="abstract-result" name="hps-abs" placeholder="HPS">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="abstract-result" name="score-abs" placeholder="Score">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="abstract-result" class="col-sm-2 col-form-label">Total</label>
                                            <div class="col-sm-5">
                                              <input type="text" class="form-control" id="abstract-result" name="hps-total" placeholder="HPS">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="abstract-result" name="score-score" placeholder="Score">
                                              </div>
                                          </div>
                                    </div>
                                  </div>
                                  <ul class="list-inline pull-right">
                                    <li><button type="submit" name="btn_login" class="default-btn next-step">Submit</button></li>
                                </ul>
                              </div>    
                          </div>
                      
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

 
    <!--end multiStep-->


<script>
 function addValues() {
 var value1 = parseInt(document.getElementByName('score-eng').value);
 var value2 = parseInt(document.getElementByName('score-math').value);
 var sum = value1 + value2;
 document.getElementByName('result').value =  sum;
 }
 </script>
     
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
