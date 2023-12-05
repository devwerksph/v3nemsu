<link rel="stylesheet" href="../css/pop-up.css">

<?php
// require_once ("../../include/initialize.php");
// 	 if (!isset($_SESSION['ACCOUNT_ID'])){
//       redirect(web_root."admin/index.php");
//      }

include('../connection.php');



$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

if(isset($_GET['id'])){


if ($_GET['id']==00000001){

$sql = "UPDATE  `semester_list` SET status='Enabled',upd=1 WHERE `ctrlinc`='".$_GET['id']."' " ;
$sql1 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000002 " ;
$sql2 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000003 " ;

}elseif($_GET['id']==00000002) {

$sql = "UPDATE  `semester_list` SET status='Enabled',upd=1 WHERE `ctrlinc`='".$_GET['id']."' " ;
$sql1 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000001 " ;
$sql2 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000003 " ;

}elseif($_GET['id']==00000003) {

$sql = "UPDATE  `semester_list` SET status='Enabled',upd=1 WHERE `ctrlinc`='".$_GET['id']."' " ;
$sql1 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000001 " ;
$sql2 = "UPDATE  `semester_list` SET status='Disabled',upd=0 WHERE `ctrlinc`=00000002 " ;

}


if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE ){

    ?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Set.
                </h3>
                <p>New Semester Set </p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-other-semester.php';\",2500);</script>"; ?>
                </p>
              </div>
             </div>
               <!--   <script>
                 window.location="index.php";
                 </script> -->
<?php
    

}else{ ?>
             <div class="popup popup--icon -error js_error-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Error  
                </h3>
                <p>Something problem with your entries.</p>
                <p>
                  <a href="../other-semester.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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