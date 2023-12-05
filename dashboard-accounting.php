<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Accounting <i class="bi bi-arrow-right"></i> List of Account Balances</span>  <a class="default-btn pull-right " href="#"></a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
          <div class="table-responsive" style="font-size:12px ;">
          <table id="" class="table table-striped table-bordered table-hover table-responsive" width="100%" >

              <thead>  
                <tr>  
                   <th width="80">REF</th>
                  <th width="150">STUDENT ID</th> 
                  <th>STUDENT NAME</th> 
                  <th width="150">PREVIOUS</th>
                  <th width="150">RECEIVED</th>
                  <th width="150"> BALANCE</th>
                  <th width="130">STATUS</th>   
                  <th width="200">ACTION</th>       
                </tr>  
              </thead>  
              <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT A.*,B.student_lname,B.student_fname,B.student_mname,B.student_suffix FROM `accounting_collection_mst` A LEFT JOIN `student_course_scheduling` B ON A.student_id=B.student_id ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo $row['student_id']; ?></td>  
             <td><?php echo  strtoupper($row['student_lname'].", ".$row['student_fname']." ".$row['student_mname']." ".$row['student_suffix']) ;?></td>
             <td><?php echo number_format($row['prev_amt'],2);?></td> 
             <td><?php echo number_format($row['current_amt'],2);?></td> 
             <td><?php echo number_format($row['bal_amt'],2);?></td> 
            <td><b><?php echo $row['status'];  ?></b></td>    
             <td >
              <center><a href="process/execute_payment.php?action=edit&id='.$row['ctrlinc'].' " class="btn btn-primary btn-xs  "><i class="bi bi-cash"></i> Confirm to Pay </a>
            <a href="dashboard-accounting_soa.php?id=<?php echo $row['student_id']; ?> " class="btn btn-info btn-xs  "><i class="bi bi-info-circle"></i> SOA </a></center>        
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
