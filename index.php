<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
<body>

<?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

        <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h2 class="sub-header text-center">Overview</h2>
          <div class="container">
            <br/>
            <div class="row">
                      <?php 
                        include 'connection.php';
                        $sql = "SELECT count(*) as enroll_overall FROM `student_course_scheduling` WHERE `upd`=1 ;";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) { 
                          $overall=$row['enroll_overall'];
                        }
                        ?>

              <div class="col-md-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <i class="bi bi-people pull-left"></i><h3 class="panel-title text-center">Total Enrolled Students <a href="#"> <span class="badge pull-right"><?php echo $overall; ?></span></a></h3>
                  </div>
                  <div style="height:250px;" class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                      <tr>
                        <th>Course</th>
                        <th>Total Enrollees</th>
                      </tr>

                      <?php 
                        include 'connection.php';
                        $sql = "SELECT count(*) as enroll_count,student_course FROM `student_course_scheduling` WHERE `upd`=1 GROUP BY student_course; ";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { 
                        ?>

                      <tr>
                        <td><?php echo $row['student_course']; ?></td>
                        <td><?php echo $row['enroll_count']; ?></td>
                      </tr>
                      <?php } ?>
                      </table>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="student-admission.php" class="btn btn-success">Admission <i class="bi bi-person-plus"></i> </a>
                     <a href="dashboard-course-sched.php" class="btn btn-primary pull-right">More Info <i class="bi bi-arrow-right"></i> </a>
               
                  </div>
                </div>
              </div>
              <!-- EXAMINEE -->
               <?php 
                        include 'connection.php';
                        $sql = "SELECT count(*) as examinee_overall FROM `student_exam_result` ; ";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) { 
                          $overall_Examinee=$row['examinee_overall'];
                        }
                        ?>
              <div class="col-md-4">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <i class="bi bi-pen pull-left"></i><h3 class="panel-title text-center"> Total Examinees <a href="#"><span class="badge pull-right"><?php echo $overall_Examinee; ?></span></a></h3>
                  </div>
                  <div style="height:250px;" class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                      <tr>
                        <th>Course</th>
                        <th>Total Examinees</th>
                      </tr>
                      
                      <?php 
                        include 'connection.php';
                        $sql = "SELECT count(*) as examinee_count,desire_course FROM `student_exam_result` GROUP BY desire_course_code; ";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { 
                        ?>

                      <tr>
                        <td><?php echo $row['desire_course']; ?></td>
                        <td><?php echo $row['examinee_count']; ?></td>
                      </tr>
                      <?php } ?>
                      </table>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="exam-result.php" class="btn btn-success">Add Examinee <i class="bi bi-person-plus"></i> </a>
                     <a href="dashboard-exam.php" class="btn btn-primary pull-right">More Info <i class="bi bi-arrow-right"></i> </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <i class="bi bi-journal-text pull-left"></i><h3 class="panel-title text-center">Summary Of Enrollment</h3>
                  </div>
                  <div style="height:305px;" class="panel-body">
                    <p>Regular Students Enrolled <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Incoming Transferees <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Outgoing Transferees  <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Course Shifters  <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Returning Students  <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Drop-out Students  <a href="#"><span class="badge pull-right">99+</span></a></p>
                    <p>Graduates  <a href="#"><span class="badge pull-right">99+</span></a></p>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Announcement</a></h3>
                  </div>
                  <div class="panel-body">
                      
                      

                      <ul class="list-group">
                        <li class="list-group-item">
                          <p>
                            <a data-toggle="collapse" href="#announce1" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Dapibus ac facilisis in
                            </a>
                          </p>
                          <div class="collapse" id="announce1">
                            <div class="card card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <p>
                            <a data-toggle="collapse" href="#announce2" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Morbi leo risus
                            </a>
                          </p>
                          <div class="collapse" id="announce2">
                            <div class="card card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                        </li>
                      </ul>


                  </div>
                </div>
              </div>
            </div>
          
            
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                              
                  </div>
              </div>
          </div>
      </div>
  </section>

 
    <!--end multiStep-->



   <?php include 'footer.php'; ?>
  </body>
</html>
