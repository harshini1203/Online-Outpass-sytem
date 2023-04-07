<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Outpass</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >

  </head>
  <body>
    <?php
    $conn= new mysqli("localhost","root","dhanya2003","db2");
    if(isset($_POST['new_value'])){
       $sql="update outpass set status='Denied' where out_no=".$_POST['new_value'];
       $conn->query($sql);
    }
    ?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" >
  <a class="navbar-brand" href="#">OutPass</a>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#" style="color:white; padding-right:30px">Help</a>
      <div class="dropdown">
    <button class="dropbtn">Contact
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
  </svg>
    </button>
    <div class="dropdown-content">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"style="padding-right:10px">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>+91 12345678</a>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16"style="padding-right:5px">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
</svg>warden@snuchennai.edu.in</a>

    </div>
  </div>
      <a class="nav-item nav-link active" href="#" style="color:white; padding-right:30px">Log Out</a>
    </div>
  </div>
</nav>
<div class="container">
  <img src='https://images.pexels.com/photos/1167355/pexels-photo-1167355.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2' height='550' width='1263' id="image" >
  <div class="image-text">
    <h1><label id="hello"></label></h1>
  </div>
</div>
<div class=functions id="funct">
  <div class="outpass_pending" id="1" style="height:360px;position: relative;top: -60px; padding-top:20px">
    <h1><center>
      <?php

$con= new mysqli("localhost","root","dhanya2003","db2");
$sql="select count(status) from outpass where status='Waiting'";
$res=$con->query($sql);
$row=$res->fetch_assoc();

$txt=$row["count(status)"]." Pending Outpass";
 echo "<a href='pending.php?v=<?php echo time(); ?>'class='op' id='opt'>$txt</a>";
?>
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"style="padding:0px 0px 0px 5px;">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="padding:0px 0px 0px 25px;position:absolute;left:320px; top:58px;">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
    </center></h1>
    <h3 style="padding:30px 50px 0px 300px">


      <?php
      $con= new mysqli("localhost","root","dhanya2003","db2");
      $sql2="select count(status) from outpass where status='Approved'";
      $res=$con->query($sql2);
      $row=$res->fetch_assoc();
      echo $row["count(status)"]." Approved Outpass";
      ?>
    </h3>
    <h3 style="padding:30px 50px 0px 700px;position:absolute;top:100px;">
      <?php
      $con= new mysqli("localhost","root","dhanya2003","db2");
      $sql3="select count(status) from outpass where status='Denied'";
      $res=$con->query($sql3);
      $row=$res->fetch_assoc();
      echo $row["count(status)"]." Denied Outpass";
      ?>
    </h3>
  </div>

  <div class="Approved_Outpass" id="3"style="height:330px;position: relative;top: -154px; padding-top:10px">
    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="30" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16" style="position:absolute;top:50px;left:380px">
 <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
 <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg><h1><center>
       Approved Outpasses
     </center></h1>
     <button class="btn" onclick="window.location.href='approved.php?v=<?php echo time(); ?>';"> View<svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"style="padding:0px 0px 0px 5px;">
       <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
     </svg> </button>
  </div>
  <div class="Denied_Outpass" id="4"style="height:330px;position: relative;top: -201px; padding-top:10px">
    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="position:absolute;top:50px;left:400px">
 <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
 <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg><h1><center>
       Denied Outpasses
     </center></h1>
     <button class="btn" onclick="window.location.href='denied.php?v=<?php echo time(); ?>';"> View<svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"style="padding:0px 0px 0px 5px;">
       <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
     </svg> </button>
  </div>
  <div class="out_hist" id="5"style="height:330px;position: relative;top: -248px; padding-top:10px">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="46" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16" style="position:absolute;top:40px;left:380px;">
<path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
<path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg><h1><center>
       Outpass History
     </center></h1>
     <button class="btn" onclick="window.location.href='outhist.php?v=<?php echo time(); ?>';"> View<svg xmlns="http://www.w3.org/2000/svg" width="40" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"style="padding:0px 0px 0px 5px;">
       <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
     </svg> </button>
  </div>
  <div class="checkin" id="6"style="height:250px;position: relative;top: -295px; padding-top:10px">
     <h1><center>
       checkins
     </center></h1>
  </div>
</div>

  </body>

  <script>
    var date = new Date();
    var hrs= date.getHours();
    var greet;
    var image=document.getElementById("image");
    var c1=document.getElementById("1");

    var c3=document.getElementById("3");
    var c4=document.getElementById("4");
    var c5=document.getElementById("5");
    var c6=document.getElementById("6");

    if(hrs<12){
    greet="Good<br />Morning.";
    image.src="https://images.pexels.com/photos/910411/pexels-photo-910411.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2";
    c3.style.backgroundColor="#82954b";
    c1.style.backgroundColor="#9e9d24";
    c4.style.backgroundColor="#adcf9f";
    c5.style.backgroundColor="#cede98";
    c6.style.backgroundColor="#faeab1";

    document.getElementById("funct").style.color="black";
    document.getElementById("opt").style.color="black";
  }
  else if(hrs>=12 && hrs<17){
    image.src="https://images.pexels.com/photos/4072551/pexels-photo-4072551.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2";
    greet ="Good<br />Afternoon.";
    c1.style.backgroundColor="#464741";
    c3.style.backgroundColor="#285430";
    c4.style.backgroundColor="#5f8d48";
    c5.style.backgroundColor="#a7d7c5";
    c6.style.backgroundColor="#7eb5a6";

    document.getElementById("funct").style.color="#fffdde";
    document.getElementById("opt").style.color="#fffdde";

  }else {
      greet="Good <br />Evening.";
      image.src="https://images.pexels.com/photos/2786930/pexels-photo-2786930.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2";
      c1.style.backgroundColor="#123456";
      c3.style.backgroundColor="#2b5478";
      c4.style.backgroundColor="#146c94";

      c5.style.backgroundColor="#19a7c8";
      c6.style.backgroundColor="#90e0ef";
      document.getElementById("funct").style.color="skyblue";
      document.getElementById("opt").style.color="skyblue";
    }

    document.getElementById("hello").innerHTML=greet;


  </script>

</html>
