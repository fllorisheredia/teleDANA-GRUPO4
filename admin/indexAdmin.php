<?php

include '../includes/db.php';
// include '../includes/headerAdmin.php';

include 'sidebarAdmin.php';

// include '../includes/footer.php';
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracion</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!-- Contenido principal -->
<body class="flex flex-col min-h-screen bg-gray-900 text-black">
    
    <!-- Contenido principal -->
    <main class="flex-1 pl-64 pt-20">
        <div id="cards-panel">
            <?php include 'cardsPanelAdmin.php'; ?>
        </div>

        <div id="iframe-container" class="hidden">
            <iframe id="contenido" class="w-full h-[calc(100vh-160px)] rounded-lg border border-gray-300"
                frameborder="0"></iframe>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-center py-4 text-sm text-gray-400 pl-64">
        <?php include '../includes/footer.php'; ?>
    </footer>

    <script>
        function cargarPagina(url) {
            document.getElementById("cards-panel").style.display = "none";
            document.getElementById("iframe-container").classList.remove("hidden");
            document.getElementById("contenido").src = url;
        }
    </script>

</body>
</html>