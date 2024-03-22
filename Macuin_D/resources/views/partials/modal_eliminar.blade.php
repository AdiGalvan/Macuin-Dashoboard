<!-- Modal de cancelar -->
<div id="cancelModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-gradient-to-br from-teal-500 to-blue-500 rounded-lg p-8 max-w-md mx-auto shadow-lg">
    <!-- Título -->
    <h1 class="text-4xl font-bold text-center text-white mb-4" style="font-family: 'Arial', sans-serif;">Cancelar</h1>
    <!-- Texto de confirmación -->
    <div class="bg-gray-200 bg-opacity-75 p-4 rounded mb-4">
      <p class="text-center text-gray-800 font-semibold" style="font-family: 'Arial', sans-serif;">¿Desea cancelar el ticket seleccionado?</p>
    </div>
    <!-- Botones de acción -->
    <div class="flex justify-between">
      <!-- Botón Cancelar -->
      <button id="cancelCancelButton" class="custom-button bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-8 rounded-full transition duration-300 ease-in-out">
        Cancelar
      </button>
      <!-- Botón Aceptar -->
      <button id="confirmCancelButton" class="custom-button bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-8 rounded-full transition duration-300 ease-in-out">
        Aceptar
      </button>
    </div>
  </div>
</div>

<script>
  // Acceder al botón de abrir el modal de cancelar
  const openCancelModalButton = document.getElementById('openCancelModalButton');
  // Acceder al modal de cancelar
  const cancelModal = document.getElementById('cancelModal');
  // Acceder al botón de cancelar cancelación
  const cancelCancelButton = document.getElementById('cancelCancelButton');
  // Acceder al botón de confirmar cancelación
  const confirmCancelButton = document.getElementById('confirmCancelButton');

  // Función para mostrar el modal de cancelar
  function openCancelModal() {
    cancelModal.classList.remove('hidden');
  }

  // Función para cerrar el modal de cancelar
  function closeCancelModal() {
    cancelModal.classList.add('hidden');
  }

  // Función para mostrar el SweetAlert de confirmación
  function showConfirmationAlert() {
    Swal.fire({
      title: 'Confirmación',
      text: 'Ticket cancelado correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
    });

    closeCancelModal(); // Cerrar el modal después de mostrar el SweetAlert
  }

  // Evento al hacer clic en el botón de abrir el modal de cancelar
  openCancelModalButton.addEventListener('click', openCancelModal);
  // Evento al hacer clic en el botón de cancelar cancelación
  cancelCancelButton.addEventListener('click', closeCancelModal);
  // Evento al hacer clic en el botón de confirmar cancelación
  confirmCancelButton.addEventListener('click', showConfirmationAlert);
</script>