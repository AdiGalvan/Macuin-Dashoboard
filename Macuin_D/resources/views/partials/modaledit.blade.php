<style>
    /* Estilo personalizado para los botones */
    .custom-button {
      background-color: #020018;
    }
</style>

<!-- Modal de editar ticket -->
<div id="editTicketModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
        <!-- Título -->
        <h1 class="text-2xl font-serif text-center mb-4">Editar Ticket</h1>
        <!-- Formulario de editar ticket -->
        <form class="flex flex-col space-y-4">
           
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
          <button id="acceptEditTicketButton"  type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
            Aceptar
          </button>
          <!-- Botón Cancelar -->
          <button type="button" id="cancelEditTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
            Cancelar
          </button>
        </div>
        </form>
    </div>
</div>

<script>
    // Acceder al botón de abrir el modal de editar ticket
    const openEditTicketModalButton = document.getElementById('openEditModalButton');
    // Acceder al modal de editar ticket
    const editTicketModal = document.getElementById('editTicketModal');
      // Acceder al botón de cancelar agregar ticket
      const cancelEditTicketButton = document.getElementById('cancelEditTicketButton');
    // Acceder al botón de aceptar dentro del modal de agregar ticket
    const acceptEditTicketButton = document.getElementById('acceptEditTicketButton');


    // Función para mostrar el modal de editar ticket
    function openEditTicketModal() {
        editTicketModal.classList.remove('hidden');
    }

    // Función para cerrar el modal de editar ticket
    function closeEditTicketModal() {
        editTicketModal.classList.add('hidden');
    }

    // Función para mostrar el SweetAlert de confirmación
    function showConfirmationAlert() {
        Swal.fire({
            title: 'Confirmación',
            text: 'Ticket editado correctamente',
            icon: 'success',
            confirmButtonText: 'Ok',
            timerProgressBar: true, // barra de progreso
            allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
            allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
        });

        closeEditTicketModal(); // Cerrar el modal después de editar el ticket
    }

    // Evento al hacer clic en el botón de abrir el modal de editar ticket
    openEditTicketModalButton.addEventListener('click', openEditTicketModal);
 // Evento al hacer clic en el botón de cancelar agregar ticket
 cancelEditTicketButton.addEventListener('click', closeEditTicketModal);
  
  // Evento al hacer clic en el botón de aceptar dentro del modal de agregar ticket
  acceptEditTicketButton.addEventListener('click', showConfirmationAlert);

</script>
  