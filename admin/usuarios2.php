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
  <div class="mt-8 bg-white p-4 shadow-md rounded-lg">
    <div class="flex justify-between items-center mb-6">
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

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="bg-white rounded-lg shadow-lg p-4 relative">
          <h2 class="text-lg font-bold text-gray-800 mb-2"><?php echo $row["nombre"]; ?> (ID: <?php echo $row["id"]; ?>)</h2>
          <p><strong>Email:</strong> <?php echo $row["email"]; ?></p>
          <p><strong>Contraseña:</strong> <?php echo $row["password"]; ?></p>
          <p><strong>Rol:</strong> <?php echo $row["rol"]; ?></p>
          <p><strong>Tokens:</strong> <?php echo $row["tonkens"]; ?></p>
          <p><strong>Insignias:</strong> <?php echo $row["insignias"]; ?></p>
          <p><strong>Perfil Público:</strong> <?php echo $row["perfil_publico"]; ?></p>
          <p><strong>Valoración:</strong> <?php echo $row["valoracion"]; ?></p>
          <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
            class="mt-4 w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition">⚙️ Acciones</button>

          <!-- Menú flotante -->
          <div id="menu-<?php echo $row['id']; ?>" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
              <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">⚙️ Opciones de usuario</h2>
              <div class="space-y-3">
                <a href="#"
                  class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg shadow hover:bg-blue-600 transition block text-center">Ver detalles</a>
                <a href="/teleDANA3/admin/acciones/anadirTokens.php?id=<?php echo $row['id']; ?>"
                  class="block text-blue-600 font-medium text-center hover:underline transition">➕ Añadir tokens</a>
                <input type="number" placeholder="Cantidad"
                  class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition" />
                <a href="cambiarContrasena.php?id=<?php echo $row['id']; ?>"
                  class="block text-blue-600 font-medium text-center hover:underline transition">🔑 Cambiar contraseña</a>
                <a href="/admin/eliminarUsuario.php?id=<?php echo $row['id']; ?>"
                  class="block text-red-600 font-semibold text-center hover:underline transition"
                  onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">
                  ❌ Eliminar usuario
                </a>
                <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                  class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 rounded-lg transition">🔙
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
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
</body>
