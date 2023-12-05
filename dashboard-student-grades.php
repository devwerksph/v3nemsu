<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Registrar <i class="bi bi-arrow-right"></i> Student <i class="bi bi-arrow-right"></i> List of Grades</span>  <a class="default-btn pull-right " href="#"></a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
             <?php 

            if(isset($_GET['id'])){

                      include 'connection.php';
                         $sql = "SELECT A.*, B.student_contact FROM student_course_scheduling A LEFT JOIN student_personal_info B ON A.student_id=B.student_id WHERE A.student_id='".$_GET['id']."' AND A.stat='*'; ";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { 
                          $student_name=$row['student_lname'].', '.$row['student_fname'].' '.$row['student_mname'].' '.$row['student_suffix']; 
                          $student_course=$row['student_course'];
                          $student_id=$row['student_id'];
                          $student_address=$row['student_address'];
                          $student_level=$row['student_college_level'];
                          $student_school_yr=$row['student_school_yr'];
                          $student_semester=$row['student_semester'];
                          $student_contact=$row['student_contact'];

                        }
            }


              ?>
               <h2 style="color:#1c0dd8;"><strong><i class="bi bi-person-circle bi-margin"></i><?php echo $student_name; ?></strong></h2>
          <h3 style="margin-top:5px;color:#1c0dd8;"><i class="bi bi-mortarboard bi-margin"></i> <?php echo $student_course; ?></h3>
          <h3 style="margin-top:5px;color:#1c0dd8;"><i class="bi bi-hash bi-margin"></i> <?php echo $student_id; ?></h3>
            <br>
            <div class="table-responsive" style="font-size:11px ;">
          <table id="myTable" class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>  
            <th>REF</th>
            <th>SUBJECT CODE</th>    
            <th>SUBJECT DESCRITIONS</th>  
            <th>UNIT</th>  
            <th>PRELIM</th>
            <th>MIDTERM</th>
            <th>FINAL</th>
            <th>AVERAGE</th>
            <th>REMARKS</th>
            <th>SEMESTER</th>
            <th width="100">ACTION</th>    
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `student_enrolled` WHERE `student_id`='".$_GET['id']."'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo $row['subject_code']; ?></td>  
            <td><?php echo $row['subject_desc']; ?></td>  
            <td><?php echo $row['subject_unit']; ?></td>
            <td><?php echo $row['first']; ?></td>
            <td><?php echo $row['second']; ?></td>
            <td><?php echo $row['third']; ?></td>
            <td><?php echo $row['average']; ?></td> 
            <td><?php echo $row['remarks'];;  ?></td>
             <td><?php echo $row['sem'];;  ?></td>     
            <td>
             <center>
              <!-- <a href="#" class=" btn-info " style="padding:5px ">Go Enroll</a> -->
            <!--   <a href="#" class=" btn-warning " style="padding:5px "><span class="bi bi-pencil-fill"></span></a> -->
                <a href="add-student-grades.php?id=<?php echo $row['student_id']; ?>" class=" btn-info "  style="padding:5px "> Grades <span class="bi bi-plus"></span></a>
              </center>
            </td>  
          </tr>  
         

           <?php  $i++;}  ?>  
        </tbody> 

              </table>
            </div>
         </div>
      </div>
   
      <?php include 'footer.php'; ?>
  </body>
</html>
