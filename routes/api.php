<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


route::post('cadastrar/projeto', 'ProjectController@store');
route::get('buscar/projeto/{id}', 'ProjectController@show');
route::any('editar/projeto/{id}','ProjectController@update');
route::delete('excluir/projeto{id}','ProjectController@destroy');
