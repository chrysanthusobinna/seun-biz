<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function generalMerchandise()
    {
        return view('general-merchandise');
    }

    public function ticketingReservation()
    {
        return view('ticketing-reservation');
    }

    public function travelTourServices()
    {
        return view('travel-tour-services');
    }

    public function studentSchoolLoan()
    {
        return view('student-school-loan');
    }

    public function hotelReservations()
    {
        return view('hotel-reservations');
    }

    public function airportTransfers()
    {
        return view('airport-transfers');
    }

    public function travelHealthInsurance()
    {
        return view('travel-health-insurance');
    }

    public function cargoShipping()
    {
        return view('cargo-shipping');
    }

    public function immigrationProtocol()
    {
        return view('immigration-protocol');
    }

    public function visaCounsellingSupport()
    {
        return view('visa-counselling-support');
    }

    public function busCarRentService()
    {
        return view('bus-car-rent-service');
    }

    public function medicalHealthTourism()
    {
        return view('medical-health-tourism');
    }

    public function charteredAircraftService()
    {
        return view('chartered-aircraft-service');
    }
}
