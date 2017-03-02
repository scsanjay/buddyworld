<?php //require_once 'include/session.php'; ?>
<?php require_once 'include/connection.php'; ?>
<?php require_once 'include/functions.php'; ?>
<?php require_once 'include/validation_function.php'; ?>



<?php
  if (isset($_GET['user']) && !empty($_GET['user'])) {
    $username = $_GET['user'];
    $user = find_user_by_username($username);
    if (empty($user)) {
      redirect_to('index.php');
    }
    include 'include/layout/logged_header.php';
  }else {
    $username = null;
    $user = null;
    include 'include/layout/main_header.php';
  }
?>


<div id="content">

	<div class="alert alert-info"  style="margin-top:52px;" role= "alert" > Welcome to Buddy world </div>

  <div class="here">
    <?php $all_post = all_stories();	?>
		<?php echo $all_post; ?>

  </div>

</div>

<?php include 'include/layout/footer.php'; ?>
