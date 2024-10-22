<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        // Retrieve instructors from the database
        $instructors = Instructor::all();

        // Return view with instructors data
        return view('welcome', compact('instructors'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        // Search instructors based on the query
        $instructors = Instructor::where('name', 'LIKE', "%{$query}%")
            ->orWhere('subject', 'LIKE', "%{$query}%")
            ->get();

        return view('welcome', compact('instructors'));
    }

    public function filter(Request $request)
    {
        // Get the selected filter values
        $ages = $request->input('age'); // This will still be an array
        $grades = $request->input('grade');
        $subjects = $request->input('subject');
        $prices = $request->input('price');
        $curriculums = $request->input('curriculum');
        $locations = $request->input('location');

        // Build a query based on the selected filters
        $query = Instructor::query();

        // Apply filters if they are present
        if ($ages) {
            foreach ($ages as $age) {
                $ageRange = explode('-', $age);
                $query->orWhere('ages_teach', 'LIKE', '%' . $ageRange[0] . '%'); // Adjusted to check substring match
            }
        }

        if ($grades) {
            $query->whereIn('grade', $grades);
        }

        if ($subjects) {
            $query->whereIn('subject', $subjects);
        }

        if ($prices) {
            foreach ($prices as $price) {
                $priceRange = explode('-', $price);
                $query->orWhereBetween('hourly_rate', [$priceRange[0], $priceRange[1]]);
            }
        }

        if ($curriculums) {
            $query->whereIn('curriculum', $curriculums);
        }

        if ($locations) {
            $query->whereIn('location', $locations);
        }

        $instructors = $query->get();

        return view('welcome', compact('instructors'));
    }


}
