<link rel="stylesheet" href="../css/pop-up.css">

<?php
// require_once ("../../include/initialize.php");
//   if (!isset($_SESSION['ACCOUNT_ID'])){
//       redirect(web_root."admin/index.php");
//      }

include('../connection.php');



$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';


$sql = "DELETE  FROM `subject_list`  WHERE `ctrlinc`='".$_GET['id']."' " ;
if ($conn->query($sql) === TRUE  ){

    ?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully Removed.
                </h3>
               <!--  <p>New Semester Set </p> -->
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../dashboard-other-unit-rates.php';\",2500);</script>"; ?>
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
                  <a href="../dashboard-other-unit-rates.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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
    

  

    


   
?>