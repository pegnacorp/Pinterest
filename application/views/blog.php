<html>
<head>
<title>Portada de mi sitio</title>
</head>
<body>
<h1>Bienvenido a mi web</h1>
<p>Estos son los últimos artículos publicados.</p>
<?php
foreach ($query as $row)
{
   echo $row->title;   
   echo "<br>";   
}
?>

</body>
</html>