<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoController extends Controller
{
    public function index() {
        $todos = TodoList::all();
        return response()->json($todos, 200);
    }
}