<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\View\View;


class ServiceController extends Controller
{
// show service content and booking form
    public function showServiceForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('services');
    }

    // booking
    public function bookService(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'clientName' => 'required|max:200',
            'serviceName' => 'required|max:200',
            'time' => 'required',
        ]);

        $booking = new Service();
        $booking->clientName = $request->clientName;
        $booking->serviceName = $request->serviceName;
        $booking->time = $request->time;
        $booking->save();

        // redirect
        return back()->with('success', 'Service booked successfully!');
    }

    public function viewBookings(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $bookings = Service::all();
        return view('bookings', compact('bookings'));
    }

}
