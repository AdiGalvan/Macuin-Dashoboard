
<style>
    /* Estilo personalizado para los botones */
    .custom-button {
        background-color: #020018;
    }
</style>



  <!-- Modal cambiar estatus -->
  <div id="generateTicket" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
        <h1 class="text-2xl font-serif text-center mb-4">Generar Ticket</h1>
        <!-- Formulario -->
        <form class="flex flex-col space-y-4">
        <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Usuario:</label> 
                        <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Seleccione una opción</option>
                            <option value="Jefe de soporte">Jefe de soporte</option>
                            <option value="Auxiliar de soporte">Auxiliar de soporte</option>
                        </select>
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
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Detalles:</label> 
                        <textarea id="details" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese los detalles"></textarea>
                    </div>
                    
                    <!-- Botones -->
                    <div class="flex justify-between col-span-2">
                        <button id="acceptGenerateTicketButton" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Enviar
                        </button>
                        <button type="button" id="cancelGenerateTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
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
    const GenerateTicketButton = document.getElementById('GenerateTicketButton');
    // Acceder al modal de agregar ticket
    const generateTicket = document.getElementById('generateTicket');
    // Acceder al botón de cancelar agregar ticket
    const cancelGenerateTicketButton = document.getElementById('cancelGenerateTicketButton');
    // Acceder al botón de aceptar dentro del modal de agregar ticket
    const acceptGenerateTicketButton = document.getElementById('acceptGenerateTicketButton');
  
    // Función para mostrar el modal de agregar ticket
    function openModalGenerar() {
        generateTicket.classList.remove('hidden');
    }
  
    // Función para cerrar el modal de agregar ticket
    function closeGenerateTicketModal() {
        generateTicket.classList.add('hidden');
    }
  
    // Función para mostrar el SweetAlert de confirmación
    function showConfirmationAlert() {
      Swal.fire({
      title: 'Confirmación',
      text: 'El ticket se generó correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
  });
          
          closeGenerateTicketModal(); // Cerrar el modal después de agregar el ticket
    }
  
    // Evento al hacer clic en el botón de abrir el modal de agregar ticket
    GenerateTicketButton.addEventListener('click', openModalGenerar);
  
    // Evento al hacer clic en el botón de cancelar agregar ticket
    cancelGenerateTicketButton.addEventListener('click', closeGenerateTicketModal);
  
    // Evento al hacer clic en el botón de aceptar dentro del modal de agregar ticket
    acceptGenerateTicketButton.addEventListener('click', showConfirmationAlert);
  
  </script>
  