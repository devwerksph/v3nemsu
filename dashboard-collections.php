<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Accounting <i class="bi bi-arrow-right"></i> List of Collections</span>  <a data-toggle="modal" data-target="#createTransaction" class="default-btn pull-right text-strong" href="">+ Create Transaction</a>
          <!-- Modal -->
<div class="modal fade" id="createTransaction" tabindex="-1" role="dialog" aria-labelledby="createTransactionLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="createTransactionLabel">Create Transaction</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>First Name </label> 
                  <input id="firstname" required="required" class="form-control user_change" data-name="data-firstname" type="text" name="firstname" placeholder="First Name" onchange="myFunction()"> 
              <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
              
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Middle Name </label> 
                  <input id="middlename" class="form-control " data-name="data-firstname" type="text" name="middlename" placeholder="Middle Name" onchange="myFunction()"> 
              </div>
          </div>
        
          <div class="col-md-6">
              <div class="form-group">
                  <label>Last Name </label> 
                  <input id="lastname" required="required" class="form-control" type="text" name="lastname" placeholder="Last Name" onchange="myFunction()"> 
              </div>
          </div>
          
          <div class="col-md-6">
              <div class="form-group">
                  <label>Suffix </label> 
                  <input id="suffix" class="form-control" type="text" name="suffix" placeholder="Suffix" onchange="myFunction()"> 
              </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                <label>Course </label> 
                <input id="YourCourse" class="form-control" type="text" name="course" placeholder="Course" onchange="myFunction()"> 
            </div>
          </div><br><br>
          <div class="col-md-4">
            <div class="form-group">
                <label>Age </label> 
                <input id="YourAge" class="form-control" type="number" name="age" placeholder="Age" onchange="myFunction()"> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <label>Date of Birth </label> 
                <input id="dateofbirth" class="form-control" type="date" name="dob" placeholder="Date of Birth" onchange="myFunction()">
            </div>
         </div>
        <div class="col-md-4">
          <div class="form-group">
              <label>Place of Birth </label> 
              <input id="dateofplace" class="form-control" type="text" name="pob" placeholder="Place of Birth" onchange="myFunction()">
          <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
              <label>Home Address</label> 
              <textarea id="homeaddress" class="form-control" name="homeaddress" rows="3" placeholder="Home Address" onchange="myFunction()"></textarea> 
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
              <label>Present/Boarding House Address</label> 
              <textarea id="presentaddress" class="form-control" name="presentaddress" rows="3" placeholder="Present/Boarding House Address" onchange="myFunction()"></textarea> 
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
              <label>Contact Number </label> 
              <input id="mycontact" class="form-control" type="text" name="contact" placeholder="Contact Number" onchange="myFunction()"> 
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
          <div class="sub-header text-center"> </div>
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
            <br>
          <div class="table-responsive" style="font-size:12px ;">
          <table id="" class="table table-striped table-bordered table-hover table-responsive" width="100%" >

              <thead>  
                <tr>  
                  <th width="80">REF</th>
                  <th width="150">DATE.TRANS</th> 
                  <th width="150">OR NO.</th>
                  <th >CLEINT/STUDENT/EMPLOYEES</th> 
                  <th width="400">REMARKS</th> 
                  <th width="100" class="text-center">COLLECT (&#8369;)</th>
                  <th width="200" class="text-center">ACTION</th>       
                </tr>  
              </thead>  
              <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `accounting_collection_` WHERE  `status`='Collected'";
            $result = $conn->query($sql);
            $i=1;
            $rowcount = mysqli_num_rows( $result );

            if ($rowcount>0) {
              # code...
            
            while($row = $result->fetch_assoc()) { 
               $date=date_create($row['tdate']);
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo date_format($date,"d/M/Y"); ?></td>  
             <td><?php echo $row['orno'] ;?></td>
             <td ><?php echo $row['client_name'];?></td> 
              <td ><?php echo $row['remarks'];?></td> 
             <td style="text-align:right; "><b>&#8369; <?php echo number_format($row['bal_amt'],2);?></b></td> 
           
             <td >
              <center><a href="process/execute_payment.php?action=edit&id='.$row['ctrlinc'].' " class="btn btn-primary btn-xs  "><i class="bi bi-printer"></i> Print OR </a>
            <a href="dashboard-accounting_soa.php?id=<?php echo $row['student_id']; ?> " class="btn btn-info btn-xs  "><i class="bi bi-printer"></i> Print COR </a></center>        
             </td>
          
          </tr>  
         

           <?php  $i++;}}else{  ?>
            <tr><td colspan="7"><h4 class="text-center" style="color:red;" >No transactions has been made.</h4></td></tr>
            <?php } ?>  
        </tbody> 

              </table>
            </div>
         </div>
      </div>
   
      <?php include 'footer.php'; ?>
  </body>
</html>
