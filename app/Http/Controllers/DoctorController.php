<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{


    public function search(Request $request)
    {
        $searchTerm = $request->get('search');
        $doctors = Doctor::where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('specialty', 'like', '%' . $searchTerm . '%')
                        ->get();
        return view('admin.search', compact('doctors'));
    }


    public function editdoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.updatedoctor', compact('doctor'));
    }


    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->specialty = $request->specialty;
        $doctor->clinic_name = $request->clinic;


        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('doctorcv'), $cvName);
            $doctor->cv = $cvName;
        }

        $doctor->save();

        return redirect()->route('search.route')->with('message', 'تم تحديث بيانات الطبيب بنجاح');
    }


    public function deletedoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('search.route')->with('message', 'تم حذف الطبيب بنجاح');
    }



//alwakhay
    public function showCV($id)
    {

        $doctor = Doctor::find($id);

        if ($doctor && $doctor->cv) {

            $cvPath = public_path('doctorcv/' . $doctor->cv);


            if (file_exists($cvPath)) {
                return response()->file($cvPath);
            } else {
                return redirect()->back()->with('error', 'ملف السيرة الذاتية غير موجود!');
            }
        }


        return redirect()->back()->with('error', 'السيرة الذاتية غير متوفرة!');
    }


//aldahmani
public function showDoctorCv($id)
{

    $doctor = Doctor::find($id);

    if (!$doctor) {
        return redirect()->back()->with('error', 'الطبيب غير موجود!');
    }


    if ($doctor->cv) {
        $cvPath = public_path('doctorcv/' . $doctor->cv);


        if (file_exists($cvPath)) {
            return response()->file($cvPath);
        } else {
            return redirect()->back()->with('error', 'ملف السيرة الذاتية غير موجود!');
        }
    }

    return redirect()->back()->with('error', 'لا يوجد سيرة ذاتية لهذا الطبيب!');
}






    // matega
public function matega($id)
{

    $doctor = Doctor::find($id);

    if (!$doctor) {
        return redirect()->back()->with('error', 'الطبيب غير موجود!');
    }


    if ($doctor->cv) {
        $cvPath = public_path('doctorcv/' . $doctor->cv);


        if (file_exists($cvPath)) {
            return response()->file($cvPath);
        } else {
            return redirect()->back()->with('error', 'ملف السيرة الذاتية غير موجود!');
        }
    }

    return redirect()->back()->with('error', 'لا يوجد سيرة ذاتية لهذا الطبيب!');
}



}
