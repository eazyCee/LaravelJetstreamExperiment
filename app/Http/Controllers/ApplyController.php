<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ApplyController extends Controller
{
    public function store(Request $request)
    {	

    	\DB::table('apply')->insert([ 'task_id' => $request->task_id, 'user_id' => $request->user_id ]);
    }
}
