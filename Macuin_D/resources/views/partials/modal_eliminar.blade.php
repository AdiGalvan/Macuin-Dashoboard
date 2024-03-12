
  <style>
    /* Estilo personalizado para los botones */
    .custom-button {
      background-color: #020018;
    }
  </style>
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">

 
  <!-- Modal de eliminación -->
  <div id="deleteModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
      <!-- Título -->
      <h1 class="text-2xl font-bold text-center mb-4">Eliminar</h1>
      <!-- Texto de confirmación -->
      <div class="bg-gray-100 p-4 rounded mb-4">
        <p class="text-center">¿Desea cancelar el ticket seleccionado?</p>
      </div>
      <!-- Botones de acción -->
      <div class="flex justify-between">
        <!-- Botón Cancelar -->
        <button id="cancelDeleteButton" class="custom-button text-white font-bold py-2 px-4 rounded">
          Cancelar
        </button>
        <!-- Botón Aceptar -->
        <button id="confirmDeleteButton" class="custom-button text-white font-bold py-2 px-4 rounded">
          Aceptar
        </button>
      </div>
    </div>
  </div>

  <script>
    // Acceder al botón de abrir el modal de eliminación
    const openDeleteModalButton = document.getElementById('openDeleteModalButton');
    // Acceder al modal de eliminación
    const deleteModal = document.getElementById('deleteModal');
    // Acceder al botón de cancelar eliminación
    const cancelDeleteButton = document.getElementById('cancelDeleteButton');
    // Acceder al botón de confirmar eliminación
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');

    // Función para mostrar el modal de eliminación
    function openDeleteModal() {
      deleteModal.classList.remove('hidden');
    }

    // Función para cerrar el modal de eliminación
    function closeDeleteModal() {
      deleteModal.classList.add('hidden');
    }

    // Evento al hacer clic en el botón de abrir el modal de eliminación
    openDeleteModalButton.addEventListener('click', openDeleteModal);
    // Evento al hacer clic en el botón de cancelar eliminación
    cancelDeleteButton.addEventListener('click', closeDeleteModal);
    // Evento al hacer clic en el botón de confirmar eliminación
    confirmDeleteButton.addEventListener('click', closeDeleteModal);
  </script>
</body>
</html>
