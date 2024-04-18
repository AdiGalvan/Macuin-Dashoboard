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

<<<<<<< Updated upstream
Route::view('/', 'Login');
Route::view('/tckGestion', 'GestionTickets');
Route::view('/tckConsultar', 'consultarTickets');
Route::view('/tckGestion', 'GestionTickets');
Route::view('/tckCancelados', 'TicketsCancelados');
Route::view('/tckAsignados', 'TicketsAsignados');
Route::view('/tckMensajes', 'Mensajes');



=======
Route::view('/', '/Tickets_Auxiliar/TicketsAuxiliar');
Route::view('/tckCancelados', 'TicketsCancelados');
Route::view('/cambio_estatus', '/Tickets_Auxiliar/TicketsAuxiliar');



Route::get('/Tickets_Jefe/generar_pdf', [pdfController::class, 'generarPDF'])->name('Tickets_Jefe.generar_pdf');



// Route::view('/', 'GestionTickets');
// Route::view('/tckCancelados', 'TicketsCancelados');
>>>>>>> Stashed changes



