<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
</head>
<body>
    <header>
        <div class="container">
            <h1>Tienda en Línea de Pibu Soluciones de Software</h1>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="carrito.php">Carrito</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">usuario</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="prueba5.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="prueba5.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="prueba5.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section>
        <div class="container">
            <h2>Productos Disponibles</h2>
            <div class="productos">
                <?php
                $productos = [
                    ["id" => 1, "nombre" => "ProjectEase", "precio" => 99.99, "imagen" => "prueba5.jpeg"],
                    ["id" => 2, "nombre" => "TaskMaster", "precio" => 79.99, "imagen" => "prueba5.jpeg"],
                    ["id" => 3, "nombre" => "TimeTracker", "precio" => 49.99, "imagen" => "prueba5.jpeg"]
                ];

                foreach ($productos as $producto) {
                    echo "<div class='producto'>";
                    echo "<img src='images/{$producto['imagen']}' alt='{$producto['nombre']}'>";
                    echo "<h3>{$producto['nombre']}</h3>";
                    echo "<p>Precio: \${$producto['precio']}</p>";
                    echo "<form action='carrito.php' method='post'>";
                    echo "<input type='hidden' name='producto_id' value='{$producto['id']}'>";
                    echo "<input type='submit' value='Añadir al Carrito'>";
                    echo "</form>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Pibu Soluciones de Software. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
