<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('./', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");
?>


<div id="sidebarcollapse" class="col-sm-3 col-md-2 sidebar">
        <br/>
    <a href="index.php"><img src="img/north-eastern-mindanao-state-university-header-logo.png" class="img-fluid img-responsive center-block img-logo"></a><br/>
    <div class="nav nav-sidebar" id="sidebar">
    <ul class="list-unstyled components">
      <li class="<?php if ($first_part=="index") {echo "active"; } else  {echo "noactive";}?>">
        <a href="index.php"><i class="bi bi-house bi-margin"></i>Overview</a>
      </li>
      <li>
     <li  class="<?php if ($first_part=="admission") {echo "active"; } else  {echo "noactive";}?>"><a data-parent="#sidecollapse" href="#pageSubmenuAdmission" data-toggle="collapse" aria-expanded="false" aria-controls="pageSubmenuAdmission"><i class="bi bi-person-plus bi-margin"></i>Admission</a></li>
           <ul style="font-weight:400;" class="<?php if ($first_part == ("dashboard-admission" && "dashboard-course-sched")) {echo "list-unstyled collapse in"; } else  {echo "collapse list-unstyled";}?>" id="pageSubmenuAdmission">
             <li class="<?php if ($first_part=="dashboard-admission") {echo "active"; } else  {echo "noactive";}?>"><a id="dashboard-admission" href="dashboard-admission.php"><i class="bi bi-person-plus bi-margin"></i>Pre Admission</a></li>
            <li class="<?php if ($first_part=="dashboard-course-sched") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-course-sched.php"><i class="bi bi-person-plus bi-margin"></i>Enrollees List</a></li>
           
          </ul>

          <li  class="<?php if ($first_part=="reports") {echo "active"; } else  {echo "noactive";}?>"><a data-parent="#sidecollapse" href="#pageSubmenuRegistrar" data-toggle="collapse" aria-expanded="false" aria-controls="pageSubmenuRegistrar"><i class="bi bi-file-earmark-ruled bi-margin"></i></i>Registrar</a></li>
           <ul style="font-weight:400;" class="<?php if ($first_part=="") {echo "list-unstyled collapse in"; } else  {echo "collapse list-unstyled";}?>" id="pageSubmenuRegistrar">
           <li class="<?php if ($first_part=="dashboard-exam") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-exam.php"><i class="bi bi-file-earmark-text bi-margin"></i></span>Encode Exam Result</a></li>
            <li class="<?php if ($first_part=="dashboard-subject-encode") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-subject-encode.php"><i class="bi bi-journal-plus bi-margin"></i>Subject Encoding</a></li>
            <li class="<?php if ($first_part=="dashboard-miscellaneous") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-miscellaneous.php"><i class="bi bi-gear-wide-connected bi-margin"></i>Miscellaneous</a></li>
            <li class="<?php if ($first_part=="dashboard-student-list") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-student-list.php"><i class="bi bi-people  bi-margin"></i>Student List</a></li>
          </ul>
          <li  class="<?php if ($first_part=="reports") {echo "active"; } else  {echo "noactive";}?>"><a data-parent="#sidecollapse" href="#pageSubmenuFaculty" data-toggle="collapse" aria-expanded="false" aria-controls="pageSubmenuFaculty"><i class="bi bi-person-video3 bi-margin"></i>Faculty</a></li>
           <ul style="font-weight:400;" class="collapse list-unstyled" id="pageSubmenuFaculty">
            <li class="<?php if ($first_part=="dashboard-faculty") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-faculty.php"><i class="bi bi-people bi-margin"></i>Teacher List</a></li>
          </ul>
          <li  class="<?php if ($first_part=="reports") {echo "active"; } else  {echo "noactive";}?>"><a data-parent="#sidecollapse" href="#pageSubmenuAccounting" data-toggle="collapse" aria-expanded="false" aria-controls="pageSubmenuAccounting"><i class="bi bi-calculator bi-margin"></i>Accounting</a></li>
           <ul style="font-weight:400;" class="collapse list-unstyled" id="pageSubmenuAccounting">
            <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-collections.php"><i class="bi bi-cash-coin bi-margin"></i>Collection List</a></li>
           <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-accounting.php"><i class="bi bi-cash-coin bi-margin"></i>Account Balances</a></li>
          </ul>
          <li class="<?php if ($first_part=="scholarships") {echo "active"; } else  {echo "noactive";}?>"><a href="sholarships.php"><i class="bi bi-file-earmark-text bi-margin"></i></span>Scholarships</a></li>
          <li  class="<?php if ($first_part=="reports") {echo "active"; } else  {echo "noactive";}?>"><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="bi bi-graph-up bi-margin"></i>Reports</a></li>
        <ul style="font-weight:400;" class="collapse list-unstyled" id="pageSubmenu">
          <li class="<?php if ($first_part=="reports-entrance-exam") {echo "active"; } else  {echo "noactive";}?>"><a href="reports-entrance-exam.php"><i class="bi bi-pen bi-margin"></i>Entrance Exam</a></li>
          <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="reports-enrolled-students.php"><i class="bi bi-people bi-margin"></i>Enrolled Students</a></li>
          <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="reports-enrolled-students.php"><i class="bi bi-card-checklist bi-margin"></i>Grades</a></li>
          <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="reports-enrolled-students.php"><i class="bi bi-book bi-margin"></i>CHED</a></li>
          
          
        </ul>
        
        <!-- <li class="<?php if ($first_part=="dashboard-course-sched") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-course-sched.php"><i class="bi bi-calendar2-week bi-margin"></i>Course Scheduling</a></li> -->
      </li>
      <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>">
      <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false"><i class="bi bi-gear bi-margin"></i>Settings</a>
      <ul style="font-weight:400;" class="collapse list-unstyled" id="settingsSubmenu">
          <li class="<?php if ($first_part=="dashboard-other-college") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-college.php"><i class="bi bi-gear-wide bi-margin"></i>Config Colleges</a></li>
          <li class="<?php if ($first_part=="dashboard-other-department") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-department.php"><i class="bi bi-gear-wide bi-margin"></i>Config Department</a></li>
          <li class="<?php if ($first_part=="dashboard-other-course") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-course.php"><i class="bi bi-gear-wide bi-margin"></i>Config Courses</a></li>
          <li class="<?php if ($first_part=="dashboard-other-subject") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-subject.php"><i class="bi bi-gear-wide bi-margin"></i>Config Subjects</a></li>
          <li class="<?php if ($first_part=="dashboard-other-semester") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-semester.php"><i class="bi bi-gear-wide bi-margin"></i>Config Semester</a></li>
          <li class="<?php if ($first_part=="dashboard-other-schoolyear") {echo "active"; } else  {echo "noactive";}?>"><a href="dashboard-other-schoolyear.php"><i class="bi bi-gear-wide bi-margin"></i>Config School Year</a></li>
           <li class="<?php if ($first_part=="dashboard-unit-rates") {echo "active current"; } else  {echo "noactive";}?>"><a href="dashboard-unit-rates.php"><i class="bi bi-gear-wide bi-margin"></i>Config Per Unit Rates</a></li>
          <li class="<?php if ($first_part=="user-management") {echo "active current"; } else  {echo "noactive";}?>"><a href="#"><i class="bi bi-gear-wide bi-margin"></i>User Management</a></li>
        </ul>
      </li>
    </ul>

<!--<div id="faq" role="tablist" aria-multiselectable="true">

<div class="panel panel-default">
<div class="panel-heading" role="tab" id="questionOne">
<h5 class="panel-title">
<a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
Question 1
</a>
</h5>
</div>
<div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
<div class="panel-body">
Answer 1...
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab" id="questionTwo">
<h5 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
Question 2
</a>
</h5>
</div>
<div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
<div class="panel-body">
Answer 2...
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading" role="tab" id="questionThree">
<h5 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="true" aria-controls="answerThree">
Question 3
</a>
</h5>
</div>
<div id="answerThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionThree">
<div class="panel-body">
Answer 3...
</div>
</div>
</div>

</div>  -->

</div><!-- end  <div class="nav nav-sidebar" id="sidebar"> -->
          <p class="text-center copyright">© NEMSU <span id="currentYear1"> </span></p>
</div>