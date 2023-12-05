<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->
<style>
    .before::before {
   content: none !important;
}
</style>
    <div id="printableArea" class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <div class="form-style"> <!-- this section for container cover -->
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

            <div class="table-responsive">
              <div id="certificate">
            <h2 class="sub-header text-center">Enrollment Fees</h2>
            
            <table>
              <tr>
                <td style="  width:65%; "><h4>Student Information</h4></td>
                <td > <div class="pull-right"></div><h4>Date: <?php echo date('Y-m-d'); ?></h4></td>
              </tr>
            </table>
            <br/><hr>
            <form action="process/execute_add_new_enroll_subject.php" method="post">
              <table >
                <tr>
                  <input type="hidden" name="student_id" value="<?php echo $student_id;  ?>">
                  <td style="  width:65%; " ><p><strong>Name:</strong> <?php echo $student_name; ?></p></td>
                  <td ><p><strong>Course/Year:</strong> <?php echo $student_course."-".$student_level; ?> </p></td>
                </tr>
                <tr>
                  <td style="  width:65%; " ><p><strong>Address:</strong> <?php echo $student_address; ?></p></td>
                  <td><p><strong>Semester:</strong> <?php echo $student_semester; ?></p></td>
                </tr>
                 <tr>
                  <td style="  width:65%; " ><p><strong>Contact No.:</strong> <?php echo $student_contact; ?></p></td>
                  <td><p><strong>Year:</strong> <?php echo $student_level; ?></p></td>
                </tr>
              </table>
       
                <br/>
                <table  class="table table-striped table-bordered">
                <tr>   
                <th width="150">ID</th>
                <th width="300">Subject</th>
                <th>Description</th>
                <th width="80">Unit</th>
                <th width="150">Semester</th>
                <th width="150">SY</th>
                </tr>

                <?php 


                        include 'connection.php';
                        $sql = "SELECT *   FROM subject_scheduling  WHERE course_desc='".$student_course."' AND year_level='".$student_level."'; ";
                        $result = $conn->query($sql);
                        $i=1;
                         $rowcount = mysqli_num_rows( $result );

                        if ($rowcount>0) {
                          # code...
                        while($row = $result->fetch_assoc()) { 
                          //$totalUNIT=$row['totalUNITS'];
                ?>


                <tr>   
                <td><input style="width: 30%; border:none;" type="text" name="subj_code[]" value="<?php echo $row['subj_code']; ?>"    ></td>
                <td><input style="width: 100%; border:none;"type="text" name="subj_section[]" value="<?php echo $row['subj_section']; ?>"></td>
                <td><input style="width: 100%; border:none;" type="text" name="subj_desc[]" value="<?php echo $row['subj_desc']; ?>"></td>
                <td ><input style="width: 100%; border:none; text-align: center;" type="text" name="subj_unit[]" value="<?php echo $row['subj_unit']; ?>"></td>
                <td ><input style="width: 30%; border:none; " type="text" name="semester[]" value="<?php echo $row['sem_desc']; ?>"></td>
                <td ><input style="width: 100%; border:none; text-align: center;" type="text" name="sy[]" value="<?php echo $row['school_yr_desc']; ?>"></td>
                </tr>

                <?php }}else{ ?>
                  <tr><td colspan="6"><h4 class="text-center" style="color:red;" >No transactions has been made.</h4></td></tr>
                 <?php } ?>  
                </table>


                <div class="col-md-6">
                    <p><strong>Tuition:</strong> 3 x ₱209 = ₱627</p>
                    <div>
                        <p style="text-decoration:underline;"><strong>Description: This is the formula off amount per unit and its total.</strong></p>
                    </div>
                </div>
                    <?php 


                      include 'connection.php';
                         $sql = "SELECT * FROM units_rate  WHERE course_name='".$student_course."' ; ";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { 
                          $statuz=$row["status"];
                          $rate=$row["rate"];
                         }

                         $sql = "SELECT * FROM miscellaneous_rate  WHERE course_name='".$student_course."' ; ";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { 
                          $statuz_misc=$row["status"];
                          $rate_misc=$row["rate"];
                         }
                ?>
               
                <div class="col-md-6">
                        <div>
                            <?php 
                              include 'connection.php';
                               $sql = "SELECT sum(subj_unit) as totalUNIT   FROM subject_scheduling  WHERE course_desc='".$student_course."' AND year_level='".$student_level."'; ";
                              $result = $conn->query($sql);
                              $i=1;
                              while($row = $result->fetch_assoc()) { 
                               $totalUNIT=$row["totalUNIT"];
                              }
                             ?>

                             <p><strong>Total Units:</strong> <input style=" border:none;" type="text" name="totalUNITs" value="<?php echo number_format($totalUNIT,2); ?>"> </p> 

                           <?php if (!empty($statuz)=='Active') { ?>
                            <p><strong>Tuition Fees:</strong><input style=" border:none;" type="text" name="rate" value="<?php echo number_format($rate,2); ?>"> </p>  
                            <?php }else{ ?>
                              <p><strong>Tuition Fees:</strong><input style=" border:none;" type="text" name="rate" value="0.00"></p>
                            <?php } ?>

                            <?php if (!empty($statuz_misc)=='Active') { ?>
                            <p><strong>Miscellaneous Fees:</strong> <input style=" border:none;" type="text" name="miscellaneous" value="<?php echo number_format($rate_misc,2); ?>">  </p>  
                            <?php }else{ ?>
                              <p><strong>Miscellaneous Fees:</strong> <input style=" border:none;" type="text" name="miscellaneous" value="0.00"></p>
                            <?php } ?>

                            <?php if (!empty($rate)) { ?>
                               <p><strong>Total Semester:</strong><input style=" border:none;" type="text" name="" value=" <?php echo number_format($rate * $totalUNIT,2); ?>"><input type="hidden" name="totalDue" value="<?php echo ($rate * $totalUNIT); ?>">   </p>
                            <?php }else{ ?>
                              <p><strong>Total Semester:</strong> <input style=" border:none;" type="text" name="" value=" <?php echo number_format(0.00 * $totalUNIT,2); ?>"><input type="hidden" name="totalDue" value="<?php echo (0 * $totalUNIT); ?>"></p>
                            <?php } ?>
                           
                        </div>
                </div>
                 </div>
               <!--  <input class="btn btn-primary pull-right" type="button"  onclick="printCertificate()"  value="Print Document" /> -->
               <input type="submit" name="submit_in" class="btn btn-primary pull-right"  value="Submit">
            </div>
            </form>
         </div>
      </div>



      <?php include 'footer.php'; ?>
  </body>
</html>
