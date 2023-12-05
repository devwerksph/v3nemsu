<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Faculty <i class="bi bi-arrow-right"></i> List of Teachers</span>  <a class="default-btn pull-right " href="faculty-load.php"> + File Record</a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div class=""> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
            <div class="table-responsive" style="font-size:12px ;">
          <table id="myTable" class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>  
            <th width="80">REF</th>
            <!-- <th>IDNO</th>     -->
            <th width="130">INSTRUCTOR</th>  
            <th>MAJOR</th>  
            <th width="80">CONTACT</th> 
            <th width="80">STATUS</th> 
            <!-- <th width="80">ACTION</th> -->      
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `instructor_list` WHERE `status`='Active' ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <!-- <td><?php //echo $row['student_id']; ?></td>   -->
            <td><?php echo $row['INST_NAME']; ?></td>  
            <td><?php echo $row['INST_MAJOR']; ?></td>
            <td><?php echo $row['INST_CONTACT'];  ?></td>
             <td><?php echo $row['STATUS'];  ?></td>          
            <!-- <td>
              <center><a href="#" class=" btn-warning " style="padding:5px "><span class="bi bi-pencil-fill"></span></a> 
                <a href="#" class=" btn-danger "  style="padding:5px "><span class="bi bi-trash-fill"></span></a>
              </center>
            </td>   -->
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
