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

    # Los arreglos asosiativos nos permiten acceder a sus valore de una forma mas explicita.

    $alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' => 'mexico');

    # Al igual que en los arreglos indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
    $alex['telefono'] = '111111';

    echo 'El telefono de Alex es: ' . $alex['telefono'];


    $piso1 = array('departamento' => 'a', 'localidad' => 'bernal', 'ambientes' => '2', 'balcon' => 'si');

    echo 'La localidad es ' . $piso1['localidad'] . ' y tiene' . $piso1['ambientes'] . ' ambientes';

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