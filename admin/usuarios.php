<?php
include '../includes/db.php';
include '../includes/headerAdmin.php';

// Obtener los usuarios
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="css/agregarProductos.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

  <div class=" mt-8 overflow-x-auto bg-white p-4 shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Lista de Usuarios</h1>

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
                class="text-blue-600 hover:underline focus:outline-none">
                Acciones
              </button>

              <!-- Menú centrado en pantalla (por cada usuario) -->
              <div id="menu-<?php echo $row['id']; ?>"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-lg shadow-lg w-80 max-w-full p-6 space-y-3">
                  <h2 class="text-lg font-semibold text-gray-800">Opciones de usuario <?php echo $row["nombre"]  ?></h2>


                  <button
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200"
                    
                    onclick="window.location.href='usuarios.php'"
                    
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M11 9c0 1.66-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3m3 11H2v-2c0-2.21 2.69-4 6-4s6 1.79 6 4M7 9c0 .55.45 1 1 1s1-.45 1-1s-.45-1-1-1s-1 .45-1 1m-3 9h8c0-1.1-1.79-2-4-2s-4 .9-4 2m18-6v2h-9v-2m9-4v2h-9V8m9-4v2h-9V4Z" />
                    </svg>Ver detalles
                  </button>

                  <button
                    class="bg-green-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <path
                          d="M3 10V8a2 2 0 0 1 2-2h2m-4 4c1.333 0 4-.8 4-4m-4 4v4m18-4V8a2 2 0 0 0-2-2h-2m4 4c-1.333 0-4-.8-4-4m4 4v2M7 6h10M3 14v2a2 2 0 0 0 2 2h2m-4-4c1.333 0 4 .8 4 4m0 0h4" />
                        <circle cx="12" cy="12" r="2" />
                        <path d="M18 15v3m0 3v-3m0 0h-3m3 0h3" />
                      </g>
                    </svg>

                    Añadir tokens</button>


                  <button 
                  class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2.5 18.5v-1h19v1zm.535-5.973l-.762-.442l.965-1.693h-1.93v-.884h1.93l-.965-1.642l.762-.443L4 9.066l.966-1.643l.761.443l-.965 1.642h1.93v.884h-1.93l.965 1.693l-.762.442L4 10.835zm8 0l-.762-.442l.966-1.693H9.308v-.884h1.93l-.965-1.642l.762-.443L12 9.066l.966-1.643l.761.443l-.965 1.642h1.93v.884h-1.93l.965 1.693l-.762.442L12 10.835zm8 0l-.762-.442l.966-1.693h-1.931v-.884h1.93l-.965-1.642l.762-.443L20 9.066l.966-1.643l.761.443l-.965 1.642h1.93v.884h-1.93l.965 1.693l-.762.442L20 10.835z"/></svg>

                  Cambiar contraseña
                </button>


                  <button 
                  class="bg-red-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200"
               
                  >
                  
                  
                  
                  
                  
                  
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g class="user-remove-outline"><g fill="currentColor" fill-rule="evenodd" class="Vector" clip-rule="evenodd"><path d="M9.5 10a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 2a4 4 0 1 0 0-8a4 4 0 0 0 0 8m6.793-2.707a1 1 0 0 1 1.414 0L19 10.586l1.293-1.293a1 1 0 1 1 1.414 1.414L20.414 12l1.293 1.293a1 1 0 0 1-1.414 1.414L19 13.414l-1.293 1.293a1 1 0 0 1-1.414-1.414L17.586 12l-1.293-1.293a1 1 0 0 1 0-1.414M3.354 15.176C4.311 13.836 5.77 13 7.643 13h3.714c1.873 0 3.332.837 4.289 2.176C16.577 16.479 17 18.202 17 20a1 1 0 1 1-2 0c0-1.516-.36-2.793-.981-3.661c-.595-.832-1.457-1.339-2.662-1.339H7.643c-1.205 0-2.067.507-2.662 1.339c-.62.868-.981 2.145-.981 3.66a1 1 0 1 1-2 0c0-1.797.422-3.52 1.354-4.823"/><path d="M2 20a1 1 0 0 1 1-1h12.969a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1"/></g></g></svg>
                  Eliminar usuario
                </button>



                  <button onclick="toggleMenu(<?php echo $row['id']; ?>)"
                    class="w-full mt-4 bg-gray-200 hover:bg-gray-300 text-gray-800 py-1.5 rounded">
                    Cerrar
                  </button>
                </div>
              </div>
            </td>


          </tr>
        <?php } ?>
      </tbody>
    </table>




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