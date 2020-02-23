<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="HandheldFriendly" content="true">

    <link rel="stylesheet" type="text/css"href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Information</title>
  </head>
  <body class="basicinfobody">
     
     <div class="container">
       <div class="card">
         <h5 class="card-header">
           Basic Information for the Student
         </h5>
         <div class="card-body">
           
           <form action="gencert.php" method="post">
             
             <div class="row top-buffer">
                <input class="form-control form-control-lg" type="text" placeholder="Enter Name Here" name ="usrName" required>
             </div>
             
             <div class="row top-buffer">
               <div class="col-md-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Grade Level</label>
                    </div>
                    <select name="yrLvl" class="custom-select" id="inputGroupSelect01" >
                      <option value="1">Choose...</option>
                      <option value="Grade 1">Grade 1</option>
                      <option value="Grade 2">Grade 2</option>
                      <option value="Grade 3">Grade 3</option>
                      <option value="Grade 4">Grade 4</option>
                      <option value="Grade 5">Grade 5</option>
                      <option value="Grade 6">Grade 6</option>
                      <option value="Grade 7">Grade 7</option>
                      <option value="Grade 8">Grade 8</option>
                      <option value="Grade 9">Grade 9</option>
                      <option value="Grade 10">Grade 10</option>
                    </select>
                  </div>
               </div>
             </div>
             
             <div class="row top-buffer">
               <div class="col-md-4">
                 Date of Effectivity: <input type = "date" name ="dateEffctvty" required>
               </div>
             </div>
             <br>
             <div class="row top-buffer">
               <div class="col-md-4">
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Purpose</label>
                    </div>
                    <select name="purpose" class="custom-select" id="inputGroupSelect01" >
                      <option value="1">Choose...</option>
                      <option value="Schoolarship">Schoolarship</option>
                      <option value="Good Moral">Good Moral</option>
                    </select>
                  </div>
               </div>
             </div>
             
             <div class="row top-buffer">
               <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">School Year</label>
                    </div>
                    <select name="schlYr" class="custom-select" id="inputGroupSelect01" >
                      <option value="1">Choose...</option>
                      <option value="2020-2021">2020 - 2021</option>
                      <option value="2021-2022">2021 - 2022</option>
                      <option value="2022-2023">2022 - 2023</option>
                    </select>
                  </div>
               </div>
             </div>
            
            <br>
            <input type="submit" name="submit" value="Submit" />
            <br>
           </form>
         </div>
       </div>
     </div>
     <?php
          if (isset($_POST["submit"])) {
            $selectedValFrmCerts = $_POST["certs"];
          }
      ?>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
