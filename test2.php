<?php
require './fbconfig.php';
if(isset($_SESSION['access_token'])){ ?>
  <a href="logout.php">Logout</a>
  <h2>Yeah!I'm success</h2>
<?php }else { ?>
  <a href="<?php echo $login_url; ?>">Login with facebook</a>

<?php }
 ?>
