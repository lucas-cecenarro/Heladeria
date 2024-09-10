<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base.css">
    <title>Constantes</title>
</head>

<body>

    <div class="contenedor">
        <div class="titulo">
            <h1>Practicas Profesionalizantes 2</h1>
        </div>
    </div>

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

    <div class="pi">
        <?php
        // Definición de una constante
        define("PI", 3.14159);

        // Imprimir el valor de la constante PI
        echo "El valor de PI es: " . PI . "<br>";
        ?>
    </div>

    <style>
        body {
            background-color: bisque;
        }

        .pi {
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .espacio {
            height: 80px;
        }
    </style>
</body>

</html>