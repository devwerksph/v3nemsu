<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Configure Unit Rates <i class="bi bi-arrow-right"></i> List of Per Unit Rates</span>  <a class="default-btn pull-right " href="other-rates.php"> Create Record</a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
          <div class="table-responsive" style="font-size:12px ;">
          <table id="myTable" class="table table-striped table-bordered table-hover table-responsive" width="100%" >

              <thead>  
                <tr>  
                   <th width="80">REF</th>
                  <th>COURSE</th>  
                  <th width="100">RATE/UNIT</th>
                  <th width="100">STATUS</th>  
                  <th width="80">ACTION</th>       
                </tr>  
              </thead>  
              <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `units_rate`  WHERE status='Active' ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <!-- <td><?php //echo $row['student_id']; ?></td>   -->
            <td><?php echo $row['course_name'];?></td> 
             <td><?php echo number_format($row['rate'],2);?></td> 
            <td><?php echo $row['status'];  ?></td>    
             <td >
             <a href="process/execute_del_rate.php?id=<?php echo $row['ctrlinc'] ;?>" class=" btn-danger "  style="padding:5px "><span class="bi bi-trash-fill"></span></a>
              
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
