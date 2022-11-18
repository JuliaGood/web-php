<?php 
  $users = [
    array(
      'login' => 'stepan',
      'password' => 'stepan123',
    ),

    array(
      'login' => 'petro',
      'password' => 'petro777',
    )
  ];

  if(isset($_POST)) {
    $foundUser = '';
    foreach( $users as $user ) {
      if ($user['login'] == $_POST['login'] && 
          $user['password'] == $_POST['password']) {
        $foundUser = $user;
        break;
      }
    }
    
    if ($foundUser) {
      echo "Hello " . $foundUser['login'];
    } else {
      header('Location: login.php?msg=Wrong login or password. Try again!');
    }
  }

?> 
