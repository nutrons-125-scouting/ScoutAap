<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of a meta description. This will often show up in search results. I eat Felix's booty cheeks.">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="nutrons.css" type="text/css" charset="utf-8">
  </head>
  <body>

    <header>
      <nav>
        <ul class="header" href="nutrons.css" align="left">
          <img src="images/nutimg.png" alt="nutron">
          <a href="index.php">Home</a>
          <a href="#">Contact Admin</a>
          <a href="signup.php">Signup</a>
        </ul>
        <div1 class="righthead" href="nutrons.css" align="right" id="container">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
                      <button type="submit" name="logout-submit">Logout</button>
                    </form>';

          }
          else {
            echo '          <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                  </form>';
          }
           ?>
  <!--        <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
      </form> -->
  <!--        <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>         -->
        </div1>
      </nav>
    </header>
