<?php //require_once 'include/session.php'; ?>
<?php require_once 'include/connection.php'; ?>
<?php require_once 'include/functions.php'; ?>
<?php require_once 'include/validation_function.php'; ?>

<?php
  if (isset($_POST['submit'])) {

    $required_fields = array("username","password");
    //validate_presences($required_fields);

    if (empty($errors)) {
      $username = mysql_prep($_POST['username']);
      $password = mysql_prep($_POST['password']);

      $found_user = attempt_login($username,$password);

      if ($found_user) {
        redirect_to('index.php?user='. urlencode($found_user['username']));
      }else {
		echo 'fail';
        //failure
        //$_SESSION['message'] = "username / password not found.";
      }
  }
}
 ?>

<?php include 'include/layout/simple_header.php'; ?>

<div id="content-reading-page" class="container" style="background-color:#e3e3e3;">
<center>
<div class="media">
  <div id="page">
    <?php //echo message();?>
    <?php //$errors = errors(); ?>
    <?php //echo get_errors($errors); ?>
    <h2>login</h2>
    <form action="login.php" method="post" class="input-group">
      <p>username: <input class="form-control " type="text" name="username" value="" required></p>
      <p>password: <input class="form-control" type="password" name="password" value="" required></p>
      <input style="margin-top:10px;" class="btn btn-Success btn-md" type="submit" name="submit" value="login">
    </form>
  </div>
</div>
</center>
</div>
<?php include 'include/layout/footer.php'; ?>
