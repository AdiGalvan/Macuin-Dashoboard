<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALUD 360</title>
  <!-- Agregar el enlace al archivo de estilos de Tailwind CSS -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
  @vite('resources/css/app.css')
  <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  
</head>
<body class="bg-gray-100">
  <!-- Navegación Superior -->
  <nav class="bg-blue-500 p-4 flex items-center justify-between">
    <div>
      <button id="toggleSidebar" class="text-white">
        <i class="fas fa-bars"></i>
      </button>
      <h1 class="text-white text-xl font-semibold">Macuin Dashboard</h1>
    </div>
    <div class="flex items-center space-x-4">
      <span class="text-white">Perfil</span>
      <i class="fas fa-user-circle text-white text-2xl"></i>
    </div>
  </nav>

  <!-- Navegación lateral -->
  <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
      <ul class="space-y-2">
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">

              {{-- <i class="fas fa-calendar-alt mr-2"></i> --}}
              {{-- <i class="fas fa-ticket-alt mr-2"></i> --}}

              <i class="material-icons">ticket</i>
              
              <span>Ticket</span>
              
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Gestion de citas
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Polizas
              </a>
            </li>
          </ul>
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i></i>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              x</svg>

            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Cliente 
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Gast
              </a>
            </li>
            
          </ul>
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i></i>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    <text x="12" y="23" font-size="8" text-anchor="middle">Username</text>
              </svg>

              
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Presupuestos
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Informe médico
              </a>
            </li>
          </ul>
        </li>
        
        <!-- Agrega más enlaces para la navegación lateral -->
      </ul>
    </nav>
  </aside>

  <!-- Contenido principal -->
  <main class="container mx-auto p-4">
    <!-- Aquí puedes agregar el contenido principal de tu página CRM -->
    <h1 class="text-2xl font-bold mb-4">¡Bienvenido al CRM de Mi Empresa!</h1>
    <p>En esta sección encontrarás todo lo que necesitas para administrar tus clientes y ventas de manera eficiente.</p>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Obtener todas las opciones principales con desplegables
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      // Agregar evento de clic a cada opción principal
      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          // Obtener el desplegable asociado a la opción
          const desplegable = opcion.querySelector(".desplegable");

          // Alternar la clase "hidden" para mostrar u ocultar el desplegable
          desplegable.classList.toggle("hidden");
        });
      });

      // Agregar evento de clic al botón de menú para mostrar u ocultar el sidebar
      const toggleSidebarButton = document.getElementById("toggleSidebar");
      const sidebar = document.querySelector("aside");

      toggleSidebarButton.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
      });
    });
  </script>
</body>
</html>
