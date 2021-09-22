<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
</head>

<body>

            <div class="container-form">
                <div class="contact-box">
                    <div class="left"></div>
                    <div class="right">
                        <h2 class="form"> ¿QUÉ OPINAS TU?</h2>
                        <form action="enviar.php" method="POST">
                        <input type="text" name="nombre
                        " class="field" placeholder="¿Cuál es tu nombre?">
                        <input type="email" name="correo" class="field" placeholder="¿Cuál es tu correo?">
                        <input type="text" name="edad" class="field" placeholder="¿Cuál es tu edad?">
                        <textarea class="field area" name="mensaje" placeholder="¿Qué opinas del derecho de la vida?,¿Crees que es importante?,¿Por qué?"></textarea>
                        <input type="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>

    </body>
    </html>
