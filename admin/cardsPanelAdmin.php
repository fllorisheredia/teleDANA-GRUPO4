<?php
session_start();
include '../includes/db.php';

$sql = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 3";
$result = $conexion->query($sql);
$sql2 = "SELECT * FROM productos ORDER BY id DESC LIMIT 3";
$result2 = $conexion->query($sql2);
?>


<script src="https://cdn.tailwindcss.com"></script>

<style>
    .titulo {
        margin: auto;
        width: 50%;
        padding: 50px;
        font-size: 50px;
        font-style: ;
        font-weight: 10px;
    }
</style>


<h1 class="titulo">𝑷𝑨𝑵𝑬𝑳 𝑫𝑬 𝑨𝑫𝑴𝑰𝑵𝑰𝑺𝑻𝑹𝑨𝑪𝑰𝑶𝑵</h1>

<!-- <div class="container mx-auto p-6"></div> -->
<!-- 
    </div>
    </div> -->



<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 ml-2">

    <!-- Tarjeta de Usuarios -->
    <div class="relative">
        <h2 class="text-lg font-bold mb-2 mr-2">Últimos Usuarios</h2>
        <a href="usuarios2.php" class="block rounded-lg border border-gray-300 p-4 shadow-md hover:shadow-lg transition bg-white">
            <table class="w-full text-sm text-left">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta para usuarios (limitado a 3)
                    $sqlUsuarios = "SELECT id, nombre FROM usuarios LIMIT 3";
                    $resultUsuarios = $conexion->query($sqlUsuarios);

                    while ($row = $resultUsuarios->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>
    <!-- Tarjeta de Productos -->
    <div class="relative">
        <h2 class="text-lg font-bold mb-2 ml-2">Últimos Productos</h2>
        <a href="productos2.php" class="block rounded-lg border border-gray-300 p-4 shadow-md hover:shadow-lg transition bg-white">
            <table class="w-full text-sm text-left">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta para usuarios (limitado a 3)
                    $sqlProductos = "SELECT id, nombre, precio_tonkens FROM productos LIMIT 3";
                    $resultProductos = $conexion->query($sqlProductos);

                    while ($row = $resultProductos->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['precio_tonkens']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>
    <!-- Tarjeta de Productos -->
    <div class="relative">
        <h2 class="text-lg font-bold mb-2 ml-2">Últimos Pedidos</h2>
        <a href="pedidos.php" class="block rounded-lg border border-gray-300 p-4 shadow-md hover:shadow-lg transition bg-white">
            <table class="w-full text-sm text-left">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta para usuarios (limitado a 3)
                    $sqlPedidos = "SELECT id, estado, fecha FROM pedidos LIMIT 3";
                    $resultPedidos = $conexion->query($sqlPedidos);

                    while ($row = $resultProductos->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['estado']}</td>
                                <td>{$row['fecha']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>