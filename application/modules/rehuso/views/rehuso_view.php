<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>Probando HMVC con llamada a otros módulos</title>
</head>
 
<body>
 
<h2>This is from the Test HMVC page....Anidada.</h2>
 
<?php echo Modules::run( 'home/ini/index' ); ?>
 
</body>
</html>
