@extends('layouts.plantilla')

@section('titulo', 'Registro de Usuario')

@section('contenido')

    <!-- component -->

    <body class="antialiased font-sans bg-gray-200">

        <h1 class="text-center text-4xl font-serif mt-8 mb-4">Registro de Usuarios</h1>

        <div class="container mx-auto px-4 sm:px-8">

            <div class="flex flex-wrap -mx-4 sm:-mx-8">
                <div class="w-full md:w-2/3 px-4 sm:px-8">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Nombre
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Editar
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Eliminar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            Ventas
                                        </td>


                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <button id="openEditModalButton" class="hover:text-blanck-800 text-blank-600"><i
                                                    class="material-icons mr-1">edit</i></button>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <button id="openCancelModalButton" class="hover:text-red-800 text-red-600"><i
                                                    class="material-icons mr-1">delete</i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            Producción
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <button id="openEditModalButton" class="hover:text-blanck-800 text-blank-600"><i
                                                    class="material-icons mr-1">edit</i></button>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <button id="openCancelModalButton" class="hover:text-red-800 text-red-600"><i
                                                    class="material-icons mr-1">delete</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/3 px-4 sm:px-8">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nombre
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="Nombre">
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Departamento
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>Ventas</option>
                                    <option>Produccion</option>
                                    <option>Compras</option>
                                    <option>Contabilidad</option>
                                    <option>Logistica</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Puesto
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-state">
                                    <option>Jefe de soporte</option>
                                    <option>Auxiliar de soporte</option>
                                    <option>Cliente</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="showConfirmation()">Registrar</button>

                            <script>
                            function showConfirmation() {
                              Swal.fire({
                                title: '¿Estás seguro?',
                                text: 'Se realizará el registro',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Sí, registrar',
                                cancelButtonText: 'Cancelar'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  // Aquí puedes agregar el código para realizar la acción de registro
                                  Swal.fire(
                                    'Registro exitoso',
                                    'Se ha completado el registro correctamente',
                                    'success'
                                  )
                                }
                              })
                            }
                            </script>


                        </div>

                    </form>

                </div>
            </div>

            @include('partials.modal_agregar')
            @include('partials.modaledit')
            @include('partials.modal_eliminar')

        </div>
    </body>

@endsection
