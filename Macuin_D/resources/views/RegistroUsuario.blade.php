@extends('layouts.plantilla')

@section('titulo', 'Registro de Usuario')

@section('contenido')


<body class="antialiased font-sans bg-gray-200">

    <h1 class="text-center text-4xl font-serif mt-8 mb-4 animated-title" style="font-feature-settings: normal;, sans-serif;">Registro de Usuarios</h1>
    <script src="script.js"></script>



    <div class="container mx-auto px-4 sm:px-8">
        <div class="flex justify-between mb-4">
            <!-- Input de buscar a la izquierda -->
            <div class="flex items-center">
                <div class="relative flex items-stretch w-full">
                    <input id="buscar-ticket" placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
                    <button class=" absolute right-0 top-0 bottom-0  px-2 text-gray-900 hover:text-green-700">
                        <i class="material-icons mt-2">search</i>
                    </button>
                </div>
            </div>
            <!-- Botón Agregar a la derecha -->
            <div class="my-2 flex items-center justify-center font-serif">
                <button id="openAddTicketModalButton" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full transition-colors flex items-center">
                    <i class="material-icons mr-1">add_circle</i>
                    Añadir Ticket
                </button>
            </div>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Departamento
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Pueto
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Telefono
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Correo
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Contraseña
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Rol
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Editar
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                Urgente  
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                               Pendiente
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              22/03/2024 
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                4425728412
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                upq_politecnica@gmail.com
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                1234
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                ventas
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button id="openEditModalButton" class=" hover:text-blanck-800 text-blank-600"><i class="material-icons mr-1">edit</i></button>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button id="openCancelModalButton" class=" hover:text-red-800 text-red-600"><i class="material-icons mr-1">delete</i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                Importante
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                               Completado
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              10/04/2024 
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                442383919
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">elingUpq@gmail.com
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                4321
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                Produccion
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button id="openEditModalButton" class=" hover:text-blanck-800 text-blank-600"><i class="material-icons mr-1">edit</i></button>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button id="openCancelModalButton" class=" hover:text-red-800 text-red-600"><i class="material-icons mr-1">delete</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button class="flex items-center  bg-blue-950 hover:bg-green-600 text-white  px-5 rounded-l">
                            <i class="material-icons mr-1">arrow_back</i>
                        </button>
                        <button class="flex items-center  bg-blue-950 hover:bg-green-600 text-white  px-5 rounded-r">
                            <i class="material-icons mr-1">arrow_forward</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modal_agregar')
   
    @include('partials.modaledit')
    @include('partials.modal_eliminar')

</body>

@endsection