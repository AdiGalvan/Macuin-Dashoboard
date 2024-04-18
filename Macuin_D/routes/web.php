<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('inicio');
// });

Route::view('/', '/Tickets_Jefe/Solicitud_Ticket');
Route::view('/tckCancelados', 'TicketsCancelados');
Route::view('/cambio_estatus', '/Tickets_Auxiliar/TicketsAuxiliar');

// Route::view('/', 'GestionTickets');
// Route::view('/tckCancelados', 'TicketsCancelados');



