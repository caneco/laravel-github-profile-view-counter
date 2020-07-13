<?php

namespace Caneco\GithubProfileViewCounter\Http\Controllers;

use Caneco\GithubProfileViewCounter\Counter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GithubProfileViewCounterController extends Controller
{
    public function __invoke(Request $request)
    {
        Counter::insert([
            'ua' => $request->userAgent(),
            'ip' => $request->ip(),
        ]);

        return response()
            ->view('github-profile-view-counter::badge', ['count' => Counter::count()])
            ->header('Content-Type', 'image/svg+xml')
            ->header('Cache-Control', 'max-age=0, must-revalidate, no-cache, no-store, private');
    }
}
