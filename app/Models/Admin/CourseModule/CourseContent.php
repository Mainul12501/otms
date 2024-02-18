<?php

namespace App\Models\Admin\CourseModule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected static $courseContent;

    public static function createOrUpdateCourseContent($request, $id = null)
    {
        if (isset($id))
        {
            self::$courseContent    = CourseContent::find($id);
        } else {
            self::$courseContent    = new CourseContent();
        }

        self::$courseContent->course_id             = $request->course_id;
        self::$courseContent->title                 = $request->title;
        self::$courseContent->type                  = $request->type;
        self::$courseContent->file_url              = fileUpload($request->file('file'), 'course-content-', isset($id) ? self::$courseContent->file_url : null);
        self::$courseContent->file_type             = $request->hasFile('file') ? $request->file('file')->getClientMimeType() : (isset($id) ? self::$courseContent->file_type : null);
        self::$courseContent->note                  = $request->note;
        self::$courseContent->youtube_link          = $request->youtube_link;
        self::$courseContent->status                = $request->status == 'on' ? 1 : 0;
        self::$courseContent->save();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
