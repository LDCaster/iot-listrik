<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddDeviceControlelr extends Controller
{
    //

    public function index(Request $request)
    {
        return view('manage.add-device.index', [
            'title' => 'Add Device',
        ]);
    }
    public function sendMacAddress($mac)
    {
        // $macAddress = $request->input('mac');

        // Lakukan apa pun yang Anda inginkan dengan MAC address yang diterima.
        // Misalnya, Anda dapat menyimpannya ke dalam database atau melakukan tindakan lain.

        return $mac;
        // return 'MAC address received: ' . $mac;
    }
}
