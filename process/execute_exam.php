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
$initials = strtoupper(substr($_POST['firstname'],0,1) . substr($_POST['lastname'],0,1));
 $lastTwoDigitsOfYear = substr($_POST['date'], -2);
 $randomDigits = str_pad(mt_rand(0,999),3, '0', STR_PAD_LEFT);
 $studentNumber = $initials . $lastTwoDigitsOfYear . $randomDigits;
 return $studentNumber;
}

$studentNumber = generateStudentNumber($_POST['firstname'], $_POST['lastname'], $_POST['date']);
//echo "Generated Student Number: " . $studentNumber;


if(isset($_POST['btn_login'])){
$unqctr=generateRandomString(35);
$student_id=date('yHs')."-".$studentNumber;
$view_firstname=$_POST['firstname'];
$view_lastname=$_POST['lastname'];
$view_middlename=$_POST['middlename'];
$view_suffix=$_POST['suffix'];
$view_age=$_POST['age'];
$view_school=$_POST['school'];

$view_desire_course=explode(",",$_POST['desire_course'] );

$date_exam = date("Y-m-d", strtotime($_POST['date']));

$view_score_eng=$_POST['score-eng'];
$view_score_math=$_POST['score-math'];
$view_score_sci=$_POST['score-sci'];
$view_score_abs=$_POST['score-abs'];

$view_hps_eng=$_POST['hps-eng'];
$view_hps_math=$_POST['hps-math'];
$view_hps_sci=$_POST['hps-sci'];
$view_hps_abs=$_POST['hps-abs'];



$score_finale=$view_score_eng + $view_score_math + $view_score_sci + $view_score_abs;

$hps_finale=$view_hps_eng + $view_hps_math + $view_hps_sci + $view_hps_abs;


 $sql = "INSERT INTO `student_exam_result`( `unqctr`,`student_lname`,`student_fname`,`student_mname`,`student_suffix`,`student_age`,`desire_course_code`,`desire_course`,`student_school`,`exam_date`,`hps_eng`,`hps_mat`,`hps_sci`,`hps_abs`,`htps_total`,`exam_english_r`,`exam_math_r`,`exam_science_r`,`exam_abstract_r`,`exam_total`) VALUES ('$unqctr', '$view_lastname','$view_firstname','$view_middlename','$view_suffix','$view_age','$view_desire_course[0]','$view_desire_course[1]','$view_school','$date_exam','$view_hps_eng','$view_hps_math','$view_hps_sci','$view_hps_abs','$hps_finale','$view_score_eng','$view_score_math','$view_score_sci','$view_score_abs','$score_finale')";

    if ($conn->query($sql) === TRUE){

    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Save.
                </h3>a
                <p>You have created new Exam Record </p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-exam.php';\",2500);</script>"; ?>
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
                  <a href="../exam-result.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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
