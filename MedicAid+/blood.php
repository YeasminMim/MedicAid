<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blood Donation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  body {
  background-image: url('Image/bloodpb.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
  </style>
  </head>
  <body>
    <header>
      <?php include 'header.php';?>

                </header>
    <main class="mt-5">
    <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/blood00.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <br>

          <h1 class="text-dark">Blood Donation</h1>
            <p class="text-dark">A specific injury or sickness can cause lost blood in the influenced, along these lines, representing the danger of death if the blood level isn’t taken back to the ordinary. Blood is an essential flood that moves oxygen to other indispensable body parts. With the loss of blood from the body doesn’t get vital oxygen bringing about death. In such a case emerges the requirement for deliberate blood gift from another person, regardless of whether known or obscure to the person.</p>

            <button class="btn bg-primary text-white" onclick="window.location ='blood_donor_information.php'">View Donor List</button>
      </div>
      </div>

      <section>
        <div class="container-fluid">

        <hr><br><br>
        <div class="blog">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card">
                  <div class="card-img">
                    <img src="Image/creatacc1.jpg" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Sign Up As A Donor</h4>
                    <p class="card-text">

                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div class="card-footer">
                    <a href="" class="card-link">Sign Up For Free Now!</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card">
                  <div class="card-img">
                    <img src="Image/bloodpi.jpg" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    <p class="card-text">

                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div class="card-footer">
                    <a href="information.php" class="card-link">Read more to get information</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
      <div class="container-fluid">

      <hr>

        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <br>
            <br>

            <h1 class="text-dark">Are you  eligible to donate blood?</h1>
              <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. View their details and you can also block user if they are not useful. </p>

              <button class="btn bg-primary text-white" onclick="window.location ='report_user.php?id=<?php echo $dbid ?>'">Eligibility Criteria</button>
        </div>
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/bloodreq.jpg" class="img-fluid">
        </div>


      </div>

  </body>
</html>
