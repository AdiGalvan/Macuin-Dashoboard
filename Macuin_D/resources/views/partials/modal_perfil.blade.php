
<style>
  /* Estilo personalizado para los botones */
  .custom-button {
    background-color: #020018;
  }

  /* Estilo para el modal */
  #userProfileModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .modal-contenido {
    background: #ffffff; /* Fondo blanco */
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra alrededor del contenedor */
    padding: 20px;
    max-width: 600px; /* Aumento del ancho */
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #020018; /* Texto en color #020018 */
    position: relative;
  }

  .modal-contenido .info-container {
    flex: 1;
    padding-left: 20px;
    text-align: left;
  }

  /* Estilo para el botón de cerrar */
  .close-button {
    position: absolute;
    top: 10px; /* Posicionamiento en la parte superior */
    right: 10px; /* Posicionamiento en la parte derecha */
    background-color: #020018; /* Fondo del botón en color #020018 */
    color: #ffffff; /* Color del icono */
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5); /* Sombra alrededor del botón */
  }

  /* Estilo para la imagen de perfil */
  .profile-image {
    width: 100px; /* Tamaño de la imagen */
    height: 100px; /* Tamaño de la imagen */
    border-radius: 50%; /* Hacer la imagen redonda */
    overflow: hidden; /* Ocultar las partes de la imagen que sobresalen del círculo */
  }

</style>



<!-- Modal -->
<div id="userProfileModal">
  <div class="modal-contenido" onclick="event.stopPropagation()">
    <!-- Imagen del perfil -->
    <div class="profile-image">
      <img src="https://static.vecteezy.com/system/resources/previews/032/314/084/non_2x/ai-generated-beard-guy-portrait-male-fashionable-jacket-adult-young-successful-business-confidence-caucasian-businessman-white-executive-standing-modern-studio-suit-style-men-person-attractive-handsome-free-photo.jpg" alt="Foto de perfil" style="width: 100%; height: 100%;">
    </div>
    <!-- Contenedor de información -->
    <div class="info-container">
      <button class="close-button" onclick="closeUserProfileModal()">X</button>
      <h1 class="text-4xl font-bold mb-2" style="font-family: 'Arial', sans-serif;">Perfil</h1>
      <!-- Nombre -->
      <h2 class="text-xl font-bold mb-4" style="font-family: 'Arial', sans-serif;">John Doe</h2>
      <!-- Campos de información -->
      <!-- Campo Teléfono -->
      <div class="rounded bg-gray-300 text-center mb-2 py-2 px-6 text-gray-800">
        +1 (555) 123-4567
      </div>
      <!-- Campo Correo Electrónico -->
      <div class="rounded bg-gray-300 text-center mb-2 py-2 px-6 text-gray-800">
        johndoe@example.com
      </div>
      <!-- Campo WhatsApp -->
      <div class="rounded bg-gray-300 text-center mb-4 py-2 px-6 text-gray-800">
        911
      </div>
    </div>
  </div>
</div>



<script>
  // Función para abrir el modal de perfil
  function openUserProfileModal() {
    document.getElementById('userProfileModal').style.display = 'flex';
  }

  // Función para cerrar el modal de perfil
  function closeUserProfileModal() {
    document.getElementById('userProfileModal').style.display = 'none';
  }
</script>
