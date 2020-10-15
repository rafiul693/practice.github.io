<?php 
	include_once('header.php');
 ?>

<?php 

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$message = $_POST['message'];

		if (empty($name)) {
			$error = "Name is required!";
		}elseif (empty($email)) {
			$error = "Email is required!";
		}elseif (empty($phone)) {
			$error = "Phone is required!";
		}elseif (!is_numeric($phone)) {
			$error = "Phone Number must be number!";
		}elseif (empty($password)) {
			$error = "Password is required!";
		}


		$msg = $name."/r/n";
		$msg .= $email."/r/n";
		$msg .= $phone."/r/n";
		$msg .= $password."/r/n";
		$msg .= $message."/r/n";


		$send_message = mail('rafiulislam649@gmail.com','Message', $msg);

		if (isset($send_message)) {
			echo "Message send Successfully!";
		}
	}







 ?>


	<div class="area">
		<div class="contact-form">
			<form action="" method="POST">

				<?php if (isset($error)):?>
					<p style="color:red"> <?php echo $error; ?> </p>
				<?php endif ?>

				<label for="name">Name :</label>
				<input type="text" placeholder="Name" id="name" name="name">

				<label for="email">Email :</label>
				<input type="email" placeholder="Email" id="email" name="email">

				<label for="phone">Phone :</label>
				<input type="text" placeholder="Name" id="phone" name="phone">

				<label for="pass">Password :</label>
				<input type="password" placeholder="Pasword" id="pass" name="password">

				<label for="message">Message :</label>
				<textarea name="message" id="message" placeholder="Message" ></textarea>

				<input type="submit" name="submit" value="Send">
			</form>
		</div>
	</div>
	

<?php 
	include_once('footer.php');
 ?>



	