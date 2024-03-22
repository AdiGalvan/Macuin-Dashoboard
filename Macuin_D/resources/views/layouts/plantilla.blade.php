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
    <nav class="p-6 flex items-center justify-center z-10 transition-all duration-500" style="background-color: #0BE678">
        <h1 class="text-white text-3xl font-serif">Macuin Dashboard</h1>
        
        <div class="fixed right-4 flex items-center justify-center">
            <button id="openMessageModalButton" class="top-4 text-white  hover:bg-blue-950 transition-colors rounded m-1 p-1 focus:outline-none z-20">
                <i class="material-icons">chat</i>  
            </button>
    
            <button id="openModalButton" class="top-4 text-white  hover:bg-blue-950 transition-colors rounded m-1 p-1 focus:outline-none z-20">
                <i class="material-icons">person</i>  
            </button>

            
        </div>
    </nav>

    <!-- Navegación lateral -->
    <aside class="text-white w-64 min-h-screen p-4 fixed top-0 left-0 bottom-0 bg-black z-10 transition-all duration-500 hidden">
        
        <button id="toggleSidebarClose" class="absolute top-4 right-4 text-white bg-green-400 transition-colors rounded m-1 p-1 focus:outline-none z-20">
            <i class="material-icons">menu</i>  
        </button>
        
        <nav>
            <ul class="space-y-2">
                {{-- Pestana tickets --}}
                <li class="opcion-con-desplegable">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                        <div class="flex items-center font-serif">
                            <i class="material-icons">receipt_long</i>
                            <span>Ticket</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                    <ul class="desplegable ml-4">
                        <li>
                            <a href="/" class="block p-2 hover:bg-gray-700 flex items-center font-serif">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Tickets
                            </a>
                        </li>
                        <li>
                            <a href="/tckCancelados" class="block p-2 hover:bg-gray-700 flex items-center font-serif">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Tickets Cancelados
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </aside>

    <div class="items-center justify-center">
    <!-- Botón de menú -->
    <button id="toggleSidebarOpen" class="fixed top-5 text-white hover:bg-blue-950 transition-colors rounded m-1 p-1 focus:outline-none z-20">
        <i class="material-icons">menu</i>  
    </button>
    </div>
    

    <!-- Contenedor principal -->
    <main class="flex-1 transition-all duration-500" style="margin-left: 0;">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="text-light py-2 transition-all duration-500" style="margin-left: 0; background-color: #0BE678">
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
