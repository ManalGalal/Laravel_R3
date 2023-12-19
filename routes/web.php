<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;


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

// ============= Day 3 Task ============

Route::get('login', [LoginController::class, 'create'])->name('login');
  

Route::post('logged', [ LoginController::class, 'store'])->name('logged');
    
//====day 3 Online Session =============


Route::get('/', function () {
    return view('welcome');
});


// Route::get('login', function () {
//     return view('login');
// });

// Route::post('logged', function () {
//     return 'You are logged in';
// })->name('logged');

Route::get('control',[ ExampleController::class,'show']);


//=============== Day 2 Tasks ======================================




Route::get('about', function () {
    return view('about');
});

Route::get('contactus', function () {
    return view('contactus');
});



//Routing Constrains --> Prefix and Gropu


Route::prefix('blog')->group(function(){


    Route::get('/', function () {
        return view ('blog') ;
    });

    Route::get('science', function () {
        return view ('science') ;
    });

    Route::get('sports', function () {
        return view ('sports') ;
    });

    Route::get('math', function () {
        return view ('math') ;
    });
    Route::get('medical', function () {
        return view ('medical') ;
    });
    
});



        // store data into car table
       // Route::get('storeCar',[CarController::class,'store']);


     //Route for car table
    //  Route::get('createCar', [CarController::class, 'create']);

    //  Route::post('storeCar', [CarController::class, 'store'])->name('storeCar');
        Route::get('cars',[CarController::class,'index']);
        Route::get('storeCar',[CarController::class,'store']);
        Route::get('addCar',[CarController::class,'create']);
        Route::post('storeCar',[CarController::class,'store'])->name('storeCar');


// Route::get('cars', function () {
//     return view('cars');
// });



Route::get('addPost', function () {
    return view('addPost');
});
Route::get('posts', function () {
    return view('posts');
});

Route::get('updatePost', function () {
    return view('updatePost');
});

Route::put('update/{id}',[CarController::class,'update'])->name('update');
Route::get('showCar/{id}',[CarController::class,'show'])->name('showCar');
Route::get('deleteCar/{id}',[CarController::class,'destroy'])->name('deleteCar');
// Route::get('forceDelete/{id}',[CarController::class,'forceDelete'])->name('forceDelete');
// Route::get('restoreCar/{id}',[CarController::class,'restore'])->name('restoreCar');

Route::get('trashed',[CarController::class,'trashed'])->name('trashed');
Route::get('Cars',[CarController::class,'index']);


//---------------------------------------------------//


Route::get('posts',[PostController::class,'index']);
Route::get('storePost',[PostController::class,'store']);
Route::get('addPost',[PostController::class,'create']);
Route::post('storePost',[PostController::class,'store'])->name('storePost');


//Day 6  Task.............

Route::put('updatep/{id}',[PostController::class,'updatep'])->name('updatep');
Route::get('showPost/{id}',[PostController::class,'show'])->name('showPost');

Route::get('deletePost/{id}',[PostController::class,'destroy'])->name('deletePost');
Route::get('forceDelete/{id}',[PostController::class,'forceDelete'])->name('forceDelete');
Route::get('restorePost/{id}',[PostController::class,'restore'])->name('');

Route::get('trashedPosts',[PostController::class,'trashedPosts'])->name('trashedPosts');
Route::get('Post',[PostController::class,'index']);



//=====================================================================================
//    session Practice
//=====================================================================================
            // Route::get('test', function () {
            //     return 'welcome to my laravel project';
            // });
          // Route::get('test1/{id}', function ($id) {
            //     return ' the  Id is: ' . $id ;
            // });

            // //Routing Constrains--> Send Parameter with Regular Expression

            // // Route::get('test2/{id?}', function ($id=0) {
            // //     return ' the  Id is: ' . $id ;
            // // })->where(['id' => '[0-9]+  ']);


            // // Routing Constrains --> Sending Parameter with Wherenumber 

            // Route::get('test2/{id?}', function ($id=0) {
            //     return ' the  Id is: ' . $id ;
            // })->whereNumber('id') ;


            // //Routing Constrains--> Sending Parameter with WhereAlpha

            // Route::get('test3/{name?}', function ($name=null) {
            //     return ' the  name is: ' . $name ;
            // })->whereAlpha('name') ;


            // // Routing Constrains--> Multiple Parameters

            // Route::get('test4/{id}/{name}', function ($id=0, $name) {
            //     return ' the  Id is: ' . $id . ' and my name is: ' . $name ;
            // })->where(['id' => '[0-9]+', 'name' =>'[a-zA-Z]+']);


            // // Routing Constrains --> Using whereIN 
            // Route::get('product/{category}', function ($cat) {
            //     return ' the Category is: ' . $cat ;
            // })->whereIn('category',['laptop','pc', 'mobile']) ;


//Routing Constrains Patterns-->  APP -> Providers
//== Go to RouteServiceProvider.php-> add the required constrains inside  public function boot(): void like this 
        // public function boot(): void 
        // {
        //     Route::pattern( 'name', '[a-zA-Z]+');
        // }
        // pattern is used with regular expression only

   

    // Route::get('test1/{id}', function ($id) {
    //     return ' the  Id is: ' . $id ;
    // });
    
    // Route::get('sport', function () {
    //     return 'welcome to my laravel project';
    // });
    
    // Route::get('test2/{id?}', function ($id=0) {
    //     return ' the  Id is: ' . $id ;
    // })->whereNumber('id') ;
    
    
    //Routing Constrains--> Sending Parameter with WhereAlpha
    
    // Route::get('test3/{name?}', function ($name=null) {
    //     return ' the  name is: ' . $name ;
    // })->whereAlpha('name') ;
    
    
    // Routing Constrains--> Multiple Parameters
    
//     Route::get('test4/{id}/{name}', function ($id=0, $name) {
//         return ' the  Id is: ' . $id . ' and my name is: ' . $name ;
//     })->where(['id' => '[0-9]+', 'name' =>'[a-zA-Z]+']);
    
    
//     // Routing Constrains --> Using whereIN 
//     Route::get('product/{category}', function ($cat) {
//         return ' the Category is: ' . $cat ;
//     })->whereIn('category',['laptop','pc', 'mobile']) ;

// });

//=================================
// FALLBACK --> it routes 404 Error Page to a certain page.


// Route::fallback(function(){
//     return redirect('/');
// });

// Route::fallback(fn() => redirect('/'));

//=========================
//Route to View 


//New Blade File Route