<!-- <form>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="no_de_ticket" class="block text-gray-700 text-sm font-semibold mb-2">No. de ticket</label>
                                <input type="text" id="no_de_ticket" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="autor" class="block text-gray-700 text-sm font-semibold mb-2">Autor</label>
                                <input type="text" id="autor" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="fecha" class="block text-gray-700 text-sm font-semibold mb-2">Fecha</label>
                                <input type="date" id="fecha" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="clasificacion" class="block text-gray-700 text-sm font-semibold mb-2">Clasificación</label>
                                <input type="text" id="clasificacion" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="detalles" class="block text-gray-700 text-sm font-semibold mb-2">Detalles</label>
                                <input type="text" id="detalles" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="estatus" class="block text-gray-700 text-sm font-semibold mb-2">Estatus</label>
                                <input type="text" id="estatus" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="cliente_jefe" class="block text-gray-700 text-sm font-semibold mb-2">Cliente/Jefe</label>
                                <input type="text" id="cliente_jefe" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                            <div class="mb-4">
                                <label for="comentario" class="block text-gray-700 text-sm font-semibold mb-2">Comentario</label>
                                <input type="text" id="comentario" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="">
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Registrar</button>
</form> -->


<style>
    /* Estilo personalizado para los botones */
    .custom-button {
        background-color: #020018;
    }
</style>



  <!-- Modal cambiar estatus -->
  <div id="showStatus" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
        <h1 class="text-2xl font-serif text-center mb-4">Cambiar estatus</h1>
        <!-- Formulario -->
        <form class="flex flex-col space-y-4">
                    <div class="flex items-center">
                        <label for="ticketNumber" class="w-32 font-bold">No. Ticket:</label> 4
                        <!-- <input type="text" id="ticketNumber" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el número de ticket"> -->
                    </div>
                    <!-- Autor -->
                    <div class="flex items-center">
                        <label for="author" class="w-32 font-bold">Autor:</label> Luz Mendez Luna
                        <!-- <input type="text" id="author" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el nombre del autor"> -->
                    </div>
                    <!-- Departamento -->
                    <div class="flex items-center">
                        <label for="department" class="w-32 font-bold">Departamento:</label> Ventas
                        <!-- <input type="text" id="department" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese el departamento"> -->
                    </div>
                    <!-- Fecha -->
                    <div class="flex items-center">
                        <label for="date" class="w-32 font-bold">Fecha:</label> 05/04/2024
                        <!-- <input type="date" id="date" class="rounded border-gray-300 border p-2 flex-1"> -->
                    </div>
                    <!-- Clasificación -->
                    <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Clasificación:</label> Urgente
                        
                    </div>
                    <!-- Detalles -->
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Detalles:</label> No se puede ingresar al sistema
                        <!-- <textarea id="details" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese los detalles"></textarea> -->
                    </div>
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Estatus:</label> 
                        <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Finalizado</option>
                            <option value="Urgente">Urgente</option>
                            <option value="Importante">Importante</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Cliente/Jefe de soporte:</label> Jefe de soporte/Cliente
                        <!-- <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Seleccione una opción</option>
                            <option value="Urgente">Cliente</option>
                            <option value="Normal">Jefe</option>
                        </select> -->
                    </div>
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Detalles:</label> Detección de falla
                        <!-- <textarea id="details" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese los detalles"></textarea> -->
                    </div>
                    <!-- Botones -->
                    <div class="flex justify-between col-span-2">
                        <button id="acceptStatusTicketButton" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Enviar
                        </button>
                        <button type="button" id="cancelStatusTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Cancelar
                        </button>
                    </div>
        </form>
    </div>
</div>

    </div>
</div>


  <script>
    // Acceder al botón de abrir el modal de agregar ticket
    const openModalStatusButton = document.getElementById('openModalStatusButton');
    // Acceder al modal de agregar ticket
    const showStatus = document.getElementById('showStatus');
    // Acceder al botón de cancelar agregar ticket
    const cancelStatusTicketButton = document.getElementById('cancelStatusTicketButton');
    // Acceder al botón de aceptar dentro del modal de agregar ticket
    const acceptStatusTicketButton = document.getElementById('acceptStatusTicketButton');
  
    // Función para mostrar el modal de agregar ticket
    function openModalStatus() {
        showStatus.classList.remove('hidden');
    }
  
    // Función para cerrar el modal de agregar ticket
    function closeStatusTicketModal() {
        showStatus.classList.add('hidden');
    }
  
    // Función para mostrar el SweetAlert de confirmación
    function showConfirmationAlert() {
      Swal.fire({
      title: 'Confirmación',
      text: 'Cambio de estatus y envío correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
  });
          
          closeStatusTicketModal(); // Cerrar el modal después de agregar el ticket
    }
  
    // Evento al hacer clic en el botón de abrir el modal del estatus
    openModalStatusButton.addEventListener('click', openModalStatus);
  
    // Evento al hacer clic en el botón de cancelar cambiar estatus
    cancelStatusTicketButton.addEventListener('click', closeStatusTicketModal);
  
    // Evento al hacer clic en el botón de aceptar dentro del modal de cambiar estatus
    acceptStatusTicketButton.addEventListener('click', showConfirmationAlert);
  
  </script>
  