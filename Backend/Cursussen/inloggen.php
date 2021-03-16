<?php include 'header.php'; ?>

    

<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
}
</style>   



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Inloggen</h3>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="Gebruikersnaam">
						
					</div><br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Wachtwoord">
					</div>
					<div class="form-group">
						<input type="submit" value="Inloggen" class="login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Heb je geen account?<a href="register.php">Registreren</a>
				</div>
			</div>
		</div>
	</div>
</div>

    


    <?php


$conn = mysqli_connect('localhost','root','','trainingen');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if ($_POST){
$username = FALSE;
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['username'] == $_POST['username']) {
        $username = TRUE;
        if ($row['password'] == $_POST['password']){
            $_SESSION['ingelogd'] = $row['username'];
            header('Location: index.php');
        } else {
            echo 'wachtwoord is onjuist';
        }
    } 

} 
if ($username == FALSE){
    echo 'gebruikersnaam niet gevonden';
}

}

    ?>
</body>
</html>