<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use DataTables;
use Carbon\Carbon;
use App\University;
use App\Destination;
use App\FileMovement;
use App\UserAcademic;
use App\AssUserNotification;
use App\AdmissionForm;
use App\NotificationUpdate;
use App\NotificationUpdateRegisterd;
use App\NotificationUpdateMovement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DataTablesController extends Controller
{
    
    
    public function adminLog(Request $request)
    {
        if(auth()->user()->role == 'super-admin')
        {
            if(request()->get('max') != '' && request()->get('min') != '') {

              $fromdate = request()->get('max');
              $todate = request()->get('min');
              
              $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'academic-guide')->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
                
            }
            else if(request()->get('max') != '' && request()->get('min') == '')
            {
                $fromdate = request()->get('max');
                
                
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'academic-guide')->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
              
                
            }
            else if(request()->get('max') == '' && request()->get('min') != '')
            {
                $fromdate = request()->get('min');
              
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'academic-guide')->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
            else {
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'academic-guide')->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
        }
        else if (auth()->user()->role == 'academic-guide')
        {
            if(request()->get('max') != '' && request()->get('min') != '') {

              $fromdate = request()->get('max');
              $todate = request()->get('min');
              
              $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('academic_guide' , auth()->user()->name)->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->where('academic_guide' , auth()->user()->name)->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
                
            }
            else if(request()->get('max') != '' && request()->get('min') == '')
            {
                $fromdate = request()->get('max');
                
                
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('academic_guide' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->where('academic_guide' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
              
                
            }
            else if(request()->get('max') == '' && request()->get('min') != '')
            {
                $fromdate = request()->get('min');
              
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('academic_guide' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->where('academic_guide' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
            else {
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('academic_guide' , auth()->user()->name)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'data-entry')->where('academic_guide' , auth()->user()->name)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
        }
        else if (auth()->user()->role == 'data-entry')
        {
            if(request()->get('max') != '' && request()->get('min') != '') {

              $fromdate = request()->get('max');
              $todate = request()->get('min');
              
              $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('data_entry' , auth()->user()->name)->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'academic-guide')->where('data_entry' , auth()->user()->name)->whereDate('created_at' , '>=' , $fromdate)->whereDate('created_at' , '<=' , $todate)->get();
              return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
                
            }
            else if(request()->get('max') != '' && request()->get('min') == '')
            {
                $fromdate = request()->get('max');
                
                
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('data_entry' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'academic-guide')->where('data_entry' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
              
                
            }
            else if(request()->get('max') == '' && request()->get('min') != '')
            {
                $fromdate = request()->get('min');
              
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('data_entry' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'academic-guide')->where('data_entry' , auth()->user()->name)->whereDate('created_at'  , $fromdate)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
            else {
                $notificationUpdatesAcademicGuidess = NotificationUpdate::where('notification_type'  , 'super-admin')->where('data_entry' , auth()->user()->name)->get();
                $notificationUpdatesDataEntryss = NotificationUpdate::where('notification_type'  , 'academic-guide')->where('data_entry' , auth()->user()->name)->get();
                return view('backend.adminLog' , compact('notificationUpdatesAcademicGuidess' , 'notificationUpdatesDataEntryss'));
            }
        }
    }
    
    
    public function addnewListView()
    {
       $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.provider_name', 'newEgecForm')->get();
        return view('backend.datatables.list.list_add_new_egecForm_datatables' , compact('model')); 
    }
    
    
    public function adsListView() {

        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'جوجل')->get();
        
        return view('backend.datatables.list.list_ads_datatables' , compact('model'));
    }

    public function addmissionFormGetData(Request $request)
    {
        
       
        if(request()->get('max') != '' && request()->get('min') != '') {

              $fromdate = request()->get('max');
              $todate = request()->get('min');
              
              
            $addmissionFormDatas = AdmissionForm::where('academic_guide' , null)->where('en_academic_guide' , null)->whereBetween('created_at' , [$fromdate , $todate])->get();
            $usersDatas = User::where('role' , 'user')->get();
            $academicGuides = User::where('role' , 'academic-guide')->get();
            
            return view('backend.academicData' , compact('addmissionFormDatas' ,'usersDatas' ,'academicGuides'));
            
        } 
        else if (request()->get('max') != '' && request()->get('min') == '')
        {
             $fromdate = request()->get('max');
              
              
            $addmissionFormDatas = AdmissionForm::where('academic_guide' , null)->where('en_academic_guide' , null)->whereDate('created_at'  , $fromdate)->get();
            $usersDatas = User::where('role' , 'user')->get();
            $academicGuides = User::where('role' , 'academic-guide')->get();
            
            return view('backend.academicData' , compact('addmissionFormDatas' ,'usersDatas' ,'academicGuides'));
        } 
        else if (request()->get('max') == '' && request()->get('min') != '')
        {
             $fromdate = request()->get('min');
              
              
            $addmissionFormDatas = AdmissionForm::where('academic_guide' , null)->where('en_academic_guide' , null)->whereDate('created_at'  , $fromdate)->get();
            $usersDatas = User::where('role' , 'user')->get();
            $academicGuides = User::where('role' , 'academic-guide')->get();
            
            return view('backend.academicData' , compact('addmissionFormDatas' ,'usersDatas' ,'academicGuides'));
        } else
        {
            $addmissionFormDatas = AdmissionForm::where('academic_guide' , null)->where('en_academic_guide' , null)->get();
            $usersDatas = User::where('role' , 'user')->get();
            $academicGuides = User::where('role' , 'academic-guide')->get();
            
            return view('backend.academicData' , compact('addmissionFormDatas' ,'usersDatas' ,'academicGuides'));
        }
        
        
    }
    
    public function addmissionFormUpdateData(Request $request)
    {
        
        $usersIds = $request->multi_choices;
        
        $addmissionFormDatas = AdmissionForm::where('academic_guide' , null)->where('en_academic_guide' , null)->get();
        
        $key=0;
        
        foreach($addmissionFormDatas as $addmissionFormData)
        {
            
                foreach($usersIds as $usersId)
                    {
                        
                        if( $addmissionFormData->id == $usersId)
                        {
                            $data = User::find($addmissionFormData->user_id);
                            $academicData = User::where('name' , $request->academic_guide)->first();
                      
                            
                            $addmissionFormData->update([
                                'academic_guide' => $request->academic_guide,
                                'en_academic_guide' => $academicData->en_name ,
                                'registered' => 0
                                ]);
                                
                             AssUserNotification::create([
                                'academic_guide' => $request->academic_guide,
                                'super_admin_name' => auth()->user()->name,
                                'notification_type' => auth()->user()->role,
                                'notification_belongs' => $data->name,
                                'notification_belongs_id' => $data->id,
                                'notification_degree_needed' => $addmissionFormData->degree_needed,
                                'notifictaion_content' => 'لقد تم تخصيص هذا العميل اليك من قبل الادمن الرئيسي',
                                'notification_check' => 0,
                                ]);     
                        }
                        
                    }
            
        }
        
        return redirect()->route('admin.addmissionFormGetData');
    }
    
    
    public function addmissionFormGetDataAcademicGuide()
    {
        $addmissionFormDatas = AdmissionForm::where('academic_guide' , auth()->user()->name)->where('ar_data_entry' , null)->get();
        $usersDatas = User::where('role' , 'user')->get();
        $academicGuides = User::where('role' , 'data-entry')->get();
        
        return view('backend.academicDataAcademicGuide' , compact('addmissionFormDatas' ,'usersDatas' ,'academicGuides'));
    }
    
    public function addmissionFormUpdateDataAcademicGuide(Request $request)
    {
        
        $usersIds = $request->multi_choices;
        
        $authData = auth()->user()->name;
        
        
        $addmissionFormDatas = AdmissionForm::where('academic_guide' , $authData)->where('ar_data_entry' , null)->where('en_data_entry' , null)->get();
        
        // dd($addmissionFormDatas);
        
        $key=0;
        
        // dd($request->multi_choices);
        foreach($addmissionFormDatas as $addmissionFormDataAcademic)
        {
                 
                    
                    foreach($usersIds as $usersId)
                    {
                        
                        if( $addmissionFormDataAcademic->id == $usersId)
                        {
                             $data = User::find($addmissionFormDataAcademic->user_id);
                            $academicData = User::where('name' , $request->academic_guide)->first();
                            
                            $addmissionFormDataAcademic->update([
                                'ar_data_entry' => $request->academic_guide
                                ]);
                                
                             AssUserNotification::create([
                                'data_entry' => $request->academic_guide,
                                'super_admin_name' => auth()->user()->name,
                                'notification_type' => auth()->user()->role,
                                'notification_belongs' => $academicData->name,
                                'notification_belongs_id' => $academicData->id,
                                'notification_degree_needed' => $addmissionFormDataAcademic->degree_needed,
                                'notifictaion_content' => 'لقد تخصيص هذا العميل اليك من قبل المرشد الاكاديمي',
                                'notification_check' => 0,
                                ]);       
                        }
                        
                    }
                        
                
            
        }
        
        return redirect()->route('admin.addmissionFormGetDataAcademicGuide');
    }
    
    
    public function adsListData() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'جوجل');

        return DataTables::of($model)
                ->addColumn('user_id', function (User $user) {
                    
                    if($user['uniqe_id'] == null )
                    {
                        return $user['id'];
                    }
                    else {
                       return $user['uniqe_id'];
                    }
                })
                ->addColumn('personal_info_source', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['source'];
                })
                ->addColumn('personal_info_birthdate', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['birthdate'];
                })
                ->addColumn('personal_info_nationality', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nationality'];
                })
                ->addColumn('personal_info_nation', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nation'];
                })
                ->addColumn('personal_info_address', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['address'];
                })
                ->addColumn('personal_info_area', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['area'];
                })
                ->addColumn('personal_info_degree_needed', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['degree_needed'];
                })
                ->addColumn('academic_info_degree_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_name'];
                })
                ->addColumn('academic_info_degree_year', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_year'];
                })
                ->addColumn('academic_info_degree_country', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_country'];
                })
                ->addColumn('academic_info_school_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['school_name'];
                })
                ->addColumn('academic_info_university_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['university_name'];
                })
                ->addColumn('academic_info_faculty_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['faculty_name'];
                })
                ->addColumn('academic_info_department_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['department_name'];
                })
                ->addColumn('academic_info_gpa_precentage', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['gpa_precentage'];
                })
                ->addColumn('academic_info_education_system', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['education_system'];
                })
                ->toJson();
    }
    
    public function adsEgecNewListView() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'googlenew')->get();
        return view('backend.datatables.list.list_ads_egec_new_datatables' , compact('model'));
    }
    
    public function adsEgecNewListData() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'googlenew');

        return DataTables::of($model)
                ->addColumn('user_id', function (User $user) {
                    
                    if($user['uniqe_id'] == null )
                    {
                        return $user['id'];
                    }
                    else {
                       return $user['uniqe_id'];
                    }
                })
                ->addColumn('personal_info_nationality', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nationality'];
                })
                ->addColumn('personal_info_nation', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nation'];
                })
                ->addColumn('personal_info_area', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['area'];
                })
                ->addColumn('personal_info_degree_needed', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['degree_needed'];
                })
                ->addColumn('academic_info_degree_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_name'];
                })
                ->addColumn('academic_info_degree_year', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_year'];
                })
                ->addColumn('academic_info_gpa_precentage', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['gpa_precentage'];
                })
                ->addColumn('academic_info_education_system', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['education_system'];
                })
                ->toJson();
    }
    
    public function adsListEgecView() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'جوجل')->Where('users.provider_name','egec')->get();
        return view('backend.datatables.list.list_ads_egec_datatables' , compact('model'));
    }

    public function adsListEgecData() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.source', 'جوجل')->Where('users.provider_name','egec');

        return DataTables::of($model)
                ->addColumn('user_id', function (User $user) {
                    
                    if($user['uniqe_id'] == null )
                    {
                        return $user['id'];
                    }
                    else {
                       return $user['uniqe_id'];
                    }
                })
                ->addColumn('personal_info_source', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['source'];
                })
                ->addColumn('personal_info_birthdate', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['birthdate'];
                })
                ->addColumn('personal_info_nationality', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nationality'];
                })
                ->addColumn('personal_info_nation', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nation'];
                })
                ->addColumn('personal_info_address', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['address'];
                })
                ->addColumn('personal_info_area', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['area'];
                })
                ->addColumn('personal_info_degree_needed', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['degree_needed'];
                })
                ->addColumn('academic_info_degree_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_name'];
                })
                ->addColumn('academic_info_degree_year', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_year'];
                })
                ->addColumn('academic_info_degree_country', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_country'];
                })
                ->addColumn('academic_info_school_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['school_name'];
                })
                ->addColumn('academic_info_university_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['university_name'];
                })
                ->addColumn('academic_info_faculty_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['faculty_name'];
                })
                ->addColumn('academic_info_department_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['department_name'];
                })
                ->addColumn('academic_info_gpa_precentage', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['gpa_precentage'];
                })
                ->addColumn('academic_info_education_system', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['education_system'];
                })
                ->toJson();
    }
    
    
    public function adsListEdugateView() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.provider_name', 'edugate')->get();
        return view('backend.datatables.list.list_ads_edugate_datatables' ,compact('model'));
    }

    public function adsListEdugateData() {
        $model = User::select('users.*')->with('personal_info', 'academic_info')->where('users.role', 'user')->where('users.provider_name', 'edugate');
    
        return DataTables::of($model)
        
                ->addColumn('user_id', function (User $user) {
                    
                    if($user['uniqe_id'] == null )
                    {
                        return $user['id'];
                    }
                    else {
                       return $user['uniqe_id'];
                    }
                })
                ->addColumn('personal_info_source', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['source'];
                })
                ->addColumn('personal_info_birthdate', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['birthdate'];
                })
                ->addColumn('personal_info_nationality', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nationality'];
                })
                ->addColumn('personal_info_nation', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['nation'];
                })
                ->addColumn('personal_info_address', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['address'];
                })
                ->addColumn('personal_info_area', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['area'];
                })
                ->addColumn('personal_info_degree_needed', function (User $user) {
                    $userPersonalInfo = $user->personal_info()->first();
                    return $userPersonalInfo['degree_needed'];
                })
                ->addColumn('academic_info_degree_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_name'];
                })
                ->addColumn('academic_info_degree_year', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_year'];
                })
                ->addColumn('academic_info_degree_country', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['degree_country'];
                })
                ->addColumn('academic_info_school_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['school_name'];
                })
                ->addColumn('academic_info_university_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['university_name'];
                })
                ->addColumn('academic_info_faculty_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['faculty_name'];
                })
                ->addColumn('academic_info_department_name', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['department_name'];
                })
                ->addColumn('academic_info_gpa_precentage', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['gpa_precentage'];
                })
                ->addColumn('academic_info_education_system', function (User $user) {
                    $userAcademicInfo = $user->academic_info()->first();
                    return $userAcademicInfo['education_system'];
                })
                ->toJson();
    }
    
    
    public function listReportsView() {
        return view('backend.datatables.reports.list_reports_datatables');
    }

    public function listReportsData(Request $request) {
        if(request()->get('todate') != '') {

            $fromdate = request()->get('fromdate');
            $todate = request()->get('todate');

            $fromdate = Carbon::parse($fromdate);
            $fromday = $fromdate->format('d');
            $frommonth = $fromdate->format('F');
            $fromyear = $fromdate->format('Y');

            $todate = Carbon::parse($todate);
            $today = $todate->format('d');
            $tomonth = $todate->format('F');
            $toyear = $todate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->whereBetween('day', [$fromday, $today])
            ->whereBetween('month', [$frommonth, $tomonth])
            ->whereBetween('year', [$fromyear, $toyear])
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();

        } elseif(request()->get('todate') == '' && request()->get('fromdate') != '' ) {
            $fromdate = request()->get('fromdate');

            $fromdate = Carbon::parse($fromdate);
            $fromday = $fromdate->format('d');
            $frommonth = $fromdate->format('F');
            $fromyear = $fromdate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->where('day', $fromday)
            ->where('month', $frommonth)
            ->where('year', $fromyear)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        } else {
            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        }
    }

    public function registerReportsView() {
        return view('backend.datatables.reports.register_reports_datatables');
    }

    public function registerReportsData() {
        if(request()->get('todate') != '') {

            $fromdate = request()->get('fromdate');
            $todate = request()->get('todate');

            $fromdate = Carbon::parse($fromdate);
            $fromday = $fromdate->format('d');
            $frommonth = $fromdate->format('F');
            $fromyear = $fromdate->format('Y');

            $todate = Carbon::parse($todate);
            $today = $todate->format('d');
            $tomonth = $todate->format('F');
            $toyear = $todate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),  
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->whereBetween('day', [$fromday, $today])
            ->whereBetween('month', [$frommonth, $tomonth])
            ->whereBetween('year', [$fromyear, $toyear])
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();

        } elseif(request()->get('todate') == ''  && request()->get('fromdate') != '' ) {
            $fromdate = request()->get('fromdate');

            $fromdate = Carbon::parse($fromdate);
            $fromday = $fromdate->format('d');
            $frommonth = $fromdate->format('F');
            $fromyear = $fromdate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),  
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->where('day', $fromday)
            ->where('month', $frommonth)
            ->where('year', $fromyear)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        } else {
            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        }
    }
    
    

    public function academicGuideView($name) {
        
        $user = User::where('name' , $name)->first();
        
        $data = DB::table('admission_forms')
        ->select(
        DB::raw('registered as registered'),
        DB::raw('count(*) as number'))
        ->groupBy('registered')
        ->where('academic_guide', $name)
        ->get();

        $array[] = ['Registered', 'Number'];
        foreach($data as $key => $value)
        {
            if($value->registered == 0) {
                $value->registered = 'Not Registered';
            } else {
                $value->registered = 'Registered';
            }
            $array[++$key] = [$value->registered, $value->number];
        }

        
        
        

        $data1 = DB::table('admission_forms')
        ->select(
        DB::raw('degree_needed as degree_needed'),
        DB::raw('count(*) as number'))
        ->groupBy('degree_needed')
        ->where('academic_guide', $name)
        ->get();

        $array1[] = ['Degree', 'Number'];
        foreach($data1 as $key => $value)
        {
        $array1[++$key] = [$value->degree_needed, $value->number];
        }
        
        $data5 = DB::table('users')
        ->select(
            DB::raw('file_target as File_data'))
            ->groupBy('file_target')
            ->where('name' , $name)
            ->first();
            
       

        
            
        
        // $totalFilesForAcademicGuide = User::where('file_target', '!=', null)->where('name', $name)->file_target->get();
        // $totalMoneyForAcademicGuide = User::where('money', '!=', null)->where('name', $name)->money_target->get();
        // $totalFilesReceive = AdmissionForm::where('academic_guide', $name)->count('id');

        $totalMoneyRecievedForFirstPayment = AdmissionForm::where('account_finance_first_number', '!=', null)->where('account_finance_first_status', 1)->where('academic_guide', $name)->sum('account_finance_first_number');
        $totalMoneyRecievedForSecondPayment = AdmissionForm::where('account_finance_second_number', '!=', null)->where('account_finance_second_status', 1)->where('academic_guide', $name)->sum('account_finance_second_number');
        $totalMoneyRecievedForThirdPayment = AdmissionForm::where('account_finance_third_number', '!=', null)->where('account_finance_third_status', 1)->where('academic_guide', $name)->sum('account_finance_third_number');
        $totalMoneyRecievedForFourthPayment = AdmissionForm::where('account_finance_fourth_number', '!=', null)->where('account_finance_fourth_status', 1)->where('academic_guide', $name)->sum('account_finance_fourth_number');
        
        $totalMoneyShouldRecieved = AdmissionForm::where('deal', '!=', null)->where('academic_guide', $name)->sum('deal');

        $totalMoneyMissing = $totalMoneyShouldRecieved - ($totalMoneyRecievedForFirstPayment + $totalMoneyRecievedForSecondPayment + $totalMoneyRecievedForThirdPayment + $totalMoneyRecievedForFourthPayment);
        $realMoney = $user->money_target - $totalMoneyShouldRecieved ;

        return view('backend.datatables.reports.academic_guide.academic_guide_reports_datatables', compact('realMoney' , 'user','name', 'totalMoneyRecievedForFirstPayment', 'totalMoneyRecievedForSecondPayment', 'totalMoneyRecievedForThirdPayment', 'totalMoneyRecievedForFourthPayment', 'totalMoneyShouldRecieved', 'totalMoneyMissing'))
        ->with('academic_chart', json_encode($array , JSON_NUMERIC_CHECK))
        ->with('degrees', json_encode($array1 , JSON_NUMERIC_CHECK));
    }

    public function academicGuideListReportView($name) {
        return view('backend.datatables.reports.academic_guide.academic_guide_list_reports_datatables', compact('name'));
    }

    public function academicGuideRegisterReportView($name) {
        return view('backend.datatables.reports.academic_guide.academic_guide_register_reports_datatables', compact('name'));
    }
    

    public function academicGuideListReportData(Request $request) {

        if(request()->get('academicGuideToDate') != '') {

            $academicGuideFromDate = request()->get('academicGuideFromDate');
            $academicGuideToDate = request()->get('academicGuideToDate');

            $academicGuideFromDate = Carbon::parse($academicGuideFromDate);
            $fromday = $academicGuideFromDate->format('d');
            $frommonth = $academicGuideFromDate->format('F');
            $fromyear = $academicGuideFromDate->format('Y');

            $academicGuideToDate = Carbon::parse($academicGuideToDate);
            $today = $academicGuideToDate->format('d');
            $tomonth = $academicGuideToDate->format('F');
            $toyear = $academicGuideToDate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->whereBetween('day', [$fromday, $today])
            ->whereBetween('month', [$frommonth, $tomonth])
            ->whereBetween('year', [$fromyear, $toyear])
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();

        } 
        elseif(request()->get('academicGuideToDate') == '' && request()->get('academicGuideFromDate') != '' ) {
            $academicGuideFromDate = request()->get('academicGuideFromDate');

            $academicGuideFromDate = Carbon::parse($academicGuideFromDate);
            $fromday = $academicGuideFromDate->format('d');
            $frommonth = $academicGuideFromDate->format('F');
            $fromyear = $academicGuideFromDate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->where('day', $fromday)
            ->where('month', $frommonth)
            ->where('year', $fromyear)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        } else {
            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '0')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        }
    }

    public function academicGuideRegisterReportData(Request $request) {

        if(request()->get('academicGuideToDate') != '') {

            $academicGuideFromDate = request()->get('academicGuideFromDate');
            $academicGuideToDate = request()->get('academicGuideToDate');

            $academicGuideFromDate = Carbon::parse($academicGuideFromDate);
            $fromday = $academicGuideFromDate->format('d');
            $frommonth = $academicGuideFromDate->format('F');
            $fromyear = $academicGuideFromDate->format('Y');

            $academicGuideToDate = Carbon::parse($academicGuideToDate);
            $today = $academicGuideToDate->format('d');
            $tomonth = $academicGuideToDate->format('F');
            $toyear = $academicGuideToDate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->whereBetween('day', [$fromday, $today])
            ->whereBetween('month', [$frommonth, $tomonth])
            ->whereBetween('year', [$fromyear, $toyear])
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();

        } elseif(request()->get('academicGuideToDate') == '' && request()->get('academicGuideFromDate') != '' ) {
            $academicGuideFromDate = request()->get('academicGuideFromDate');

            $academicGuideFromDate = Carbon::parse($academicGuideFromDate);
            $fromday = $academicGuideFromDate->format('d');
            $frommonth = $academicGuideFromDate->format('F');
            $fromyear = $academicGuideFromDate->format('Y');

            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->where('day', $fromday)
            ->where('month', $frommonth)
            ->where('year', $fromyear)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        } else {
            $model = User::join('user_academics', 'users.id', '=', 'user_academics.user_id')
                         ->join('admission_forms', 'users.id', '=', 'admission_forms.user_id')
                ->select([
                    'users.id',
                    'users.role',
                    DB::raw('count(admission_forms.id) as quantity'),
                    DB::raw('admission_forms.day as day'),
                    DB::raw('admission_forms.month as month'),
                    DB::raw('admission_forms.year as year'),
                    DB::raw('count(user_academics.school_name) as bachelor_quantity'),
                    DB::raw('count(user_academics.department_name) as master_quantity'), 
                    DB::raw('count(user_academics.master_name) as phd_quantity'),   
             ])
            ->where('admission_forms.registered', '1')
            ->where('users.role', 'user')
            ->where('admission_forms.academic_guide', $request->name)
            ->groupBy(['day', 'month', 'year']);
    
            return DataTables::eloquent($model)
            ->toJson();
        }
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
