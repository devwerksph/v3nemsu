 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <div class="col-md-12">
    <footer class="footer center">
      <div class="container">
        <p class="text-muted"><p  class="text-center">Copyright &copy; <span id="currentYear2"> </span> NEMSU University Integrated System. All Rights Reserved.</p></p>
      </div>
    </footer>
  </div>
<!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="assets/js/vendor/popper.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>
      <script src="./assets/js/vendor/holder.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
      <script src="./js/jquery-ui.min.js"></script>

         <!--Custom JS-->
    <script src="js/custom.js"></script>
      <script>
        // ------------step-wizard-------------
      $(document).ready(function () {
          $('.nav-tabs > li a[title]').tooltip();
          
          //Wizard
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

              var $target = $(e.target);
          
              if ($target.parent().hasClass('disabled')) { //naay disabled diri
                  return false;
              }
          });

          $(".next-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              $active.next().removeClass('disabled'); //naay disabled diri
              nextTab($active);

          });
          $(".prev-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              prevTab($active);

          });
      });

      function nextTab(elem) {
          $(elem).next().find('a[data-toggle="tab"]').click();
      }
      function prevTab(elem) {
          $(elem).prev().find('a[data-toggle="tab"]').click();
      }
     </script>
     <!--version 3-->

     <!--version 3-->
    <script type="text/javascript">
      function myFunction() {
        document.getElementById("view_firstname").value = document.getElementById("firstname").value;
        document.getElementById("view_middlename").value = document.getElementById("middlename").value;
        document.getElementById("view_lastname").value = document.getElementById("lastname").value;
        document.getElementById("view_suffix").value = document.getElementById("suffix").value;
        document.getElementById("view_course").value = document.getElementById("YourCourse").value;
        document.getElementById("view_age").value = document.getElementById("YourAge").value;
        document.getElementById("view_dateofbirth").value = document.getElementById("dateofbirth").value;
        document.getElementById("view_birthplace").value = document.getElementById("dateofplace").value;
        document.getElementById("view_homeaddress").value = document.getElementById("homeaddress").value;
        document.getElementById("view_presentaddress").value = document.getElementById("presentaddress").value;
        document.getElementById("view_mycontact").value = document.getElementById("mycontact").value;
        document.getElementById("view_myemail").value = document.getElementById("myemail").value;
        document.getElementById("view_spouse").value = document.getElementById("nameofspouse").value;
        document.getElementById("view_brotherName").value = document.getElementById("childone").value;
        document.getElementById("view_brotherAge").value = document.getElementById("childoneage").value;
        document.getElementById("view_sisterName").value = document.getElementById("childtwo").value;
        document.getElementById("view_sisterAge").value = document.getElementById("childtwoage").value;
        document.getElementById("view_nemsureason").value = document.getElementById("reasonstudynemsu").value;
        document.getElementById("view_incasename").value = document.getElementById("emergencyfullname").value;
        document.getElementById("view_incasecontact").value = document.getElementById("emergencyphone").value;

      


    }


    function gender1(sel) {
     document.getElementById("view_brotherSex").value = sel.options[sel.selectedIndex].text;
    }
    function gender2(sel) {
     document.getElementById("view_sisterSex").value = sel.options[sel.selectedIndex].text;
    }
    function radio(sel)
    {
      var n1 = document.getElementById('n1');
      document.getElementById("view_living_with").value = sel.value;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript"src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#myTable').dataTable();
      });

    </script>

     <script>
    var currentYear = new Date().getFullYear();
    document.getElementById('currentYear1').textContent = currentYear;
    document.getElementById('currentYear2').textContent = currentYear;
 </script>
<script type="text/javascript">


$(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper         = $(".family_input_fields_wrap"); //Fields wrapper
  var add_button      = $(".family_add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append('<div style="margin-bottom:30px;" class="row" id="remove-div"><div class="col-md-4"><label>Name of Brother/Sister (from eldest to youngest)</label><input class="form-control" type="text" name="childname" placeholder="Name of Child"/></div><div class="col-md-2"><label>Age</label><input class="form-control" type="text" name="age" placeholder="Age"/></div><div style="margin-bottom:10px;" class="col-md-3"><label>Sex</label><select class="form-control" name="sex"><option hidden checked>-Select-</option><option>Male</option><option>Female</option> </select></div><div class="col-md-3 remove_field "><a style="margin-top:25px;" href="#" class="btn btn-danger pull-left">Remove</a></div></div>'); //add input box
      }
  });

  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); $(this).parent('#remove-div').remove(); x--;
  })
});
</script>
<script type="text/javascript">
    function printCertificate() {
            const printContents = document.getElementById('certificate').innerHTML;
            const originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>
