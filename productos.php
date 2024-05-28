<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Pibu Soluciones de Software</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Pibu Soluciones de Software</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="carrito.php">Carrito</a></li>
                    <li><a href="login.php">usuario</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <h2>Nuestros Productos</h2>
            <div class="productos">
                <?php
                $productos = [
                    [
                        "nombre" => "producto1",
                        "precio" => 00,
                        "descripcion" => "Una solución completa para la gestión eficiente de proyectos.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto2",
                        "precio" => 00,
                        "descripcion" => "Potente herramienta para la asignación y seguimiento de tareas.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "prodcuto3",
                        "precio" => 00,
                        "descripcion" => "Controla el tiempo dedicado a cada tarea y mejora la productividad.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto4",
                        "precio" => 00,
                        "descripcion" => "Detecta y soluciona errores en tu software de forma rápida y eficaz.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto5",
                        "precio" => 00,
                        "descripcion" => "Protege tus datos sensibles con nuestra solución de seguridad avanzada.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto6",
                        "precio" => 00,
                        "descripcion" => "Fomenta la colaboración y la comunicación dentro de tu equipo de trabajo.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto7",
                        "precio" => 00,
                        "descripcion" => "Recopila comentarios y opiniones de tus clientes para mejorar tus productos.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto8",
                        "precio" => 00,
                        "descripcion" => "Impulsa tus ventas y optimiza tu estrategia comercial con nuestra herramienta especializada.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto9",
                        "precio" => 00,
                        "descripcion" => "Lleva tu marketing al siguiente nivel con nuestras poderosas herramientas de análisis y gestión.",
                        "imagen" => "prueba2.jpeg"
                    ],
                    [
                        "nombre" => "producto10",
                        "precio" => 00,
                        "descripcion" => "Ofrece un servicio de atención al cliente excepcional con nuestra plataforma integral.",
                        "imagen" => "prueba2.jpeg"
                    ],
                ];
                foreach ($productos as $producto) {
                    echo "<div class='producto'>";
                    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
                    echo "<h3>{$producto['nombre']}</h3>";
                    echo "<p>Precio: ${$producto['precio']}</p>";
                    echo "<p>{$producto['descripcion']}</p>";
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
</body>
</html>
