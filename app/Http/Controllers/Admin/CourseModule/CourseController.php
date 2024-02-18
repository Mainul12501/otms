<?php

namespace App\Http\Controllers\Admin\CourseModule;

use App\Http\Controllers\Controller;
use App\Models\Admin\CourseModule\Course;
use App\Models\Admin\CourseModule\CourseCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $course, $courses = [];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $this->courses   = Course::latest()->get();

        return view('admin.course-management.course.index', [
            'courses'  => $this->courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course-management.course.form', [
            'courseCategories'  => CourseCategory::whereStatus(1)->get(),
            'teachers'  => User::where('role', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::createOrUpdateCourse($request);
        return back()->with('success', 'Course Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.course-management.course.form', [
            'course'  => Course::find($id),
            'courseCategories'  => CourseCategory::whereStatus(1)->get(),
            'teachers'  => User::where('role', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Course::createOrUpdateCourse($request, $id);
        return redirect()->route('courses.index')->with('success', 'Course Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::deleteCourse($id);
        return back()->with('success', 'Course deleted Successfully.');
    }
}
