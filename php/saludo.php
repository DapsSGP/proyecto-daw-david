<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']); // Evita inyecciones
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Saludo</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Hola, $nombre!</h1>
            <p>Gracias por visitar nuestra página.</p>
            <a href='index.html'>Volver</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit();
}
?>
