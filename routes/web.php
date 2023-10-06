<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;  
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\SeatReservationController;
use App\Http\Controllers\TicketPriceController;
use App\Http\Controllers\EticketController;
use App\Http\Controllers\ReservationController;


Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Home route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// /// Route for showing the registration form
// Route::get('/signup', [RegisterController::class, 'create'])->name('signup');

// // Route for handling the registration form submission
// Route::post('/signup', [RegisterController::class, 'store']);

 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// About page route using AboutController
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


    // Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    // //Route::post('/add-train-schedule-form', [DashboardController::class, 'showAddTrainScheduleForm'])->name('add.train.schedule.form');
   
   




    
    // Route::get('/add-train-schedule', [DashboardController::class, 'showAddTrainScheduleForm'])->name('add.train.schedule.form');
    // Route::get('/train-schedule', [DashboardController::class, 'showTrainSchedule'])->name('train.schedule');
   

    // Route::post('/add-train-schedule', [DashboardController::class, 'addTrainSchedule'])->name('add.train.schedule');
    // Route::post('/add-ticket-prices', [DashboardController::class, 'addTicketPrices'])->name('add.ticket.prices');

  

    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/add-train-schedule', [DashboardController::class, 'showAddTrainScheduleForm'])->name('add.train.schedule.form');
    Route::post('/add-train-schedule', [DashboardController::class, 'addTrainSchedule'])->name('add.train.schedule');
    
    Route::get('/edit-train-schedule/{id}', [DashboardController::class, 'editTrainSchedule'])->name('edit.train.schedule');
    Route::put('/edit-train-schedule/{id}', [DashboardController::class, 'editTrainSchedule'])->name('edit.train.schedule');
    Route::post('/delete-train-schedule/{id}', [DashboardController::class, 'deleteTrainSchedule'])->name('delete.train.schedule');
    Route::delete('/delete-train-schedule/{id}', [DashboardController::class, 'deleteTrainSchedule'])->name('delete.train.schedule');


    Route::post('/add-ticket-prices', [DashboardController::class, 'addTicketPrices'])->name('add.ticket.prices');
    Route::get('/train-schedule', [DashboardController::class, 'showTrainSchedule'])->name('train.schedule');
    
   // routes/logout




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');




Route::get('/seat-reservation', [SeatReservationController::class, 'index'])->name('seat.reservation');

// routes/web.php



Route::get('/add-ticket-prices', [TicketPriceController::class, 'showTicketPrices'])->name('add.ticket.prices');
Route::post('/add-ticket-price', [TicketPriceController::class, 'addTicketPrice'])->name('add.ticket.price');  // Ensure this name is used consistently

Route::get('/edit-ticket-price/{id}', [TicketPriceController::class, 'editTicketPriceForm'])->name('edit.ticket.price.form');
Route::post('/update-ticket-price/{id}', [TicketPriceController::class, 'updateTicketPrice'])->name('update.ticket.price');
Route::post('/delete-ticket-price/{id}', [TicketPriceController::class, 'deleteTicketPrice'])->name('delete.ticket.price');


Route::get('/edit-ticket-price/{id}', [TicketPriceController::class, 'editTicketPriceForm'])->name('edit.ticket.price.form');
Route::put('/update-ticket-price/{id}', [TicketPriceController::class, 'updateTicketPrice'])->name('update.ticket.price');
Route::delete('/delete-ticket-price/{id}', [TicketPriceController::class, 'deleteTicketPrice'])->name('delete.ticket.price');

Route::get('/ticket-prices', [TicketPriceController::class, 'showTicketPrices'])->name('ticket.prices');



Route::get('/e-ticket', [EticketController::class, 'showEticketPage'])->name('e-ticket');

////////////////////////
// routes/web.php

// routes/web.php

use App\Http\Controllers\PassengerController;

Route::get('/signup', [PassengerController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [PassengerController::class, 'processSignup'])->name('signup.process');

// routes/web.php

use App\Http\Controllers\AfterLoginController;


Route::get('/afterlogin', [AfterLoginController::class, 'index'])->name('afterlogin.index');




use App\Http\Controllers\CheckerController;


    Route::get('/checker', [CheckerController::class, 'index'])->name('checker.index');



use App\Http\Controllers\TrainViewController;

Route::get('/train-schedule', [TrainViewController::class, 'showTrainSchedule'])->name('train.schedule.view');

// routes/web.php



Route::get('/train-schedule', [DashboardController::class, 'showTrainSchedule'])->name('train.schedule');

// routes/web.php

use App\Http\Controllers\AdminMessagesController;




// Contact Form Routes


// Admin Messages Route
Route::get('/admin/messages', [AdminMessagesController::class, 'show'])->name('admin.messages');



Route::get('/train-schedule', [TrainViewController::class, 'showTrainSchedule'])->name('train.schedule.view');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitContactForm']);



use App\Http\Controllers\PricecheckController;

Route::get('/ticket-prices', [PricecheckController::class, 'index'])->name('ticket.prices');



use App\Http\Controllers\ConfirmationController;



Route::get('/confirmation', [ConfirmationController::class, 'show'])->name('confirmation.show');

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// routes/web.php



Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// routes/web.php



Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');




Route::get('/train-schedule', [DashboardController::class, 'showTrainSchedule'])->name('train.schedule');


Route::get('/train-schedule', [TrainViewController::class, 'showTrainSchedule'])->name('train.schedule.view');



// Add this at the top of the file


// Reservation Routes
Route::get('/reservation', [ReservationController::class, 'showForm'])->name('reservation.form');
Route::post('/reservation', [ReservationController::class, 'reserveSeats'])->name('reserve.seats');


// routes/web.php



Route::get('/reservation', [ReservationController::class, 'showForm'])->name('reservation.show');
Route::post('/reserve-seats', [ReservationController::class, 'reserveSeats'])->name('reserve.seats');

Route::get('/reservation', [ReservationController::class, 'showForm'])->name('reservation.form');