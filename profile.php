<?php //require_once 'include/session.php'; ?>
<?php require_once 'include/connection.php'; ?>
<?php require_once 'include/functions.php'; ?>
<?php //confirm_logged_in(); ?>
<?php require_once 'include/validation_function.php'; ?>

<?php
	if ( isset($_GET['user']) && isset($_GET['username'])) {
		$profile_username = $_GET['user'];
		$username = $_GET['username'];
	}else {
		redirect_to('index.php');
	}
?>

<?php include 'include/layout/header.php'; ?>
<?php
	$user = find_user_by_username($profile_username);
?>

<div class="cover bg">
	<div class="profile-info">
		<div class="dp-change">
			<img class="dp" <?php echo "src=\"upload/{$user['username']}.jpg\" alt=\"$user[username]\""; ?> ></img>
		</div>
		<div class="bio">
			<?php
	    	if ($profile_username === $username) {   ?>
			<div class="detail"><a href="edit_profile.php?user=<?php echo htmlentities($username);?>">Edit Profile</a></div>
				<?php } ?>

			<div class="email-info">Email : <?php echo htmlentities($user['email']); ?></div>
			<?php
				$dob = $user['dob'];
				$day = $dob[0].$dob[1];
				$month = $dob[2].$dob[3];
				$year = $dob[4].$dob[5].$dob[6];
			?>
			<div class="email-info">D.O.B : <?php echo htmlentities($day .'/'. $month .'/'. $year); ?></div>
			<div class="email-info">Mobile : <?php echo htmlentities($user['mobile']); ?></div>
			<div class="email-info">Aadhar : <?php echo htmlentities($user['aadhar']); ?></div>
			<?php
	    	if ($profile_username === $username) {   ?>
			<div class="detail">
				<a href="write.php?user=<?php echo htmlentities($user['username']); ?>">Write a post</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class=" slogan">
		<?php echo htmlentities($user['username']); ?>
	</div>

</div>

<?php include 'include/layout/footer.php'; ?>
