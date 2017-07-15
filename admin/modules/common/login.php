<?php include_once('widgets/header.php'); ?>
<h1>Login Page</h1>
<form method="post" action="">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login-btn" value="Sign In"></td>
		</tr>
	</table>
</form>
<?php include_once('widgets/footer.php'); ?>