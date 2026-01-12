<?php
// Ruta de la imagen original
$ruta_imagen_original = 'prueba.png'; // Cambia esto por tu archivo

// Cargar la imagen
$imagen = imagecreatefrompng($ruta_imagen_original);

if ($imagen) {
    // Definir el color a aplicar (ej: un tono azulado)
    // imagecolorallocate() asigna un color y devuelve un índice.
    $color_azul = imagecolorallocate($imagen, 0, 0, 255); // R, G, B

    // Aplicar un filtro para colorear la imagen (o cambiar el fondo)
    // Aquí aplicamos un filtro que colorea la imagen con el tono azul
    // y le añade transparencia (alpha).
    imagefilter($imagen, IMG_FILTER_COLORIZE, 0, 0, 255, 50); // R, G, B, Alpha

    // Si quieres cambiar solo el fondo transparente a un color específico (ej: blanco)
    // Asegúrate que la imagen tenga transparencia (PNG/GIF)
    // $fondo_blanco = imagecolorallocate($imagen, 255, 255, 255);
    // imagefill($imagen, 0, 0, $fondo_blanco); // Rellena desde el punto (0,0)

    // Configurar la cabecera para enviar la imagen al navegador
    header('Content-Type: image/png');

    // Enviar la imagen modificada al navegador
    imagepng($imagen);

    // Liberar memoria
    imagedestroy($imagen);
} else {
    echo "Error al cargar la imagen.";
}
?>