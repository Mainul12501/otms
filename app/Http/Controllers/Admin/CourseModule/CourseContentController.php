<?php

namespace App\Http\Controllers\Admin\CourseModule;

use App\Http\Controllers\Controller;
use App\Models\Admin\CourseModule\Course;
use App\Models\Admin\CourseModule\CourseContent;
use Illuminate\Http\Request;

class CourseContentController extends Controller
{
    protected $course, $courses = [], $courseContent, $courseContentS = [];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->courseContentS   = CourseContent::where('course_id', $request->course_id)->latest()->get();
        return view('admin.course-management.course-content.index', [
            'courseContents'  => $this->courseContentS
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course-management.course-content.form', [
            'courses'  => Course::whereStatus(1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
        ]);
        CourseContent::createOrUpdateCourseContent($request);
        return back()->with('success', 'Course Content Created Successfully.');
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
        $this->courseContent    = CourseContent::find($id);
        $_GET['course_id']  = $this->courseContent->course_id;
        return view('admin.course-management.course-content.form', [
            'courseContent'  => $this->courseContent,
            'courses'  => Course::whereStatus(1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required',
        ]);
        CourseContent::createOrUpdateCourseContent($request, $id);
        return redirect()->route('course-contents.index', ['course_id' => CourseContent::find($id)->course_id])->with('success', 'Course Content Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseContent::deleteCourse($id);
        return back()->with('success', 'Course Content deleted Successfully.');
    }
}
