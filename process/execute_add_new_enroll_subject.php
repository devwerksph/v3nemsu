<?php session_start();?>
 <?php date_default_timezone_set('Asia/Manila'); ?>
<?php //include('head.php');?>

<link rel="stylesheet" href="../css/pop-up.css">

<?php
include('../connection.php');

$today = date("Y-m-d"); 

if(isset($_POST['submit_in'])){


$query = "SELECT max(sino) as si FROM accounting_collection_trn ORDER BY sino DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['si'];
if(empty($lastid))
{
    $number = "B-00001";
}
else
{
    $idd = str_replace("B-", "", $lastid);
    $id = str_pad($idd + 1, 5, 0, STR_PAD_LEFT);
    $number = 'B-'.$id;
}



$student_id= $_POST["student_id"];
$rate= $_POST["rate"];
$miscellaneous= $_POST["miscellaneous"];
$totalDue= $_POST["totalDue"];
$totalUNITs= $_POST["totalUNITs"];

//Subject List
      foreach($_POST["subj_code"] as $key => $value){
         $subj_section = $_POST["subj_section"][$key];
         $subj_desc = $_POST["subj_desc"][$key];
         $subj_code = $_POST["subj_code"][$key];
         $subj_unit = $_POST["subj_unit"][$key];
         $semester = $_POST["semester"][$key];
         $sy = $_POST["sy"][$key];

          $insert = "INSERT INTO student_enrolled(student_id,subject_code,subject_desc,subject_unit,sem,sy)VALUES('$student_id','$subj_section',
                        '$subj_desc','$subj_unit','$semester','$sy')";
         // $succ = mysqli_query($conn ,$insert);
         $conn->query($insert) === TRUE; 
       }




//$score_finale=$view_score_eng + $view_score_math + $view_score_sci + $view_score_abs;

//$hps_finale=$view_hps_eng + $view_hps_math + $view_hps_sci + $view_hps_abs;


     $sql1 = "INSERT INTO `accounting_collection_trn`(`tdate`,`student_id`,`sino`,`units`,`rates`,`misc`,`debit`) VALUES ('$today','$student_id','$number','$totalUNITs','$rate','$miscellaneous','$totalDue')";
     $sql2="UPDATE accounting_collection_mst SET prev_amt=bal_amt,current_amt=current_amt+'$totalDue',bal_amt=bal_amt+'$totalDue' WHERE student_id='$student_id'; ";

       $sql3="UPDATE student_course_scheduling SET upd='1' WHERE student_id='$student_id'; ";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE ){

    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Save.
                </h3>
                <p>You have created new debited account record </p>
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
                  <a href="../other-rates.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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
