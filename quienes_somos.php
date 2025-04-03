<script src="https://cdn.tailwindcss.com"></script>

<style>
  .fade {
    transition: opacity 1s ease-in-out;
  }
</style>

<div class="relative w-full h-[1200px] overflow-hidden rounded-lg shadow-lg mb-8">

  <!-- Texto encima de la imagen -->
  <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white text-center p-8 z-10">
    <h1 class="text-3xl font-bold mb-6">Quiénes Somos</h1>

    <p class="max-w-3xl mb-6 text-lg text-white">
      Somos Paula Benlloch, Saúl Pérez, Hugo Catalán y Fernando Lloris, tres estudiantes apasionados por la tecnología y el desarrollo de software, actualmente cursando el ciclo formativo de <strong>Desarrollo de Aplicaciones Multiplataforma (DAM)</strong> en el <strong>IES CAMP de Morvedre</strong>. Nuestra formación nos ha permitido adquirir conocimientos sólidos en programación, diseño de interfaces y gestión de bases de datos, y hemos decidido aprovechar estas herramientas para desarrollar un proyecto que vaya más allá de lo académico. En lugar de limitarnos a crear una aplicación con fines didácticos, nos propusimos dar un paso más y diseñar una plataforma que pueda ofrecer un valor real a la sociedad, aplicando nuestras capacidades técnicas a una problemática cercana y actual.
    </p>

    <p class="max-w-3xl mb-6 text-lg text-white">
      El proyecto nace como respuesta a la emergencia provocada por la <strong>DANA</strong> que afectó gravemente a diversas zonas de Valencia. Este fenómeno meteorológico dejó a su paso múltiples daños materiales, zonas incomunicadas y cientos de personas afectadas, necesitadas de ayuda urgente y coordinación efectiva. Conscientes de esta realidad, decidimos crear una herramienta digital que facilite la <strong>gestión de ayudas, el registro de voluntarios, y la asignación de recursos y servicios</strong> en función de las necesidades de cada damnificado.
    </p>

    <p class="max-w-3xl text-lg text-white">
      Este proyecto representa mucho más que una práctica académica: es una expresión de nuestro compromiso personal y profesional con nuestra comunidad. Creemos firmemente que la tecnología debe estar al servicio de las personas, y que incluso desde el ámbito estudiantil se pueden impulsar iniciativas capaces de generar un cambio positivo.
    </p>
  </div>

  <!-- Imágenes que rotan -->
  <img id="slider" src="/teleDANA3/imagenes/qn_Somos1.jpg" alt="Imagen de fondo"
    class="absolute inset-0 w-full h-full object-cover fade z-0">
</div>

<script>
  const imagenes = [
    '/teleDANA3/imagenes/qn_Somos1.jpg',
    '/teleDANA3/imagenes/qn_Somos2.jpg'
  ];

  let index = 0;
  const slider = document.getElementById('slider');

  setInterval(() => {
    index = (index + 1) % imagenes.length;
    slider.style.opacity = 0;

    setTimeout(() => {
      slider.src = imagenes[index];
      slider.style.opacity = 1;
    }, 500);
  }, 4000);
</script>
