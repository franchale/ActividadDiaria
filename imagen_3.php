<?php
// Creación de una imagen vacía y adición de texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define el contenido del encabezado - en este caso, image/jpeg
header('Content-Type: image/jpeg');

// Mostrar la imagen
imagejpeg($im);

?>