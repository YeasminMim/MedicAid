<!--?php
$data = file_get_contents('http://covid19tracker.gov.bd');

$coronadata= json_decode($data);

echo"<pre>";
print_r($coronadata);
?-->







<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
<head>
  <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

  
     <link rel="stylesheet" href="CSS/covid19.css">


</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">
    <img src="Image/Main Logo.jpg" alt="Logo" style="width:153px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Donation</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Volunteer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Ambulance</a>
      </li>
    </ul>
    <form class="form-inline  my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="Image/corona4.jpg" width="550" height="400">
    </div>
  </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1> What to know about Covid-19 and Blood Donation? <span class="corona"> <img src="Image/corona6.png"></span> </h1>
    </div>
  </div>
</div>
<br>
<br>
<section id="maps">
        <div class="text-center title maos">
            <p>Statistics</p>
            <h4>Corona Virus overview</h4>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6  col-md-12 col-12 map-img">
                    <img src="Image/map.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="Bangladesh">
                        <h1>Bangladesh</h1>
                        <hr>
                        <div class="flex-card">
                            <div class="con">
                                <h1>Confirmed</h1>
                                <h2 id="conin"></h2>
                            </div>
                            <div class="rev">
                                <h1>Recovered</h1>
                                <h2 id="revin"></h2>
                            </div>
                            <div class="dea">
                                <h1>Deaths
                                </h1>
                                <h2 id="detin"></h2>
                            </div>
                        </div>
                    </div>
                    <div class="world">
                        <h1>Worldwide</h1>
                        <hr>
                        <div class="flex-card">
                            <div class="con">
                                <h1>Confirmed</h1>
                                <h2 id="globco"></h2>
                            </div>
                            <div class="rev">
                                <h1>Recovered</h1>
                                <h2 id="globro"></h2>
                            </div>
                            <div class="dea">
                                <h1>Deaths
                                </h1>
                                <h2 id="globdo"></h2>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>


  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section header text-center mb-5 mt-4">
      
      <h1> Covid-19 Symptoms </h1>
    </div>

    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="Image/corona9.png" class="img-fluid">
      </div>
  </div>
</div>
</section>

<section>


  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section header text-center mb-5 mt-4">
      
      <h1> What to do? </h1>
    </div>

    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="Image/corona8.png" class="img-fluid">
      </div>
  </div>
</div>
</section>

<section>


  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section header text-center mb-5 mt-4">
      
      <h1> Prevention </h1>
    </div>

    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5 text-center align-items-center">
        <img src="Image/corona2.jpg " class="img-fluid">

        <p>Here are common sense steps we can all take to prevent the spread of any respiratory virus:

Avoid close contact with people who are sick.
Stay home when you are sick.
Cover your nose and mouth with a tissue when coughing or sneezing and throw the tissue away after use. If a tissue isn’t available, cough or sneeze into your elbow, not your hands.
Wash your hands often with soap and water for at least 20 seconds, especially after going to the bathroom; before eating; and after blowing your nose, coughing or sneezing. If soap and water are not readily available, use an alcohol-based hand sanitizer with at least 60% alcohol. Always wash hands with soap and water if hands are visibly dirty.
Avoid touching your eyes, nose or mouth.
Practice other good health habits. Get plenty of sleep, be physically active, manage your stress, drink plenty of fluids and eat nutritious food.
Disinfect doorknobs, switches, handles, computers, telephones, bedside tables, bathroom sinks, toilets, counters, toys and other surfaces that are commonly touched around the home or workplace.</p>
      </div>
  </div>
</div>
</section>


    
</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="CSS/covid19.js"></script>
  </div>
</div>

</html>
