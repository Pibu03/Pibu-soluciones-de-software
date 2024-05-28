<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["producto_id"])) {
    $producto_id = $_POST["producto_id"];
    $_SESSION["carrito"][$producto_id] = $_SESSION["carrito"][$producto_id] + 1;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
        header {
            background-image: url('prueba1.jpg'); 
            background-size: cover;
            background-position: center;
            color: #fff; 
            padding: 
            text-align: center; 
        }
    </style>
    <header>
        <div class="container">
            <h1>Tienda en Línea de Pibu Soluciones de Software</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="carrito.php">Carrito</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <h2>Carrito de Compra</h2>
            <div class="carrito">
                <ul>
                    <?php
                    $total = 0;
                    if (isset($_SESSION["carrito"])) {
                        foreach ($_SESSION["carrito"] as $producto_id => $cantidad) {
                            $producto = ["nombre" => "Producto {$producto_id}", "precio" => ($producto_id * 10)];
                            $subtotal = $producto["precio"] * $cantidad;
                            $total += $subtotal;
                            echo "<li>{$producto['nombre']} x $cantidad = $subtotal</li>";
                        }
                    }
                    ?>
                </ul>
                <p>Total: $<?php echo $total; ?></p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Pibu Soluciones de Software. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
