<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        return response()->json($employers);
    }

    public function store(Request $request)
    {
        $employer = new Employer();
        $employer->company_name = $request->company_name;
        $employer->industry = $request->industry;
        $employer->description = $request->description;
        $employer->save();

        return response()->json($employer);
    }

    public function show($id)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            return response()->json(['message' => 'Employer not found'], 404);
        }
        return response()->json($employer);
    }

    public function update(Request $request, $id)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            return response()->json(['message' => 'Employer not found'], 404);
        }

        $employer->company_name = $request->company_name ?? $employer->company_name;
        $employer->industry = $request->industry ?? $employer->industry;
        $employer->description = $request->description ?? $employer->description;
        $employer->save();

        return response()->json($employer);
    }

    public function destroy($id)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            return response()->json(['message' => 'Employer not found'], 404);
        }
        $employer->delete();
        return response()->json(['message' => 'Employer deleted successfully']);
    }
}
