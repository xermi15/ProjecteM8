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

Route::get('/', function () {
    return view('welcome');
});

// CU01
//
Route::get('/login', function () {
    return view('CU01_login');
});

Route::post('/CU01_login', "CU01_loginController@login");
    //return "comprovant usuari";//view('CU01_login');
//});



//
//
// CU02
Route::get('/CU_2', function () {
    return view('CU_2');
});
// CU03
//
//
//
// CU04
//Laia i Joy
//
//
// CU05
//
//
//
// CU06
//Comentario Javi Millan
//Comentario Sergio Plaza 
Route::get("/editarPerfil/{id}", "CU06Controller@getEditarPerfil");
Route::post("/editarPerfil/edit/{id}", "CU06Controller@editarPerfilEdit");//->middleware('auth');
//
// CU07
Route::get('/abrirCarpeta/{id}','CU_07Controller@abrirCarpeta');
//
//
// CU08
Route::get('/CU_08', 'CU_08Controller@getPujarDoc');

Route::post('/CU_08','CU_08Controller@postPujarDoc');
// CU09
//
//
//
// CU11
//
//
//
// CU12
//
//
//
// CU13
//
//
//
// CU14
//
//
//
// CU15
//
//
//
// CU16
//
//
//
// CU17
//
//
//
// CU18
//
//
//
// CU19
// 
// CU20
// Carlos Gomez y Oscar Robles
//
//
// CU21
//
//
//
// CU22
//
//
//
// CU23
//
//
//
// CU24
//
//
//
// CU25
//
//
//
// CU26
//Jorge & Issam 
 Route::get('/CU_26', 'CU_26Controller@getIndex');
//});
//
//
//
//
//
// CU27
//
//
//
// CU28
//
//
//
// CU29
//
//
//
// CU31
//
//
//
// CU32
//
//
//
// CU33
//
//
//
// CU34
//
//
//
// CU35
//
//
//
// CU36 Gestionar Grupos (Oscar y Carlos)
Route::get('CU_36', 'CU_36Controller@getCU_36');
//
//
// CU37
//
//
//
// CU38
//
//
//
// CU39
//
//
//
// CU40 Crear Grupo (Oscar y Carlos)
Route::get('CU_40_CrearGrupo', 'CU_40Controller@getCrearGrupo');
//
//
// CU41
//
//
//
// CU42 Aleix_Prat
Route::get('/CU_42','m14Controller@getIndex');
//
// CU43
//
//
//
// CU44
//
//
//
// CU45
//
//
//
// CU46
//
//
//
// CU47
//
//
//
// CU48
//
//
//
// CU49
//
//
//
// CU50
//
//
//
// CU52
Route::get('/CU_52', 'CU_52Controller@getIndex');
//
// feina addicional


// mes proves
