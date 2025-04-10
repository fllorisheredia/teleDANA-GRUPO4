<!-- cardsPanelAdmin.php -->

<h1 class="text-center text-4xl font-bold my-8 text-gray-700">Panel de Administración</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 pb-10">
    
    <!-- Tarjeta de Usuarios -->
    <div class="bg-white rounded-lg shadow-md p-4 border border-gray-200">
        <h2 class="text-lg font-semibold mb-3">Últimos Usuarios</h2>
        <a href="usuarios2.php" class="block">
            <table class="w-full text-sm text-left">
                <thead class="text-gray-600">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sqlUsuarios = "SELECT id, nombre FROM usuarios LIMIT 3";
                    $resultUsuarios = $conexion->query($sqlUsuarios);
                    while ($row = $resultUsuarios->fetch_assoc()) {
                        echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>

    <!-- Tarjeta de Productos -->
    <div class="bg-white rounded-lg shadow-md p-4 border border-gray-200">
        <h2 class="text-lg font-semibold mb-3">Últimos Productos</h2>
        <a href="productos2.php" class="block">
            <table class="w-full text-sm text-left">
                <thead class="text-gray-600">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sqlProductos = "SELECT id, nombre, precio_tonkens FROM productos LIMIT 3";
                    $resultProductos = $conexion->query($sqlProductos);
                    while ($row = $resultProductos->fetch_assoc()) {
                        echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td><td>{$row['precio_tonkens']}</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>

    <!-- Tarjeta de Pedidos -->
    <div class="bg-white rounded-lg shadow-md p-4 border border-gray-200">
        <h2 class="text-lg font-semibold mb-3">Últimos Pedidos</h2>
        <a href="pedidos.php" class="block">
            <table class="w-full text-sm text-left">
                <thead class="text-gray-600">
                    <tr>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sqlPedidos = "SELECT id, estado, fecha FROM pedidos LIMIT 3";
                    $resultPedidos = $conexion->query($sqlPedidos);
                    while ($row = $resultPedidos->fetch_assoc()) {
                        echo "<tr><td>{$row['id']}</td><td>{$row['estado']}</td><td>{$row['fecha']}</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </a>
    </div>
</div>
