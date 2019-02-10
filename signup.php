<?php
  require "header.php";
?>

    <main>
      <h1 align="center">Signup</h1>
      <?php
       if (isset($_GET['error'])) {
         if ($_GET["error"] == "emptyfields") {
           echo '<p align="center" class="signuperror">Fill in all fields!</p>';
         }
         else if ($_GET["error"] == "invaliduidmail") {
           echo '<p align="center" class="signuperror">Invalid username and email!</p>';
         }
         else if ($_GET["error"] == "invaliduid") {
           echo '<p align="center" class="signuperror">Invalid username!</p>';
         }
         else if ($_GET["error"] == "invalidmail") {
           echo '<p align="center" class="signuperror">Invalid e-mail!</p>';
         }
         else if ($_GET["error"] == "passwordcheck") {
           echo '<p align="center" class="signuperror">Your passwords do not match!</p>';
         }
         else if ($_GET["error"] == "usertaken") {
           echo '<p align="center" class="signuperror">Username is already taken!</p>';
         }

       else if ($_GET["signup"] == "success") {
         echo '<p align="center" class="signupsuccess">Signup successful!</p>';
       }
     }
       ?>
      <form action="includes/signup.inc.php" method="post" align="center">
      <li><input type="text" name="uid" placeholder="Username"></li>
      <li><input type="text" name="mail" placeholder="E-mail"></li>
      <li><input type="password" name="pwd" placeholder="Password"></li>
      <li><input type="password" name="pwd-repeat" placeholder="Confirm Password"></li>
        <button type="submit" name="signup-submit">Signup</button>
      </form>
    </main>

<?php
  require "footer.php";
?>
