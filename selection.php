
<?php
  require "headerselection.php";
?>

    <main href="selection.css" class="transparent">
      <?php
       if (isset($_SESSION['userId'])) {
         echo '<p>You are logged in!</p>';
       }
       else {
         echo '<p>You are logged out!</p>';
       }
       ?>
    </main>

<?php
  require "footerselection.php";
?>
