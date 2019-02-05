<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/finallogo-81x87.png" type="image/x-icon">
  <meta name="description" content="">
  <title>TRACKER</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="CSS/w3.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-free/css/aa.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 
<script src="JavaScript/site.js"></script>
<script src="JavaScript/javascript.js"></script>
<script src="JavaScript/type.js"></script>
<script src="JavaScript/momentjs.js"></script>
<script src="JavaScript/date.js"></script>
<script src="JavaScript/shiftagent.js"></script>
<script src="JavaScript/tloic.js"></script>
<script src="JavaScript/realtime.js"></script>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
  
</head>
 <body>
   <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://index.php">
                         <img src="assets/images/finallogo-81x87.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="https://index.php">GLOBUS SOLUTIONS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
              <li class="nav-item"><class="nav-link link text-white display-4"></li>

                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html"><span class="mbri-sites mbr-iconfont mbr-iconfont-btn"></span>
                    Dashboard &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a>
                </li>

                 <li class="nav-item">
                  <a  class="nav-link link text-white display-4" aria-expanded="true" href="tracker.php" >
                  <span class="mbri-edit mbr-iconfont mbr-iconfont-btn" id="tracker"></span>
                   Tracker &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                 </li>


                  <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="table.php" aria-expanded="true"><span class="mbri-preview mbr-iconfont mbr-iconfont-btn"  id="tickets"></span>
                   View Tickets &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                 </li>

                   <li class="nav-item"><a class="nav-link link text-white display-4" href="addaccountform.html" aria-expanded="true"><span class="mbri-users mbr-iconfont mbr-iconfont-btn" id="accounts"></span>Add Account</a>
                   </li>

                   <li class="nav-item"><a class="nav-link link text-white display-4" href="loginform.html" aria-expanded="true"><span>Log Out</span></a>
                   </li>
            </ul>
            
        </div>
    </nav>
    </section>
    <!--start of div-->
    <div class="container-fluid" style="background-image: url("assets/images/mbr-1920x1200.jpg");">
       <!--start of section-->
      <section>
        <form id="forms" action="insert.php" method="POST">

<table class="table">

<tbody>
<tr>
  <td>
    <b>Site:</b> <select id="site" name="Site" class="select" onClick="getSite()">
  <option name = "optionsss" value="" selected disabled hidden>--Select--</option>
    <option value="RBC">RBC</option>
    <option value="Hanston">Hanston</option>
  </select> 
 </td>
  <td>
    <b>Escalation:</b> <select name="Escalation" class="select">
    <option value="" selected disabled hidden>--Select--</option>
    <option value="Verbal">Verbal</option>
    <option value="Skype">Skype</option>
  <option value="Ticketing">Ticketing</option>
  <option value="Call">Call</option>
  </select>
  </td>
  <td>
    
  <b>Ticket No:</b> <input type="text" id="ticketnumber" name="ticketno" class="select" placeholder="e.g. #00000000">
  </td>

 </tr>


<tr>
     <?php 
       date_default_timezone_set('Asia/Manila');
      $monthtoday = date("M");
    ?>

   <td>
    <b>Campaign:</b> <select name="Campaign" id="campaign" class="select" >
  </select> 
  </td>
  <td>
   <b>Year:</b> <select name="Year" class="select" required>
  <option value="" selected disabled hidden>--Select--</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
  </select> 
  </td>
 
  <td>
      <b>Month:</b><input type="text" name='month' id='month' class="select" value="<?php echo $monthtoday; ?>">
      <option  selected disabled hidden>--Select--</option>
      </select>
  </td>
</tr>



<tr>
   <td>
  <b>Week:</b> <select name="week" class="select" id="week">
  <option value="" selected disabled hidden>--Select--</option>
  </select>
  </td>

    <td>
      <b>Day:<style margin-left="-1050px"></style></b> <select name="day" class="select" id="day"><br>
    <option value="" selected disabled hidden>--Select--</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">"Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
  </td>
   <td>

    <?php 

    $datetoday = date('m/d/y');


    ?>
    <p class="fontstyle"><b>Date:</b> <input type="text" name="dates" value="<?php echo $datetoday; ?>" class="select" placeholder="e.g. 08/03/18">

   </td>

     <td>
</tr>

<tr>
    <td>
    <b>Type:</b> <select name="type" class="select" id="type" onClick="getType()"></select>
    </td>

    <td>
    <b>Type of Issue/Request:</b> <select name="toir" class="select" id="issuerequest" onClick="getRequest()"></select>
    </td>


    <td>
    <b>Type of Problem:</b> <select name="typeproblem" class="select" id="typeofproblem"></select>
    </td>
</tr>


<tr>
   <td>
  <b>Issue:</b> <input type="text" name="issue" class="select" placeholder="e.g. NT Login">
  </td>

  <td>
  <b>Severity Level:</b>
  <select name='Svrtylvl' id='Svrtylvl' class="select"  onClick="getlevel()">
    <option value="" selected disabled hidden>--Select--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  </td>
  <td>
  <b>Request Description:</b> <input type="text" name="requestdescription" class="select" placeholder="e.g. unlock account">
  </td>
 
</tr>

<tr>
  <td>
  <b>No. of Agents Affected:</b> <input type="text" name="agentsaffect" class="select" placeholder="e.g. 1">
  </td>
  <td>
  <b>No. of Agents on Shift:</b> <select type="text" name="noaos" id="agentshift" class="select" onClick="getshift()"></select>
  </td>
  <td>
  <b>TL/OIC onboard:</b> <select type="text" name="tloic" id="tloicboard" class="select" onClick="getLeader()"></select>
  </td>
</tr>

<tr>

   <td>
   <b>Ticket Owner:</b> <input type="text" name="ticketowner" id="ticketowner" class="select" placeholder="e.g. it.trainee">
   </td>
   <td>
   <b>Senior:</b> <input type="text" name="senior" class="select" placeholder="e.g. Sherwin/Carla">
   </td>
  <td>
   <b>Start Time:</b> <input type="text"  name="starttime" id="starttime">
   </td>
 
</tr>

<tr>
 <td>
  <b>End Time:</b> <input type="text" name="endtime" id="endtime" >
  </td>
  <td>
  <b>Status:</b> <input type="text" name="status" class="select" value="Attended/Closed">
  </td>
  <td>
  <b>Duration:</b> <input type="text" name="duration" id="duration">
  </td>
  </tr>

<tr><center>
  <td>
  <b>Total Duration:</b> <input type="text" name="totalduration" class="select" placeholder="totalduration">
  </td></center>
</tr>

</center>
  </tbody>
  </table> <!-- table end -->
  <center><p class="fontstyle">
  <br> </p> </center>
  <center>
  </p></center>
  <center><div class="container">
  <input type="submit" value="Insert" name="submitrequest">
  </form>
      </section>
      <!--end of section-->
    </div>
    <!--end of div-->

  <script type="text/javascript" src="javaScript/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="assets/web/assets/jquery/jquery.min.js"></script>
   <script src="assets/popper/popper.min.js"></script>
   <script src="assets/tether/tether.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/dropdown/js/script.min.js"></script>
   <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
   <script src="assets/theme/js/script.js"></script>
  



   </body>
</html>