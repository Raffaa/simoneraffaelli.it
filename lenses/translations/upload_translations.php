<?php
require_once './../db_connect.php';
require_once './../key_list.php';

$upd_query = "UPDATE Translations SET ";;
$bind_params1 = '';
$progress = 0;
$total = 0;
foreach ($key_arr as $key => $value) {
  $total++;
  if (!empty($_POST[$key])) {
    $upd_query .= $key.'="'.$_POST[$key].'",';
    $progress++;
  }

}
$percentage = round($progress/$total, 2)*100;
$langcode = $_POST['language_code'];
$upd_query .= 'progression='.$percentage.' WHERE language_code = "'.$langcode.'";';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if($mysqli->query($upd_query)) {
  $stmt = $mysqli->prepare('INSERT INTO Credits (name, mail, language_code) VALUES(?,?,?)');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $stmt->bind_param("sss", $name, $email, $langcode);
  $stmt->execute();
  header("Location: ./?thankYou");

  $email = "raffinatodev@gmail.com";
	$subject = "Automated Email - New Transation Submitted";
	$message = $_POST['name']." - ".$_POST['email']." - Submitted a new translation for lang_code: ".$_POST['language_code'];

  $sendMail = mail($email, $subject, $message);

  die();
} else {
  header("Location: ./?error");
  die();
}
 ?>
