<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Admission <i class="bi bi-arrow-right"></i> List of Student</span>  <a class="default-btn pull-right text-strong" href="student-admission.php"> + Create New</a>
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
            <th>IDNO</th>    
            <th>STUDENT NAME</th>  
            <th>COURSE</th>  
            <th>SEMESTER</th>
            <th>SCHOOL YR</th>
            <th width="100">ACTION</th>    
          </tr>  
        </thead>  
        <tbody>  

          <?php 
            include 'connection.php';
            $sql = "SELECT * FROM `student_personal_info` WHERE `status`='Active'; ";
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()) { 
            ?>

          <tr>  
            <td><?php echo str_pad($i,7,'0',STR_PAD_LEFT); ?></td>  
            <td><?php echo $row['student_id']; ?></td>  
            <td><?php echo $row['student_lname'].", ".$row['student_fname']." ".$row['student_mname']." ".$row['student_suffix']; ?></td>  
            <td><?php echo $row['student_course']; ?></td>
            <td><?php echo "FIRST"; ?></td> 
            <td><?php echo "2023-2024";  ?></td>   
            <td>
             <center>
              <!-- <a href="#" class=" btn-info " style="padding:5px ">Go Enroll</a> -->
              <a data-toggle="modal" data-target="#editModal" class="btn-warning " style="padding:5px; cursor:pointer;"><i class="bi bi-pencil-square"></i></a> &nbsp;
              <a href="process/execute_del_admission.php?id=<?php echo $row['ctrlinc'] ?>" class=" btn-danger "  style="padding:5px "><i class="bi bi-trash"></i></a>
              </center>
            </td>  
          </tr>  
         

           <?php  $i++;}  ?>  
        </tbody> 

              </table>
            </div>
         </div>

<!-- Edit Entry Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="editModalLabel">Edit Entry</h4>
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


   
      <?php include 'footer.php'; ?>
  </body>
</html>
