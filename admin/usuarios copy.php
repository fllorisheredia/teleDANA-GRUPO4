<?php

include '../includes/db.php';
include '../includes/headerAdmin.php';


include '../includes/footer.php';

// Obtener los productos de la base de datos
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexion->query($sql);
?> 



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="css/agregarProductos.css">
</head>
<body>

<h2>Productos Disponibles</h2>
<a href="teleDANA/index.php">Añadir Producto</a>



<!-- Mensaje de presentacion -->
<div class="container mt-5">
  
  <form id="solicitarAyudaForm">

     <div>
      <h1 class="text-center mb-4">Usuarios</h1>
      <p class=" mb-5 text-body">
      <table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Tonkens</th>
        <th>Insignias</th>
        <th>Perfil Publico</th>
        <th>Valoración</th>


    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["rol"]; ?></td>
            <td><?php echo $row["tonkens"]; ?></td>
            <td><?php echo $row["insignias"]; ?></td>
            <td><?php echo $row["perfil_publico"]; ?></td>
            <td><?php echo $row["valoracion"]; ?></td>


            <td><a href="detalle.php?id=<?php echo $row['id']; ?>">Ver Detalles</a></td>
        </tr>
    <?php } ?>

      </p>
     </div>
  </form>
</div>

</table>

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Tonkens</th>
        <th>Insignias</th>
        <th>Perfil Publico</th>
        <th>Valoración</th>

      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle h-12 w-12">
                <img
                  src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                  alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Hart Hagerty</div>
              <div class="text-sm opacity-50">United States</div>
            </div>
          </div>
        </td>
        <td>
          Zemlak, Daniel and Leannon
          <br />
          <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
        </td>
        <td>Purple</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle h-12 w-12">
                <img
                  src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                  alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Brice Swyre</div>
              <div class="text-sm opacity-50">China</div>
            </div>
          </div>
        </td>
        <td>
          Carroll Group
          <br />
          <span class="badge badge-ghost badge-sm">Tax Accountant</span>
        </td>
        <td>Red</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle h-12 w-12">
                <img
                  src="https://img.daisyui.com/images/profile/demo/4@94.webp"
                  alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Marjy Ferencz</div>
              <div class="text-sm opacity-50">Russia</div>
            </div>
          </div>
        </td>
        <td>
          Rowe-Schoen
          <br />
          <span class="badge badge-ghost badge-sm">Office Assistant I</span>
        </td>
        <td>Crimson</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 4 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center gap-3">
            <div class="avatar">
              <div class="mask mask-squircle h-12 w-12">
                <img
                  src="https://img.daisyui.com/images/profile/demo/5@94.webp"
                  alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold">Yancy Tear</div>
              <div class="text-sm opacity-50">Brazil</div>
            </div>
          </div>
        </td>
        <td>
          Wyman-Ledner
          <br />
          <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
        </td>
        <td>Indigo</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
    </tbody>
    <!-- foot -->
    <tfoot>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>




<?php $conexion->close(); ?>

</body>
</html>
