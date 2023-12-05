<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
 <?php include('connection.php');?>
  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">
         
         <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


          <h2 class="sub-header text-center">Pre-registration Form</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">
                         <!-- GUID NOTE -->
                      </div>
      
                      <form role="form" action="process/execute_course_sched.php" method="post" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <!--<h3 class="text-center">Personal Information</h3><hr>-->
                                  <div class="row">
                                    
                                      <div class="col-md-4">
                                        <label style="margin-bottom:10px;">Student Status </label>
                                        <div class="form-group">
                                          <label class="radio-inline">
                                            <input type="radio" name="optradiostatus" value="NEW" >New
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="optradiostatus" value="OLD">Old
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="optradiostatus" value="TRANSFEREE" >Transferee
                                          </label>
                                        </div>
                                        
                                      </div>
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>College of </label> 
                                           <select  name="college_desc" class="form-control" id="college_desc">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `college_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option   data-rc="<?php echo $row['college_code'].",".$row['college_desc']; ?>"  value="<?php echo $row['college_code']; ?>">
                                                                        <?php echo $row['college_desc'];?>
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
                                       <input id="college_code" type="hidden" name="college_code">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Course </label> 
                                        <select  name="course_desc" class="form-control" id="course_desc">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `course_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  data-name="<?php echo $row["college_code"];?>"  value="<?php echo $row['course_code'].",".$row['course_desc']; ?>">
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
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          
                                            <label>College Level </label> 
                                            <select class="form-control" name="college-level">
                                                <option hidden checked>Select Level</option> 
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4th Year</option>
                                                <option value="5">5th Year</option>
                                              </select>
                                        
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                          
                                            <label>Semester </label> 
                                             <?php  
                                                            $c1 = "SELECT * FROM `semester_list` WHERE `upd`=1 ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                   <input type="text"  class="form-control" name="select-semester" value="<?php echo $row['sem_desc'];  ?>" readonly>
                                                                   
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "<input type='text' name='select-semester' value='<?php echo Not Set;?>' >";
                                                                }
                                                    ?>
                                        
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>School Year </label> 
                                                <select class="form-control" name="school-year">
                                                 <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `yrschool_list` WHERE `status`='Enabled' ORDER BY  ctrlinc DESC";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  value="<?php echo $row['ctrlinc'].",".$row['yrschool_desc']; ?>">
                                                                      <?php echo $row['yrschool_desc'];?>
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
                                        
                                    <br>
                                    <hr>
                                     <br>
                                    <br>
                                      <div class="col-md-6">
                                       <div class="form-group">
                                        <label>Student name </label> 
                                        <select  name="student_name" class="form-control" id="student_name">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `student_course_scheduling` ORDER BY  student_lname DESC ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  data-name="<?php echo $row["student_id"];?>"  value="<?php echo $row['student_id'].",".$row['student_lname'].",".$row['student_fname'] .",".$row['student_mname'] .",".$row['student_suffix'];?>">
                                                                        <?php echo $row['student_lname'].",".$row['student_fname'] ." ".$row['student_mname'] ." ".$row['student_suffix'];?>
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


                                      <!-- <div class="col-md-3">
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
                                      </div> -->
                                    
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label> 
                                            <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"></textarea> 
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label>If employed, name and address of employer</label> 
                                            <textarea class="form-control" id="employer" name="employer" rows="2" placeholder="If employed, name and address of employer"></textarea> 
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender </label> 
                                            <select class="form-control" id="gender" name="gender">
                                              <option hidden checked>--Select--</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <label>Scholarship </label> 
                                      <input class="form-control" type="text" name="scholarship" placeholder="Scholarship"> 
                                      </div>
                                      <div class="col-md-4">
                                      <label>Age </label> 
                                      <input class="form-control" type="text" name="age" placeholder="0"> 
                                      </div>

                                    <div class="col-md-12"><hr></div>

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $("#college_desc").change(function () {

            if ($(this).data('options') == undefined) {
                $(this).data('options', $('#course_desc option ').clone());
            }
            var id = $(this).val();
            if (id == "all") {
                var options = $(this).data('options');
                $('#course_desc').html(options);
            }
            else {
                var options = $(this).data('options').filter('[data-name=' + id + ']');
                $('#course_desc').html(options);
            }
        });


</script>
<script type="text/javascript">
  function getSelectedValue() {
  var selectedValueSubject = document.getElementById("subject_desc").value;
  var _optionSelected = document.getElementById("subj_section").value; 
  _optionSelected.length ? document.getElementById("subj_section").value =selectedValueSubject : document.getElementById("subj_section").value = selectedValueSubject;
  
 

}
</script>

<script type="text/javascript">
var selection = document.getElementById("college_desc");
selection.onchange = function(event){
var rc = event.target.options[event.target.selectedIndex].dataset.rc;
var _optionSelected = document.getElementById("college_code").value; 
_optionSelected.length ? document.getElementById("college_code").value =rc : document.getElementById("college_code").value = rc;

};
</script>

 <script type="text/javascript">
var selection1 = document.getElementById("subject_desc");
selection1.onchange = function(event){
var subjcode = event.target.options[event.target.selectedIndex].dataset.subjcode;
var _optionSelected1 = document.getElementById("subj_code").value; 
_optionSelected1.length ? document.getElementById("subj_code").value =subjcode : document.getElementById("subj_code").value = subjcode;

var subjtitle = event.target.options[event.target.selectedIndex].dataset.subjtitle;
var _optionSelected2 = document.getElementById("subj_section").value; 
  _optionSelected2.length ? document.getElementById("subj_section").value =subjtitle : document.getElementById("subj_section").value = subjtitle;

};
</script>
  <?php include 'footer.php'; ?>
  
  </body>
</html>
