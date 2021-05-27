<?php
  // Create database connection
  include 'connection.php';


  if (isset($_GET['id'])){
     $dbid =  $_GET['id'];
  }
  else
  {
    $dbid = 0;
  }
  if ($_GET['id']==NULL){
     header('location:please_login.php');
   }

    $dbid =  $_GET['id'];
  if (isset($_POST['search'])) {
    $dbsearch = strip_tags($_POST['srch']);
    $sql = "SELECT * FROM volunteer WHERE division LIKE '%$dbsearch%' AND status='Active'";
  }
    else
    {
      $sql = "SELECT * FROM volunteer WHERE status='Active'";
    }

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Blood Donor Information</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" href="CSS/blood_donor_information.css">


<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


<style>
body {
background-image: url('Image/blood_donor_information_bg.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
</head>
<body>

  <header>
    <?php include 'header2.php';?>
  </header>

                <div class="container-fluid">
                  <h1 class="text-center text-dark text-capitalize pt-5">Volunteer Information</h1>
                  <hr class="w-25 pt-5">

              <form class="example" method="POST" action="volunteer_information.php<?php if($dbid!=0) echo "?id=$dbid" ?>">
  <input name="srch" type="text" placeholder="Search By Division" name="search">
  <button name="search" type="submit"><i class="fa fa-search"></i></button>
</form>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<h6>Name: ".$row['name']." </h6>";
        echo "<h6>Email: ".$row['email']." </h6>";
        echo "<h6>Contact No: ".$row['contact_number']." </h6>";
        echo "<h6>Gender: ".$row['gender']." </h6>";
        echo "<h6>Age: ".$row['age']." </h6>";
        echo "<h6>Division: ".$row['division']." </h6>";


      echo "</div>";
    }

  ?>


</div>
</body>
</html>
