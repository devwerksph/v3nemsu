<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->
 <?php include('connection.php');?>
  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">
         
         <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


          <h2 class="sub-header text-center">Create Faculty Member</h2>
          <div class="container">
    <!-- MultiStep Form -->
    <section class="signup-step-container">
      <div class="container">
          <div class="row"><!--removed d-flex justify-content-center-->
              <div class="col-md-12">
                  <div class="wizard">
                      <div class="wizard-inner">
                         <!-- GUID NOTE -->
                      </div>
      
                      <form role="form" action="process/execute_add_faculty.php" method="post" class="form-style">
                          <div class="tab-content" id="main_form">
                              <div class="tab-pane active" role="tabpanel" id="step1">
                                  <!--<h3 class="text-center">Personal Information</h3><hr>-->
                                  <div class="row">
                                    
                                      
                                   
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>College of </label> 
                                            <select name="college" id="college" class="form-control">
                                              <option hidden checked>--Select--</option>
                                                                                        <?php  
                                                            $c1 = "SELECT * FROM `college_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["college_code"];?>">
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
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Department </label> 
                                       <!--  <input type="text" class="form-control" name="department" id="department"> -->
                                        <select  name="department" id="department" class="form-control">
                                            <option hidden checked>--Select--</option>
                                                     <?php  
                                                            $c1 = "SELECT * FROM `department_list` WHERE `status`='Active' ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  data-name="<?php echo $row["dept_code"];?>"  value="<?php echo $row["dept_code"].','.$row["department_name"];?>">
                                                                        <?php echo $row['department_name'];?>
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
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Major </label> 
                                        <input type="text" class="form-control" name="major" id="major">
                                        
                                    </div>
                                    </div>
                                      <!-- <div class="col-md-4">
                                        <div class="form-group">
                                          
                                            <label>College Level </label> 
                                            <select class="form-control" name="college-level">
                                                <option hidden checked>Select Level</option> 
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4th Year</option>
                                                <option value="5">5th Year</option>
                                              </select>
                                        
                                        </div>
                                        </div> -->
                                        <!-- <div class="col-md-2">
                                          <div class="form-group">
                                          
                                            <label>Semester </label> 
                                            
                                              <?php  
                                                            $c1 = "SELECT * FROM `semester_list` WHERE `upd`=1 ";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                   <input type="text"  class="form-control" name="select-sememster" value="<?php echo $row['sem_desc'];  ?>" readonly>
                                                                   
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "<input type='text' name='select-sememster' value='<?php echo Not Set;?>' >";
                                                                }
                                                    ?>
                                        
                                        </div>
                                        </div> -->
                                        <!-- <div class="col-md-2">
                                          <div class="form-group">
                                              <label>School Year </label> 
                                               <select class="form-control" name="school-year">
                                                 <option hidden checked>--Select--</option>
                                                                                        
                                                <?php  
                                                            $c1 = "SELECT * FROM `yrschool_list` WHERE `status`='Enabled' ORDER BY  ctrlinc DESC";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option  value="<?php echo $row['ctrlinc'].",".$row['yrschool_desc']; ?>">
                                                                      <?php echo $row['yrschool_desc'];?>
                                                                    </option>
                                                                   
                                                                   <?php
                                                                }
                                                            } else {
                                                            echo "0 results";
                                                                }
                                                    ?> 
                                                  </select>
                                          </div>
                                        </div> -->
                                        
                                    
                                    <div class="col-md-12"><hr>
                                      
                                      

                                      
                                    
                                    </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>First Name </label> 
                                              <input id="firstname" class="form-control user_change" data-name="data-firstname" type="text" name="firstname" placeholder="First Name"> 
                                          </div>
                                          
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Middle Name </label> 
                                              <input class="form-control" type="text" name="middlename" placeholder="Middle Name"> 
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Family Name </label> 
                                              <input class="form-control" type="text" name="lastname" placeholder="Family Name"> 
                                          </div>
                                      </div>
                                      
                                      <div class="col-md-1">
                                          <div class="form-group">
                                              <label>Suffix </label> 
                                              <input class="form-control" type="text" name="suffix" placeholder="Suffix"> 
                                          </div>
                                      </div>

                                       <div class="col-md-2">
                                          <div class="form-group">
                                              <label>Contact </label> 
                                              <input class="form-control" type="text" name="contact" placeholder="0"> 
                                          </div>
                                      </div>


                                   <div class="col-md-12"><hr></div>
                                   <!-- <div class="col-md-12"> 
                                   <div class="input_fields_wrap">
                                        <button class="btn btn-primary add_field_button">Add Faculty Load</button><br/><br/>
                                    </div>
                                    </div>  -->                           
                                 
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    //country selection
    $("#country").change(function(){
      var cid = $("#country").val();
      //alert(cid);
      $.ajax({
        url: 'select.php',
        method: 'post',
        data: 'cid='+cid
      }).done(function(countries){
        //console.log(countries);
        countries = JSON.parse(countries);
        //console.log(countries);
        $('#city').empty(); //empty dropdown to select new country
        $('#city').append('<option disabled="" selected="">Select City</option>'); //add default option after empty full option list.
        countries.forEach(function(country){
          //console.log(country.cityName);
          $('#city').append('<option value="'+country.cityId+'" id="'+country.cityId+'">'+ country.cityName +'</option>');
        })
      })
    });


    //City Selection
    $("#city").change(function(){
      var cityId = $("#city").val();
      $.ajax({
        url: 'select.php',
        method: 'post',
        data: 'ctId='+cityId
      }).done(function(districts){
        //console.log(cities);
        districts = JSON.parse(districts);
        $('#district').empty();
        $('#district').append('<option disabled="" selected="">Select District</option>');
        districts.forEach(function(district){
          $('#district').append('<option value="'+district.districtId+'" id="'+district.districtId+'">'+district.districtName+'</option>');
        })
      })

    });

  });
</script>
<script type="text/javascript">


  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div style="margin-bottom:30px;" class="row" id="remove-div"><div class="col-md-4"><label>Section</label><input class="form-control" type="text" name="section" placeholder="Section" readonly/></div><div class="col-md-4"><label>Subject Code</label><input class="form-control" type="text" name="subject-code" placeholder="Subject Code" readonly/></div><div style="margin-bottom:10px;" class="col-md-4"><label>Subject Title</label><select class="form-control" name="subject-title"><option hidden checked>Select Subject</option> <option>Construction Method & Project Mgt.</option> </select></div><div class="col-md-3"><label>Time (From)</label><input class="form-control" type="time" name="select-in"></div><div class="col-md-3"><label>Time (To)</label><input class="form-control" type="time" name="select-out"> </div><div class="col-md-3"><label>Day</label> <input class="form-control" type="number" name="day" placeholder="Day"></div><div class="col-md-3"><label>Units</label><input class="form-control" type="text" name="units" placeholder="Units"></div><div class="col-md-3 remove_field "><a style="margin-top:25px;" href="#" class="btn btn-danger pull-left">Remove</a></div></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('#remove-div').remove(); x--;
    })
});
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $("#college").change(function () {
            if ($(this).data('options') == undefined) {
                $(this).data('options', $('#course option').clone());
            }
            var id = $(this).val();
            if (id == "all") {
                var options = $(this).data('options');
                $('#course').html(options);
            }
            else {
                var options = $(this).data('options').filter('[data-name=' + id + ']');
                $('#course').html(options);
            }
        });
</script>
  <?php include 'footer.php'; ?>
  
  </body>
</html>