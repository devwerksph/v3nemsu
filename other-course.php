<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
 <?php include('connection.php');?>

  <body>

   <?php include 'head.php'; ?><!-- Head Nav -->

     

    <div class="container-fluid">
      <div class="row">
         <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


          <h2 class="sub-header text-center">New Course Form</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">

                      </div>
      
                      <form role="form" action="process/execute_add_course.php" method="post" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <!--<h3 class="text-center">Personal Information</h3><hr>-->
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>College of </label> 

                                            <select  name="college_desc" class="form-control" id="college_desc">
                                              <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `college_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row['college_code'].",".$row['college_desc']; ?>">
                                                                        <?php echo $row['college_desc'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                    ?>

                                            </select>
                                        </div>

                                      </div>


                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Course  </label> 
                                             <input class="form-control" type="text" name="course_desc">
                                        </div>
                                        
                                      </div>
                              
                                  
                                  </div>
                                  <ul class="list-inline pull-right">
                                    <li><button type="submit" name="submit_in" class="default-btn next-step">Submit</button></li>
                                </ul>
                              </div>    
                          </div>
                      
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

 
    <!--end multiStep-->


  <?php include 'footer.php'; ?>
     <!--version 3-->
  </body>
</html>
