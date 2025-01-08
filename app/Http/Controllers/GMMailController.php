<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\GoodMorningEmailJob;
use App\Models\User;

class GMMailController extends Controller
{
    public function sendEmail()
    {
        $users = User::get();
        foreach ($users as $user){
        $data = [
            'to' => $user->email,
            'subject' => 'Good Morning Mail',
            'name' => $user->name
        ];
     
        GoodMorningEmailJob::dispatch($data);
    }
    }
}
