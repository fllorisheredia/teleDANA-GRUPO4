
  <ul class="flex bg-gray-500 shadow-md rounded-lg p-4 space-x-4">
    <li>
      <a href="#" class="flex items-center space-x-2 text-gray-700 hover:bg-orange-400 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/indexBase.php')">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2
              m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1
              0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="font-mono font-semibold">Inicio</span>

      </a>
    </li>
    <li>
      <a class="flex items-center space-x-2 text-gray-700 hover:bg-orange-400 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/quienes_somos.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
        </svg>
        <span class="font-mono font-semibold">Quienes Somos</span>
      </a>
    </li>

  <!-- Logo centrado -->
  <li class="flex-grow text-center">
    <img src="/teleDANA3/imagenes/logo5.png" alt="Logo" class="h-14 mx-auto">
  </li>

    <li>
      <a  href="/teleDANA3/login.php" class="flex items-center ml-2 space-x-2 text-gray-700 hover:bg-orange-400 rounded-lg p-2">
        <!-- onclick="cargarPagina('/teleDANA3/login.php')" -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M13 21q-.425 0-.712-.288T12 20t.288-.712T13 19h6V5h-6q-.425 0-.712-.288T12 4t.288-.712T13 3h6q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm-1.825-8H4q-.425 0-.712-.288T3 12t.288-.712T4 11h7.175L9.3 9.125q-.275-.275-.275-.675t.275-.7t.7-.313t.725.288L14.3 11.3q.3.3.3.7t-.3.7l-3.575 3.575q-.3.3-.712.288T9.3 16.25q-.275-.3-.262-.712t.287-.688z" />
        </svg>
        <span class="font-mono font-semibold">Inciar Sesion</span>

      </a>
    </li>

    <li>
      <a href="#" class="flex items-center ml-2 space-x-2 text-gray-700 hover:bg-orange-400 rounded-lg p-2"
        onclick="cargarPagina('/teleDANA3/registro.php')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5.8 10C5.4 8.8 4.3 8 3 8c-1.7 0-3 1.3-3 3s1.3 3 3 3c1.3 0 2.4-.8 2.8-2H7v2h2v-2h2v-2zM3 12c-.6 0-1-.4-1-1s.4-1 1-1s1 .4 1 1s-.4 1-1 1m13-8c-2.2 0-4 1.8-4 4s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4m0 6.1c-1.2 0-2.1-.9-2.1-2.1s.9-2.1 2.1-2.1s2.1.9 2.1 2.1s-.9 2.1-2.1 2.1m0 2.9c-2.7 0-8 1.3-8 4v3h16v-3c0-2.7-5.3-4-8-4m6.1 5.1H9.9V17c0-.6 3.1-2.1 6.1-2.1s6.1 1.5 6.1 2.1z"/></svg>
                <span class="font-mono font-semibold">Registrarse</span>

      </a>
    </li>
  
  </ul>

  <iframe id="visor" 
    class="w-full h-screen mt-4 border-2 border-gray-300 rounded-lg shadow-lg" frameborder="0">
    </iframe>

    <script>
    function cargarPagina(url) {
      document.getElementById("visor").src = url;
    }
  </script>

