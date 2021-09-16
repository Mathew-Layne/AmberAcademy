<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use XMLWriter;

class XMLController extends Controller
{

    function xml()
    {
        $users = DB::table('user')->get();

        $xml = new XMLWriter();
        $xml->openMemory();
        $xml->startDocument();
        $xml->startElement('users');
        foreach ($users as $user) {
            $xml->startElement('Applicants');
                $xml->writeElement('ID', $user->id);
                $xml->writeElement('First_Name', $user->first_name);
                $xml->writeElement('Last_Name', $user->last_name);
                $xml->writeElement('Username', $user->username);
                $xml->writeElement('DOB', $user->dob);
                $xml->writeElement('Phone', $user->phone_number);
                $xml->writeElement('Address', $user->address);
                $xml->writeElement('City', $user->city);
                $xml->writeElement('Parish', $user->parish);
            $xml->endElement();
        }
        $xml->endElement();
        $xml->endDocument();

        $content = $xml->outputMemory();
        Storage::disk('local')->put('Applicants.xml', $content);
        $xml = null;

        return response($content)->header('Content-Type', 'text/xml');
    }
}
