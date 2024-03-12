<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <!-- Navegación Superior -->
    <nav class="bg-teal-400 p-4 flex items-center justify-center z-10 transition-all duration-500">
        <h1 class="text-white text-xl font-semibold">Macuin Dashboard</h1>
    </nav>

    <!-- Navegación lateral -->
    <aside class="text-white w-64 min-h-screen p-4 fixed top-0 left-0 bottom-0 bg-black z-10 transition-all duration-500 hidden">
        <button id="toggleSidebarClose" class="absolute top-4 right-4 text-white bg-teal-400 hover:bg-teal-500 transition-colors rounded m-1 p-1 focus:outline-none z-20">
            <i class="material-icons">close</i>  
        </button>
        <nav>
            <ul class="space-y-2">
                {{-- Pestana tickets --}}
                <li class="opcion-con-desplegable">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                        <div class="flex items-center">
                            <i class="material-icons">receipt_long</i>
                            <span>Ticket</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                    <ul class="desplegable ml-4">
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Gestion de citas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Polizas
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Pestana Usuarios --}}
                <li class="opcion-con-desplegable">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                        <div class="flex items-center">
                            <i class="material-icons">person</i>
                            <span>Usuarios</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                    <ul class="desplegable ml-4">
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Cliente 
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Gast
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Pestana departamento --}}
                <li class="opcion-con-desplegable">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                        <div class="flex items-center">
                            <i class="material-icons">people</i>
                            <span>Departamento</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                    <ul class="desplegable ml-4">
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Presupuestos
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Informe médico
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Botón de menú -->
    <button id="toggleSidebarOpen" class="fixed  text-white bg-teal-400 hover:bg-blue-500 transition-colors focus:outline-none rounded p-1 m-1 z-20">
        <i class="material-icons">menu</i>  
    </button>

    <!-- Contenedor principal -->
    <main class="flex-1 transition-all duration-500" style="margin-left: 0;">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="text-light py-2 bg-green-400 transition-all duration-500" style="margin-left: 0;">
        <div class="container text-center">
            <p class="mb-0">Macuin Dashboards &copy; {{ date('d/m/Y') }}</p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleSidebarOpenButton = document.getElementById("toggleSidebarOpen");
            const toggleSidebarCloseButton = document.getElementById("toggleSidebarClose");
            const sidebar = document.querySelector("aside");
            const mainContent = document.querySelector("main");
            const footer = document.querySelector("footer");

            toggleSidebarOpenButton.addEventListener("click", function () {
                sidebar.classList.remove("hidden");
                toggleSidebarCloseButton.classList.remove("hidden");
                toggleSidebarOpenButton.classList.add("hidden"); // Oculta el botón de menú al abrir el sidebar
                mainContent.classList.add("ml-64");
                footer.classList.add("ml-64");
            });

            toggleSidebarCloseButton.addEventListener("click", function () {
                sidebar.classList.add("hidden");
                toggleSidebarCloseButton.classList.add("hidden");
                toggleSidebarOpenButton.classList.remove("hidden"); // Muestra el botón de menú al cerrar el sidebar
                mainContent.classList.remove("ml-64");
                footer.classList.remove("ml-64");
            });

            const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

            opcionesConDesplegable.forEach(function (opcion) {
                opcion.addEventListener("click", function () {
                    const desplegable = opcion.querySelector(".desplegable");
                    desplegable.classList.toggle("hidden");
                });
            });
        });
    </script>
</body>
</html>
