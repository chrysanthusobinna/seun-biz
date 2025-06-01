<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services/general-merchandise', [PageController::class, 'generalMerchandise'])->name('services.general-merchandise');
Route::get('/services/ticketing-reservation', [PageController::class, 'ticketingReservation'])->name('services.ticketing-reservation');
Route::get('/services/travel-tour-services', [PageController::class, 'travelTourServices'])->name('services.travel-tour-services');
Route::get('/services/student-school-loan', [PageController::class, 'studentSchoolLoan'])->name('services.student-school-loan');
Route::get('/services/hotel-reservations', [PageController::class, 'hotelReservations'])->name('services.hotel-reservations');
Route::get('/services/airport-transfers', [PageController::class, 'airportTransfers'])->name('services.airport-transfers');
Route::get('/services/travel-health-insurance', [PageController::class, 'travelHealthInsurance'])->name('services.travel-health-insurance');
Route::get('/services/cargo-shipping', [PageController::class, 'cargoShipping'])->name('services.cargo-shipping');
Route::get('/services/immigration-protocol', [PageController::class, 'immigrationProtocol'])->name('services.immigration-protocol');
Route::get('/services/visa-counselling-support', [PageController::class, 'visaCounsellingSupport'])->name('services.visa-counselling-support');
Route::get('/services/bus-car-rent-service', [PageController::class, 'busCarRentService'])->name('services.bus-car-rent-service');
Route::get('/services/medical-health-tourism', [PageController::class, 'medicalHealthTourism'])->name('services.medical-health-tourism');
Route::get('/services/chartered-aircraft-service', [PageController::class, 'charteredAircraftService'])->name('services.chartered-aircraft-service');
