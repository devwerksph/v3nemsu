

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NEMSU Management System</a>
        </div>

        <?php 

               if(isset($_SESSION['id'])){

         ?>
        <ul class="nav navbar-nav navbar-right">
           <li><a href="#">|&nbsp;&nbsp;&nbsp;Welcome, <?php echo strtoupper($_SESSION['uname']); ?></a></li>
        </ul>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>-->
            <li><a href="logout.php">Logout <i class="bi bi-box-arrow-right"></i></a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      <?php } ?>
      </div>
</nav>