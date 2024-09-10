<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base.css">
    <title>Arreglos</title>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF462BJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="barraSuperior">
        <nav>
            <div class="contenedorNav">
                <div class="cajaLogoJauja">
                    <div class="logoJauja">
                        <a href="/">
                            <div id="logoGrande"><img src="/img/LogoClubJauja.png" alt="ClubJauja" style="height: 80px; padding: 5px;" /></div>
                            <div id="logoChico"><img src="/img/logoClubJaujaChico.png" alt="ClubJauja" /></div>
                        </a>
                    </div>
                </div>
                <ul class="menuIngreso menuRight">
                    <li><a title="Ingresá a ClubJauja" href="/socio/ingreso"><i class="fa fa-sign-in fa-lg"></i> Ingresá</a></li>
                </ul>
                <div id="cajaMenu">
                    <div class="iconoMenu">
                        <div><i class="fa fa-bars"></i></div>
                    </div>
                    <ul class="menuSuperior">
                        <li><a href="../Principal.php">Inicio</a></li>
                        <li><a href="../Constantes.php">Constantes</a></li>
                        <li><a href="../ArchivoPDF.php">Articulo</a></li>
                        <li><a href="../arreglos.php">Arreglos</a></li>
                        <li><a target="_blank" href="http://www.jauja.com.ar">Visitá<br />nuestra web</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <div class="espacio"></div>

    <?php

    # Los arreglos son como variables que nos permiten guardar multiples valores.

    # Ejemplo de un arreglo con los dias de la semana.
    $semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

    # En los arreglos podemos guardar cualquier tipo de dato, incluso podemos guardar un arreglo dentro de otro.
    $arreglo = array('cadenas de texto', 1, array('asd', 123), true);

    # Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro arreglo llamado semana.
    echo $semana[0] . '<br />';
    echo $semana[1] . '<br />';
    echo $semana[2] . '<br />';
    echo $semana[3] . '<br />';
    echo $semana[4] . '<br />';
    echo $semana[5] . '<br />';
    echo $semana[6] . '<br />';

    $planetas = array('mercurio', 'tierra', 'urano', 'neptuno', 'saturno', 'jupiter', 'marte', 'venus');

    $colores = array('azul', 'verde', 'rojo', 'blanco', 'marron');

    $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

    $coloresbis = array('azul', 'verde', 1, 'rojo', 'blanco', 'marron');

    echo $planetas[0] . '<br />';
    echo $colores[2] . '<br />';
    echo $meses[1] . '<br />';
    echo $coloresbis[2] . '<br />';

    ?>

    <style>
        body {
            background-color: bisque;
        }

        .espacio {
            height: 80px;
        }
    </style>
</body>

</html>