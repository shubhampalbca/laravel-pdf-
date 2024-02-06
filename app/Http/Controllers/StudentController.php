<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use PDF;


class StudentController extends Controller
{
    public function student()
    {
        return view('student.student');
    }
    
    
    public function store(Request $request)
    {    
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->mobile = $request->input('mobile');
        $student->section = $request->input('section');
    
         if($request->hasfile('profile'))
            {
                $file = $request->file('profile');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/profiles/', $filename);
                $student->profile = $filename;
            }

        $student->save();
    
        return redirect('students')->with('status', 'Student Added Successfully');
    }
    

    public function studentrecord()
    {
        $student = Student::all();
    
         return view('student.studentrecord', compact('student'));
    }
   
    public function pdfrecord($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return abort(404);
        }
        $pdf = PDF::loadView('student.studentpdf', ['student' => $student,])
            ->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('studentpdf.pdf');
    }
   

public function pdf()
{
    $student = Student::all();
    $pdf = PDF::loadView('student.pdf', ['student' => $student,])
        ->setOptions(['defaultFont' => 'sans-serif']);
    
    // Set base path for images
    $basePath = public_path('uploads/profiles/');
    $pdf->getDomPDF()->setBasePath($basePath);

    return $pdf->download('pdf.pdf');
}


}