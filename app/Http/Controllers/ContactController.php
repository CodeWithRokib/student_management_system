<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('backend.contact.index',compact('contacts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'question' => 'required|string|max:1000',
        ]);

        Contact::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Contact created successfully.');
    }

    public function destroy($id)
    {

            try{
             $contact= Contact::find($id);
             if ($contact->delete()) {
                 return redirect()->route('contact.index')->with('success', 'Contact deleted successfully.');
             } else {
                 return redirect('/contact');
         }
            }catch(\Exception $exception){
             return $exception->getMessage();
            }

    }
}