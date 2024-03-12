
  <style>
    /* Estilo personalizado para los botones */
    .custom-button {
      background-color: #020018;
    }
  </style>
</head>



  <!-- Modal de agregar ticket -->
  <div id="addTicketModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
      <!-- Título -->
      <h1 class="text-2xl font-bold text-center mb-4">Agregar Ticket</h1>
      <!-- Formulario de agregar ticket -->
      <form class="flex flex-col space-y-4">
        <!-- Número de Ticket -->
        <div class="flex items-center">
          <label for="ticketNumber" class="w-32 font-bold">No. Ticket:</label>
          <input type="text" id="ticketNumber" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el número de ticket">
        </div>
        <!-- Autor -->
        <div class="flex items-center">
          <label for="author" class="w-32 font-bold">Autor:</label>
          <input type="text" id="author" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el nombre del autor">
        </div>
        <!-- Departamento -->
        <div class="flex items-center">
          <label for="department" class="w-32 font-bold">Departamento:</label>
          <input type="text" id="department" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el departamento">
        </div>
        <!-- Fecha -->
        <div class="flex items-center">
          <label for="date" class="w-32 font-bold">Fecha:</label>
          <input type="date" id="date" class="rounded border-gray-300 border p-2 flex-1">
        </div>
        <!-- Clasificación -->
        <div class="flex items-center">
          <label for="classification" class="w-32 font-bold">Clasificación:</label>
          <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
            <option value="">Seleccione una opción</option>
            <option value="Urgente">Urgente</option>
            <option value="Importante">Importante</option>
            <option value="Normal">Normal</option>
          </select>
        </div>
        <!-- Detalles -->
        <div class="flex items-center">
          <label for="details" class="w-32 font-bold">Detalles:</label>
          <textarea id="details" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese los detalles"></textarea>
        </div>
        <!-- Botones de acción -->
        <div class="flex justify-between">
          <!-- Botón Aceptar -->
          <button id="openConfirmationModalButton" type="submit" class="custom-button text-white font-bold py-2 px-4 rounded">
            Aceptar
          </button>
          <!-- Botón Cancelar -->
          <button type="button" id="cancelAddTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
            Cancelar
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Acceder al botón de abrir el modal de agregar ticket
    const openAddTicketModalButton = document.getElementById('openAddTicketModalButton');
    // Acceder al modal de agregar ticket
    const addTicketModal = document.getElementById('addTicketModal');
    // Acceder al botón de cancelar agregar ticket
    const cancelAddTicketButton = document.getElementById('cancelAddTicketButton');

    // Función para mostrar el modal de agregar ticket
    function openAddTicketModal() {
      addTicketModal.classList.remove('hidden');
    }

    // Función para cerrar el modal de agregar ticket
    function closeAddTicketModal() {
      addTicketModal.classList.add('hidden');
    }

    // Evento al hacer clic en el botón de abrir el modal de agregar ticket
    openAddTicketModalButton.addEventListener('click', openAddTicketModal);
    // Evento al hacer clic en el botón de cancelar agregar ticket
    cancelAddTicketButton.addEventListener('click', closeAddTicketModal);
  </script>

