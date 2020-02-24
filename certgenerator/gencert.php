<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php 
      $studName = $_POST["usrName"];
      $yrLvl = $_POST["yrLvl"];
      $dateEffct = $_POST["dateEffctvty"];
      $prps = $_POST["purpose"];
      $sYear = $_POST["schlYr"];
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="HandheldFriendly" content="true">

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Generate Certificate</title>
  </head>
  <body class="gencert-body">
    <table>
      <tr>
        <div class="header">
        <img src="img_head.jpg">
        <p>CERTIFICATION</p>
      </div>
      </li>
      <li>
        <div class="intro">
        <p align="justify">To Whom It May Concern: <span class="date-align"><?php echo date("F d, Y"); ?></span></p> 
      </div>
      </li>
      <li>
        <div>
        <p class="main-body" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <strong><?php echo $studName;?></strong> is currently  enrolled as <?php echo $yrLvl;?> student in this institution, School Year <?php echo $sYear;?>.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is  certified further that he is of good moral character and has no record of any  violation of the policies of this school.<br>
         <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is being issued for <?php echo $prps;?> and is only valid until <?php
        $date=date_create($dateEffct); echo date_format($date,"F d, Y"); ?>.</p>
      </div>
      </li>
      <li>
        <div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p class="name-align"><strong>JEAN  C. DUNGHIT, RGC, RPm</strong><br><em>Guidance Counselor</em></p></td>
      </div>
      </li>
      <li>
        <div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p class="text-style"align="center">NOT VALID WITHOUT SCHOOL SEAL</p></td>
      </div>
      </li>
    </table>
      
      
      
      
      
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <script>window.print();</script>
</html>
