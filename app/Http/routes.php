<?php




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
     return view('welcome');


});

/* Rutas - Ejemplo */ 

Route::get('ejemplo', function () {
    return view('basico/ejemplo');
   });

Route::get('ejemplo2', function () {
    return view('basico/ejemplo2');
   });


/* Rutas - Basico */ 

Route::get('basico', function () {
    return view('basico/index');
   });

   // Ruta - elementos de formulario 

  Route::get('basico/formulario', [
                               'as' => 'basico/formulario',
                               'middleware' => ['auth'],
                               'uses' => 'HomeController@formulario'
                            ]);

  // Ruta - Estructura basica de bootstrap

   Route::get('basico/estructura_basica_bootstrap', function () {
    return view('basico/estructura_basica_bootstrap');
   });

  // Ruta - ejemplos como enrutar



/* Rutas - Blade */


/* Rutas - jquery */

/* Rutas - PHP  */

/* Rutas - CRUD */









Route::get('/inicio', function(){

	 $saludo='hola mundo';
	$exito=true;

    $data=['saludo' => $saludo,'exito' => $exito];
    return view('inicio',$data); 
});

Route::get('user/{id}', 'UserController@showProfile');
Route::get('hola', 'UserController@hola');
Route::get('hola', 'UserController@hola');

Route::get('blade', function () {
    return view('layouts/child');
});

Route::get('pagina', function () {
    return view('layouts/estructuradecontrol');
});


Route::get('home', [
    'as' => 'home',
    'middleware' => ['auth'],
    'uses' => 'HomeController@index'
]);

// Ruta ejemplo Formulario



// Rutas Ejemplos Bootstrap

Route::get('responsive', [
    'as' => 'responsive',
    'middleware' => ['auth'],
    'uses' => 'ResponsiveController@table'
]);


// Rutas ejemplo CRUD

Route::resource('usuario','UsuarioController@create');

Route::resource('post', 'PostController');

Route::get('ejemplo/hola', [
                               'as' => 'ejemplo/hola',
                               
                               'uses' => 'PostController@hola'
                            ]);



Route::get('listado', [
    'as' => 'listado',
    'middleware' => ['auth'],
    'uses' => 'PostController@index'
]);

//Rutas para el login y registro

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

//Fin Rutas para el login y registro

Route::resource('admin', 'AdminController');

Route::get('descargar_pdf', 'Pruebacontroller@descargar_pdf');

Route::get('descargar_imagen', 'Pruebacontroller@descargar_imagen');

Route::get('localizacion', 'Pruebacontroller@localizacion');

Route::get('comprobar/password', 'Pruebacontroller@comprobar_password');

Route::get('encriptar2', 'Pruebacontroller@encriptar2');

Route::get('encriptar', 'Pruebacontroller@encriptar');

Route::get('vista/datos8', 'Pruebacontroller@vista_datos8');

Route::get('vista/datos7', 'Pruebacontroller@vista_datos7');

Route::get('vista/datos5', 'Pruebacontroller@vista_datos5');

Route::get('vista/datos4', 'Pruebacontroller@vista_datos4');

Route::get('vista/datos3', 'Pruebacontroller@vista_datos3');

Route::get('vista/datos2', 'Pruebacontroller@vista_datos2');

Route::get('vista/datos1', 'Pruebacontroller@vista_datos1');

Route::get('respuesta/json', 'Pruebacontroller@respuesta_json');

Route::get('respuesta/redireccion', 'Pruebacontroller@respuesta_redirect');

Route::any('metodo/any','Pruebacontroller@metodo_any');

Route::post('metodo/post','PruebaController@metodo_post');

Route::get('prueba/ejemplo','Pruebacontroller@ejemplo');

Route::get('form_correo','PruebaController@form');

Route::get('mail','PruebaController@mail');

Route::resource('prueba', 'PruebaController');

Route::resource('curso', 'CursoController');

Route::resource('consulta', 'ConsultaController');

Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );

Route::get('formulario', 'StorageController@index');

Route::post('storage/create', 'StorageController@save');

Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});

Route::resource('buscador','BuscadorController');

//ajax

Route::resource('genero','GeneroController');

Route::resource('generos','GeneroController@listing');

Route::get('seeder',function(){
    $faker = Faker\Factory::create();

    $limit = 1;

    for ($i = 0; $i < $limit; $i++) {
       echo $faker->realText($maxNbChars = 2000, $indexSize = 2) . '<br>' ;
    }

 
});

Route::get('pagina_graficos', 'GraficoController@index'

  
);



Route::resource('helper','EjemploshelperController');

Route::get('pagina1/pagina','PaginaTemplateController@pagina');
Route::get('pagina1/about','PaginaTemplateController@about');
Route::get('pagina1/imagen','PaginaTemplateController@imagen');
Route::resource('pagina1','PaginaTemplateController');


Route::get('administracion/pagina','TemplateAdminController@pagina');
Route::resource('administracion','TemplateAdminController');

Route::get('uploads','UploadsController@index');
Route::get('uploads/save','UploadsController@save');


Route::get('ajax_jquery/pagina','AjaxController@pagina');
Route::resource('ajax_jquery','AjaxController');


// rutas ajax

use App\Task;


Route::get('/', function () {
    $tasks = Task::all();

    return View::make('ajax.welcome')->with('tasks',$tasks);
});

Route::get('/tasks/{task_id?}',function($task_id){
    $task = Task::find($task_id);

    return Response::json($task);
});

Route::delete('/tasks/{task_id?}',function($task_id){
    $task = Task::destroy($task_id);

    return Response::json($task);
});

use Illuminate\Http\Request;

Route::post('/tasks',function(Request $request){
    $task = \App\Task::create($request->all());

    return Response::json($task);
});

Route::put('/tasks/{task_id?}',function(Request $request,$task_id){
    $task = Task::find($task_id);

    $task->task = $request->task;
    $task->description = $request->description;

    $task->save();

    return Response::json($task);
});

// ruta - exportar Excel


Route::resource('excel','ExcelController');


// ruta - exportar Pdf
  
Route::get('pdf', 'PdfController@invoice');

use App\Category;
use App\Subcategory;


Route::get('categories', function(){
           $categories = Category::all();
  
    return view('selects.index')->with('categories',$categories); 
});

Route::get('ajax-subcat',function(){
        $cat_id = Input::get('cat_id');
        $subcategories = Subcategory::where('category_id','=',$cat_id)->get();

        return Response::json($subcategories);
});

Route::get('sesion/crear', 'EjemploSesionesController@crear_sesion');
Route::get('sesion/validar', 'EjemploSesionesController@validar_sesion');
Route::get('sesion/eliminar', 'EjemploSesionesController@eliminar_sesion');
Route::get('sesion/recuperar', 'EjemploSesionesController@recuperar_sesion');

Route::get('urlamigable','UrlAmigableController@crear_url');

// menu - package - styde - html
Route::get('menu-test', 'MenuController@index');

Route::get('scope','EjemplosEloquentORMController@scope');
Route::get('scope_parametro','EjemplosEloquentORMController@scope_con_parametro');
Route::get('insertar_info','EjemplosEloquentORMController@insertar');
Route::get('actualizar_info','EjemplosEloquentORMController@actualizar');
Route::get('eliminar_info','EjemplosEloquentORMController@eliminar');
Route::get('accesor','EjemplosEloquentORMController@accesor');
Route::get('unoamuchos','EjemplosEloquentORMController@uno_a_muchos');
Route::get('muchosauno','EjemplosEloquentORMController@muchos_a_uno');



Route::get('fecha','CarbonController@index');
Route::get('formato','CarbonController@formato');
Route::get('addyear','CarbonController@addyear');
Route::get('subyear','CarbonController@subyear');

Route::get('angular/basico','AngularBasicoController@index');

Route::get('angular/obtener','AngularBasicoController@http');

Route::post('angular/crear','AngularHttpController@store');
Route::post('angular/eliminar/{id}','AngularHttpController@destroy');
Route::post('angular/mostrar/{id}','AngularHttpController@edit');
Route::post('angular/actualizar/{id}','AngularHttpController@update');

Route::get('angular/http','AngularHttpController@index');















