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
use App\Task;
use Illuminate\Http\Request;

//  ITCEアカデミーの課題コードここからスタート


Route::resource('/tasks', 'TasksController');


// Route::get('/', function () {
//     $tasks = Task::orderBy('created_at','asc')->get();
//     return view('tasks', compact('tasks'));
// });

// Route::post('/task', function (Request $request) {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:10',
//     ]);

//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }

//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();
    
//     return redirect('/');
// });


// Route::delete('/task/{task}', function (Task $task) {
//     $task->delete();

//     return redirect('/');
// });
//  ITCEアカデミーの課題コードここまで







//  Laravelの教材コードここからスタート

// Route::get('hello/{id?}/{pass?}', 'TasksController@index');


// Route::get('hello', 'TasksController@index');
// Route::get('hello/other', 'TasksController@other');


// シングルアクションコントローラ
// // Route::get('/hello', 'TasksController');

// // ルートパラメータ
// // Route::get('/hello/{msg?}',function ($msg='no message.') {

// // $html = <<<EOF
// // <html>
// // <head>
// // <title>Hello</title>
// // <style>
// // body {font-size: 20px; color: #999; }
// // h1 {font-size: 100px; text-align: right; color: #eee;
// //     margin: 140px 30 150px 0; }
// // </style>
// // </head>
// // <body>
// //     <h1>Hello</h1>
// //     <p>{$msg}</p>
// //     <p>これは、サンプルで作ったページです。</p>
// // </body>
// // </html>
// // EOF;


// //     return $html;
// // });


// // Route::get('hello/{id?}', 'TasksController@index');
// // Route::get('hello', 'TasksController@index');
// // Route::post('hello', 'TasksController@post');

//  Laravelの教材コードここまで