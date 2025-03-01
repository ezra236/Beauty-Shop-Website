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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('Home');




Route::get('/terms-of-use', function () {
    return view('Tou');
});


Route::get('/privacy', function () {
    return view('privacy');
});


Route::get('/new', function () {
    return view('new');
});


Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/lipG', function () {
    return view('lipG');
});

Route::get('/lipL', function () {
    return view('lipL');
});

Route::get('/lipS', function () {
    return view('lipS');
});

Route::get('/foundation', function () {
    return view('foundation');
});

Route::get('/concealer', function () {
    return view('concealer');
});


Route::get('/blush', function () {
    return view('blush');
});


Route::get('/eye', function () {
    return view('eye');
});


Route::get('/all', function () {
    return view('all');
});


Route::get('/body', function () {
    return view('body');
});


Route::get('/LipT', function () {
    return view('LipT');
});


Route::get('/Mask', function () {
    return view('Mask');
});


Route::get('/EyeCare', function () {
    return view('EyeCare');
});


Route::get('/shampoo', function () {
    return view('shampoo');
});


Route::get('/condition', function () {
    return view('condition');
});


Route::get('/productC', function () {
    return view('productC');
});


Route::get('/policy', function () {
    return view('policy');
});


Route::get('/Accessibility', function () {
    return view('Accessibility');
});


Route::get('/fine', function () {
    return view('fine');
});

Route::get('/maskcare', function () {
    return view('maskc');
});


Route::get('/care', function () {
    return view('care');
});


Route::get('/ckary_lip', function () {
    return view('ckary_lip'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('ckary_lip');


Route::get('/productA', function () {
    return view('productA'); // This looks for resources/views/productA.blade.php
})->name('productA');


Route::get('/productB', function () {
    return view('productB'); // This will look for resources/views/productB.blade.php
})->name('productB');


Route::get('/productE', function () {
    return view('productE'); // This will look for resources/views/productE.blade.php
})->name('productE');


Route::get('/productD', function () {
    return view('productD'); // This will look for resources/views/productD.blade.php
})->name('productD');


Route::get('/lip1', function () {
    return view('lip1'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('lip1');


Route::get('/lip2', function () {
    return view('lip2'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('lip2');

Route::get('/lip3', function () {
    return view('lip3'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('lip3');

Route::get('/lip4', function () {
    return view('lip4'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('lip4');


Route::get('/pay', function () {
    return view('pay'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('pay');


Route::get('/policyy', function () {
    return view('policyy'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('policyy');



Route::get('/payy', function () {
    return view('payy'); // Assuming you have a Blade view named `ckary_lip.blade.php`
})->name('payy');


