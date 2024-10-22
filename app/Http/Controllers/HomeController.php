<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointmen;


class HomeController extends Controller
{

   public function redirect()
   {

    if(Auth::id())
    {
if(Auth::user()->usertype=='0')
{
    $doctor=doctor::all();
    return view('user.home',compact('doctor'));
}
else{
    return view('admin.home');
}
    }
    else
    {
        return redirect()->back();
    }
   }
   public function index()
   {
    if(Auth::id())
    {
        return redirect('home');
    }
    else
    {
    $doctor=doctor::all();
    return view('user.home',compact('doctor') );
    }
   }




   public function appoinment(Request $request)
{
    $data = new Appointmen;

    $data->name = $request->name;
    $data->email = $request->email;
    $data->date = $request->date;
    $data->phone = $request->phone;
    $data->message = $request->message;
    $data->doctor = $request->doctor;
    $data->status = 'قيد الطلب';

    if(Auth::check())
    {
        $data->user_id = Auth::user()->id;
    }

    $data->save();
    return redirect()->back()->with('message','سنتصل بك في اقرب وقت');
}



public function myappointment()
{
    if(Auth::id())
     {
        $userid=Auth::user()->id;
        $appoint=Appointmen::where('user_id',$userid)->get();
        return view('user.my_appointmont',compact('appoint'));
     }
     else
     {
       return redirect()->back();
     }
}


public function cancel_appoint($id)
{
    $data=Appointmen::find($id);
    $data->delete();
    return redirect()->back();
}






public function elwkhay()
{

    $data = Doctor::where('clinic_name','عيادات الطب الوقائي')->get();
    return view('user.elwkhay', compact('data'));
}

public function eldahmani()
{
    $data = Doctor::where('clinic_name', 'عيادات زاوية الدهماني')->get();
    return view('user.eldahmani', compact('data'));
}

public function matega()
{

    $data = Doctor::where('clinic_name','عيادات معيتيقة العسكري')->get();
    return view('user.matega', compact('data'));
}


//كود عيادات الطب الوقائي

public function getDoctorsBySpecialtyAndClinic($specialty, $view_name)
{
    $doctors = Doctor::where('specialty', $specialty)
        ->where('clinic_name', 'عيادات الطب الوقائي')
        ->get();
    return view($view_name, compact('doctors'));
}

public function alazam()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة العظام', 'clinics.w_alazam');
}


public function algalb()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة القلب', 'clinics.w_algalb');
}

public function sadrya()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة الصدرية', 'clinics.w_sadrya');
}

public function aljehazh()
{
    return $this->getDoctorsBySpecialtyAndClinic('الجهاز الهضمي', 'clinics.w_aljehazh');
}

public function aoayadmoya()
{
    return $this->getDoctorsBySpecialtyAndClinic('اوعية دموية', 'clinics.w_aoayadmoya');
}

public function bpholter()
{
    return $this->getDoctorsBySpecialtyAndClinic('BP holder', 'clinics.w_bpholter');
}

public function children()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة الاطفال', 'clinics.w_children');
}

public function ecg()
{
    return $this->getDoctorsBySpecialtyAndClinic('ECG', 'clinics.w_ecg');
}

public function ent()
{
    return $this->getDoctorsBySpecialtyAndClinic('الانف و الاذن و الحنجرة', 'clinics.w_ent');
}

public function eyes()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة العيون', 'clinics.w_eyes');
}

public function gayene()
{
    return $this->getDoctorsBySpecialtyAndClinic('نساء و ولادة', 'clinics.w_gayene');
}

public function hadese()
{
    return $this->getDoctorsBySpecialtyAndClinic('حديثي الولادة', 'clinics.w_hadeseaalwlada');
}

public function jerahachildren()
{
    return $this->getDoctorsBySpecialtyAndClinic('جراحة الاطفال', 'clinics.w_jerahachildren');
}

public function jeraha_g()
{
    return $this->getDoctorsBySpecialtyAndClinic('الجراحة العامة', 'clinics.w_jraha_g');
}

public function jerahtalsamna()
{
    return $this->getDoctorsBySpecialtyAndClinic('جراحة السمنة', 'clinics.w_jerahtalsamna');
}

public function mnazeratfal()
{
    return $this->getDoctorsBySpecialtyAndClinic('مناظير اطفال', 'clinics.w_mnazeratfal');
}

public function mnazer()
{
    return $this->getDoctorsBySpecialtyAndClinic('مناظير', 'clinics.w_mnazer');
}

public function msalik()
{
    return $this->getDoctorsBySpecialtyAndClinic('المسالك', 'clinics.w_msalik');
}
public function w_jerah_msalik()
{
    return $this->getDoctorsBySpecialtyAndClinic('جراحة المسالك', 'clinics.w_jerah_msalik');
}
public function w_majhod()
{
    return $this->getDoctorsBySpecialtyAndClinic('عيادة المجهود', 'clinics.w_majhod');
}


public function mategaAlaskre($specialty, $view_name)
{

    $doctor = Doctor::where('specialty', $specialty)
        ->where('clinic_name', 'عيادات معيتيقة العسكري')
        ->get();
    return view($view_name, compact('doctor'));
}

public function m_alazam()
{

    return $this->mategaAlaskre('عيادة العظام', 'Matega.m_alazam');
}

public function m_algalb()
{

    return $this->mategaAlaskre('عيادة القلب', 'Matega.m_algalb');
}

public function m_sadrya()
{

    return $this->mategaAlaskre('عيادة الصدرية', 'Matega.m_sadrya');
}


public function m_algalb_eko()
{

    return $this->mategaAlaskre('القلب و الايكو', 'Matega.m_algalb_eko');
}

public function m_skin()
{

    return $this->mategaAlaskre('الجلدية', 'Matega.m_skin');
}

public function m_suga()
{

    return $this->mategaAlaskre('عيادة السكر', 'Matega.m_suga');
}

public function m_children()
{

    return $this->mategaAlaskre(' عيادة الاطفال', 'Matega.m_children');
}

public function m_albatna()
{

    return $this->mategaAlaskre('باطنية', 'Matega.m_albatna');
}

public function m_Ent()
{

    return $this->mategaAlaskre('الانف و الاذن و الحنجرة', 'Matega.m_Ent');
}

public function m_eyes()
{

    return $this->mategaAlaskre('عيادة العيون', 'Matega.m_eyes');
}

public function m_gayene()
{

    return $this->mategaAlaskre('نساء و ولادة', 'Matega.m_gayene');
}

public function m_msalik()
{

    return $this->mategaAlaskre('المسالك', 'Matega.m_msalik');
}

public function m_gastara()
{

    return $this->mategaAlaskre('القسطرة', 'Matega.m_gastara');
}
public function m_aljeraha()
{

    return $this->mategaAlaskre('الجراحة', 'Matega.m_aljeraha');
}
public function asssab()
{

    return $this->mategaAlaskre('عيادة الاعصاب', 'Matega.asssab');
}



public function Dahmani($specialty, $view_name)
{

    $D_doctor = Doctor::where('specialty', $specialty)
        ->where('clinic_name', 'عيادات زاوية الدهماني')
        ->get();
    return view($view_name, compact('D_doctor'));
}

public function D_alazam()
{
    return $this->Dahmani('عيادة العظام', 'Aldahmani.D_alazam');
}

public function D_algalb()
{
    return $this->Dahmani('عيادة القلب', 'Aldahmani.D_algalb');
}

public function D_ashea()
{
    return $this->Dahmani('اشعة تشخيصية', 'Aldahmani.D_ashea');
}

public function D_g_helth()
{
    return $this->Dahmani('صحة عامة', 'Aldahmani.D_g_helth');
}

public function D_shuga()
{
    return $this->Dahmani('سكر و غدد صماء', 'Aldahmani.D_shuga');
}

public function D_skin ()
{
    return $this->Dahmani('الجلدية', 'Aldahmani.D_skin');
}

public function D_batna ()
{
    return $this->Dahmani('باطنية', 'Aldahmani.D_batna');
}

public function D_jraha_g ()
{
    return $this->Dahmani('جراحة عامة', 'Aldahmani.D_jraha_g');
}
public function D_msalik ()
{
    return $this->Dahmani('مسالك', 'Aldahmani.D_msalik');
}
public function D_gayene ()
{
    return $this->Dahmani('نساء و ولادة', 'Aldahmani.D_gayene');
}
public function D_Ent ()
{
    return $this->Dahmani('الانف و الاذن و الحنجرة', 'Aldahmani.D_Ent');
}
public function D_foot_h ()
{
    return $this->Dahmani('تغذية علاجية', 'Aldahmani.D_foot_h');
}
public function D_eyes ()
{
    return $this->Dahmani('عيادة العيون', 'Aldahmani.D_eyes');
}
public function D_children ()
{
    return $this->Dahmani('عيادة الاطفال', 'Aldahmani.D_children');
}
public function D_askhsayatfal ()
{
    return $this->Dahmani('اخصائي اطفال', 'Aldahmani.D_askhsayatfal');
}



public function showAppointmentForm()
{
    $doc = Doctor::all(); // استرجاع جميع الأطباء من جدول الأطباء
    return view('user.appo_form', compact('doc'));
}




public function appoint(Request $request)
{
    $dat = new Appointmen;

    $dat->name = $request->name;
    $dat->email = $request->email;
    $dat->date = $request->date;
    $dat->phone = $request->phone;
    $dat->message = $request->message;
    $dat->doctor = $request->doctor;
    $dat->status = 'قيد الطلب';

    if(Auth::check())
    {
        $dat->user_id = Auth::user()->id;
    }

    $dat->save();
    return redirect()->back()->with('message','سنتصل بك في اقرب وقت');
}



   }





