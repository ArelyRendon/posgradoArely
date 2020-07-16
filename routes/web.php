<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin',[
    'as' => 'admin',
    'uses' => 'Admin\AdminController@index'
])->middleware('auth');

Route::resource('admin/docentes', 'DocentesController');

Route::resource('admin/generaciones', 'GeneracionesController');

Route::resource('admin/egresados', 'EgresadosController');

Route::resource('admin/alumnos', 'AlumnosController');

Route::resource('admin/tesis', 'TesisController');

Route::resource('admin/vinculacion', 'VinculacionController');

Route::resource('admin/productividades', 'ProductividadesController');


// usuario

Route::get('/',[
    'as' => 'inicio',
    'uses' => 'InicioController@index'
]);

Route::get('/ProcesoAdministrativo',[
    'as' => 'ProcesoAdministrativo',
    'uses' => 'InicioController@ProcesoAdministrativo'
]);

Route::get('/PlanEstudios',[
    'as' => 'PlanEstudios',
    'uses' => 'InicioController@PlanEstudios'
]);

Route::get('/PosgradoMI',[
    'as' => 'PosgradoMI',
    'uses' => 'InicioController@PosgradoMI'
]);

Route::get('/Alumnos',[
    'as' => 'Alumnos',
    'uses' => 'InicioController@Alumnos'
]);

Route::get('/AlumnosGeneraciones/{id}',[
    'as' => 'AlumnosGeneraciones',
    'uses' => 'InicioController@AlumnosGeneraciones'
]);

Route::get('/Docentes',[
    'as' => 'Docentes',
    'uses' => 'InicioController@AllDocente'
]);

Route::get('/Docente/{id}',[
    'as' => 'Docente',
    'uses' => 'InicioController@PerfilDocente'
]);
Route::get('/Productividad/{id}',[
    'as' => 'Productividad',
    'uses' => 'InicioController@Productividadn'
]);
Route::get('/Tesi/{id}',[
    'as' => 'Tesi',
    'uses' => 'InicioController@Tesin'
]);

Route::get('/Vinculaciones',[
    'as' => 'Vinculaciones',
    'uses' => 'InicioController@AllVinculacion'
]);
Route::get('/Lgacs',[
    'as' => 'Lgacs',
    'uses' => 'InicioController@AllLgac'
]);

//- activacion y desactivacion de menus

// Generaciones

Route::get('/Gactivar/{id}',[
    'as' => 'activarGeneraciones',
    'uses' => 'menuController@activarGeneraciones'
]);

Route::get('/Gdesactivar/{id}',[
    'as' => 'desactivarGeneraciones',
    'uses' => 'menuController@desactivarGeneraciones'
]);

// Alumnos
Route::get('/Aactivar/{id}',[
    'as' => 'activarAlumnos',
    'uses' => 'menuController@activarAlumnos'
]);

Route::get('/Adesactivar/{id}',[
    'as' => 'desactivarAlumnos',
    'uses' => 'menuController@desactivarAlumnos'
]);

//Docentes
Route::get('/Dactivar/{id}',[
    'as' => 'activarDocentes',
    'uses' => 'menuController@activarDocentes'
]);

Route::get('/Ddesactivar/{id}',[
    'as' => 'desactivarDocentes',
    'uses' => 'menuController@desactivarDocentes'
]);

//Tesis

Route::get('/Tactivar/{id}',[
    'as' => 'activarTesis',
    'uses' => 'menuController@activarTesis'
]);

Route::get('/Tdesactivar/{id}',[
    'as' => 'desactivarTesis',
    'uses' => 'menuController@desactivarTesis'
]);

//Peoductividades

Route::get('/Pactivar/{id}',[
    'as' => 'activarProductividad',
    'uses' => 'menuController@activarProductividad'
]);

Route::get('/Pdesactivar/{id}',[
    'as' => 'desactivarProductividad',
    'uses' => 'menuController@desactivarProductividad'
]);

// egresado
Route::get('/egresar/{id}',[
    'as' => 'marcarEgresado',
    'uses' => 'menuController@marcarEgresado'
]);
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
