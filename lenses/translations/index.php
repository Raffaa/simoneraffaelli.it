<?php
require_once './../db_connect.php';
require_once './../android_languages.php';
require_once './../key_list.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="...//res/img/favicon.ico">
  <link rel="icon" type="image/png" href="./../res/img/favicon.ico">
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
  <link href="./../dependancies/materialkit/assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <link href="./../dependancies/materialkit/assets/css/my-style.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body class="profile-page sidebar-collapse">
<?php  require_once './../navigation.php'?>

<div class="page-header header-filter" data-parallax="true" style="background-image: url('./../res/img/translation-bg.png');"></div>
<div class="main main-raised">
  <?php require_once './../notifications.php' ?>
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="./../res/img/t.svg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
              <h3 class="title">Help Me With Translations!</h3>
              <h6>Thanks for your help</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">
        <p>Choose a reference language (the one you want to translate from) then choose the target language that is the one you are translate in. :)</p>
      </div>
      <div class="space-50"></div>
      <div class="col" style="margin:auto; text-align:center;">
        <form method="POST">
          <div class="form-row">
            <div class="col" style="margin:auto; text-align:center;">
              <p>Translate from </p>
            </div>
            <div class="col" style="margin:auto; text-align:center;">
              <select id="lang_from_sel" name="lang_from_sel" class="form-control">
                <?php
                  echo $optionsFrom;
                ?>
              </select>
            </div>
            <div class="col" style="margin:auto; text-align:center;">
              <p> to </p>
            </div>
            <div class="col" style="margin:auto; text-align:center;">
              <select id="lang_to_sel" name="lang_to_sel" class="form-control">
                <?php
                  echo $optionsTo;
                ?>
              </select>
            </div>
            <div class="col" style="margin:auto; text-align:center;">
              <button class="btn btn-primary btn-fab btn-fab-mini btn-round" type="submit">
                <i class="material-icons">translate</i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="space-50"></div>
        <div class="col-md-12 ml-auto mr-auto" id="lang_container">
        </div>
        <div class="col-md-12 ml-auto mr-auto" style="height: 100vh;">
          <div class="col-md-12 ml-auto mr-auto" style="height: 100%; overflow-y: scroll;">
            <div class=" text-center">
              <h3>Progress</h3>
            </div>
            <?php
            $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
            if ($stmt = $mysqli->prepare("SELECT progression, language_code FROM Translations ORDER BY progression DESC")) {
              $stmt->execute(); // esegue la query appena creata.
              $stmt->store_result();
              $stmt->bind_result($progression, $lang_code); // recupera il risultato della query e lo memorizza nelle relative variabili.
              if($stmt->num_rows < 1) { ?>
                </br>
                <h5 class="text-center"><mall>Ouch! Something went wrong :(</small></h5>
                <?php } else {
                $i = 0;
                while($stmt->fetch()) {
                  echo '<div class="progress-container progress-primary"><span class="progress-badge" >'.$langlist[$lang_code].'</span><div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="'.$progression.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$progression.'%;"></div></div></div>';
                }
              }
            }?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once './../footer.php'?>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="boutMeModal" aria-labelledby="boutMeModal" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    ...
  </div>
</div>
</div>


<!--   Core JS Files   -->
<script src="./../dependancies/materialkit/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./../dependancies/materialkit/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./../dependancies/materialkit/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="./../dependancies/materialkit/assets/js/plugins/moment.min.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="./../dependancies/materialkit/assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>

<script src="./../res/js/selectlanguage.js" type"text/javascript"></script>

</body>

</html>
