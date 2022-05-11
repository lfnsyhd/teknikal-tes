<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ApiController extends Controller
{
    //
    public function inputManual(Request $request)
    {
        $insert = Contact::insert([
            'phone' => $request->phone,
            'provider' => ucfirst($request->provider),
        ]);

        $response = ['status' => 'OK', 'message' => 'Success!'];
        return $response;
    }

    public function inputAuto()
    {
        $rules = [
            ['prefix' => '0812', 'provider' => 'Simpati'],
            ['prefix' => '0813', 'provider' => 'Simpati'],
            ['prefix' => '0821', 'provider' => 'Simpati'],
            ['prefix' => '0822', 'provider' => 'Simpati'],
            ['prefix' => '0852', 'provider' => 'AS'],
            ['prefix' => '0853', 'provider' => 'AS'],
            ['prefix' => '0823', 'provider' => 'AS'],
            ['prefix' => '0851', 'provider' => 'AS'],
            ['prefix' => '0856', 'provider' => 'IM3'],
            ['prefix' => '0857', 'provider' => 'IM3'],
            ['prefix' => '0817', 'provider' => 'XL'],
            ['prefix' => '0818', 'provider' => 'XL'],
            ['prefix' => '0819', 'provider' => 'XL'],
            ['prefix' => '0859', 'provider' => 'XL'],
            ['prefix' => '0877', 'provider' => 'XL'],
            ['prefix' => '0878', 'provider' => 'XL'],
            ['prefix' => '0838', 'provider' => 'AXIS'],
            ['prefix' => '0831', 'provider' => 'AXIS'],
            ['prefix' => '0832', 'provider' => 'AXIS'],
            ['prefix' => '0833', 'provider' => 'AXIS'],
            ['prefix' => '0895', 'provider' => '3'],
            ['prefix' => '0896', 'provider' => '3'],
            ['prefix' => '0897', 'provider' => '3'],
            ['prefix' => '0898', 'provider' => '3'],
            ['prefix' => '0899', 'provider' => '3'],
            ['prefix' => '0881', 'provider' => 'Smartfren'],
            ['prefix' => '0882', 'provider' => 'Smartfren'],
            ['prefix' => '0883', 'provider' => 'Smartfren'],
            ['prefix' => '0884', 'provider' => 'Smartfren'],
            ['prefix' => '0885', 'provider' => 'Smartfren'],
            ['prefix' => '0886', 'provider' => 'Smartfren'],
            ['prefix' => '0887', 'provider' => 'Smartfren'],
            ['prefix' => '0888', 'provider' => 'Smartfren'],
            ['prefix' => '0889', 'provider' => 'Smartfren']
        ];

        for ($i = 0; $i < 25; $i++) {
            $random = rand(0, (count($rules)-1));
            $phone = $rules[$random]['prefix'].randomNumber(8);
            $provider = $rules[$random]['provider'];

            $insert = Contact::insert([
                'phone' => $phone,
                'provider' => $provider,
            ]);
        }
        
        $response = ['status' => 'OK', 'message' => "Success!"];
        return $response;
    }

    public function output()
    {
        return Contact::all();
    }

    public function outputShow($id)
    {
        $contact = Contact::findOrFail($id);
        return $contact;
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $response = ['status' => 'OK', 'message' => 'Success!'];
        return $response;
    }

    public function editPost(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->phone = $request->phone;
        $contact->provider = ucfirst($request->provider);
        $contact->save();

        $response = ['status' => 'OK', 'message' => 'Success!'];
        return $response;
    }
}
