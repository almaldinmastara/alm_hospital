<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointmen;

class AdminController extends Controller
{
public function addview()
{

    return view('admin.Add_doctor');
}

public function upload(Request $request)
{
    $doctors = new doctor;
    $image=$request->file;
    $imagename=time().'.'. $image->getClientoriginalExtension();
    $request->file->move('doctorimage' ,$imagename);
    $doctors->image=$imagename;

    $doctors->name=$request->name;
    $doctors->phone=$request->number;
    $doctors->clinic_name=$request->clinic;
    $doctors->hire_date=$request->data;
    $doctors->specialty=$request->specialty;

    $doctors->save ();
    return redirect()->back()->with('message','تم اضافة الطبيب بنجاح');
}


public function showappointment()
{
    $opc=Appointmen::all()->count();
    $data=Appointmen::all();

return view('admin.showappointment', compact('data','opc'));
}


public function approved($id)
{
$data=Appointmen::find($id);
$data->status='تم قبول الطلب';
$data->save();
return redirect()->back();

}


public function Cancled($id)
{
$data=Appointmen::find($id);
$data->status='تم الغاءالطلب';
$data->save();
return redirect()->back();

}


public function showdoctor()
{
    $d = Doctor::distinct('name')->count('name');
    $data=Doctor::all();

    return view('admin.showdoctor',compact('data','d'));
}


public function deletedoctor($id)
{
$data=Doctor::find($id);
$data->delete();
return redirect()->back();

}


public function updatedoctor($id)
{
    $data = Doctor::find($id);
  return view('admin.updatedoctor',compact('data'));
}





public function editdoctor(Request $request, $id)
{
    $data = Doctor::find($id);
    $data->name = $request->name;
    $data->phone = $request->phone;
    $data->specialty = $request->specialty;
    $data->clinic_name = $request->clinic;

    $image = $request->file('file');

    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('doctorimage', $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect()->back()->with('message','تم تحديث بيانات الطبيب بنجاح');
}




public function search_data(Request $request)
{
    $s_data = $request->input('search');
    $doctors = Doctor::where('name', 'LIKE', "%{$s_data}%")
                ->orWhere('specialty', 'LIKE', "%{$s_data}%")
                ->get(['name', 'phone', 'specialty', 'clinic_name', 'hire_date', 'image']);

    return view('admin.search', [
        'doctors' => $doctors
    ]);
}



}
