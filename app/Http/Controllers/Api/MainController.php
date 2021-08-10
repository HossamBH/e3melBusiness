<?php

namespace App\Http\Controllers\Api;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BaseCollection;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CategoryResource;

class MainController extends Controller
{
    /**
        **************** Important ****************
        * There is a global Scope for active categories and courses.
    */

    /**
     * Display a listing of the Category Models.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories()
    {
        $categories = Category::active()->paginate(10);
        return successResponse(new BaseCollection($categories,CategoryResource::class));
    }

    /**
     * Display a listing of the Course Models.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCourses()
    {
        $courses = Course::with('category')->active()->whereHas('category', function($q){
            $q->active();
        })->paginate(10);
        return successResponse(new BaseCollection($courses,CourseResource::class));
    }

    /**
     * Display a listing of the Course Models for a specific Category Make.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCoursesOfCategory(Category $category)
    {
        $courses = Course::with('category')->active()->where('category_id', $category->id)
        ->whereHas('category', function($q){
            $q->active();
        })->paginate(10);
        return successResponse(new BaseCollection($courses,CourseResource::class));
    }
}
