<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingsPrivacyController extends Controller
{
    public function index(Files $files): \Inertia\Response
    {
        Inertia::setRootView('layouts/app');

        return Inertia::render('SettingsPrivacy', [
            'data' => [
                'upload_photo_link' => route('settings-privacy.up'),
                'profile_pic_link'  => $files->getProfilePic(auth()->id())->path,
            ],
        ]);
    }

    public function uploadPhoto(Request $request, Files $files): RedirectResponse
    {
        $avatar = $request->file('avatar');

        Files::updateOrCreate(
            ['uploaded_by' => auth()->id()],
            [
                'path'        => $avatar->store('profile_pics'),
                'filename'    => $avatar->getClientOriginalName(),
                'extension'   => $avatar->getClientOriginalExtension(),
                'uploaded_by' => auth()->id(),
            ],
        );

        return Redirect::route('settings-privacy');
    }
}
