<?php
// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "../inc/config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Always return JSON format
  // header('Content-Type: application/json');


  $return = [];

  $email = Filter::String($_POST['email']);
  $password = $_POST['password'];

  $user_found = User::Find($email, true);

  if($user_found) {
    // User exists try and sign them in
      $user_id = (int) $user_found['user_id'];
      $hash = (string) $user_found['password'];

      if(password_verify($password, $hash)) {
        // User is signed in
        $return['redirect'] = 'php-login-course/dashboard.php';

        $_SESSION['user_id'] = $user_id;
      } else {
        // Invalid user email/password combo
        $return['error'] = "Invalid user email/password combo";
      }


    // We can also check to see if they are able to log in.
    // Can add a header to give http status 301 404
  } else {
  // They need to create a new account
      $return['error'] = "You do not have an account <a href='/php-login-course/register.php'>Create one now?</a>";
  }
  // Make sure the user CAN be added AND is added

  // Return the proper information back to Javascript to redirect us

  // Json_encode looks for an array.
  echo json_encode($return, JSON_PRETTY_PRINT ); exit;
} else {
  // Die. Kill the script. Redirect the user. Do somethig regardless.
  exit('Invalid Url');
}
?>
