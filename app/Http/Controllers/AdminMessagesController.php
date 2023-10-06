<?php



namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    public function show()
    {
        $contacts = Contact::all();
        return view('admin.messages', ['contacts' => $contacts]);
    }
}
