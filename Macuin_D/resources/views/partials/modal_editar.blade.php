<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal</title>
  <style>
    /* Estilo personalizado para los botones */
    .custom-button {
      background-color: #020018;
    }
  </style>
</head>
<body>

<!-- Modal de agregar ticket -->
<div id="editTicketModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
    <!-- Título -->
    <h1 class="text-2xl font-serif text-center mb-4">Agregar Ticket</h1>
    <!-- Formulario de agregar ticket -->
    <form class="flex flex-col space-y-4">
      <!-- Número de Ticket -->
      <div class="flex items-center">
        <label for="ticketNumber" class="w-32 font-bold">Registrar:</label>
        <input type="text" id="ticketNumber" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el número de ticket">
      </div>
      <!-- Autor -->
      <div class="flex items-center">
        <label for="author" class="w-32 font-bold">Nombre:</label>
        <input type="text" id="author" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el nombre del autor">
      </div>
      <!-- Departamento -->
      <div class="flex items-center">
        <label for="department" class="w-32 font-bold">Departamento:</label>
        <input type="text" id="department" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el departamento">
      </div>
      <!-- Fecha de nacimiento -->
      <div class="flex items-center">
        <label for="date" class="w-32 font-bold">Fecha de nacimiento:</label>
        <input type="date" id="date" class="rounded border-gray-300 border p-2 flex-1">
      </div>
      <!-- Clasificación -->
      <div class="flex items-center">
          <label for="phone" class="w-32 font-bold">Teléfono:</label>
          <input type="text" id="phone" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el número de teléfono">
      </div>

      <div class="flex items-center">
        <label for="email" class="w-32 font-bold">Correo:</label>
        <input type="email" id="email" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el correo electrónico">
      </div>

      <div class="flex items-center">
        <label for="password" class="w-32 font-bold">Contraseña:</label>
        <input type="password" id="password" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese la contraseña">
      </div>
   
      <!-- Botones de acción -->
      <div class="flex justify-between">
        <!-- Botón Aceptar -->
        <button id="acceptAddTicketButton" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
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
    // Obtenemos el modal y los botones
    const addModal = document.getElementById('addTicketModal');
    const editModal = document.getElementById('editTicketModal');
    const acceptAddButton = document.getElementById('acceptAddTicketButton');
    const cancelAddButton = document.getElementById('cancelAddTicketButton');
    const acceptEditButton = document.getElementById('acceptEditTicketButton');
    const cancelEditButton = document.getElementById('cancelEditTicketButton');
    const editButton = document.getElementById('openEditModalButton');

    // Función para mostrar el modal
    function showModal(modal) {
        modal.classList.remove('hidden');
    }

    // Función para ocultar el modal
    function hideModal(modal) {
        modal.classList.add('hidden');
    }

    // Mostrar el modal de agregar al hacer clic en el botón de aceptar
    acceptAddButton.addEventListener('click', () => showModal(addModal));

    // Ocultar el modal de agregar al hacer clic en el botón de cancelar
    cancelAddButton.addEventListener('click', () => hideModal(addModal));

    // Mostrar el modal de editar al hacer clic en el botón de editar
    editButton.addEventListener('click', () => showModal(editModal));

    // Ocultar el modal de editar al hacer clic en el botón de cancelar
    cancelEditButton.addEventListener('click', () => hideModal(editModal));
</script>
</body>
</html>
