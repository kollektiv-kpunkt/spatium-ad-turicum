<?php

use App\Http\Controllers\SupporterController;
use App\Http\Controllers\ShareController;
use Illuminate\Support\Facades\Route;
use App\Models\Supporter;

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
    return view('landing');
})->name('landing');

Route::get('/danke', function () {
    if (request()->session()->get('supporter') == null) {
        return redirect('/');
    }
    return view('thx', [
        'supporter' => request()->session()->get('supporter')
    ]);
})->name('thx');

Route::get("s/{source}", function($source) {
    setcookie("sat_source", $source, time() + (86400 * 5), "/");
    return redirect("/");
});

Route::get("share/{platform}", [ShareController::class, "share"])->name("share");

Route::post('supporters', [SupporterController::class, 'storeFromPetition'])->name('supporters.storeFromPetition');

Route::get("/verify/{token}", function($token){
    $verified = Supporter::verify($_GET["id"], $token);
    if ($verified) {
        return view("verification.verified");
    } else {
        return view("verification.failed");
    }
});
