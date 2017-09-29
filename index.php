<html lang="EN">
	<head>
		<meta charset="utf-8">
		<style>
			.login_holder {
				padding:3px;
				margin-left:auto;
				margin-right:0%;
				margin-top:30%;
				display:table;
				border:solid 1px #3399ff;
				border-width: thin;
			}
			input[type='submit'] {
				margin-left:28%;
			}
			
		</style>
	</head>
	<body>
	<div class="login_holder">
	     
		<form method="post" action="login.php">
		<label>Please Fill these Entries:-</label>
			<br>
			<label>Username:"<b>user</b>"</label>
			<label>Password:"<b>0000</b>"</label>
			<br>
			    <?php
						error_reporting(0);
						$msg=$_REQUEST['msg'];
						if($msg==1)
						{
							echo '<div style="color:#ff0000;">Invalid Username or Password</div>';
						}
			    ?>
		    <label for="username"><b>Username:</b></label><input type="text" name="username"/><br/>
			<label for="password"><b>Password:</b></label><input type="password" name="password"/><br/>
			<input type="submit" value="Submit" name=""/>
		</form>
		</div>
	</div>	
	</body>
</html>