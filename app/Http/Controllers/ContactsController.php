<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use \App\Models\Contact;

class ContactsController extends Controller {

    function index() {
      return view('contacts');
      // $contacts = \App\Home\Contacts::all();  // get all contacts
      //$contacts = \App\Home\Contacts::limit(3)->get(); //get latest 3 contacts
      // return view('Contacts/index', array('Contacts' => $contacts));
    }

    function store(Request $request) {

      $validated = $request->validate([
        'name' => 'required|filled',
        'email' => 'required|filled',
        'message' => 'required|filled',
     ]);
     
     $contact = new Contact(); //on instancie un nouveau projet
     $contact->name = request('name'); //on set le titre avec la donnée envoyée du formulaire
     $contact->email = request('email');
     $contact->message = request('message');
     $contact->save(); // on enregistre dans la base

    //return view('contacts', array('message' => true));
    return redirect('');
    }

        
}