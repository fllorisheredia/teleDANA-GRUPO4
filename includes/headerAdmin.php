<?php
session_start();
include '../includes/db.php';

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title class="font-mono font-semibold">Administracion Reconstruim</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

  <ul class="flex bg-gray-500 shadow-md rounded-lg p-4 space-x-4">
    <li>
      <a  class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/admin/cardsPanelAdmin.php')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2
              m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1
              0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="font-mono font-semibold">Inicio</span>
      </a>
    </li>

    <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/admin/usuarios.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">Administrar Usuarios</span>
      </a>
    </li>

    <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/admin/productos2.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">Administrar Productos</span>
      </a>
    </li>




    <!-- Aquí el logo -->
  <!-- Logo centrado -->
  <li class="flex-grow text-center">
    <img src="/teleDANA3/imagenes/logo5.png" alt="Logo" class="h-12 mx-auto">
  </li>

  <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/admin/usuarios.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">Administrar Servicios</span>
      </a>
    </li>
    <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/admin/pedidos.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">Administrar Pedidos</span>
      </a>
    </li>
<!-- 
    <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/quienes_somos.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">
        <?php echo htmlspecialchars($_SESSION['nombre'] ?? 'Invitado'); ?>
        </span>
      </a>
    </li> -->

    <!-- Este dropdown desplegable  muestra el nombre del usuario cmo un menu desplegable ademas de mostrar las opciones  -->

<li>
<div class="relative inline-block text-left">
  <!-- class="font-mono font-semibold" -->
  <div>
    <button type="button" id="menu-button"
      class="flex items-center space-x-2 text-gray-700 hover:bg-blue-300 rounded-lg p-2 font-mono font-semibold"
      aria-expanded="false" aria-haspopup="true">
      <?php echo htmlspecialchars($_SESSION['nombre'] ?? 'Invitado'); ?>

      <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd"
          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
          clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <!-- Menú desplegable -->
  <div id="dropdown-menu"
    class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white ring-1 shadow-lg ring-black/5 hidden">
    <div class="py-1" role="none">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Configuración</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Soporte</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Licencia</a>
      <form method="POST" action="#" role="none">
        <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem">
          Cerrar sesión
        </button>
      </form>
    </div>
  </div>
</div>
</li>

  </ul>

  <iframe id="visor" "
    class="w-full h-screen mt-4 border-2 border-gray-300 rounded-lg shadow-lg" frameborder="0">
  </iframe>

  <script>
    function cargarPagina(url) {
      document.getElementById("visor").src = url;
    }
  </script>

<script>
  const button = document.getElementById('menu-button');
  const menu = document.getElementById('dropdown-menu');

  button.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita cierre inmediato si haces clic en el botón
    menu.classList.toggle('hidden');
  });

  // Cerrar si haces clic fuera
  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target)) {
      menu.classList.add('hidden');
    }
  });
</script>


</body>
</html>
