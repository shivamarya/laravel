<?php

use App\Http\Controllers\PageController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

function getUsers(){
    return [
        [
            'name' => 'John Doe',
            'phone' => '123-456-7890',
            'city' => 'New York'
        ],
        [
            'name' => 'Jane Smith',
            'phone' => '987-654-3210',
            'city' => 'Los Angeles'
        ],
        [
            'name' => 'Alice Johnson',
            'phone' => '555-555-5555',
            'city' => 'Chicago'
        ]
    ];
}

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');



// Route::get('/post', function () {
//     return view('post');
// });


// Route::view('/post','post');

// Route::get('/hello', function () {
//     return view('post');
// });


// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


// Route::get('/post/{id?}/comment/{commentid?}',function(string $id = null, string $comment=null){

//     if($id){
//         return "<h1>Post Id : ".$id."<h1><h2>Post Id : ".$comment."<h2>";
//     }else{
//         return "<h1>No Id Found<h1>";

//     }

// })->whereNumber('id')->whereAlpha('commentid');



// Route::get('/posts', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/test', function () {
//     return view('about');
// });

// Route::redirect('/about','test',301);




// Route::prefix('page')->group(function(){

//     Route::get('/about', function () {
//         return "<h1>About Page</h1>";
//     });

//     Route::get('/gallery', function () {
//         return "<h1>Gallery Page</h1>";
//     });

//     Route::get('/post/firstpost', function () {
//         return "<h1>First Post Page</h1>";
//     });


// });


// Route::fallback(function(){
//     return "<h1>Page Note Found.</h1>";
// });

// Route::get('/', function () {
//     return view('frontpage');
// })->name('home');




Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/test', function () {
    return view('test');
})->name('post');


Route::get('/users', function () {
    // $name = "Shivam Arya";
    $names = getUsers();
    $city = "Mau Ranipur";

    // $names = [
    //     [
    //         'name' => 'John Doe',
    //         'phone' => '123-456-7890',
    //         'city' => 'New York'
    //     ],
    //     [
    //         'name' => 'Jane Smith',
    //         'phone' => '987-654-3210',
    //         'city' => 'Los Angeles'
    //     ],
    //     [
    //         'name' => 'Alice Johnson',
    //         'phone' => '555-555-5555',
    //         'city' => 'Chicago'
    //     ]
    // ];


    

    // return view('users', ['user' => $name, 'city' => $city, 'script' => '<script>alert("Hello")</script>']);
    // return view('users')->with('user',$name)->with('city', $city)->with('script', '<script>alert("Hello")</script>');
    // return view('users')->withUser($name)->withCity($city);
    return view('users')->with([
        'user' => $names,
        'city' => $city
    ]);
});

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]),404);

    
    $user = $users[$id] ?? "User not found";
    
    return view('user',['id' => $id, 'user' => $user]);
})->name('view.user');


Route::get('/',[PageController::class,'showHome']);
// Route::get('/',[PageController::class,'showUser']);




