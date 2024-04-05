
@extends('layouts.plantilla')

@section('titulo', 'Tickets Asignados')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')

@include('partials.modal_comentario')

<body class="antialiased font-sans bg-gray-200">
    <h1 class="text-center text-4xl font-serif mt-8 mb-4">Tickets Asignados</h1>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <!-- Mover el div del input de búsqueda y agregar la etiqueta -->
            <div class="my-2 flex   justify-end">
                <div class="flex items-center">
                    <label for="buscar-ticket" class="text-gray-700 font-serif">Buscar ticket:</label>
                    <div class="relative flex items-stretch w-full">
                        <input id="buscar-ticket" placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
                        <button class=" absolute right-0 top-0 bottom-0  px-2 text-gray-900 hover:text-green-700">
                            <i class="material-icons mt-2">search</i>
                        </button>
                    </div>
                </div>
                
            </div>
            <!-- Fin de la modificación del input de búsqueda -->

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cliente
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Auxiliar de Soporte
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Fecha de asignacion
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estatus
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Comentario
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Ticket
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   Juan Perez
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Carlos Rodriguez
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12/12/2021
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    En proceso  
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="flex items-center hover:text-green-600 text-blue-500" onclick="openModal()">
                                        <i class="material-icons mr-1">chat</i>
                                    </button>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Fallas en la red  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button class="text-sm bg-blue-950 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-l">
                                Anterior 
                            </button>
                            <button class="text-sm bg-blue-950 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-r">
                                Siguiente
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
