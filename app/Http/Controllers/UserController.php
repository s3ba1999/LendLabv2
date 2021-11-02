<?php

namespace App\Http\Controllers;

use App\Models\Docent;
use App\Models\Laboratory;
use App\Models\Student;
use App\User;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function createStudent(Request $request)
    {
        $student = Student::create($request->all()+['state' => 'Pendiente']);
        $student->user()->create(['password' => Hash::make($request->password)] + $request->all());
        return redirect(route('login'));
    }

    public function createMananger(Request $request)
    {
        $mananger = Manager::create($request->all());
        $mananger->user()->create($request->all());
        return redirect(route('login'));
    }

    public function createDocent(Request $request)
    {
        $docent = Docent::create($request->all());
        $docent->user()->create($request->all());
        return redirect(route('login'));
    }
}
