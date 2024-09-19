<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class Chats extends Controller
{
    public function index(): Response{
        return Inertia::render('chats/page');
    }
    public function show($user): Response{
        return Inertia::render('chats/details/page');
    }
}
