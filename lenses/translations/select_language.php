<?php
require_once './../db_connect.php';
require_once './../key_list.php';

$from = $_POST['lang_from_sel'];
$to = $_POST['lang_to_sel'];
$return_html = '<div class="row"><div class="col text-center"><h6>String Name</h6></div><div class="col text-center"><h6>Translate From</h6></div><div class="col text-center"><h6>Translate To</h6></div></div>';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($stmt = $mysqli->prepare("SELECT * FROM Translations WHERE language_code = ? OR language_code = ?")) {
  $stmt->bind_param("ss", $from, $to);
  $stmt->execute(); // esegue la query appena creata.
  $result = $stmt->get_result();
  $row_arr = array();
  while($row = $result->fetch_assoc()){
    $row_arr[$row['language_code']] = $row;
  }
    if(array_key_exists($from, $row_arr)){
      $row = $row_arr[$from];
      foreach($key_arr as $key => $value) {
        $a = '<div class="row"><div class="col-sm-4 text-center" style=""><p class="h6">';
        $b = '</p></div><div class="col-sm-4 text-center" style="border-left: 1px solid lightgrey; border-right: 1px solid lightgrey; "><h3>';
        $c = '</h3></div>';
        $key_arr[$key] = $a.$key.$b.$row[$key].$c;
      }
    } else {
      echo 'ERROR!';
    }
    if(array_key_exists($to, $row_arr)){
      $row = $row_arr[$to];
      foreach($key_arr as $key => $value) {
        $a = '<div class="col-sm-4 text-center" style=""><input type="text" class="form-control" id="';
        $b = '" name="';
        $c = '" value="';
        $d = '"></div></div>';
        $key_arr[$key] .= $a.$key.$b.$key.$c.$row[$key].$d;
        }
      } else {
        echo 'ERROR!';
      }
$mysqli->close();
}
$return_html .= '<form method="POST" action="./upload_translations.php">';
  foreach($key_arr as $key => $value) {
    $a = '<div class="hidden-xs-up" style="height: 18px;"></div>';
    $return_html .= $value.$a;
}
$return_html .= '
<div class="text-center" style="border-top: 1px solid lightgrey; padding-top: 10px;">
  <h4>Please Confirm Your Changes And Submit Your Translations</h4>
</div>
<div class="text-center">
<small>Name and email are not necessary, are only used in credit section of the application.</small>
</div>
<div class="row">
<div class="col-md">
  <div class="form-group">
    <label class="bmd-label-floating">Your Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
</div>
<input type="hidden" name="language_code" id="language_code" value="'.$to.'">
<div class="col-md">
  <div class="form-group">
    <label class="bmd-label-floating">Your Email</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
</div>
  <div class="col-md-2" style="margin:auto; text-align:center;">
    <button class="btn btn-primary btn-fab btn-fab-mini btn-round" type="submit">
      <i class="material-icons">done</i>
    </button>
  </div>
</div></form>';
echo $return_html;
?>
