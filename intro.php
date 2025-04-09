<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reconstruint - Intro</title>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(255, 255, 255);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
            overflow: hidden;
            flex-direction: column;
        }

        .container {
            position: relative;
            width: 200px;
            height: 180px;
        }

        .brick {
            width: 100px;
            height: 40px;
            box-shadow:
                0 4px 6px rgba(0, 0, 0, 0.3),
                /* sombra principal */
                0 1px 2px rgba(255, 255, 255, 0.1) inset;
            /* luz interna tenue */

            background-image: url('./imagenes/ladrillo2.png');
            /* textura realista */
            background-size: cover;
            margin-left: 1px;
            margin-top: 1px;
            margin-right: 1px;
            background-color: #b94e3a;
            /* color ladrillo clásico */
            background-blend-mode: multiply;
            /* mezcla la textura con el color */
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            position: absolute;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.8s ease-out;
        }

        .camion {
            width: 150px;
            height: 100px;
            background-image: url('./imagenes/dumper.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            position: absolute;
            top: 50%;
            left: 80%;
            opacity: 0;
            transform: translateY(20%);
            z-index: 10;
            /* Muy importante para que pase por encima */
            animation: moverCamion 4s forwards;
        }

        @keyframes moverCamion {
            0% {
                left: 30%;
                opacity: 1;
            }

            100% {
                left: 60%;
                opacity: 1;
            }
        }



        /* Posiciones finales */
        .top {
            top: 98px;
            left: 25%;
            transform: translateX(-50%);
        }

        .left {
            left: -2px;
            bottom: 0;
        }

        .camion {
            left: -2px;
            bottom: 0;
        }

        .right {
            right: -2px;
            bottom: 0;
            margin-left: 1px
        }

        /* Animación cuando entra */
        .visible {
            opacity: 1;
            transform: scale(1);
        }

        .title {
            margin-top: 40px;
            font-size: 28px;
            font-family: 'Bungee Spice', cursive;

            color: rgb(0, 0, 0);
            opacity: 0;
            transform: translateZ(20px);
            transition: all 1s ease;
        }

        .title.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .boton-animado {
            padding: 12px 30px;
            font-size: 20px;
            color: #fff;
            background-color: #ff5722;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            position: relative;
            transform: translateZ(20px);

            opacity: 0;
            overflow: hidden;
            transition: background-color 0.4s ease, transform 0.3s ease;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .boton-animado:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

        /* Efecto animado de brillo al pasar */
        .boton-animado::after {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg,
                    rgba(255, 255, 255, 0.2),
                    rgba(255, 255, 255, 0.6),
                    rgba(255, 255, 255, 0.2));
            transform: skewX(-20deg);
            transition: left 0.6s;
        }

        .boton-animado:hover::after {
            left: 130%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="brick top" id="brick1"></div>
        <div class="brick left" id="brick2"></div>
        <div class="brick right" id="brick3"></div>
    </div>

    <div class="camion" id="camion"></div>
    <div class="title" id="title">RECONS🏗️RUIN🏗️</div>

    <a  href="index.php" class="boton-animado" id="btn" >ACCEDER</a>

    <script>
        // Animar los ladrillos uno por uno
        setTimeout(() => {
            document.getElementById('brick2').classList.add('visible');
        }, 500);

        setTimeout(() => {
            document.getElementById('brick3').classList.add('visible');
        }, 1000);

        setTimeout(() => {
            document.getElementById('brick1').classList.add('visible');
        }, 1500);


        // Mostrar el título al final
        setTimeout(() => {
            const camion = document.getElementById('camion');
            camion.style.opacity = '1';
        }, 2200);
        setTimeout(() => {
            const camion = document.getElementById('btn');
            camion.style.opacity = '1';
        }, 2800);
     
      
     
        setTimeout(() => {
            document.getElementById('title').classList.add('visible');
        }, 2300);

        // Redirigir (opcional)
        // setTimeout(() => {
        //   window.location.href = "home.html";
        // }, 4000);
    </script>

</body>

</html>