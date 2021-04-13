<?php
include 'connection.php';

if(isset($_POST['signup'])){

$dbfname = mysqli_real_escape_string($conn, $_POST['fullname']);
$dbemail = mysqli_real_escape_string($conn, $_POST['email']);
$dbcontact = mysqli_real_escape_string($conn, $_POST['contact']);
$dbgender = mysqli_real_escape_string($conn, $_POST['gender']);
$dbage = mysqli_real_escape_string($conn, $_POST['age']);
$dbbgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
$dbdivision = mysqli_real_escape_string($conn, $_POST['division']);
$dbaddress = mysqli_real_escape_string($conn, $_POST['address']);
$dbpassword = mysqli_real_escape_string($conn, $_POST['password']);

//INSERT INTO `user`( `User_Name`, `First_Name`, `Last_Name`, `Date_of_birth`, `Country`, `Contact_Number`, `Email`, `Password`, `Premium_ID`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
$sql = "SELECT email FROM blood_donor";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$dbbemail= $row["email"];
// Check if the username they entered was correct
if ($dbbemail == $dbemail) {
  echo "<script>
alert('Same User Name Exist! Try Another User Name');
window.location.href='user_signup.php';
</script>";
  exit();

  }

}
}
 $sql="INSERT INTO blood_donor(full_name, email, contact_number, gender, age, blood_group, division, address, password)
VALUES ('$dbfname','$dbemail','$dbcontact','$dbgender','$dbage','$dbbgroup','$dbdivision','$dbaddress','$dbpassword')";
mysqli_query($conn, $sql);
header("Location: user_login.php");

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->

   </head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   <link rel="stylesheet" href="CSS/signup.css">
   <body>



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <div class="container-fluid">
    <h2 class="text-center text-dark text-capitalize pt-4">Blood Donor Sign Up</h2>
	<p class="text-center">Get started with your free account</p>
	<p>

	<a class="btn btn-lg btn-google btn-block btn-outline " href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign in with Google</a>

	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="user_signup.php" id="signform" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fullname" class="form-control" placeholder="Full name" type="text" required="">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone">  </i> </span>
		</div>
    	<input name="contact" class="form-control" placeholder="Phone number" type="text"  required="">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"    >  <i class="fa fa-venus-mars"></i> </span>
		</div>
		<select name="gender" class="form-control"  required="" >
			<option selected="" disabled selected> Select Gender</option>
			<option>Male</option>
			<option>Female</option>
			<option>Other</option>

		</select>
	</div>
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
  </div>
      <input name="age" class="form-control" placeholder="Age" type="text" required="">
  </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text" >  <i class="fa fa-medkit"></i> </span>
		</div>
		<select name="bgroup" class="form-control"  required="" >
			<option selected="" disabled selected> Select Blood Group</option>
			<option> A+</option>
			<option> A-</option>
			<option> B+</option>
			<option> B-</option>
			<option> AB+</option>
			<option> AB-</option>
			<option> O+</option>
			<option> O-</option>

		</select>
	</div>
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">  <i class="fa fa-map-marker"></i> </span>
  </div>
  <select name="division" class="form-control"  required="" >
    <option selected="" disabled selected>Select Division</option>
    <option>Barishal</option>
    <option>Chittagong</option>
    <option>Dhaka</option>ss
    <option>Mymensingh</option>
    <option>Khulna</option>
    <option>Rajshahi</option>
    <option>Rangpur</option>
    <option>Sylhet</option>

  </select>
</div>
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
  </div>
      <input name="address" class="form-control" placeholder="Address" type="text" required="">
  </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password"class="form-control" placeholder="Create password" type="password" required=" ">
    </div>

    <div class="form-group">
        <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block"> Create Account  </button>
    </div>
    <p class="text-center">Have an account? <a href="">Log In</a> </p>
</form>
</article>
</div>

</div>


<br><br>
<article class="bg-secondary mb-3">
<div class="card-body text-center">
    <img src="Image/Main Logo.jpg" alt="Logo" style="width:149px"></a>
<p class="h5 text-white">"Health Comes First" </p>


  <br>


</div>
<br><br>
</article>
</nav>
</turna>
</body>
</html>
