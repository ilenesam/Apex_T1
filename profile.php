<html>
<head>
<title>Profile- My Website </title> 
</head>
<body>

<?php require_once "header.php";?>
<div style="margin: auto; max-width:600px" >
    <h2 style= "text-align: center;"> User Profile</h2>
    <table style="text-align:center;">
        <tr>
            <td><img src="img.jpg" style=" width:150px; height:150px ;object-fit:cover;"></td>
</tr>
        <tr>
            <td>Sam</td>
</tr>
<tr>
    <td>Sam28@gmail.com</td>
</tr>

</table>
<hr>  
    
<form method ="post" style="margin: auto; padding:10 px;">
   <textarea name="post" rows="8"></text area><br>
<button>Post</button>
</form>
</div>
<?php require "footer.php";?>

</body>
</html>