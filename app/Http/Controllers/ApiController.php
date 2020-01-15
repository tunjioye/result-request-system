<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class ApiController extends Controller
{
    public function getSchoolStudents(Request $request, $id)
    {
        $school = School::findOrFail($id);
        $response = $school->students->map(function ($item) {
            return [
                'id' => $item['id'],
                'matric_number' => $item['matric_number'],
                'full_name' => $item->fullName(),
            ];
        });

        return response()->json($response);
    }
}
