
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
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
      <!-- Campo de la fotografía -->
      <div class="w-32 h-32 rounded-full bg-gray-300 mx-auto mb-4"></div>
      <!-- Nombre -->
      <h2 class="text-xl font-bold text-center mb-4">Nombre del Usuario</h2>
      <!-- Campos de información -->
      <!-- Campo Teléfono -->
      <div class="rounded bg-gray-300 text-center mb-2">
        Teléfono
      </div>
      <!-- Campo Correo Electrónico -->
      <div class="rounded bg-gray-300 text-center mb-2">
        Email
      </div>
      <!-- Campo WhatsApp -->
      <div class="rounded bg-gray-300 text-center mb-4">
        WhatsApp
      </div>
      <!-- Botón para cerrar el modal -->
      <button id="closeModalButton" class="custom-button text-white font-bold py-2 px-4 rounded w-full">
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



