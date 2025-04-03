<?php session_start();
// include "titulo.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<ul class="flex bg-gray-500 shadow-md rounded-lg p-4 space-x-4">
<li>
      <a href="../admin/indexAdmin.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">


        <!--Icono  -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m21.664 10.252l-9-8a1 1 0 0 0-1.328 0l-9 8a1 1 0 0 0 1.328 1.496L4 11.449V21a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-9.551l.336.299a1 1 0 0 0 1.328-1.496M9.184 20a2.982 2.982 0 0 1 5.632 0Zm1.316-5.5A1.5 1.5 0 1 1 12 16a1.5 1.5 0 0 1-1.5-1.5M18 20h-1.101a5 5 0 0 0-2.259-3.228a3.47 3.47 0 0 0 .86-2.272a3.5 3.5 0 0 0-7 0a3.47 3.47 0 0 0 .86 2.272A5 5 0 0 0 7.1 20H6V9.671l6-5.333l6 5.333Z"/></svg> 
       
        <span>Inicio</span>
      </a>
    </li>
    <li>
      <a href="../admin/usuarios.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
        
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 19.75c0-2.09-1.67-5.068-4-5.727m-2 5.727c0-2.651-2.686-6-6-6s-6 3.349-6 6m9-12.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0m3 3a3 3 0 1 0 0-6"/></svg>        </svg> 
        <span>Usuarios</span>
        <!-- <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-red-100 text-red-800 rounded-full"></span> -->
      </a>
    </li>
    <li>
      <a href="../admin/productos.php" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22 3H2v6h1v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9h1zM4 5h16v2H4zm15 15H5V9h14zM9 11h6a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2"/></svg>
        <span>Administrar Productos</span>
        <!-- <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">NEW</span> -->
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4L7 6L5 8l2 2l2 2l.7-.7l.7-.7l-1.3-1.3L7.8 8l1.3-1.3l1.3-1.3l-.7-.7zm6 0l-.7.7l-.7.7l1.3 1.3L16.2 8l-1.3 1.3l-1.3 1.3l.7.7l.7.7l2-2l2-2l-2-2zm5.977 15.09l-.388-1.532a.75.75 0 0 0-.356-.466a.76.76 0 0 0-.587-.072l-4.552 1.284L12 17l3.915-1.003a1.9 1.9 0 0 0 .558-.893L16.166 14L8 15H3v6h5l4.455.964a3.2 3.2 0 0 0 .727-.017l7.26-1.954a.76.76 0 0 0 .454-.344a.74.74 0 0 0 .081-.56M6 20H4v-4h2zm6.922.982a.6.6 0 0 1-.138.018a.5.5 0 0 1-.115-.012L8 19.963V16.02l7.329-.908L10 17l4.721 2.232l.317.127l.328-.093l4.316-1.217l.264 1.042Z"/></svg>
        <span>Administar Servicios</span>
        <!-- <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-blue-100 text-blue-800 rounded-full">5</span> -->
      </a>
    </li>
  </ul>



</body>

</html>