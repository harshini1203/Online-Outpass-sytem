<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>" >
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" >
<a class="navbar-brand" href="outpass.php?v=<?php echo time();?>">OutPass</a>

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
</svg>+91 123456789</a>
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
<h1 ><center style="position:absolute;top:100px;left:490px;color:white;">
  Approved Outpass
</center></h1>

<div class="tabl"style="position:absolute;top:220px;left:250px;">

<?php
$username = "root";
$password = "dhanya2003";
$database = "db2";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT a.out_no, b.name,a.go_date,a.return_date,a.reason,a.status FROM outpass a, student b where a.email=b.email and status='Approved'";
$i=0;
$result = $mysqli->query($query);
if(!$result->fetch_assoc()){
  echo'<table border="1" cellspacing="40" cellpadding="20" style="color:white;"><tr>
  <td>
  No approved outpasses.

  </td>
  </tr>';
}
else{

echo '<table border="1" cellspacing="10" cellpadding="10">
      <tr>
          <td> Outpass No. </td>
          <td> Name </td>
          <td> Leaving Date </td>
          <td> Returning date </td>
          <td> Reason </td>
          <td> Status </td>
          <td></td>

      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      $i=$i+1;
        $field1name = $row["out_no"];
        $field2name = $row["go_date"];
        $field3name = $row["return_date"];
        $field4name = $row["status"];
        $field5name = $row["reason"];
        $field6name = $row["name"];

        echo '<tr id='.$i.'>
                  <td>'.$field1name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field5name.'</td>
                  <td><svg xmlns="http://www.w3.org/2000/svg"  width="30" height="46"  class=" bi bi-patch-check-fill" viewBox="0 0 16 16" style="fill:green;padding-left:10px";>
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg></td>
<td>
<button class="btn1" > View<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"style="padding:0px 0px 0px 0px;">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg> </button>
<form method="POST" action="simple4.php">
<input type="submit" name="new_value" value="'.$field1name.'" style="opacity:0.3%; position:relative; top:-45px;width:102px;height:45px;" />
</form>
</td>

              </tr>';
    }



    $result->free();
}}
?>
</div>


</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



</html>
