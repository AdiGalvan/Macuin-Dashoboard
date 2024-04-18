<style>
  /* Estilo personalizado para los botones */
  .custom-button {
    background-color: #020018;
  }

  /* Estilo para el modal */
  #addTicketModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* fondo oscuro */
    display: none; /* Cambiado a "none" por defecto */
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    max-width: 80%;
  }
</style>

<!-- Modal de agregar ticket -->
<div id="addTicketModal">
  <div class="modal-content">
    <!-- Título -->
    <h1 class="text-2xl font-serif text-center mb-4">Agregar Ticket</h1>
    <!-- Formulario de agregar ticket -->
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
        <button onclick="closeModalAndShowAlert()" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
          Aceptar
        </button>
        <!-- Botón Cancelar -->
        <button onclick="closeModal()" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
          Cancelar
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Importar SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  // Función para abrir el modal
  function openModal() {
    document.getElementById('addTicketModal').style.display = 'flex';
    document.body.classList.add('modal-active');
  }

  // Función para cerrar el modal
  function closeModal() {
    document.getElementById('addTicketModal').style.display = 'none';
    document.body.classList.remove('modal-active');
  }

  // Función para mostrar el SweetAlert de confirmación
  function showConfirmationAlert() {
    Swal.fire({
      title: 'Confirmación',
      text: 'Ticket agregado correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
    });
  }

  // Función para cerrar el modal y mostrar el SweetAlert después
  function closeModalAndShowAlert() {
    closeModal(); // Cerrar el modal primero
    showConfirmationAlert(); // Llamar a la función para mostrar el SweetAlert después
  }
</script>
