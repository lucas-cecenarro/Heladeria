<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WF462BJ');
    </script>

    <meta name='copyright' content='Club de Helados Jauja' />
    <title>Club de Helados Cecenarro</title>
    <meta name='Description' content='Club de Helados Jauja' />
    <meta name="facebook-domain-verification" content="wdtrtq9hho5tbgbqco92pgrohe9pya" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/css/base.css" rel="stylesheet" type="text/css" />
    <link href="../img/LogoClubJauja.png" rel="icon" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li><a title="Ingresá a ClubJauja"></i> Ingresá</a></li>
                </ul>
                <div id="cajaMenu">
                    <div class="iconoMenu">
                        <div><i class="fa fa-bars"></i></div>
                    </div>
                    <ul class="menuSuperior">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="productos.php">Nuestros<br />productos</a></li>
                        <li><a href="manipularProducto.php">Manipular<br />productos</a></li>
                        <li><a href="realizarPedido.php"></i> Realizar<br />pedidos</a></li>
                        <li><a href="historialPedidos.php">Historial<br />pedidos</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>


    <div class="espacio"></div>

    <?php
    // Incluir el archivo de conexión y consulta
    include '../BD/conexion.php';

    // Consulta SQL para obtener los datos de la tabla sabores
    $sql = "SELECT id_sabores, nombre FROM sabores";
    $result = $conn->query($sql);

    // Verificar si hay resultados y mostrarlos
    if ($result->num_rows > 0) {

        echo "<ul class= 'titulo-sabores'>SABORES DISPONIBLES!</ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li class='sabores-item'>"  . $row["nombre"] . "</li>";
        }
    } else {
        echo "0 resultados";
    }

    ?>


    <?php
    // Incluir el archivo de conexión y consulta
    include '../BD/conexion.php';

    // Consulta SQL para obtener los datos de la tabla sabores
    $sql = "SELECT id_medidas, medidas, cantidad FROM medidas";
    $result = $conn->query($sql);

    // Verificar si hay resultados y mostrarlos
    if ($result->num_rows > 0) {

        echo "<ul class= 'titulo-medidas'>TAMAÑOS DISPONIBLES!</ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li class='medidas-item'><span class='medida'>" . $row["medidas"] . "</span> <span class='cantidad'>" . $row["cantidad"] . "</span></li>";
        }
    } else {
        echo "<p>No hay tamaños disponibles en este momento.</p>";
    }
    ?>

    <div class="espacio"></div>


   

    <style>
        body {
            background-image: url('../img/backgroundHelados.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .espacio {
            height: 150px;
        }

        .titulo-sabores,
        .titulo-medidas {
            font-size: 24px;
            font-weight: bold;
            color: #ff6f00;
            /* Naranja intenso */
            text-align: center;
            margin-bottom: 20px;
        }

        .sabores-item,
        .medidas-item {
            background-color: #fff;
            /* Fondo blanco para cada item */
            border: 2px solid #ff6f00;
            /* Borde naranja */
            border-radius: 10px;
            padding: 15px;
            margin: 10px auto;
            width: 80%;
            max-width: 600px;
            /* Ancho máximo para los items */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sabores-item:hover,
        .medidas-item:hover {
            background-color: #ffebcc;
            /* Color de fondo al pasar el ratón */
            transform: scale(1.02);
            /* Efecto de escala al pasar el ratón */
        }

        .medidas-item {
            display: flex;
            justify-content: space-between;
            /* Espacio entre medida y cantidad */
            align-items: center;
            font-size: 18px;
        }

        .medida {
            font-weight: bold;
            color: #ff6f00;
            /* Naranja intenso para la medida */
        }

        .cantidad {
            color: #ff8c00;
            /* Naranja más claro para la cantidad */
        }

        footer {
            background-color: #ff6f00;
            /* Naranja intenso */
            color: #fff;
            text-align: center;
            padding: 5px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</body>

</html>