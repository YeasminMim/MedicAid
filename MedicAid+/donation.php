<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Donation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/index.css">
  </head>
  <body>


  <header>
      <?php include 'header.php';?>
  </header>

<section>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image/bg_1.jpg" alt="Los Angeles" width="1100" height="500">

        <div class="carousel-caption">
          <h1 class="text-white display-15 font-weight-bold">Lend the helping hand get involved</h1>
          <p class="text-white font-weight-bold">Help the poor in need</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Image/footer5.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">Blood and Plasma Donation</h1>
          <p class="text-white font-weight-bold">Help the people</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Image/bg_2.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">Discover Non-Profit Charity Platform</h1>
          <p class="text-white font-weight-bold">Raising Hope</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

</section>


  	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-5 order-md-last d-flex align-items-stretch">
  					<div class="donation-wrap">
  						<div class="total-donate d-flex align-items-center">
  							<span class="fa flaticon-cleaning"></span>
  							<h4>Donation Campaign <br>are running</h4>
  							<p class="d-flex align-items-center">
  								<span>$</span>
  								<span class="number" data-number="24781">0</span>
  							</p>
  						</div>
  						<form action="#" class="appointment">
  							<div class="row">
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Full Name</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-user"></span></div>
  											<input type="text" class="form-control" placeholder="">
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Email Address</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-paper-plane"></span></div>
  											<input type="email" class="form-control" placeholder="">
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Select Causes</label>
  										<div class="form-field">
  											<div class="select-wrap">
  												<div class="icon"><span class="fa fa-chevron-down"></span></div>
  												<select name="" id="" class="form-control">
  													<option value=""></option>
  													<option value="">House Washing</option>
  													<option value="">Roof Cleaning</option>
  													<option value="">Driveway Cleaning</option>
  													<option value="">Gutter Cleaning</option>
  													<option value="">Patio Cleaning</option>
  													<option value="">Building Cleaning</option>
  													<option value="">Concrete Cleaning</option>
  													<option value="">Sidewal Cleaning</option>
  												</select>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Amount</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-money"></span></div>
  											<input type="text" class="form-control" placeholder="$5">
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Payment Method</label>
  										<div class="d-lg-flex">
  											<div class="form-radio mr-3">
  												<div class="radio">
  													<label>
  														<input type="radio" name="radio-input" checked>
  														<span class="checkmark"></span>
  														<span class="fill-control-description">Credit Card</span>
  													</label>
  												</div>
  											</div>
  											<div class="form-radio mr-3">
  												<div class="radio">
  													<label>
  														<input type="radio" name="radio-input">
  														<span class="checkmark"></span>
  														<span class="fill-control-description">Paypal</span>
  													</label>
  												</div>
  											</div>
  											<div class="form-radio">
  												<div class="radio">
  													<label>
  														<input type="radio" name="radio-input">
  														<span class="checkmark"></span>
  														<span class="fill-control-description">Payoneer</span>
  													</label>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<input type="submit" value="Donate Now" class="btn btn-secondary py-3 px-4">
  									</div>
  								</div>
  							</div>
  						</form>
  					</div>
  				</div>
  				<div class="col-md-7 wrap-about py-5">
  					<div class="heading-section pr-md-5 pt-md-5">
  						<span class="subheading">Welcome to unicare</span>
  						<h2 class="mb-4">We are here to help everyone in need</h2>
  						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  					</div>
  					<div class="row my-md-5">
  						<div class="col-md-6 d-flex counter-wrap">
  							<div class="block-18 d-flex">
  								<div class="icon d-flex align-items-center justify-content-center">
  									<span class="flaticon-volunteer"></span>
  								</div>
  								<div class="desc">
  									<div class="text">
  										<strong class="number" data-number="50">0</strong>
  									</div>
  									<div class="text">
  										<span>Volunteers</span>
  									</div>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-6 d-flex counter-wrap">
  							<div class="block-18 d-flex">
  								<div class="icon d-flex align-items-center justify-content-center">
  									<span class="flaticon-piggy-bank"></span>
  								</div>
  								<div class="desc">
  									<div class="text">
  										<strong class="number" data-number="24400">0</strong>
  									</div>
  									<div class="text">
  										<span>Trusted Funds</span>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<p><a href="#" class="btn btn-secondary btn-outline-secondary">Become A Volunteer</a></p>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-no-pt ftco-no-pb">
  		<div class="container">
  			<div class="row no-gutters">
  				<div class="col-md-3 d-flex align-items-stretch">
  					<div class="services">
  						<div class="text text-center bg-secondary">
  							<h3>Become a <br>Volunteer</h3>
  							<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
  						</div>
  						<div class="img border-2" style="background-image: url(images/services-1.jpg);">
  							<div class="icon d-flex align-items-center justify-content-center">
  								<span class="flaticon-volunteer"></span>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-3 d-flex align-items-stretch">
  					<div class="services">
  						<div class="text text-center bg-tertiary">
  							<h3>Quick <br>Fundraising</h3>
  							<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
  						</div>
  						<div class="img border-3" style="background-image: url(images/services-2.jpg);">
  							<div class="icon d-flex align-items-center justify-content-center">
  								<span class="flaticon-piggy-bank"></span>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-3 d-flex align-items-stretch">
  					<div class="services">
  						<div class="text text-center bg-primary">
  							<h3>Start <br>Donating</h3>
  							<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
  						</div>
  						<div class="img border-1" style="background-image: url(images/services-3.jpg);">
  							<div class="icon d-flex align-items-center justify-content-center">
  								<span class="flaticon-donation"></span>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-3 d-flex align-items-stretch">
  					<div class="services">
  						<div class="text text-center bg-quarternary">
  							<h3>Get <br>Involved</h3>
  							<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
  						</div>
  						<div class="img border-4" style="background-image: url(images/services-4.jpg);">
  							<div class="icon d-flex align-items-center justify-content-center">
  								<span class="flaticon-ecological"></span>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-no-pb">
  		<div class="container">
  			<div class="row justify-content-center pb-5 mb-3">
  				<div class="col-md-7 heading-section text-center ftco-animate">
  					<span class="subheading">Our Causes</span>
  					<h2>Donate to charity causes around the world</h2>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
  						<a href="#" class="img w-100" style="background-image: url(images/causes-1.jpg);"></a>
  						<div class="text p-3">
  							<h2><a href="#">Save the poor children from hunger</a></h2>
  							<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  							<div class="goal mb-4">
  								<p><span>$3,800</span> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped" style="width:70%; height:20px">70%</div>
  								</div>
  							</div>
  							<p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
  						<a href="#" class="img w-100" style="background-image: url(images/causes-2.jpg);"></a>
  						<div class="text p-3">
  							<h2><a href="#">Save the poor children from hunger</a></h2>
  							<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  							<div class="goal mb-4">
  								<p><span>$3,800</span> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped" style="width:82%; height:20px">82%</div>
  								</div>
  							</div>
  							<p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
  						<a href="#" class="img w-100" style="background-image: url(images/causes-3.jpg);"></a>
  						<div class="text p-3">
  							<h2><a href="#">Save the poor children from hunger</a></h2>
  							<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  							<div class="goal mb-4">
  								<p><span>$3,800</span> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped" style="width:95%; height:20px">95%</div>
  								</div>
  							</div>
  							<p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
  						</div>
  					</div>
  				</div>
  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
  						<a href="#" class="img w-100" style="background-image: url(images/causes-4.jpg);"></a>
  						<div class="text p-3">
  							<h2><a href="#">Save the poor children from hunger</a></h2>
  							<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  							<div class="goal mb-4">
  								<p><span>$3,800</span> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped" style="width:75%; height:20px">75%</div>
  								</div>
  							</div>
  							<p><a href="#" class="btn btn-light w-100">Donate Now</a></p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-counter" id="section-counter">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
  					<h2 class="font-weight-bold" style="color: #fff; font-size: 22px;">We're on a mission to help all your problems</h2>
  					<a href="#" class="btn btn-white btn-outline-white">Donate Now</a>
  				</div>
  				<div class="col-md-9">
  					<div class="row">
  						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  							<div class="block-18 text-center">
  								<div class="text">
  									<strong class="number" data-number="88984">0</strong>
  								</div>
  								<div class="text">
  									<span>Donation Campaigns are running</span>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  							<div class="block-18 text-center">
  								<div class="text">
  									<strong class="number" data-number="65000">0</strong>
  								</div>
  								<div class="text">
  									<span>Professional and kind volunteers</span>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  							<div class="block-18 text-center">
  								<div class="text">
  									<strong class="number" data-number="77000">0</strong>
  								</div>
  								<div class="text">
  									<span>Funds we raised till now on site</span>
  								</div>
  							</div>
  						</div>
  						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  							<div class="block-18 text-center">
  								<div class="text">
  									<strong class="number" data-number="50">0</strong>
  								</div>
  								<div class="text">
  									<span>Dedicated Donors</span>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section testimony-section">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row justify-content-center pb-5">
  				<div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
  					<span class="subheading">Testimony</span>
  					<h2>Happy Clients &amp; Feedbacks</h2>
  				</div>
  			</div>
  			<div class="row ftco-animate">
  				<div class="col-md-12">
  					<div class="carousel-testimony owl-carousel">
  						<div class="item">
  							<div class="testimony-wrap d-flex">
  								<div class="user-img" style="background-image: url(images/person_1.jpg)">
  								</div>
  								<div class="text pl-4">
  									<span class="quote d-flex align-items-center justify-content-center">
  										<i class="fa fa-quote-left"></i>
  									</span>
  									<p class="rate">
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  									</p>
  									<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  									<p class="name">Racky Henderson</p>
  									<span class="position">Father</span>
  								</div>
  							</div>
  						</div>
  						<div class="item">
  							<div class="testimony-wrap d-flex">
  								<div class="user-img" style="background-image: url(images/person_2.jpg)">
  								</div>
  								<div class="text pl-4">
  									<span class="quote d-flex align-items-center justify-content-center">
  										<i class="fa fa-quote-left"></i>
  									</span>
  									<p class="rate">
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  									</p>
  									<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  									<p class="name">Henry Dee</p>
  									<span class="position">Businesswoman</span>
  								</div>
  							</div>
  						</div>
  						<div class="item">
  							<div class="testimony-wrap d-flex">
  								<div class="user-img" style="background-image: url(images/person_3.jpg)">
  								</div>
  								<div class="text pl-4">
  									<span class="quote d-flex align-items-center justify-content-center">
  										<i class="fa fa-quote-left"></i>
  									</span>
  									<p class="rate">
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  									</p>
  									<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  									<p class="name">Mark Huff</p>
  									<span class="position">Businesswoman</span>
  								</div>
  							</div>
  						</div>
  						<div class="item">
  							<div class="testimony-wrap d-flex">
  								<div class="user-img" style="background-image: url(images/person_4.jpg)">
  								</div>
  								<div class="text pl-4">
  									<span class="quote d-flex align-items-center justify-content-center">
  										<i class="fa fa-quote-left"></i>
  									</span>
  									<p class="rate">
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  									</p>
  									<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  									<p class="name">Benjie Busk Jr.</p>
  									<span class="position">Businesswoman</span>
  								</div>
  							</div>
  						</div>
  						<div class="item">
  							<div class="testimony-wrap d-flex">
  								<div class="user-img" style="background-image: url(images/person_1.jpg)">
  								</div>
  								<div class="text pl-4">
  									<span class="quote d-flex align-items-center justify-content-center">
  										<i class="fa fa-quote-left"></i>
  									</span>
  									<p class="rate">
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  										<span class="fa fa-star"></span>
  									</p>
  									<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
  									<p class="name">Ken Bosh</p>
  									<span class="position">Businesswoman</span>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

    <section class="ftco-hireme bg-danger">
  		<div class="container">
  				<div class="text-center col-md-8 col-lg-8 d-flex align-items-center ">
  					<h2 class="text-center font-weight-bold text-white pt-4 mt-4">90% of the MedicAid workforce are volunteers.</h2>
  				</div>
          <div class="col-lg-5 col-md-12 pl-lg-4 py-md-4 mx-auto">
            <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-4">Become A Volunteer</a></p>
          </div>
  		</div>
  	</section>


    <footer>
        <?php include 'footer2.php';?>
    </footer>


  	</body>
  	</html>
