<!DOCTYPE html>
<html>
<head>
	<title>BLOODBANK MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style1.css"/>
	<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="name" content="Flowers">
	<meta name="robots" content="noindex, nofollow">
	
	<script type="text/javascript">
    function validate()
    {
    var username = document.login.username.value;
    var password = document.login.password.value;
 
    if (username==null || username=="")
    {
      alert("Username can't be blank");
      return false;
    }
    else if (password==null || password=="")
    {
      alert("password can't be blank");
      return false;
    }
    }
</script>
</head>
<center>
<table>
<body>
<div>
			<form name="bbms" method="post" action="connection2.php" onsubmit="return validate();" >
			
			<tr>
				<td>
					User: <th><input type="text"  name="username" required></input></th><br><br>
				</td>
			</tr>
			<tr>
				<td>
				    Password: <th><input type="password" name="password" required></input></th><br><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Login"/>
					<input type="reset" />
					
				</td>
			</tr>
		
	</div>
</body>
</table>
</center>
</html>
