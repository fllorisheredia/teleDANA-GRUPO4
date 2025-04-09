<?php
include '../includes/db.php';

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexion->query($sql);
?>

<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="css/agregarProductos.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
  <div class="mt-8 overflow-x-auto bg-white p-4 shadow-md rounded-lg">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-bold">Lista de Usuarios</h1>
      <div>
        <label for="busqueda" class="block text-sm font-medium text-gray-900 mb-1">Buscar:</label>
        <div class="flex items-center rounded-md bg-white pl-3 border border-gray-300">
          <input type="text" name="busqueda" id="busqueda"
            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none"
            placeholder="Nombre..">
          <select id="currency" name="currency" class="ml-2 rounded-md py-1.5 pr-7 pl-3 text-base text-gray-500">
            <option>Administrador</option>
            <option>Voluntario</option>
            <option>Damnificado</option>
          </select>
        </div>
      </div>
    </div>

    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="px-4 py-2 text-left">ID</th>
          <th class="px-4 py-2 text-left">Nombre</th>
          <th class="px-4 py-2 text-left">Email</th>
          <th class="px-4 py-2 text-left">Contraseña</th>
          <th class="px-4 py-2 text-left">Rol</th>
          <th class="px-4 py-2 text-left">Tokens</th>
          <th class="px-4 py-2 text-left">Insignias</th>
          <th class="px-4 py-2 text-left">Perfil Público</th>
          <th class="px-4 py-2 text-left">Valoración</th>
          <th class="px-4 py-2 text-left">Acción</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td class="px-4 py-2"><?php echo $row["id"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["nombre"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["email"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["password"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["rol"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["tonkens"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["insignias"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["perfil_publico"]; ?></td>
            <td class="px-4 py-2"><?php echo $row["valoracion"]; ?></td>
            <td>
              <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                class="text-blue-600 hover:underline focus:outline-none">Acciones</button>
              <div id="menu-<?php echo $row['id']; ?>"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
                  <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">⚙️ Opciones de usuario</h2>
                  <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded-lg overflow-hidden">
                    <tbody class="divide-y divide-gray-200">
                      <tr class="hover:bg-gray-100 transition">
                        <td class="p-3">
                          <a href="#"
                            class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg shadow hover:bg-blue-600 transition block text-center">Ver
                            detalles</a>
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-100 transition">
                        <td class="p-3">
                          <a href=/teleDANA3/admin/acciones/anadirTokens.php?id=<?php echo $row['id']; ?>"
                            class="block text-blue-600 font-medium text-center hover:underline transition">➕ Añadir
                            tokens</a>
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-100 transition">
                        <td class="p-3">
                          <input type="number" placeholder="Cantidad"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" />
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-100 transition">
                        <td class="p-3">
                          <a href="cambiarContrasena.php?id=<?php echo $row['id']; ?>"
                            class="block text-blue-600 font-medium text-center hover:underline transition">🔑 Cambiar
                            contraseña</a>
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-100 transition">
                        <td class="p-3">
                          <a href="/admin/eliminarUsuario.php?id=<?php echo $row['id']; ?>

                            class="block text-red-600 font-semibold text-center hover:underline transition"
                            onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">
                            ❌ Eliminar usuario
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="pt-4">
                          <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                            class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 rounded-lg transition">🔙
                            Cerrar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <?php $conexion->close(); ?>

  <script>
    function toggleMenu(id) {
      const menu = document.getElementById(`menu-${id}`);
      menu.classList.toggle('hidden');
    }

    document.addEventListener("click", function (e) {
      document.querySelectorAll("[id^='menu-']").forEach(menu => {
        const content = menu.querySelector("div");
        if (!content.contains(e.target) && !e.target.matches("button")) {
          menu.classList.add("hidden");
        }
      });
    });
  </script>


  <script>
    function eliminarUsuario(id) {
      $sql2 = "DELETE FROM usuarios WHERE id = $id";
      $result2 = $conexion -> query($sql2);
      if ($result2) {
        alert("Usuario eliminado correctamente.");
        location.reload(); // Recargar la página para ver los cambios
      } else {
        alert("Error al eliminar el usuario: ");
      }
    }
  </script>
</body>

</html>