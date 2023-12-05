<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
 <?php include('connection.php');?>


  <body>

   <?php include 'head.php'; ?><!-- Head Nav -->

     

    <div class="container-fluid">
      <div class="row">
         <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


          <h2 class="sub-header text-center">Create Subject Schedule</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">

                      </div>
      
                      <form role="form" action="process/execute_add_new_subject.php" method="post" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <!--<h3 class="text-center">Personal Information</h3><hr>-->
                                  <div class="row">
                                    
                                      <div class="col-md-6">
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
                                    <div class="col-md-6">
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
                                            <select class="form-control"  name="select-level">
                                                <option hidden checked>Select Level</option> 
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4th Year</option>
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
                                                                   <input type="text"  class="form-control" name="select-sememster" value="<?php echo $row['sem_desc'];  ?>" readonly>
                                                                   
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "<input type='text' name='select-sememster' value='<?php echo Not Set;?>' >";
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
                                        
                                    
                                    <div class="col-md-12"><hr>

                                    </div>

                                   
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Subject Description </label> 
                                              <select  name="subject_desc" class="form-control" id="subject_desc" onchange="getSelectedValue();">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `subject_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  id="selecteditem" data-subjtitle='<?php echo $row['subj_title']; ?>' data-subjcode='<?php echo $row['subj_code'].",".$row['subj_desc']; ?>' value="<?php echo $row['subj_title'];?>">
                                                                        <?php echo $row['subj_desc'];?>
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
                                              <label>Subject Title </label> 
                                              <input  id="subj_section" class="form-control user_change" type="text" name="subj_section" placeholder="Subject Title" readonly="yes"> 

                                              <input  id="subj_code" class="form-control user_change" type="hidden" name="subj_code" placeholder="Subject Code" readonly="yes"> 
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Instructor </label> 
                                        <select  name="teacher" class="form-control" id="teacher">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `instructor_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option   value="<?php echo $row['INST_ID'].",".$row['INST_NAME']; ?>">
                                                                        <?php echo $row['INST_NAME'];?>
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
                                     
                                      <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                          <label>Time (From) </label> 
                                           <input class="form-control" type="time" name="select-in"> 
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                      <div class="form-group">
                                        <label>Time (To) </label>
                                        <input class="form-control" type="time" name="select-out"> 
                        
                                      </div>
                                  </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Day </label> 
                                              <select  name="days" class="form-control" id="days">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `days_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  value="<?php echo $row['ctrlinc'].",".$row['days_desc']; ?>">
                                                                        <?php echo $row['days_desc'];?>
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

                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label>Units </label> 
                                           <select  name="units" class="form-control" id="units">
                                             <option hidden checked>--Select--</option>
                                             <option value="1.0" >1.0</option>
                                             <option value="2.0">2.0</option>
                                             <option value="3.0">3.0</option>
                                             <option value="4.0">4.0</option>
                                             <option value="5.0">5.0</option>
                                          </select>
                                  </div>

                                    </div>
                                  </div>
                                  <ul class="list-inline pull-right">
                                    <li><button type="submit" name="submit_in" class="default-btn next-step">Submit</button></li>
                                </ul>
                              </div>    
                          </div>
                      
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

 
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

</script> -->
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
     <!--version 3-->
  </body>
</html>
