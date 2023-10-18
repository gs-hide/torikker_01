<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function confirmReservation(Request $request)
    {
        // Retrieve reservation data from session
        $reservationData = $request->session()->get('reserve_data');
    
        // Store reservation data in the database
        $reservation = Reserve::create($reservationData);
    
        // Clear the session data after storing it in the database
        $request->session()->forget('reserve_data');
    
        // You can redirect to a thank you page or wherever needed
        return redirect()->route('thank_you_page');
    }

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
