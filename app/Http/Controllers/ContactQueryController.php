<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactQueryController extends Controller
{
    public $module_action;
    public $module_title;
    public $module_icon;
    public $module_name;
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Query';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';
    }

    function index(Request $request)
    {
        $module_action = null;
        $module_title = $this->module_title;
        $module_icon = $this->module_icon;
        $module_name = $this->module_name;

        $queries = Contact::query();
        $queries = $queries->latest()->paginate(10);

        return view(
            'property::backend.contact.index',
            compact('queries', 'module_action', 'module_icon', 'module_title', 'module_name')
        );
    }


    public function show($id)
    {
        $query = Contact::findOrFail($id);
        return view('property::backend.contact.show', data: compact('query'));
    }

    public function store(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database using the Contact model
        $contact = Contact::create($validated);

        if (mail_admin()) {

            // Example: Sending an email (optional)
            Mail::to(mail_admin())->send(mailable: new ContactMail($contact));
        }


        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
