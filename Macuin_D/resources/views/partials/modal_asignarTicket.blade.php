
<style>
    /* Estilo personalizado para los botones */
    .custom-button {
        background-color: #020018;
    }
</style>



  <!-- Modal cambiar estatus -->
  <div id="asignarTicket" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
        <h1 class="text-2xl font-serif text-center mb-4">Asignación de ticket</h1>
        <!-- Formulario -->
        <form class="flex flex-col space-y-4">
        <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Usuario:</label> 
                        <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Seleccione una opción</option>
                            <option value="Jefe de soporte">Auxiliar 1</option>
                            <option value="Auxiliar de soporte">Auxiliar 2</option>
                        </select>
                    </div>
                    <!-- Autor -->
                    <div class="flex items-center">
                        <label for="author" class="w-32 font-bold">Autor:</label> Juan Carlos
                    </div>
                    <!-- Departamento -->
                    <div class="flex items-center">
                        <label for="department" class="w-32 font-bold">Departamento:</label> Ventas
                    </div>
                    <!-- Fecha -->
                    <div class="flex items-center">
                        <label for="date" class="w-32 font-bold">Fecha:</label> 09/03/2024
                    </div>
                    <!-- Clasificación -->
                    <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Clasificación:</label> Fallo en la red
                        
                    </div>
                    <!-- Detalles -->
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Detalles:</label> El sistema se ha caido
                    </div>
                    
                    <!-- Botones -->
                    <div class="flex justify-between col-span-2">
                        <button id="acceptAsignarTicketButton" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Enviar
                        </button>
                        <button type="button" id="cancelAsignarTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
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
    const modalAsignarTicket = document.getElementById('modalAsignarTicket');
    // Acceder al modal de agregar ticket
    const asignarTicket = document.getElementById('asignarTicket');
    // Acceder al botón de cancelar agregar ticket
    const cancelAsignarTicketButton = document.getElementById('cancelAsignarTicketButton');
    // Acceder al botón de aceptar dentro del modal de agregar ticket
    const acceptAsignarTicketButton = document.getElementById('acceptAsignarTicketButton');
  
    // Función para mostrar el modal de agregar ticket
    function openModalAsignar() {
        asignarTicket.classList.remove('hidden');
    }
  
    // Función para cerrar el modal de agregar ticket
    function closeAsignarTicketModal() {
        asignarTicket.classList.add('hidden');
    }
  
    // Función para mostrar el SweetAlert de confirmación
    function showConfirmationAlert() {
      Swal.fire({
      title: 'Confirmación',
      text: 'El ticket se asignó correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
  });
          
          closeAddTicketModal(); // Cerrar el modal después de agregar el ticket
    }
  
    // Evento al hacer clic en el botón de abrir el modal de agregar ticket
    modalAsignarTicket.addEventListener('click', openModalAsignar);
  
    // Evento al hacer clic en el botón de cancelar agregar ticket
    cancelAsignarTicketButton.addEventListener('click', closeAsignarTicketModal);
  
    // Evento al hacer clic en el botón de aceptar dentro del modal de agregar ticket
    acceptAsignarTicketButton.addEventListener('click', showConfirmationAlert);
  
  </script>
  