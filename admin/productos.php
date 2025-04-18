<?php
include '../includes/db.php';
// include '../includes/headerAdmin.php';

// Obtener los usuarios
$sql = "SELECT * FROM productos ORDER BY id DESC";
$result = $conexion->query($sql);
?>


<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="css/agregarProductos.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class=" mt-8 overflow-x-auto bg-white p-4 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>

                    <th class="px-4 py-2 text-left"> ID </th>
                    <th class="px-4 py-2 text-left">Usuario Propietario</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Descripcion</th>
                    <th class="px-4 py-2 text-left">Precio Tokens</th>
                    <th class="px-4 py-2 text-left">Categoria</th>
                    <th class="px-4 py-2 text-left">Stock</th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="px-4 py-2"><?php echo $row["id"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["usuario_id"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["nombre"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["descripcion"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["precio_tonkens"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["categoria"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["stock"]; ?></td>
                        <td>
                            <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                                class="text-blue-600 hover:underline focus:outline-none">
                                Acciones
                            </button>
8

                        </td>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Menú centrado en pantalla -->
        <!-- <div id="menu-<?php echo $row['id']; ?>"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-300 max-w-full p-6 space-y-3">
                <h2 class="text-lg font-semibold text-gray-800">Opciones de usuario</h2>



                <button  class="bg-blue-500">Ver detalles</button>



                <a href="añadirTokens.php?id=
                <?php echo $row['id']; ?>"
                    class="block text-blue-600 hover:underline">Añadir tokens                
                </a>
                <input type="text" placeholder="Cantidad">

                <a href="cambiarContrasena.php?id=<?php echo $row['id']; ?>"
                    class="block text-blue-600 hover:underline">Cambiar contraseña</a>
                <a href="eliminarUsuario.php?id=<?php echo $row['id']; ?>"
                    class="block text-red-600 hover:underline">Eliminar usuario</a>
                <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                    class="w-full mt-4 bg-gray-200 hover:bg-gray-300 text-gray-800 py-1.5 rounded">
                    Cerrar
                </button>
            </div>
        </div>

    </div> -->
    <div id="menu-<?php echo $row['id']; ?>"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-300 max-w-full p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Opciones de usuario</h2>

        <table class="w-full table-auto border border-gray-300">
            <tbody>
                <tr>
                    <td class="p-2 border-b">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                            Ver detalles
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 border-b">
                        <a href="añadirTokens.php?id=<?php echo $row['id']; ?>"
                            class="block text-blue-600 hover:underline w-full text-center">Añadir tokens</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 border-b">
                        <input type="text" placeholder="Cantidad" class="w-full border border-gray-300 px-2 py-1 rounded" />
                    </td>
                </tr>
                <tr>
                    <td class="p-2 border-b">
                        <a href="cambiarContrasena.php?id=<?php echo $row['id']; ?>"
                            class="block text-blue-600 hover:underline w-full text-center">Cambiar contraseña</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 border-b">
                        <a href="eliminarUsuario.php?id=<?php echo $row['id']; ?>"
                            class="block text-red-600 hover:underline w-full text-center">Eliminar usuario</a>
                    </td>
                </tr>
                <tr>
                    <td class="p-2">
                        <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                            class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded">
                            Cerrar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


    <?php include '../includes/footer.php'; ?>
    <?php $conexion->close(); ?>





    <script>
        function toggleMenu(id) {
            const menu = document.getElementById(`menu-${id}`);
            menu.classList.toggle('hidden');
        }

        // Cierra si haces clic fuera del contenido
        document.addEventListener("click", function (e) {
            document.querySelectorAll("[id^='menu-']").forEach(menu => {
                const content = menu.querySelector("div");
                if (!content.contains(e.target) && !e.target.matches("button")) {
                    menu.classList.add("hidden");
                }
            });
        });
    </script>



</body>

</html>