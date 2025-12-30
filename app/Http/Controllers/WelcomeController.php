<?php

namespace App\Http\Controllers;

use App\Models\slideshow;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = slideshow::get();
        return view('welcome', compact('sliders'));
    }

    public function submitAppointment(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['nullable','string','max:30'],
            'date' => ['required','date'],
            'message' => ['nullable','string','max:2000'],
        ]);

        $existed = Patient::where('email', $data['email'])->exists();

        $patient = Patient::updateOrCreate(
            ['email' => $data['email']],
            ['name' => $data['name'], 'phone' => $data['phone'] ?? null]
        );

        Appointment::create([
            'patient_email' => $patient->email,
            'appointment_date' => $data['date'],
            'request_status' => 'Requested',
            'appointment_details' => $data['message'] ?? null,
            'patient_status' => $existed ? 'Returning' : 'New',
        ]);

        return redirect()->back()->with('status', 'Appointment request submitted.');
    }

    public function appointments()
    {
        $appointments = Appointment::with('patient')->orderByDesc('created_at')->paginate(15);
        return view('appointments.index', compact('appointments'));
    }
}
