<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./res/img/favicon.ico">
  <link rel="icon" type="image/png" href="./res/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Contact Lens Reminder - App by Raffinato :)
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="theme-color" content="#006DF0">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./dependancies/materialkit/assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <link href="./dependancies/materialkit/assets/css/my-style.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
<?php  require_once './navigation.php'?>
<a class="btn btn-lg my-fab btn-primary btn-fab btn-round" style="background: #006DF0;" href='https://play.google.com/store/apps/details?id=com.raffinato.contactlensreminder&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
	<i href='https://play.google.com/store/apps/details?id=com.raffinato.contactlensreminder&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' class="material-icons">shop</i>
</a>
<div class="page-header myHeader"  style="background: #006DF0;">
  <div class="containerv2 container">
	<div class="row">
		<div class="col-md-8" style="min-height: 200px;">
			<div class="phoneImageDiv">
				<video muted="" playsinline="" loop="" autoplay="" defaultMuted="" title="Lens Reminder" class="appVideo">
					<source src="./res/video/untitled.webm" type="video/webm">
					<source src="./res/video/untitled.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
		<div class="col-md" style="min-height: 280px;">
			<div class="introductionTxt">
				<div class="txtArea">
					<h2 class="title">Contact Lens Reminder</h2>
					<h4>Don't forgetti your lensetti :)</h4>
					<a href='https://play.google.com/store/apps/details?id=com.raffinato.contactlensreminder&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
						<img width="200px" height="100px" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
					</a>
				</div>
			</div>
		</div>
	</div>
   </div>
 </div>
 <div class="main main-raised">
 <?php require_once './notifications.php' ?>
	<div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">The simplest app to track your lenses deadline</h2>
            <h5 class="description">With this app there's no more thrown away lenses because you forgot what wrwe their deadline. Just set the date when you opened the box and the duration of that type  of lens, then relax and the app will notify you the day before your lenses will expire.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">access_alarm</i>
                </div>
                <h4 class="info-title">Automatic Alarm</h4>
                <p>Just set the date you opened the box and the duration and the app will auto-calculate the lenses deadline.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">face</i>
                </div>
                <h4 class="info-title">Easy to Use</h4>
                <p>The app don't have many options of customisation making the user experiene very easy and enjoyable.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">local_pizza</i>
                </div>
                <h4 class="info-title">Pizza?</h4>
                <p>Well... I'm italian and I really do like pizza :)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Leave a Feedback</h2>
            <form class="form contact-form" method="POST" action="./feedback.php">
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="feedback" class="bmd-label-floating">Your Message</label>
                <textarea type="text" class="form-control" rows="4" id="feedback" name="feedback" required></textarea>
              </div>
			  <div class="form-group">
				<p class="text-muted" style="width:100%; text-align: center;">This site is protected by reCAPTCHA and the Google
					<a href="https://policies.google.com/privacy">Privacy Policy</a> and
					<a href="https://policies.google.com/terms">Terms of Service</a> apply.
				</p>
			</div>
			  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
			  <input type="hidden" name="action" value="validate_captcha">
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once './footer.php'?>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="boutMeModal" aria-labelledby="boutMeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


  <!--   Core JS Files   -->
  <script src="./dependancies/materialkit/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./dependancies/materialkit/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./dependancies/materialkit/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./dependancies/materialkit/assets/js/plugins/moment.min.js"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./dependancies/materialkit/assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6LepnZsUAAAAAA9IXswcTjioYeHiTCOKWo-YG3UC"></script>
  <script src="./res/js/recaptchav3.js" type="text/javascript"></script>
</body>

</html>
