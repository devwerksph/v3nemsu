<?php include 'process/execute_auth_.php'; ?>
<?php include 'header.php'; ?> <!-- Header Initialize Links -->

  <body>

    <?php include 'head.php'; ?><!-- Head Nav -->

    <div class="container-fluid">
      <div class="row">

          <?php include 'side-nav.php'; ?> <!-- Side Nav -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <br>
          <span>Faculty > Faculty Load Report</span>  <a class=" pull-right " href="faculty-load.php"><strong> + Encode Faculty Load</strong></a>
          <div class="sub-header text-center"></div>
           <h2 class="text-center">Faculty Submission Report</h2>
          <div class="form-style"> <!-- this section for container cover -->
            <br>
            <!-- <a class="default-btn " href="student-admission.php"> + Create New</a> -->
           
            <br>
            <div class="table-responsive" >
          <table id="my Table" class="table table-striped table-bordered" width="100%" >

        <thead>  
          <tr>
            <th>FACULTY NAME</th>  
            <th>SECTION</th>  
            <th>SUBJECT CODE</th>
            <th>SUBJECT TITLE</th> 
            <th>DATE POSTED</th>   
          </tr>  
        </thead>  
        <tbody>  

          <tr>  

            <td>Caberte, Sheila B.</td>  
            <td>BSCE 5A</td>
            <td>BSCE Const</td> 
            <td>Construction Method & Project Mgt.</td> 
            <td>11/11/2023 3:10 PM</td>   
          </tr> 
          <tr>  

            <td></td>  
            <td>BSCE 5B</td>
            <td>BSCE Const</td> 
            <td>Construction Method & Project Mgt.</td> 
            <td>11/11/2023 3:10 PM</td>   
            
        </tr>
        <tr>
            <td></td>  
            <td>CE 415</td>
            <td>BSCE Soil</td> 
            <td>Soil Mechanics</td> 
            <td>11/11/2023 3:50 PM</td>   
        </tr>  
        <tr>
            <td></td>  
            <td>CE 412</td>
            <td>BSCE Const Mt</td> 
            <td>Construction Material & Testing</td> 
            <td>11/11/2023 5:50 PM</td>   
        </tr>    
                                
        <tr>  
        <td>Cquilla, Christian T.</td>  
        <td>BSCE 5A</td>
        <td>Struct Des</td> 
        <td>Structural Design 2</td> 
        <td>11/11/2023 3:10 PM</td>   
        </tr>
        <tr>
            <td></td>  
            <td>BSCE 5A</td>
            <td>AdSA</td> 
            <td>Advance Structural Analysis</td> 
            <td>11/11/2023 5:50 PM</td>   
        </tr> 
          
        </tbody> 

              </table>
            </div>
         </div>
      </div>
   
      <?php include 'footer.php'; ?>
  </body>
</html>
