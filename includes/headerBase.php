<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<ul class="flex bg-white shadow-md rounded-lg p-4 space-x-4">
  <li>
    <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2
              m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1
              0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <span>Inicio</span>
      <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-red-100 text-red-800 rounded-full">99+</span>
    </a>
  </li>
  <li>
    <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>Quienes Somos</span>
      <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">NEW</span>
    </a>
  </li>
  <li>
    <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
      <span>Stats</span>
      <span class="ml-1 inline-flex items-center justify-center px-2 py-0.5 
                   text-xs font-medium bg-blue-100 text-blue-800 rounded-full">5</span>
    </a>
  </li>
</ul>



</body>
</html>
