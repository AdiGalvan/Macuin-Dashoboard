<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col h-screen md:flex-row">
        <div class="login-form flex-1 flex justify-center items-center p-6 md:p-0">
            <div class="w-full max-w-md">
                <h5 class="mb-16 text-xl md:text-4xl font-serif text-center md:text-center">BIENVENIDOS A MACUIN DASHBOARD</h5>
                <form>
                    <div class="mb-14">
                        <label for="usuario" class="text-lg">Usuario</label>
                        <input type="text" id="usuario"  required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    </div>
                    <div class="mb-20">
                        <label for="contraseña" class="text-lg">Contraseña</label>
                        <input type="password" id="contraseña"  required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    </div>
                    <div class="flex justify-center mb-20"> <!-- Contenedor adicional para centrar el botón -->
                        <button type="submit"
                            class="w-40 px-4 py-2 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition duration-300">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="company-logo flex-1 bg-cover bg-center h-64 md:h-auto" style="background-color: rgb(2, 0, 24); background-image: url('{{ asset('logo.png') }}');">
        </div>
    </div>
</body>

</html>
