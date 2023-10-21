<?php
 
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AuthController;
 use App\Http\Controllers\ElecteurController;
 use App\Http\Controllers\CandidatController;
 use App\Http\Controllers\UtilisateurController; // Importez le contrôleur AdminController
 use App\Http\Controllers\activiteController;
 use App\Http\Controllers\aboutController;
 use App\Http\Controllers\contactController;
 use App\Http\Controllers\resultatController;
 use App\Http\Controllers\tableaudebordController;
 Route::get('/', function () {
     return view('welcome');
 });
 
 

//  Route::controller(UtilisateurController::class)->group(function () {
//      Route::get('register', 'register')->name('register');
//      Route::post('register', 'registerSave')->name('register.save');
 
//      Route::get('login', 'login')->name('login');
//      Route::post('login', 'loginAction')->name('login.action');
 
//      Route::get('logout', 'logout')->middleware('auth')->name('logout');
//  });

 
 Route::controller(AuthController::class)->group(function () {

   
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
 Route::middleware('auth')->group(function () {
     Route::get('dashboard', function () {
         return view('dashboard');
     })->name('dashboard');
 
     Route::controller(ElecteurController::class)->prefix('electeurs')->group(function () {
         Route::get('', 'index')->name('electeurs');
        

         Route::get('create', 'create')->name('electeurs.create');
         Route::get('parrain', 'parrain')->name('electeurs.parrain');
         Route::post('store', 'store')->name('electeurs.store');
         Route::get('show/{id}', 'show')->name('electeurs.show');
         Route::get('edit/{id}', 'edit')->name('electeurs.edit');
         Route::put('edit/{id}', 'update')->name('electeurs.update');
         Route::delete('destroy/{id}', 'destroy')->name('electeurs.destroy');
     });
 
     Route::controller(CandidatController::class)->prefix('candidats')->group(function () {
         Route::get('', 'index')->name('candidats');
         Route::get('create', 'create')->name('candidats.create');
         Route::post('store', 'store')->name('candidats.store');
         Route::get('show/{id}', 'show')->name('candidats.show');
         Route::get('edit/{id}', 'edit')->name('candidats.edit');
         Route::put('edit/{id}', 'update')->name('candidats.update');
         Route::delete('destroy/{id}', 'destroy')->name('candidats.destroy');
     });
 
    
     Route::get('/activite', [App\Http\Controllers\activiteController::class, 'activite'])->name('activite');
     Route::get('/activite', [App\Http\Controllers\activiteController::class, 'activite'])->name('activite');
     Route::get('/contact', [App\Http\Controllers\contactController::class, 'contact'])->name('contact');
     Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
     Route::get('/about', [App\Http\Controllers\aboutController::class, 'about'])->name('about');
     Route::get('/resultat', [App\Http\Controllers\resultatController::class, 'resultat'])->name('resultat');
     Route::get('/tableaudebord', [App\Http\Controllers\tableaudebordController::class, 'tableaudebord'])->name('tableaudebord');
    });
    
    Route::middleware(['auth', 'utilisateur'])->group(function () {
        // Routes spécifiques à l'utilisateur
        Route::get('utilisateur/dashboard', function () {
            return view('utilisateur.dashboard');
        })->name('utilisateur.dashboard');
        Route::middleware('auth')->group(function () {
        Route::controller(ElecteurController::class)->prefix('utilisateur/electeurs')->group(function () {
            Route::get('', 'index')->name('utilisateur.electeurs');
            Route::get('create', 'create')->name('utilisateur.electeurs.create');
            Route::post('store', 'store')->name('utilisateur.electeurs.store');
            Route::get('show/{id}', 'show')->name('utilisateur.electeurs.show');
            Route::get('edit/{id}', 'edit')->name('utilisateur.electeurs.edit');
            Route::put('edit/{id}', 'update')->name('utilisateur.electeurs.update');
            Route::delete('destroy/{id}', 'destroy')->name('utilisateur.electeurs.destroy');
        });
    
        // Autres routes spécifiques à l'administrateur
    });
    
   
        // Routes pour les utilisateurs authentifiés (non-administrateurs)
        // ...
    });
   
    
    
    