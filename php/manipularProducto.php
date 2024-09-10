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
                        <li><a href="historialPedidos.php">Historial<br/>pedidos</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>


    <div class="espacio"></div>

    <div class="form-container">
        <h2>Agregar Sabor</h2>
        <form action="manipularProducto.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Sabor:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <button type="submit" name="add">Agregar Sabor</button>
        </form>
    </div>

    <div class="form-container">
        <h2>Eliminar Sabor</h2>
        <form action="manipularProducto.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Sabor:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <button type="submit" name="delete">Eliminar Sabor</button>
        </form>
    </div>

    <?php
    // Incluir el archivo de conexión
    include '../BD/conexion.php';

    // Verificar si se envió el formulario de agregar
    if (isset($_POST['add'])) {
        $nombre = $_POST['nombre'];

        // Consulta SQL para insertar el nuevo sabor
        $sql = "INSERT INTO sabores (nombre) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nombre);

        if ($stmt->execute()) {
            echo "<p>Sabor agregado exitosamente.</p>";
        } else {
            echo "<p>Error al agregar el sabor: " . $conn->error . "</p>";
        }

        $stmt->close();
    }

    // Verificar si se envió el formulario de eliminar
    if (isset($_POST['delete'])) {
        $nombre = $_POST['nombre'];

        // Consulta SQL para eliminar el sabor por nombre
        $sql = "DELETE FROM sabores WHERE nombre = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nombre);

        if ($stmt->execute()) {
            echo "<p>Sabor eliminado exitosamente.</p>";
        } else {
            echo "<p>Error al eliminar el sabor: " . $conn->error . "</p>";
        }

        $stmt->close();
    }

    ?>
    </section>
    </main>

    

    <style>
        body {
            background-image: url('../img/backgroundHelados2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .espacio {
            height: 150px;
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

        .form-container {
            background-color: #fff5e1;
            /* Fondo blanco-anaranjado suave */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            text-align: center;
            color: #d94e1f;
            /* Color anaranjado oscuro */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #d94e1f;
            /* Botón anaranjado */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #f76b3a;
            /* Botón anaranjado más claro al pasar el mouse */
        }

        p {
            text-align: center;
            color: #d94e1f;
        }
    </style>
</body>

</html>