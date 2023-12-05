<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Registrar <i class="bi bi-arrow-right"></i> List of Student</span>  <a class="default-btn pull-right " href="#"></a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
            <div class="table-responsive" style="font-size:11px ;">
          <table id="myTable" class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>  
            <th>REF</th>
            <th>IDNO</th>    
            <th>STUDENT NAME</th>  
            <th>COURSE</th>  
            <th>SEMESTER</th>
            <th>SCHOOL YR</th>
            <th width="100">ACTION</th>    
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `student_course_scheduling`  ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo $row['student_id']; ?></td>  
            <td><?php echo $row['student_lname'].", ".$row['student_fname']." ".$row['student_mname']." ".$row['student_suffix']; ?></td>  
            <td><?php echo $row['student_course']; ?></td>
            <td><?php echo $row['student_semester']; ?></td> 
            <td><?php echo $row['student_school_yr'];  ?></td>   
            <td>
             <center>
              <!-- <a href="#" class=" btn-info " style="padding:5px ">Go Enroll</a> -->
              <!-- <a href="#" class=" btn-warning " style="padding:5px "><span class="bi bi-pencil-fill"></span></a> -->
                <a href="dashboard-student-grades.php?id=<?php echo $row['student_id']; ?> " class=" btn-info "  style="padding:5px ">View Grades <span class="bi bi-info-circle"></span></a>
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
