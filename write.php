<?php //require_once 'include/session.php'; ?>
<?php require_once 'include/connection.php'; ?>
<?php require_once 'include/functions.php'; ?>
<?php require_once 'include/validation_function.php'; ?>
<?php //confirm_logged_in(); ?>

<?php
	if (isset($_GET['user']) && !empty($_GET['user'])) {
		$username = $_GET['user'];
		$user = find_user_by_username($username);
	}
?>
<?php
	if (!isset($user) || empty($user)) {
		redirect_to('login.php');
	}
?>
<?php include 'include/layout/header.php'; ?>
<?php
  if (isset($_POST['submit'])) {

    $text = mysql_prep($_POST['text']);
		$date = date("Y-m-d");

		//$size= $_FILES['image']['size'];
    //$type = addslashes($_FILES['image']['type']);
    //$image = addslashes($_FILES['image']['tmp_name']);
    //$extension = check_image_size($image,$size);
    //check_image_type($extension);


    $query = "INSERT INTO `post`(`post_id`, `user_id`, `text`, `date`) VALUES ('', '{$user['username']}', '{$text}', '{$date}' )";
		//$return = img($image,$user_id,$extension);

    $result = mysqli_query($connection,$query);
    if ($result) {
      //$_SESSION["message"] = "Posted successfully";
      redirect_to('index.php?user='. urlencode($username));
    }else {
      //$_SESSION["message"] = "something went wrong !";
      redirect_to('write.php?user='. urlencode($username));
    }
  }else {
    //redirect_to('manage_content.php');
  }
 ?>


<div id="content-reading-page" class="container">
<div class="media">
<form action="write.php?user=<?php echo htmlentities($user['username']); ?>" method="post" enctype="multipart/form-data">
		<div class="media-body">
			<div class="writing-pad">
				<h2 class="media-heading">Write a post</h2>
					<textarea style="height:150px;" name="text" class="form-control input-lg" placeholder="write here..." required></textarea>
				<!--	<h5>Add image</h5>
					<input style="font-size:17px;" type="file" accept=".png,.jpg,.jpeg" name="image" required> -->
			</div>
			<input type="submit" name="submit" class="btn btn-Success btn-md comment" ></input>
		</div>
</form>
	</div>
</div>

<?php include 'include/layout/footer.php'; ?>
