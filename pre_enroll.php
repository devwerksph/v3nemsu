<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->
<style>
    .before::before {
   content: none !important;
}
</style>
 <?php 

if(isset($_GET['id'])){

          include 'connection.php';
             $sql = "SELECT * FROM `student_course_scheduling` WHERE `student_id`='".$_GET['id']."'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
              $student_name=$row['student_lname'].', '.$row['student_fname'].' '.$row['student_mname'].' '.$row['student_suffix']; 
              $student_course=$row['student_course'];
              $student_id=$row['student_id'];
               $student_level=$row['student_college_level'];
            }
}


  ?>
    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <h2 style="color:#1c0dd8;"><strong><i class="bi bi-person-circle bi-margin"></i><?php echo $student_name; ?></strong></h2>
          <h3 style="margin-top:5px;color:#1c0dd8;"><i class="bi bi-mortarboard bi-margin"></i> <?php echo $student_course; ?></h3>
          <h3 style="margin-top:5px;color:#1c0dd8;"><i class="bi bi-hash bi-margin"></i> <?php echo $student_id; ?></h3>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class="form-style"> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->

  <div class="panel panel-default">
    <div class="panel-heading panel-heading-nav">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active">
          <a class="before" href="#one" role="tab" data-toggle="tab">Evaluations</a>
        </li>
        <li role="presentation">
          <a class="before" href="#two"  role="tab" data-toggle="tab">Subjects To Enroll</a>
        </li>
        <li role="presentation">
           <?php 
                include 'connection.php';
                  
                  $sql = "SELECT count(*) as totalEnroll FROM `student_enrolled` WHERE `student_id`='$student_id' AND upd=0; ";
                  $result = $conn->query($sql);
                  $i=1;
                  while($row = $result->fetch_assoc()) { 
                  $totalEnroll=$row['totalEnroll'];
                  }
               ?>

          <a class="before" href="#three"  role="tab" data-toggle="tab">Enrolled Subjects (<?php echo   $totalEnroll; ?>)</a>
        </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content table-responsive">
        <div role="tabpanel" class="tab-pane fade in active" id="one">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Pre-requisite</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include 'connection.php';
                  
                  $sql = "SELECT * FROM `student_enrolled` WHERE `student_id`='$student_id' AND upd=1; ";
                  $result = $conn->query($sql);
                  $i=1;
                  while($row = $result->fetch_assoc()) { 
                  

               ?>

               <tr>  
                <!-- <td><?php //echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>   -->
                <td><?php echo $row['subject_code']; ?></td>  
                <td><?php echo $row['subject_desc']; ?></td>
                <td><?php echo $row['subject_unit'];  ?></td>
                <td><?php echo $student_course;  ?></td>        
                <td><?php echo $student_level;  ?></td> 
                 <td>
                  <?php 
                    if ( ($row['pre_req']== "")) {
                      echo "NONE";
                    }else{
                      
                      echo $row['pre_req']; 
                    }

                   ?>
                    
                  </td>                   
                 <td><button type="button" class="btn btn-primary">Add Grades</button></td> 
              </tr>  

                      <?php  $i++;}  ?>  

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> <a data-toggle="modal" data-target="#evaluateGrades" href="" class=" btn btn-primary "  style="padding:5px ">Evaluate </span></a></td>
              </tr>
            </tbody>
          </table>
            <!-- Add Grades Modal -->
            <div class="modal fade" id="evaluateGrades" tabindex="-1" role="dialog" aria-labelledby="addGradesLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="addGradesLabel">Evaluate Student Grades</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Unit </label> 
                              <input id="unit" required="required" class="form-control user_change" data-name="data-firstname" type="text" name="unit" placeholder="Unit" onchange="myFunction()"> 
                          <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                          
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Course </label> 
                              <input id="prelim" class="form-control " data-name="data-firstname" type="text" name="course" placeholder="Course" onchange="myFunction()"> 
                          </div>
                      </div>
                    
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Year Level </label> 
                              <input id="midterm" required="required" class="form-control" type="text" name="yrlevel" placeholder="Year Level" onchange="myFunction()"> 
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Pre-requisite </label> 
                              <input id="finals" class="form-control" type="text" name="prereq" placeholder="Pre-requisite" onchange="myFunction()"> 
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Semester </label> 
                            <input id="semester" class="form-control" type="text" name="semester" placeholder="Semester" onchange="myFunction()"> 
                        </div>
                      </div><br><br>
                      
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            </div><!--End Modal-->
        </div>
        <div role="tabpanel" class="tab-pane fade" id="two">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Semester</th>
                <th>Pre-requisite</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 

                include 'connection.php';
                  
                  $sql = "SELECT * FROM `subject_scheduling` WHERE `course_desc`='$student_course' AND upd=0; ";
                  $result = $conn->query($sql);
                  $i=1;
                  while($row = $result->fetch_assoc()) { 
                  

               ?>

             <td><?php echo $row['subj_section']; ?></td>  
                <td><?php echo $row['subj_desc']; ?></td>
                <td><?php echo $row['subj_unit'];  ?></td>
                <td><?php echo $row['course_desc'];  ?></td>        
                <td><?php echo $row['year_level'];  ?></td>        
                <td><?php echo $row['sem_desc'];  ?></td> 
                 <td>
                  <?php 
                    if ( ($row['preq_desc']== "")) {
                      echo "NONE";
                    }else{
                      
                      echo $row['preq_desc']; 
                    }

                   ?>
                    
                  </td>                   
                 <td><button type="button" class="btn btn-primary">Add </button></td> 
               </tr>
                 <?php  $i++;}  ?>  
            </tbody>
          </table>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="three">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Semester</th>
                <th>Pre-requisite</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                 <?php 
                include 'connection.php';
                  
                  $sql = "SELECT * FROM `student_enrolled` WHERE `student_id`='$student_id' AND upd=0; ";
                  $result = $conn->query($sql);
                  $i=1;
                  while($row = $result->fetch_assoc()) { 
                  

               ?>

                <tr>  
                <!-- <td><?php //echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>   -->
                <td><?php echo $row['subject_code']; ?></td>  
                <td><?php echo $row['subject_desc']; ?></td>
                <td><?php echo $row['subject_unit'];  ?></td>
                <td><?php echo $student_course;  ?></td>        
                <td><?php echo $student_level;  ?></td> 
                  <td><?php echo $row['sem']; ?></td> 
                 <td>
                  <?php 
                    if ( ($row['pre_req']== "")) {
                      echo "NONE";
                    }else{
                      
                      echo $row['pre_req']; 
                    }

                   ?>
                    
                  </td>                   
                 <td><button type="button" class="btn btn-primary">Remove</button></td> 
              </tr>  
    <?php  $i++;}  ?>  
             
              <tr>
                <td></td>
                <td><p class="pull-right"><strong>Total Units</strong></p></td>
                <td>12</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

            </tbody>
          </table>
          <div class="pull-right"><button type="button" class="btn btn-success">Add</button> <button type="button" class="btn btn-primary">Submit</button></div>
          </div>
        </div>
      </div>
    </div>

            <br>
            <div class="table-responsive" style="font-size:10px ;">
            </div>
         </div>
      </div>
   
      <?php include 'footer.php'; ?>
  </body>
</html>