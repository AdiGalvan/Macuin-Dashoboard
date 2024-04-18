
<style>
  /* Estilo personalizado para los botones */
  .custom-button {
    background-color: #020018;
  }
</style>
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">


<!-- Modal de mensajes -->
<div id="messageModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-gradient-to-br from-teal-500 to-blue-500 rounded-lg p-8 max-w-md mx-auto shadow-lg">
  
  <h1 class="text-4xl font-bold text-center text-white mb-1" style="font-family: 'Arial', sans-serif;">Mensajes</h1>
    <!-- Espacio para agregar comentario -->
    <textarea id="comment" class="rounded border-gray-300 border p-2 mb-4 w-full" placeholder="Agrega un comentario"></textarea>
    <!-- Botones de acción -->
    <div class="flex justify-between">
      <!-- Botón Aceptar -->
      <button id="acceptMessageButton" class="custom-button text-white font-bold py-2 px-6 rounded-full mr-4 transition duration-300 ease-in-out hover:bg-indigo-700">
        Aceptar
      </button>
      <!-- Botón Eliminar -->
      <button id="deleteMessageButton" class="custom-button text-white font-bold py-2 px-6 rounded-full ml-4 transition duration-300 ease-in-out hover:bg-red-700">
        Eliminar
      </button>
    </div>
  </div>
</div>


  <script>
    // Acceder al botón de abrir el modal de mensajes
    const openMessageModalButton = document.getElementById('openMessageModalButton');
    // Acceder al modal de mensajes
    const messageModal = document.getElementById('messageModal');
    // Acceder al botón de aceptar mensaje
    const acceptMessageButton = document.getElementById('acceptMessageButton');
    // Acceder al botón de eliminar mensaje
    const deleteMessageButton = document.getElementById('deleteMessageButton');

    // Función para mostrar el modal de mensajes
    function openMessageModal() {
      messageModal.classList.remove('hidden');
    }

    // Función para cerrar el modal de mensajes
    function closeMessageModal() {
      messageModal.classList.add('hidden');
    }

    // Evento al hacer clic en el botón de abrir el modal de mensajes
    openMessageModalButton.addEventListener('click', openMessageModal);
    // Evento al hacer clic en el botón de aceptar mensaje
    acceptMessageButton.addEventListener('click', closeMessageModal);
    // Evento al hacer clic en el botón de eliminar mensaje
    deleteMessageButton.addEventListener('click', closeMessageModal);
  </script>
</body>


