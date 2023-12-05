<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Subject Schedule <i class="bi bi-arrow-right"></i> List of Schedule</span>  <a class="default-btn pull-right " href="subject-encoding.php"> + File Record</a>
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
            <!-- <th>COLLEGE</th>  
            <th >COURSE</th>   -->
            <th width="10">LEVEL</th>
            <th width="10">SECTION</th>
            <th >DESCRIPTION</th>
            <th width="10">UNIT</th>
            <th width="10">START</th>
            <th width="10">END</th>
            <th width="10">DAYS</th>
            <th >INSTRUCTOR</th>
            <th width="10">SEM.</th>
            <th width="10">SCHL.YR</th>
            <th width="10">STATUS</th> 
            <th width="10">ACTION</th>     
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
             $sql = "SELECT * FROM `subject_scheduling` WHERE `status`='Active'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <!-- <td><?php //echo $row['student_id']; ?></td>   -->
            <!-- <td><?php echo $row['college_desc']; ?></td>  
            <td><?php echo $row['course_desc']; ?></td> -->
            <td>
              <?php
              if ($row['year_level']==1) {
               echo "1st Yr.";
               }else if($row['year_level']==2) {
               echo "2nd Yr.";
               }else if($row['year_level']==3) {
               echo "3rd Yr.";
               }else if($row['year_level']==4) {
               echo "4th Yr.";
               }else if($row['year_level']==5) {
               echo "5th Yr.";
               }

               ?>
                
              </td> 
            <td><?php echo $row['subj_section'];  ?></td>
            <td><?php echo $row['subj_desc'];  ?></td>
            <td><?php echo $row['subj_unit'];  ?></td>
            <td><?php echo date('h:i:sA',strtotime($row['time_start']));  ?></td>
            <td><?php echo  date('h:i:sA',strtotime($row['time_end']));  ?></td>
            <td><?php echo $row['days_set'];  ?></td>
            <td><?php echo $row['instructor_name']; ?></td>
            <td><?php echo  $row['sem_desc'];?></td>
            <td><?php echo $row['school_yr_desc'];  ?></td>
            <td><?php echo $row['status'];  ?></td>   
            <td style="font-size:10px ;">
              <center>
                <!-- <a href="#" class=" btn-warning " style="padding:5px "><span class="bi bi-pencil-fill"></span></a> -->
               <a href="process/execute_del_subject_encode.php?id=<?php echo $row['ctrlinc'] ?>" class=" btn-danger "  style="padding:5px "><span class="bi bi-trash-fill"></span></a>
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
