<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Enums\CommonEnum;

class SearchController extends Controller
{
    public function index()
    {
        $users = User::select('designation_id', 'department_id', 'users.name as name', 'designations.name as designation_name', 'departments.name as department_name')
                    ->leftJoin('designations', 'users.designation_id', '=', 'designations.id')
                    ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
                    ->get();
              
        return view('search', compact('users'));
    }

    public function search(Request $request)
    {
        $users = User::select('designation_id', 'department_id', 'users.name as name', 'designations.name as designation_name', 'departments.name as department_name')
                    ->leftJoin('designations', 'users.designation_id', '=', 'designations.id')
                    ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
                    ->where(function($q) use ($request) {
                        $q->where('users.name', 'like', "%". $request['keyword'] ."%")
                                ->orWhere('designations.name', 'like', "%". $request['keyword'] ."%")
                                ->orWhere('departments.name', 'like', "%". $request['keyword'] ."%");
                    })
                    ->get();
                    
        return response()->json($users, 200);
    }
}
