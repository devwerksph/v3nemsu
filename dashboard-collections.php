<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

<style>
    .before::before {
   content: none !important;
}
</style>

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Accounting <i class="bi bi-arrow-right"></i> List of Collections</span>  <a data-toggle="modal" data-target="#createTransaction" class="default-btn pull-right text-strong" href="">+ Create Transaction</a>
          <!-- Modal -->
<div class="modal fade " id="createTransaction" tabindex="-1" role="dialog" aria-labelledby="createTransactionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="createTransactionLabel">Create Transaction</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <!--Modal-->
      <div class="col-md-12">
        
  <div class="panel panel-default">
    <div class="panel-heading panel-heading-nav">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active">
          <a class="before" href="#one" role="tab" data-toggle="tab">Student</a>
        </li>
        <li role="presentation">
          <a class="before" href="#two"  role="tab" data-toggle="tab">Employee</a>
        </li>
        <li role="presentation">
          <a class="before" href="#three"  role="tab" data-toggle="tab">Others</a>
        </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content table-responsive">
        <div role="tabpanel" class="tab-pane fade in active" id="one">
          <form >
          <div class="col-md-12">
          <div class="form-group">
              <label>Payee</label>
              
              <select id="childtwogender" class="form-control" type="text" name="childgender[]" onchange="gender2(this);">
                <option disabled selected>-Select-</option>
                <option value="John Doe">John Doe</option>
                <option value="Jane Doe">Jane Doe</option>
              </select>
          </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Date of Transaction </label> 
                <input id="dateofbirth" class="form-control" type="date" name="dob" placeholder="Date of Birth" onchange="myFunction()">
            </div>
         </div>

         <div class="col-md-6">
              <div class="form-group">
                  <label>Amount </label> 
                  <input id="amount" class="form-control" type="text" name="amount" placeholder="Amount" onchange="myFunction()"> 
              </div>
          </div>
        
          <div class="col-md-6">
              <div class="form-group">
                  <label>Remarks </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="Remarks" onchange="myFunction()"> 
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>OR # </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="OR #" onchange="myFunction()"> 
              </div>
          </div>
          </form>  
        </div>
        <div role="tabpanel" class="tab-pane fade" id="two">
        <form >
          <div class="col-md-12">
          <div class="form-group">
              <label>Payee</label>
              
              <select id="childtwogender" class="form-control" type="text" name="childgender[]" onchange="gender2(this);">
                <option disabled selected>-Select-</option>
                <option value="John Doe">John Doe</option>
                <option value="Jane Doe">Jane Doe</option>
              </select>
          </div>
              
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Date of Transaction </label> 
                <input id="dateofbirth" class="form-control" type="date" name="dob" placeholder="Date of Birth" onchange="myFunction()">
            </div>
         </div>

         <div class="col-md-6">
              <div class="form-group">
                  <label>Amount </label> 
                  <input id="amount" class="form-control" type="text" name="amount" placeholder="Amount" onchange="myFunction()"> 
              </div>
          </div>
        
          <div class="col-md-6">
              <div class="form-group">
                  <label>Remarks </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="Remarks" onchange="myFunction()"> 
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>OR # </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="OR #" onchange="myFunction()"> 
              </div>
          </div>
          </form> 
          </div>
          <div role="tabpanel" class="tab-pane fade" id="three">
          <form >
          <div class="col-md-12">
          <div class="form-group">
              <label>Payee</label>
              
              <select id="childtwogender" class="form-control" type="text" name="childgender[]" onchange="gender2(this);">
                <option disabled selected>-Select-</option>
                <option value="John Doe">John Doe</option>
                <option value="Jane Doe">Jane Doe</option>
              </select>
          </div>
              
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Date of Transaction </label> 
                <input id="dateofbirth" class="form-control" type="date" name="dob" placeholder="Date of Birth" onchange="myFunction()">
            </div>
         </div>

         <div class="col-md-6">
              <div class="form-group">
                  <label>Amount </label> 
                  <input id="amount" class="form-control" type="text" name="amount" placeholder="Amount" onchange="myFunction()"> 
              </div>
          </div>
        
          <div class="col-md-6">
              <div class="form-group">
                  <label>Remarks </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="Remarks" onchange="myFunction()"> 
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>OR # </label> 
                  <input id="remarks" required="required" class="form-control" type="text" name="remarks" placeholder="OR #" onchange="myFunction()"> 
              </div>
          </div>
          </form> 
        
          </div>
        </div>
      </div>
    </div>
      </div>
      <!-- End Modal-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
