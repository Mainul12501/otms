<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\BlogModule\Blog;
use App\Models\Admin\BlogModule\BlogCategory;
use App\Models\Admin\CourseModule\Course;
use App\Models\Admin\CourseModule\CourseCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class OTMSController extends Controller
{
    protected $courseCategories = [], $courses = [], $blogCategories = [], $blogs = [], $teachers = [], $course;
    public function home()
    {
        $this->courseCategories = CourseCategory::where('status', 1)->get();
        $this->blogs            = Blog::where('status', 1)->take(3)->get();
        $this->courses          = Course::where('status', 1)->latest()->take(6)->get();
        $this->teachers         = User::where('role', 1)->get();
        return view('front.home.home', [
            'courseCategories'  => $this->courseCategories,
            'blogs'             => $this->blogs,
            'courses'           => $this->courses,
            'teachers'          => $this->teachers
        ]);
    }
    public function courseCategory($categoryId)
    {
        return view('front.courses.category', [
            'category'  => CourseCategory::select(['id', 'name'])->find($categoryId),
            'courses'   => Course::where('course_category_id', $categoryId)->where('status', 1)->get()
        ]);
    }
    public function courseDetails($courseId)
    {
        $this->course   = Course::find($courseId);
        $this->courses  = Course::where('course_category_id', $this->course->course_category_id)->where('id', '!=', $courseId)->take(3)->latest()->get();
        return view('front.courses.details', [
            'course'    => $this->course,
            'relatedCourses'    => $this->courses,
            'isCourseInCart'    => checkIfCourseIsInCart($courseId)
        ]);
    }
    public function blogCategory()
    {
        return view('front.blogs.category');
    }
    public function blogDetails()
    {
        return view('front.blogs.details');
    }
    public function aboutUs()
    {
        return view('front.common-pages.about');
    }
    public function contactPage()
    {
        return view('front.common-pages.contact');
    }


}
