<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingsPrivacyController extends Controller
{
    public function index(Files $files)
    {
        Inertia::setRootView('layouts/app');

        return Inertia::render('SettingsPrivacy', [
            'data' => [
                'upload_photo_link' => route('settings-privacy.up'),
                'profile_pic_link'  => $files->getProfilePic(auth()->id())->path,
            ],
        ]);
    }

    public function uploadPhoto(Request $request, Files $files)
    {
        $path = $request->file('avatar')->store('profile_pics');

        Files::updateOrCreate(
            ['uploaded_by' => auth()->id()],
            [
                'path'        => $path,
                'filename'    => $request->file('avatar')->getClientOriginalName(),
                'extension'   => $request->file('avatar')->getClientOriginalExtension(),
                'uploaded_by' => auth()->id(),
            ],
        );

        return Redirect::route('settings-privacy');
    }
}
