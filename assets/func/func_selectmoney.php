
<?php

include_once 'data.php';

$incUsr = 'charly';
$incPwd = 'wsxc';
$restriction = 0;
$autorized = false;

if ($incUsr != '') {

  if ($incPwd != '') {

    foreach ($user as $array => $data) {
      var_dump($array);

      if ($incUsr == $array) {
        if ($incPwd == $data['password']) {
          $autorized = true;
        } else {
          echo 'Please enter a correct password!';
        }
        break;

      } else {
      }
    }
  } else {
    echo 'Please enter a correct password!';
  }
} else {
  echo 'Please enter a correct username!';
}

if ($autorized == true) {
  echo 'You\'re successfuly loged in!';
}


?>
