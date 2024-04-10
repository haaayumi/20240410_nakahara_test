<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $tel = [
            'tel-top' => $request->input('tel-top'),
            'tel-center' => $request->input('tel-center'),
            'tel-end' => $request->input('tel-end'),
        ];

        $contact = $request->only([ 'first-name', 'last-name', 'gender', 'email', 'address', 'building', 'detail', 'content']);

        return view('confirm', ['contact' => $contact], ['tel' => $tel]);
    }

    public function store(Request $request)
    {
        $tel = [
            'tel-top' => $request->input('tel-top'),
            'tel-center' => $request->input('tel-center'),
            'tel-end' => $request->input('tel-end'),
        ];

        $contact = $request->only([ 'first-name', 'last-name', 'gender', 'email', 'address', 'building', 'detail', 'content']);
        Contact::create($contact,$tel);

        return view('thanks');
    }

}
