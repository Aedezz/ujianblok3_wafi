<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <h3>GALAKSI PRO MAX</h3>

    <h5>Halaman Login</h5>
    <form method="POST" action="login_proses.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Inputkan Usernamemu"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" placeholder="Inputkan Passwordmu"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="LOGIN"></td>
            </tr>
        </table>
    </form>
    <p>Jika belum memiliki akun silahkan klik <a href="form_register.php">Register</a></p>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<h2>UJIAN BLOK 3</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="register_proses.php">
			<h1>Create Account</h1>
			<input type="text" name="nama" placeholder="Your Name" />
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="save">Register</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="login_proses.php">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password"/>
			<button type="submit" name="login">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>

<script src="script.js"></script>
</body>
</html>
