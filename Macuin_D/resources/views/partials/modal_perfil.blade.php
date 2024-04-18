
<style>
  /* Estilo personalizado para los botones */
  .custom-button {
    background-color: #020018;
  }
</style>
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">

<!-- Modal -->
<div id="userProfileModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-gradient-to-br from-teal-500 to-blue-500 rounded-lg p-8 max-w-xl mx-auto shadow-lg">
  
  <h1 class="text-4xl font-bold text-center text-white mb-2" style="font-family: 'Arial', sans-serif;">Perfil</h1>
 <!-- Campo de la fotografía -->
<div class="w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full bg-gray-300 flex items-center justify-center">
  <img src="/public/images/imagen1.jpg" alt="Foto de perfil" style="width: 100px; height: 70px;">
</div>



    <!-- Nombre -->
    <h2 class="text-xl font-bold text-center mb-4 text-white" style="font-family: 'Arial', sans-serif;">John Doe</h2>
    <!-- Campos de información -->
    <!-- Campo Teléfono -->
    <div class="rounded bg-gray-300 text-center mb-2 py-2 px-6 text-gray-800">
      +1 (555) 123-4567
    </div>
    <!-- Campo Correo Electrónico -->
    <div class="rounded bg-gray-300 text-center mb-2 py-2 px-6 text-gray-800">
      johndoe@example.com
    </div>
    <!-- Campo WhatsApp -->
    <div class="rounded bg-gray-300 text-center mb-4 py-2 px-6 text-gray-800">
      911
    </div>
    <!-- Botón para cerrar el modal -->
    <button id="closeModalButton" class="custom-button text-white font-bold py-2 px-6 rounded-full w-full transition duration-300 ease-in-out hover:bg-gray-800">
      Cerrar
    </button>
  </div>
</div>

  <script>
    // Acceder al botón de abrir el modal
    const openModalButton = document.getElementById('openModalButton');
    // Acceder al modal
    const userProfileModal = document.getElementById('userProfileModal');
    // Acceder al botón de cerrar el modal
    const closeModalButton = document.getElementById('closeModalButton');

    // Función para mostrar el modal
    function openModal() {
      userProfileModal.classList.remove('hidden');
    }

    // Función para cerrar el modal
    function closeModal() {
      userProfileModal.classList.add('hidden');
    }

    // Evento al hacer clic en el botón de abrir el modal
    openModalButton.addEventListener('click', openModal);
    // Evento al hacer clic en el botón de cerrar el modal
    closeModalButton.addEventListener('click', closeModal);
  </script>



