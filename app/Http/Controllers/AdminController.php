<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function teach(Request $request){
        $name = $request->get('coursename');
        $uploaddir = "../public/coursephoto/" . $name . ".jpg";
        move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
        $newtext = $request->get('coursetext');
        $newdesc = $request->get('coursedescription');
        DB::table('courses')->where('course_name', $name)->update(['course_text'=>$newtext, 'course_description'=>htmlspecialchars($newdesc)]);
        return redirect(route('course-page'));
    }
    public function create_new_course(Request $request){
        $newname = $request->get('coursename');
        $newtext = $request->get('coursetext');
        $newdesc = $request->get('coursedescription');
        $newlang = $request->get('courselanguage');
        DB::select("ALTER TABLE progress ADD COLUMN `$newname` INT DEFAULT 0");
        DB::table('courses')->insert(['course_name'=> $newname, 'course_description'=> $newdesc, 'course_text'=> $newtext, 'course_language'=>$newlang]);
        return redirect(route('course-page'));
    }
    public function create_new_language(Request $request){
        $newname = $request->get('languagename');
        $newdesc = $request->get('languagedescription');
        $newlang = $request->get('language');
        DB::table('language')->insert(['language_name'=> $newname, 'language_description'=> $newdesc, 'language'=>$newlang]);
        return redirect(route('course-page'));
    }

    public function newquest(Request $request){
        $c = $request->get('todel');
        $answer = $request->get('question');
        $ask1 = $request->get('ask1');
        $ask2 = $request->get('ask2');
        $ask3 = $request->get('ask3');
        $ask4 = $request->get('ask4');
        $asks = array($ask1, $ask2, $ask3, $ask4);
        $correct = $request->get('correct');
        $oldqst = DB::table('courses')->where('course_name', $c)->value('course_test');
        $oldqst= json_decode($oldqst);
        $new = array('question'=>$answer, 'answers'=>$asks, 'correct'=>intval($correct));
        if($oldqst == NULL){
            $oldqst = array();
        }
        array_push($oldqst, $new);
        $oldqst = json_encode($oldqst);
        DB::table('courses')->where('course_name', $c)->update(['course_test'=>$oldqst]);
        $a = route('teach-page');
        return redirect("$a?name=$c");
    }
    public function delete(Request $request){
        $del = $request->get('todel');
        DB::select("ALTER TABLE progress DROP COLUMN `$del`");
        DB::table('courses')->where('course_name', $del)->delete();
        return redirect(route('course-page'));
    }

    public function deletelanguage(Request $request){
        $del = $request->get('todel');
        DB::table('language')->where('language_name', $del)->delete();
        return redirect(route('course-page'));
    }

    public function deletefeedback(Request $request){
        if(Auth::user()->role_id == 3){
            $del = $request->get('todel');
            DB::table('feedback')->where('id', $del)->delete();
        }
        return redirect(route('feedback'));
    }
}
