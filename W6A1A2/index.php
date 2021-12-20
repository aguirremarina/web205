<?php

session_start();

?>

<html>

<body>
<form method="POST" action="validation.php">
	<div>
		<label for="email">E-Mail Address</label>
		<input id="email" type="email" class="form-control" name="email" placeholder="user@user.com" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required autofocus>
	</div>

	<div>
		<input id="password" type="password" class="form-control" name="password" placeholder="******" required data-eye>
	</div>
	<div>
		<div>
			<input type="checkbox" name="remember" id="remember"
				<?php if(isset($_COOKIE["member_login"])) { ?> checked
				<?php } ?> /> <label for="remember-me">Remember me</label>
		</div>
	</div>
	<div>
		<button type="submit">
			Login
		</button>
	</div>
	<div>
		<?php

			if(!empty($_SESSION["error_message"] )){
				echo"<br><div class='alert alert-danger' role='alert'>";
					echo"<strong>Ohhhh! " . $_SESSION["error_message"] . "</strong>";
				echo"</div>";
				session_unset();
			}
		?>
	</div>
</form>


</body>

</html>