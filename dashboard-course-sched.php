<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Enrollees List <i class="bi bi-arrow-right"></i> List of Student</span>  <a class="default-btn pull-right " href="course-scheduling.php"> + File Record</a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
            <div class="table-responsive" style="font-size:10px ;">
          <table id="myTable" class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>  
            <th>REF</th>
            <!-- <th>IDNO</th>     -->
            <th>STUDENT NAME</th>  
            <th width="10">GENDER</th>  
            <th >COLLEGE</th>
            <th >COURSE</th>
            <th width="10">COLLEGE LEVEL</th>
            <th width="10">SEMESTER</th>
            <th width="10">SCHOOL YR.</th>
            <th width="10">STATUS</th> 
            <th width="130">ACTION</th>      
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `student_course_scheduling` WHERE `stat`='*' ORDER BY ctrlinc DESC; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <!-- <td><?php //echo $row['student_id']; ?></td>   -->
            <td><?php echo $row['student_lname'].", ".$row['student_fname']." ".$row['student_mname']." ".$row['student_suffix']; ?></td>  
            <td><?php echo $row['student_gender']; ?></td>
            <td><?php echo $row['student_college']; ?></td> 
            <td><?php echo $row['student_course'];  ?></td>
            <td><?php echo $row['student_college_level']." Year";  ?></td>
            <td><?php echo $row['student_semester'];  ?></td>
            <td><?php echo $row['student_school_yr'];  ?></td>
            <td><?php echo $row['status'];  ?></td>      
            <td>

                <center>
                <?php if ($row['upd']==0){

                  echo '<a href="enrollment-fees.php?id='.$row['student_id'].'" class="btn-primary bi-margin" style="padding:5px;">Confirm <span class="bi bi-info-circle"></span> </a>';
                  }else{
                    echo '<a href="pre_enroll.php?action='.$row["status"].'&id='.$row["student_id"].'" class="btn-primary bi-margin" style="padding:5px;"><span class="bi bi-info-circle"></span> Confirm</a>';
                  }
                 ?>
                  <a href="process/execute_del_pre_enroll.php?id=<?php echo $row['ctrlinc']; ?> " class='btn-danger ' style="padding:5px; "><span class="bi bi-trash-fill"></span> </a></center>
              
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
