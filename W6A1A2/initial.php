<?php

	session_start();

    if($_SESSION['loggedin'] == false){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<body>
	<div>
		<div>
			<a href="invalidationSession.php">Logout</a>
		</div>
		<div>
			<?php

				if(!empty($_SESSION["error_message"] )){
					echo"<br><div class='alert alert-success' role='alert'>";
						echo"<strong>Ohhhh! " . $_SESSION["error_message"] . "</strong>";
					echo"</div>";
				}
			?>
		</div>
	</div>

</body>
</html>