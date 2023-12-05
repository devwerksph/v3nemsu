<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
<?php date_default_timezone_set("Asia/Manila"); ?>
  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Student Statement of Accounts <i class="bi bi-arrow-right"></i> List of Payments</span>  <a class="default-btn pull-right " href="#"> </a>
          <div class="sub-header text-center"> </div>
          <!-- <h2 class="sub-header text-center">Admission List</h2> -->
          <div id="print-content" class=""> <!-- this section for container cover -->
         
          <br>
           
            <br>
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
          <hr>
          <h3 class="text-center">Statement of Accounts</h3>
          <hr>
          <br>
          <div class="table-responsive" style="font-size:12px ;">
          <table  class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>  
            <th width="80">REF</th>
            <th width="150">DATE</th>    
           <!--  <th width="130">STUDENT ID</th>   -->
            <th width="150">BILL REF</th>  
            <th width="80">UNITS</th> 
            <th width="100">RATES</th>
            <th width="80">MISC</th> 
            <th >PARTICULAR</th>
            <th width="80">DEBIT</th>
            <th width="80">CREDIT</th>        
           <!--  <th width="80">ACTION</th>   -->    
          </tr>  
        </thead>  
        <tbody>  

          <?php 
          if(isset($_GET['id'])){
            include 'connection.php';
            $sql = "SELECT * FROM `accounting_collection_trn` WHERE `student_id`='".$_GET['id']."'; ";
            $result = $conn->query($sql);
            $i=1;
            $rowcount = mysqli_num_rows( $result );

            if ($rowcount>0) {
            while($row = $result->fetch_assoc()) { 
              $date=date_create($row['tdate']);
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo date_format($date,"d/M/Y"); ?></td>
            <td><?php echo $row['sino']; ?></td>  
            <td><?php echo $row['units']; ?></td>
            <td><?php echo number_format($row['rates'],0);  ?></td>
            <td><?php echo $row['misc'];  ?></td>
            <td><?php echo $row['particular'];  ?></td>
            <td style="text-align: right;"><?php echo number_format($row['debit'],2);  ?></td> 
            <td style="text-align: right;"><?php echo number_format($row['credit'],2);  ?></td>              
            <!-- <td>
              <center><a href="#" class=" btn-warning " style="padding:5px "><span class="bi bi-pencil-fill"></span></a>
                <a href="#" class=" btn-danger "  style="padding:5px "><span class="bi bi-trash-fill"></span></a>
              </center>
            </td> -->  
          </tr>  
         

           <?php  $i++;}}else{   ?> 
             <tr><td colspan="7"><h4 class="text-center" style="color:red;" >No transactions has been made.</h4></td></tr>
          <?php }} ?>   
        </tbody> 
        <?php 
          if(isset($_GET['id'])){
            include 'connection.php';
            $sql = "SELECT sum(debit) as tdebit,sum(credit) as tcredit  FROM `accounting_collection_trn` WHERE `student_id`='".$_GET['id']."'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
                $T_DEBIT=$row['tdebit'];
                $T_CREDIT=$row['tcredit'];
            }
          }
            ?>
        <tfoot>
          <tr>
            <th colspan="7" style="text-align: right;">TOTALS DEBIT</th>
            <th colspan="2" style="text-align: right;"><?php echo number_format($T_DEBIT,2); ?></th>
          </tr>
          <tr>
            <th colspan="7" style="text-align: right;">TOTALS CREDIT</th>
            <th colspan="2" style="text-align: right;"><?php echo number_format($T_CREDIT,2); ?></th>
          </tr>
        </tfoot>

              </table>
            </div>
         </div>
         <input class="btn btn-primary pull-right" type="button" onclick="printDiv('print-content')" value="Print SOA"/> 
      </div>
      <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>

      <?php include 'footer.php'; ?>
  </body>
</html>
