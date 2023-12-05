<?php session_start();?>
 
<link rel="stylesheet" href="../css/pop-up.css">

<?php
include('../connection.php');

if(isset($_POST['btn_login'])){

$uname = $_POST['username'];
$pass=$_POST['password'];

 $sql = "SELECT * FROM user_credential WHERE USER_NAME='".$uname."' AND USER_PW='".$pass."' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);

   if($count==1){
    $_SESSION["id"] = 1;
    $_SESSION["uname"] = $row['USER_NAME'];
    {?>

              <div class="popup popup--icon -success js_success-popup popup--visible">
              <div class="popup__background"></div>
              <div class="popup__content">
                <h3 class="popup__content__title">
                  Successfully 
                </h3>
                <p>Welcome to University Integrated System.</p>
                <p>
                 <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
                 <?php echo "<script>setTimeout(\"location.href = '../index.php';\",2500);</script>"; ?>
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
                <p>Invalid Username or Password</p>
                <p>
                  <a href="../login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
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
