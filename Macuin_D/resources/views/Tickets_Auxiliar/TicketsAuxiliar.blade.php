@extends('layouts.plantilla_auxiliar')

@section('titulo', 'Gestion de tickets')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')



<!-- component -->
<body class="antialiased font-sans bg-gray-200">

   
    <h1 class="text-center text-2xl font-serif mt-8 mb-4">Tickets Asignados</h1>
    
    <div class="container mx-auto px-4 sm:px-8">
        
   
          
        <div class="flex justify-between mb-4">
            <!-- Espacio vacío para empujar el buscador hacia la derecha -->
            <div></div>
            <div class="my-2 flex items-center">
                <label class="mr-2">Buscar:</label>
                <input placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
            </div>
        </div>




            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal ">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider ">
                                    Tipo
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estatus
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Fecha 
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Departamento
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PDF
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cambiar estatus
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="px-5 py-2 border-b-2 border-gray-200 bg-white text-sm"> <!-- Ajusta el relleno aquí -->
                                Fallo de software  
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white font-bold text-sm text-red-700"> <!-- Ajusta el relleno aquí -->
                            Pendiente
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm"> <!-- Ajusta el relleno aquí -->
                            15/02/2024 
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm"> <!-- Ajusta el relleno aquí -->
                                Logística
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons">picture_as_pdf</i> 
                                </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm"> <!-- Ajusta el relleno aquí -->
                                <button id="openModalStatusButton" class=" hover:text-green-700 text-green font-bold py-1 px-1 rounded"> <!-- Ajusta el relleno aquí -->
                                    <i class="material-icons">refresh</i>  
                                </button>
                            </td>
                        </tr>


                            <tr>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    Fallo de hardware
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white font-bold text-sm  text-green-700">
                                   Completado
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                  20/03/2024 
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    Ventas
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons">picture_as_pdf</i> 
                                </button>
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm ">
                                    <button id="openModalStatusButton" class=" hover:text-green-700 text-green font-bold py-1 px-1 rounded ">
                                        <i class="material-icons">refresh</i> 
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    Fallo de red
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white font-bold text-sm  text-green-700">
                                   Completado
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                  02/01/2024 
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    Logistica
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons">picture_as_pdf</i> 
                                </button>
                                </td>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm ">
                                    <button id="openModalStatusButton" class=" hover:text-green-700 text-green font-bold py-1 px-1 rounded ">
                                        <i class="material-icons">refresh</i> 
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                       
                        <div class="inline-flex mt-2 xs:mt-0">
                        <!-- component -->

                        <div class="flex justify-center">
                            <nav class="flex space-x-2" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm bg-blue-400 text-white font-semibold rounded-md focus:border-blue-300">
                                    Previous
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm  bg-blue-400 text-white font-semibold rounded-md focus:border-blue-300">
                                    Next
                                </a>
                            </nav>
                        </div>

                    </div>
                </div>    
            </div> <!-- div de class -->
    </div> <!-- div de container -->



    @include('partials.modal_status')

  
</body>

@endsection