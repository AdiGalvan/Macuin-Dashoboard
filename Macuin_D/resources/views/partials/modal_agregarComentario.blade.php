
<style>
    /* Estilo personalizado para los botones */
    .custom-button {
        background-color: #020018;
    }
</style>



  <!-- Modal cambiar estatus -->
  <div id="asignarComentario" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg p-8 max-w-md mx-auto">
        <h1 class="text-2xl font-serif text-center mb-4">Enviar comentario</h1>
        <!-- Formulario -->
        <form class="flex flex-col space-y-4">
        <div class="flex items-center">
                        <label for="classification" class="w-32 font-bold">Usuario:</label> 
                        <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Seleccione una opción</option>
                            <option value="Jefe de soporte">Cliente</option>
                            <option value="Auxiliar de soporte">Auxiliar de soporte</option>
                        </select>
                    </div>
                    <!-- Autor -->
                    <div class="flex items-center">
                    <label for="classification" class="w-32 font-bold">Comentario:</label> 
                        <select id="classification" class="rounded border-gray-300 border p-2 flex-1">
                            <option value="">Seleccione una opción</option>
                            <option value="Jefe de soporte">Comentario</option>
                            <option value="Auxiliar de soporte">Observación</option>
                        </select>
                    </div>
                    
                    <!-- Detalles -->
                    <div class="flex items-center col-span-2">
                        <label for="details" class="w-32 font-bold">Detalles:</label> 
                        <textarea id="details" class="rounded border-gray-300 border p-2 flex-1" placeholder="Ingrese los detalles"></textarea>
                    </div>
                    
                    <!-- Botones -->
                    <div class="flex justify-between col-span-2">
                        <button id="acceptComentarioTicketButton" type="button" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Enviar
                        </button>
                        <button type="button" id="cancelComentarioTicketButton" class="custom-button text-white font-bold py-2 px-4 rounded">
                            Cancelar
                        </button>
                    </div>
        </form>
    </div>
</div>

    </div>
</div>


  <script>
    // Acceder al botón de abrir el modal de agregar comentario
    const modalComentario = document.getElementById('modalComentario');
    // Acceder al modal de agregar comentario
    const asignarComentario = document.getElementById('asignarComentario');
    // Acceder al botón de cancelar agregar comentario
    const cancelComentarioTicketButton = document.getElementById('cancelComentarioTicketButton');
    // Acceder al botón de aceptar dentro del modal de agregar comentario
    const acceptComentarioTicketButton = document.getElementById('acceptComentarioTicketButton');
  
    // Función para mostrar el modal de agregar comentario
    function openModalComentario() {
        asignarComentario.classList.remove('hidden');
    }
  
    // Función para cerrar el modal de agregar comentario
    function closeComentarioTicketModal() {
        asignarComentario.classList.add('hidden');
    }
  
    // Función para mostrar el SweetAlert de confirmación
    function showConfirmationAlert() {
      Swal.fire({
      title: 'Confirmación',
      text: 'El comentario fue enviado correctamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      timerProgressBar: true, // barra de progreso
      allowOutsideClick: false, // no permitir cerrar el alert haciendo clic fuera
      allowEscapeKey: false // no permitir cerrar el alert usando la tecla "Esc"
  });
          
          closeComentarioTicketModal(); // Cerrar el modal después de agregar el comentario
    }
  
    // Evento al hacer clic en el botón de abrir el modal de agregar comentario
    modalComentario.addEventListener('click', openModalComentario);
  
    // Evento al hacer clic en el botón de cancelar agregar comentario
    cancelComentarioTicketButton.addEventListener('click', closeComentarioTicketModal);
  
    // Evento al hacer clic en el botón de aceptar dentro del modal de agregar comentario
    acceptComentarioTicketButton.addEventListener('click', showConfirmationAlert);
  
  </script>
  