<?php session_start();?>
 <?php date_default_timezone_set('Asia/Manila'); ?>
<?php //include('head.php');?>

<link rel="stylesheet" href="../css/pop-up.css">

<?php
include('../connection.php');

function generateRandomString($length = 10) {
   $bytes = random_bytes(ceil($length / 2));
   $randomString = substr(bin2hex($bytes), 0, $length);

   return $randomString;
}

function student_id_auto_create($student_id) {
    $pattern = '/(\d+)(?!.*\d)+/';
    return preg_replace_callback($pattern, function($m) { return ++$m[0]; }, $student_id);
}


function generateStudentNumber() {
$initials = strtoupper(substr($_POST['view_firstname'],0,1) . substr($_POST['view_lastname'],0,1));
 $lastTwoDigitsOfYear = substr($_POST['view_dateofbirth'], -2);
 $randomDigits = str_pad(mt_rand(0,999),3, '0', STR_PAD_LEFT);
 $studentNumber = $initials . $lastTwoDigitsOfYear . $randomDigits;
 return $studentNumber;
}

$studentNumber = generateStudentNumber($_POST['view_firstname'], $_POST['view_lastname'], $_POST['view_dateofbirth']);
//echo "Generated Student Number: " . $studentNumber;


if(isset($_POST['btn_login'])){
$unqctr=generateRandomString(35);
$student_id=date('yHs')."-".$studentNumber;
$view_firstname=$_POST['view_firstname'];
$view_lastname=$_POST['view_lastname'];
$view_middlename=$_POST['view_middlename'];
$view_suffix=$_POST['view_suffix'];
$view_course=$_POST['view_course'];
$view_age=$_POST['view_age'];
$view_dateofbirth=$_POST['view_dateofbirth'];
$view_birthplace=$_POST['view_birthplace'];
$view_homeaddress=$_POST['view_homeaddress'];
$view_presentaddress=$_POST['view_presentaddress'];
$view_mycontact=$_POST['view_mycontact'];
$view_myemail=$_POST['view_myemail'];
$view_spouse=$_POST['view_spouse'];
//$view_brotherName=$_POST['view_brotherName'];
// $view_brotherAge=$_POST['view_brotherAge'];
// $view_brotherSex=$_POST['view_brotherSex'];
// $view_sisterName=$_POST['view_sisterName'];
// $view_sisterAge=$_POST['view_sisterAge'];
// $view_sisterSex=$_POST['view_sisterSex'];
$view_nemsureason=$_POST['view_nemsureason'];
$view_living_with=$_POST['view_living_with'];
$view_incasename=$_POST['view_incasename'];
$view_incasecontact=$_POST['view_incasecontact'];


//Subject List
      foreach($_POST["childname"] as $key => $value){
         $childname = $_POST["childname"][$key];
         $childage = $_POST["childage"][$key];
         $childgender = $_POST["childgender"][$key];

          $insert = "INSERT INTO student_personal_info_siblings(student_id,sblings_name,siblings_age,siblings_gender)VALUES('$student_id','$childname',
                        '$childage','$childgender')";
         // $succ = mysqli_query($conn ,$insert);
         $conn->query($insert) === TRUE; 
       }


 $sql1 = "INSERT INTO `student_personal_info`( `unqctr`, `student_id`,`student_lname`,`student_fname`,`student_mname`,`student_suffix`,`student_course`,`student_age`,`student_dob`,`student_pob`,`student_home_add`,`student_present_add`,`student_contact`,`student_email`,`student_spouse`,`student_reasonstudy`,`student_person_living`,`student_incase_name`,`student_incase_contact`) VALUES ('$unqctr', '$student_id', '$view_lastname','$view_firstname','$view_middlename','$view_suffix','$view_course','$view_age','$view_dateofbirth','$view_birthplace','$view_homeaddress','$view_presentaddress','$view_mycontact','$view_myemail','$view_spouse','$view_nemsureason','$view_living_with','$view_incasename','$view_incasecontact')";

    if ($conn->query($sql1) === TRUE ){

    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Save.
                </h3>
                <p>You have created new student admission with ID Number <?php echo $student_id; ?> </p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-admission.php';\",2500);</script>"; ?>
                </p>
              </div>
             </div>
               <!--   <script>
                 window.location="index.php";
                 </script> -->
<?php
    }

}else{ ?>
             <div class="popup popup--icon -error js_error-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Error  
                </h3>
                <p>Something problem with your entries.</p>
                <p>
                  <a href="../student-admission.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
                </p>
              </div>
            </div>
       <!--  <script> 
       // alert("Invalid email or Password!");
        window.location="login.php";
        </script> -->
<?php
        //// $message = "Invalid email or Password!";
    }
    
    }
?>
