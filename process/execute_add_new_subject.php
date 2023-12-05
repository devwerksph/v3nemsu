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

// function student_id_auto_create($student_id) {
//     $pattern = '/(\d+)(?!.*\d)+/';
//     return preg_replace_callback($pattern, function($m) { return ++$m[0]; }, $student_id);
// }

function random_strings($length_of_string)
{
 
    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result), 
                       0, $length_of_string);
}

$today = date("Y-m-d"); 

// function generateStudentNumber() {
// $initials = strtoupper(substr($_POST['firstname'],0,1) . substr($_POST['lastname'],0,1));
//  $lastTwoDigitsOfYear = substr($today, -2);
//  $randomDigits = str_pad(mt_rand(0,999),3, '0', STR_PAD_LEFT);
//  $studentNumber = $initials . $lastTwoDigitsOfYear . $randomDigits;
//  return $studentNumber;
// }


//$studentNumber = generateStudentNumber($_POST['firstname'], $_POST['lastname'],$today);
//echo "Generated Student Number: " . $studentNumber;


if(isset($_POST['submit_in'])){
$serverdate=date("Y-m-d H:i:s");
$unqctr=generateRandomString(35);
$code=random_strings(6);

$view_college=explode(",",$_POST['college_code'] );
$view_course=explode(",",$_POST['course_desc'] );
$view_subj_code=explode(",",$_POST['subj_code'] );
$view_schoolYR=explode(",",$_POST['school-year'] );
$view_days=explode(",",$_POST['days'] );
$view_teacher=explode(",",$_POST['teacher'] );


$view_sem=$_POST['select-sememster'];
$view_subject=$_POST['subject_desc'];
$view_level=$_POST['select-level'];
$view_section=$_POST['subj_section'];
$view_in=$_POST['select-in'];
$view_out=$_POST['select-out'];
$view_units=$_POST['units'];


//$date_recorded = date("Y-m-d", Now());



//$score_finale=$view_score_eng + $view_score_math + $view_score_sci + $view_score_abs;

//$hps_finale=$view_hps_eng + $view_hps_math + $view_hps_sci + $view_hps_abs;


 $sql = "INSERT INTO `subject_scheduling`( `unqctr`,`svrdate`,`college_code`,`college_desc`,`course_code`,`course_desc`,`year_level`,`subj_code`,`subj_section`,`subj_desc`,`subj_unit`,`instructor_code`,`instructor_name`,`time_start`,`time_end`,`days_set`,`sem_desc`,`school_yr_code`,`school_yr_desc`) VALUES ('$unqctr','$serverdate', '$view_college[0]','$view_college[1]','$view_course[0]','$view_course[1]','$view_level','$view_subj_code[0]','$view_section','$view_subj_code[1]','$view_units','$view_teacher[0]','$view_teacher[1]','$view_in','$view_out','$view_days[1]','$view_sem','$view_schoolYR[0]','$view_schoolYR[1]')";

    if ($conn->query($sql) === TRUE){

    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Save.
                </h3>
                <p>You have created new Subject Schedule Recorded </p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-subject-encode.php';\",2500);</script>"; ?>
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
                  <a href="../subject-encoding.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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
