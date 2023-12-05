<?php session_start();?>
 <?php date_default_timezone_set('Asia/Manila'); ?>
<?php  ?>

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
$today = date("Y-m-d");


$initials = strtoupper(substr('NEMSU',0,1) . substr('RETRO',0,1));
 $lastTwoDigitsOfYear = substr($today, -2);
 $randomDigits = str_pad(mt_rand(0,999),3, '0', STR_PAD_LEFT);
 $studentNumber = $initials . $lastTwoDigitsOfYear . $randomDigits;
 return $studentNumber;
}


$studentNumber = generateStudentNumber('NEMSU','RETRO',date("Y-m-d"));
//echo "Generated Student Number: " . $studentNumber;


if(isset($_POST['btn_login'])){

if (empty($_POST['optradiostatus'])){ ?>

<div class="popup popup--icon -error js_error-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Error  
                </h3>
                <p>Something problem with your entries.</p>
                <p>
                  <a href="../course-scheduling.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
                </p>
              </div>
            </div>

<?php  
} else{


$unqctr=date('ymd').generateRandomString(35);
$student_id=date('yHs')."-".$studentNumber; 
// $view_firstname=$_POST['firstname'];
// $view_lastname=$_POST['lastname'];
// $view_middlename=$_POST['middlename'];
//$view_suffix=$_POST['suffix'];

$view_gender=$_POST['gender'];
$view_adress=$_POST['address'];

//$date_recorded = date("Y-m-d", Now());

$view_college=explode(",",$_POST['college_code'] );
$view_course=explode(",",$_POST['course_desc'] );
$view_school_yr=explode(",",$_POST['school-year'] );
$view_student_name=explode(",",$_POST['student_name'] );

//$view_college=$_POST['college'];
//$view_course=$_POST['course'];
//$view_school_yr=$_POST['school-year'];
$view_college_level=$_POST['college-level'];
$view_semester=$_POST['select-semester'];

$view_employer=$_POST['employer'];
$view_scholarship=$_POST['scholarship'];
$view_status=$_POST['optradiostatus'];
$view_age=$_POST['age'];



//$score_finale=$view_score_eng + $view_score_math + $view_score_sci + $view_score_abs;

//$hps_finale=$view_hps_eng + $view_hps_math + $view_hps_sci + $view_hps_abs;


 $sql1 = "INSERT INTO `student_course_scheduling`( `unqctr`,`student_id`,`tdate`,`student_lname`,`student_fname`,`student_mname`,`student_suffix`,`student_address`,`student_employer`,`student_gender`,`student_scholarship`,`student_college`,`student_course`,`student_college_level`,`student_semester`,`student_school_yr`,`status`,`student_age`) VALUES ('$unqctr','$student_id',Now(), '$view_student_name[1]','$view_student_name[2]','$view_student_name[3]','$view_student_name[4]','$view_adress','$view_employer','$view_gender','$view_scholarship','$view_college[1]','$view_course[1]','$view_college_level','$view_semester','$view_school_yr[1]','$view_status','$view_age')";

$sql2 = "INSERT INTO `accounting_collection_mst`( `student_id`) VALUES ('$student_id')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE){

    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Save.
                </h3>
                <p>You have created new Pre Registration Record </p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-course-sched.php';\",2500);</script>"; ?>
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
                  <a href="../course-scheduling.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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


 }

?>
