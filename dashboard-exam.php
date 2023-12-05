<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Exam Result <i class="bi bi-arrow-right"></i> List of Student</span>  <a class="default-btn pull-right " href="exam-result.php"> + File Record</a>
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
            <th >DATE EXAM</th>  
            <th width="10">ENGLISH</th>
            <th width="10">MATHEMATICS</th>
            <th width="10">SCIENCE</th>
            <th width="10">ABSTRACT</th>
            <th width="10">TOTAL</th>
            <th width="10">ACTION</th>    
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `student_exam_result` WHERE `status`='Active'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <!-- <td><?php //echo $row['student_id']; ?></td>   -->
            <td><?php echo $row['student_lname'].", ".$row['student_fname']." ".$row['student_mname']." ".$row['student_suffix']; ?></td>  
            <td><?php echo $row['exam_date']; ?></td>
            <td><?php echo $row['exam_english_r']; ?></td> 
            <td><?php echo $row['exam_math_r'];  ?></td>
            <td><?php echo $row['exam_science_r'];  ?></td>
            <td><?php echo $row['exam_abstract_r'];  ?></td>
            <td><?php echo $row['exam_total'];  ?></td>   
            <td>
              <center>
                 <a href="process/execute_del_entrance_exam.php?id=<?php echo $row['ctrlinc'] ?>" class=" btn-danger "  style="padding:5px "><span class="bi bi-trash-fill"></span></a>
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
