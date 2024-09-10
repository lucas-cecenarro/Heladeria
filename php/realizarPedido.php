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

    <?php
    // Incluir el archivo de conexión
    include '../BD/conexion.php';

    // Inicializar variables para errores y éxito
    $error = "";
    $success = "";

    // Verificar si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tamaño = $_POST['tamaño'];
        $sabores = isset($_POST['sabores']) ? $_POST['sabores'] : [];

        // Definir los límites de sabores según el tamaño
        $limitesSabores = [
            '2' => 2, // Chico
            '3' => 3, // Mediano
            '4' => 4  // Grande
        ];

        // Definir los nombres de los tamaños
        $tamañoNombres = [
            '2' => 'Chico',
            '3' => 'Mediano',
            '4' => 'Grande'
        ];

        // Obtener el nombre del tamaño seleccionado
        $tamañoNombre = $tamañoNombres[$tamaño];


        // Verificar que el número de sabores seleccionados no exceda el límite
        if (count($sabores) > $limitesSabores[$tamaño]) {
            $error = "Has seleccionado más sabores de los permitidos para el tamaño elegido.";
        } elseif (count($sabores) < $limitesSabores[$tamaño]) {
            $error = "Por favor selecciona la cantidad exacta de sabores permitidos.";
        } else {
            // Unir los sabores con una coma y espacio
            $saboresCount = count($sabores);
            if ($saboresCount > 1) {
                // Combinar todos menos el último sabor
                $primerosSabores = array_slice($sabores, 0, -1);
                // Último sabor
                $ultimoSabor = end($sabores);
                // Crear la cadena final con "y" antes del último sabor
                $saboresTexto = implode(", ", $primerosSabores) . " y " . $ultimoSabor;
            } else {
                // Solo hay un sabor
                $saboresTexto = $sabores[0];
            }

            $success = "Pedido realizado con éxito. </br> Helado $tamañoNombre de " . $saboresTexto;


            // Registrar el pedido en la base de datos
            $saboresSeleccionados = implode(", ", $sabores);
            $sql = "INSERT INTO pedidos (sabor, medida) VALUES (?, ?)";

            // Preparar y ejecutar la consulta
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ss", $saboresSeleccionados, $tamañoNombre);
                if ($stmt->execute()) {
                } else {
                    // Error al registrar el pedido
                    echo "Error al registrar el pedido: " . $stmt->error;
                }
                $stmt->close();
            } else {
                // Error en la preparación de la consulta
                echo "Error en la preparación de la consulta: " . $conn->error;
            }
        }
    }


    // Obtener sabores de la base de datos
    $sqlSabores = "SELECT id_sabores, nombre FROM sabores";
    $resultSabores = $conn->query($sqlSabores);
    ?>

    <div class="form-container">
        <h2>Realizar Pedido</h2>

        <!-- Mostrar errores o éxito -->
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif ($success): ?>
            <p class="success"><?php echo $success; ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="tamaño">Seleccionar Tamaño:</label>
                <select id="tamaño" name="tamaño">
                    <option value="2">Chico (2 sabores)</option>
                    <option value="3">Mediano (3 sabores)</option>
                    <option value="4">Grande (4 sabores)</option>
                </select>
            </div>

            <div class="form-group sabores-group">
                <label>Seleccionar Sabores:</label>
                <?php while ($row = $resultSabores->fetch_assoc()) { ?>
                    <label>
                        <input type="checkbox" name="sabores[]" value="<?php echo $row['nombre']; ?>">
                        <?php echo $row['nombre']; ?>
                    </label><br>
                <?php } ?>
            </div>

            <button type="submit">Realizar Pedido</button>
        </form>
    </div>

    <div class="espacio"></div>

    

    <style>
        body {
            background-image: url('../img/backgroundHelados4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .espacio {
            height: 150px;
        }

        .form-container {
            background-color: #fff5e1;
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
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        select,
        button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #d94e1f;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #f76b3a;
        }

        .sabores-group {
            margin-top: 10px;
        }

        .error {
            color: red;
            text-align: center;
        }

        .success {
            color: green;
            text-align: center;
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