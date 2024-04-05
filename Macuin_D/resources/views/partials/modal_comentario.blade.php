




<!-- Modal -->
<div id="myModal" class="modal fixed z-10 inset-0 overflow-y-auto" style="display: none;">
    <div class="flex items-center justify-center min-h-screen">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50" onclick="closeModal()"></div>

        <div class="modal-container bg-gray-100 w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto"
             onclick="event.stopPropagation()">
            <!-- Contenido del modal -->
            <div class="modal-content py-4 text-left px-6">
                <!-- Título del modal -->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-serif">Comentario</p>
                    <!-- Botón para cerrar el modal -->
                    <button class="modal-close cursor-pointer z-50" onclick="closeModal()">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 18 18">
                            <path
                                d="M18 1.4L16.6 0 9 7.6 1.4 0 0 1.4 7.6 9 0 16.6 1.4 18 9 10.4 16.6 18 18 16.6 10.4 9z"/>
                        </svg>
                    </button>
                </div>
                <!-- Contenido del modal -->
                <p>
                    Solucionar los problemas de red lo antes posible.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Función para abrir el modal
function openModal() {
    document.getElementById('myModal').style.display = 'block';
    document.body.classList.add('modal-active');
}


    // Función para cerrar el modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
        document.body.classList.remove('modal-active');
    }
</script>

</body>

