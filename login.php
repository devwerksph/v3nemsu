<?php 

session_start();
  // Redirect the user to login page if he is not logged in.
  if(isset($_SESSION['id'])){
    header('Location: login.php');
    //exit();
  }

?>
<?php include 'header.php'; ?>
  
  <body>
  
  <?php include 'head.php'; ?>

   <div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="process/execute_login.php" method="post">
        <h2 class="form-signin-heading"><img src="img/north-eastern-mindanao-state-university-header-logo.png" class="img-fluid img-responsive center-block img-logo"></h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus><br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button name="btn_login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div> <!--md6-->
   
</div><!--container-->

<br><br>
   <?php include 'footer.php'; ?>

  </body>
</html>
