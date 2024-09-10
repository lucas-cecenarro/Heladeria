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
    // Incluir el archivo de conexión a la base de datos
    include '../BD/conexion.php';

    // Consulta SQL para obtener todos los pedidos
    $sql = "SELECT id_pedido, sabor, medida FROM pedidos ORDER BY id_pedido DESC";
    $result = $conn->query($sql);

    // Mostrar encabezado
    echo "<h1 class='titulo-historial'>Historial de Pedidos</h1>";

    // Verificar si la consulta tuvo éxito
    if ($result) {
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            echo "<table class='historial-table'>
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Sabor</th> 
                            <th>Tamaño</th>
                        </tr>
                    </thead>
                    <tbody>";

            // Mostrar cada pedido en una fila de la tabla
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["id_pedido"]) . "</td>
                        <td>" . htmlspecialchars($row["sabor"]) . "</td>
                        <td>" . htmlspecialchars($row["medida"]) . "</td>   
                      </tr>";
            }

            echo "</tbody>
                  </table>";
        } else {
            echo "<p>No hay pedidos en el historial.</p>";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
    ?>

    <div class="espacio"></div>



    <style>
        body {
            background-image: url('../img/backgroundHelados5.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .espacio {
            height: 150px;
        }

        .titulo-historial {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Fondo blanco */
            border: 2px solid #ff6600;
            /* Contorno anaranjado */
            padding: 10px;
            /* Espaciado alrededor del texto */
            border-radius: 5px;
            /* Bordes redondeados para un efecto más suave */

            width: auto;
            /* Ajusta el ancho al contenido del texto */
        }

        .historial-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        /* Fondo semitransparente para los encabezados */
        .historial-table th {
            background-color: rgba(255, 102, 0, 0.8);
            /* Fondo anaranjado semitransparente */
            color: #fff;
            /* Color del texto en blanco */
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        /* Fondo semitransparente para las celdas */
        .historial-table td {
            background-color: rgba(255, 255, 255, 0.8);
            /* Fondo blanco semitransparente */
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        /* Fondo alterno para las filas */
        .historial-table tr:nth-child(even) td {
            background-color: rgba(240, 240, 240, 0.8);
            /* Fondo gris claro semitransparente */
        }
    </style>

</body>

</html>