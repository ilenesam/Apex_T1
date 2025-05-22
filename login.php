<html>
<head>
<title>Login- My Website </title> 
</head>
<body>

<?php require_once "header.php";?>
<div style="margin: auto; max-width:600px" >
    <h2 style= "text-align: center;">Login</h2>
    
<form method ="post" style="margin: auto; padding:10 px;">
    <input type="text" name="username" placeholder="username"><br>
    <input type="text" name="email" placeholder="email"><br>
<input type="text" name="password" placeholder="password"><br>

<button>Login</button>
</form>
</div>
<?php require "footer.php";?>

</body>
</html>