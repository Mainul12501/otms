<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\CourseModule\Course;
use App\Models\Admin\CourseModule\CourseContent;
use App\Models\Order;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard(Request $request)
    {
        if (auth()->user()->role != 0)
        {
            return redirect('/dashboard')->with('You cann\'t visit student dashboard.');
        }
        return view('front.students.dashboard.dashboard');
    }

    public function myOrders()
    {
        return view('front.students.orders.my-orders', [
            'orders'    => Order::where('user_id', auth()->id())->get(),
        ]);
    }
    public function myCourses()
    {
        return view('front.students.courses.my-courses', [
            'orders'    => Order::where('user_id' , auth()->id())->where('status', '!=', 2)->get(),
        ]);
    }
    public function showCourseContents($courseId)
    {
        return view('front.students.courses.course-contents', [
            'courseContents'    => CourseContent::where('course_id', $courseId)->get(),
            'course'            => Course::find($courseId),
        ]);
    }
    public function courseContentShow($courseContentId)
    {
        return view('front.students.courses.course-content-show', [
            'courseContent'    => CourseContent::find($courseContentId),
        ]);
    }
}
