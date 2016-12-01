<?php
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
  $incUsr = $_POST['usr'];
  $incPwd = $_POST['pwd'];
  if ($incUsr != '') {

    if ($incPwd != '') {

      foreach ($user as $array => $data) {

        if ($incUsr == $array) {
          if ($incPwd == $data['password']) {
            $perms = $data['restriction'];
            $connected = true;
          } else {
            $error = 'Please enter a correct password!';
          }
          break;

        } else {
        }
      }
    } else {
      $error = 'Please enter a correct password!';
    }
  } else {
    $error = 'Please enter a correct username!';
  }
} else {
  $connected = false;
}

?>

<!DOCTYPE html>
<html>
<head>
  <?php include_once 'link.php'; ?>
</head>
<body>
  <?php
  include_once 'header.php';
  if ($connected == true) {
    include_once 'content.php';
  } else {
    include_once 'login.php';
  }
  include_once 'footer.php';
  ?>
</div>
</div>
<?php include_once 'scripts.php'; ?>
</body>
</html>
