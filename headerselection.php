<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of a meta description. This will often show up in search results. I eat Felix's booty cheeks.">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.01, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <title></title>
  <link rel="stylesheet" href="selection.css" type="text/css" charset="utf-8">
  </head>
  <body>

    <header>
      <nav>
        <ul class="header" href="selection.css" align="left">
          <a href="index.php"><img src="images/nutimg.png" alt="nutrons"></a>
          <a href="matchscoutingDEPRACATED.php">Match Scouting</a>
          <a>|</a>
          <a href="#">Pit Scouting</a>
          <a>|</a>
          <a href="#">Match Schedule</a>
          <a>|</a>
          <a href="#">Alliance Selection</a>

        </ul>
        <div1 class="righthead" href="selection.css" align="right" id="container">
          <?php
          if (isset($_SESSION['userId'])) {
/*            echo '<form action="includes/logout.inc.php" method="post">
                      <button type="submit" name="logout-submit">Logout</button>
                    </form>';

          }
          else {  */
            echo '<form action="includes/login.inc.php" method="post">
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
