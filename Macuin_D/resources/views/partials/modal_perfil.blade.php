<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal de Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <style>
    /* Estilo personalizado para los botones */
    .custom-button {
      background-color: #020018;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
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

    /* Estilo para los campos de información */
    .info-field {
      background-color: #f0f0f0;
      border-radius: 4px;
      padding: 8px 12px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .info-field input {
      background-color: transparent;
      border: none;
      outline: none;
      flex: 1;
      font-size: 16px;
      color: #333;
    }

    .info-field i {
      margin-right: 8px;
      color: #666;
    }
  </style>
</head>
<body>

<!-- Modal -->
<div id="userProfileModal">
  <div class="modal-contenido" onclick="event.stopPropagation()">
    <!-- Imagen del perfil -->
    <div class="profile-image">
      <img
        src="https://static.vecteezy.com/system/resources/previews/032/314/084/non_2x/ai-generated-beard-guy-portrait-male-fashionable-jacket-adult-young-successful-business-confidence-caucasian-businessman-white-executive-standing-modern-studio-suit-style-men-person-attractive-handsome-free-photo.jpg"
        alt="Foto de perfil"
        style="width: 100%; height: 100%"
      />
    </div>
    <!-- Contenedor de información -->
    <div class="info-container">
      <button class="close-button" onclick="closeUserProfileModal()">X</button>
      <h1 class="text-4xl font-bold mb-2" style="font-family: 'Arial', sans-serif">Perfil</h1>
      <!-- Nombre -->
      <h2 class="text-xl font-bold mb-4" style="font-family: 'Arial', sans-serif">John Doe</h2>
      <!-- Campos de información -->
      <!-- Campo Teléfono -->
      <div class="info-field">
        <i class="fas fa-phone"></i>
        <input type="text" value="+1 (555) 123-4567" placeholder="Teléfono" />
      </div>
      <!-- Campo Correo Electrónico -->
      <div class="info-field">
        <i class="fas fa-envelope"></i>
        <input type="email" value="johndoe@example.com" placeholder="Correo Electrónico" />
      </div>
      <!-- Campo WhatsApp -->
      <div class="info-field">
        <i class="fab fa-whatsapp"></i>
        <input type="text" value="911" placeholder="WhatsApp" />
      </div>
      <!-- Botón de guardar -->
      <button class="custom-button" onclick="guardarPerfil()">Guardar</button>
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

  // Función para guardar el perfil y mostrar SweetAlert
  function guardarPerfil() {
    // Aquí puedes agregar la lógica para guardar el perfil
    // Luego, muestra el SweetAlert y cierra el modal
    Swal.fire({
      icon: 'success',
      title: '¡Perfil guardado!',
      text: 'Los cambios en tu perfil han sido guardados con éxito.',
    }).then(() => {
      closeUserProfileModal(); // Cierra el modal después de hacer clic en "OK" en el SweetAlert
    });
  }
</script>



</body>
</html>
