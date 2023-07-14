<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Admin/Email');
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

    public function sendEmailToAllClients(Request $request) {
        // $email = Client::pluck('email');

        $client = Client::all();

        if ($request->message != null && $request->subject != null) {
            $subject = $request->subject;
            $content = $request->message;

            foreach ($client as $cli) {
                $first_name = $cli->first_name;
                $last_name  = $cli->last_name;
                $full_name  = $first_name . ' ' . $last_name;
                $email      = $cli->email;

                Mail::send('email.bulk-mail', ['content' => $content, 'client' => $full_name], function($message) use ($subject, $email, $full_name) {
                    $message->to($email, $full_name);
                    $message->subject($subject);
                });
            }
        } else {
            return back()->with('error', 'A field should not be empty.');
        }

        return back()->with('success', 'Emails are sent successfully.');
    }
}
