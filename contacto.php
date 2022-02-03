<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header class="hero">
        <div class="container">
            <a href="index.html"><img loading="lazy" class="logo" src="assets/logo3.png"
                    alt="Sergio Pérez Fernández Desarrollo Web"></a>
            <nav class="nav">
                <a href="index.html" class="nav__items">Inicio</a>
                <a href="contacto.php" class="nav__items nav__items--cta">Contactame Ahora</a>
                <a href="sobremi.html" class="nav__items">Sobre mi</a>
                <a href="#" class="nav__items">Proyectos</a>
            </nav>
            <div class="content">
                <h1 class="logo-text">Contáctame <span>Ahora</span></h1>
                <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Contáctanos</h3>
                        <form action="" method="POST">
                            <p>
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" required="">
                            </p>
                            <p>
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" required="" placeholder="email@ejemplo.com">
                            </p>
                            <p>
                                <label for="">Teléfono</label>
                                <input type="tel" name="telefono" id="telefono" placeholder="444 777 999">
                            </p>
                            <p>
                                <label for="">Asunto</label>
                                <input type="text" name="asunto" id="asunto" required="">
                            </p>
                            <p class="block">
                                <label for="">Mensaje</label>
                                <textarea name="mensaje" id="mensaje" rows="3" required=""></textarea>
                            </p>
                            <p class="block">
                                <button type="submit" name="enviar">Enviar</button>
                            </p>
                        </form>
                        <?php
                            include('correo.php');
                        ?>
                    </div>
                    <div class="contact-info">
                        <h4>Más información</h4>
                        <img loading="lazy" src="assets/yo.png" alt="Foto personal Sergio Perez Fernandez"
                            class="presentation__picture">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Albacete, España</li>
                            <li><i class="fas fa-phone"></i> 654972210</li>
                            <li><i class="fas fa-envelope-open-text"></i> sergiopf1980@gmail.com</li>
                        </ul>
                        <p>
                            Si desea ponerse en contacto o hablar sobre un proyecto, no dude en ponerse en contacto
                            conmigo por correo electrónico a sergiopf1980@gmail.com <br>
                            También puede enviarme un DM en las redes sociales.
                        </p>
                        <p>
                            Sergio Pérez Fernández © 2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://kit.fontawesome.com/c39e10204c.js" crossorigin="anonymous"></script>
</body>

</html>