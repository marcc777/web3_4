<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <title>User</title>
    
</head>
<body>
    <?php 
        include("registrar.php");
    ?>

    <form method="post">
    	<h1>Registro</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="enviar">
    </form>
        
</body>
</html>