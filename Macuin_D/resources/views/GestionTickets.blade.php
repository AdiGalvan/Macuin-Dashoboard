@extends('layouts.plantilla')

@section('titulo', 'Gestion de tickets')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')






<!-- component -->
<body class="antialiased font-sans bg-gray-200">

   
    <h1 class="text-center text-4xl font-serif mt-8 mb-4">Gestión de tickets</h1>
    
    <div class="container mx-auto px-4 sm:px-8">
        
   
          
        <div class="flex justify-between mb-4">
            <!-- Input de buscar a la izquierda -->
            <div class="my-2">
                <input placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
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
                                    Clasificación
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estatus
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Fecha Asignada
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Departamento
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cancelar
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
                                    ventas
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    
                                    <button id="openCancelModalButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
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
                                    Produccion
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    
                                    <button id="openCancelModalButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                       
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-blue-950 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-l">
                                Anterior 
                            </button>
                            <button
                                class="text-sm bg-blue-950 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-r">
                                Siguente
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    @include('partials.modal_agregar')

    @include('partials.modal_eliminar')

  
</body>


@endsection
