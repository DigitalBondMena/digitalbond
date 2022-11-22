@extends('backend.layouts.app')

@php $pageTitle = 'لوحه التحكم '; @endphp

@section('title')
  {{ $pageTitle }}
@endsection

 @section('content')






            @if (auth()->user()->role === 'super-admin')

           
            <section id="dashboard-ecommerce">
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <h1 class="text-primary">مرحبا بكم</h1>
                        <h5> لوحة تحكم المصرية الخليجية للخدمات التعليمية</h5>
                    </div>
                </div>
                
                
                
                
                
                
                <div class="row">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="{{ route('adsListEgecView') }}">
                            <div class="card o-hidden border-0 text-white" style="min-height:98px">
                                <div class="bg-primary b-r-4 card-body d-flex align-items-center">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center">
                                            <i class="fa fa-ad"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="m-0">قائمة عملاء اعلانات EGEC</span>
                                            <i class="fa fa-ad icon-bg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="{{ route('addnewListView') }}">
                            <div class="card o-hidden border-0 text-white" style="min-height:98px">
                                <div class="bg-primary b-r-4 card-body d-flex align-items-center">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center">
                                            <i class="fa fa-ad"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="m-0"> New عملاء اعلانات EGEC</span>
                                            <i class="fa fa-ad icon-bg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="{{ route('adsListEdugateView') }}">

                            <div class="card o-hidden border-0 text-white" style="min-height:98px">
                                <div class="bg-primary b-r-4 card-body d-flex align-items-center">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center">
                                            <i class="far fa-user"></i>
                                        </div>
                                        <div class="media-body"><span class="m-0">قائمة عملاء اعلانات EduGate
                                            </span>
                                            <i class="far fa-user icon-bg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <a href="{{ route('adsListView') }}">

                            <div class="card o-hidden border-0 text-white" style="min-height:98px">
                                <div class="bg-primary b-r-4 card-body d-flex align-items-center">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="media-body"><span class="m-0">قائمة عملاء الاعلانات
                                            </span>
                                            <i class="fa fa-users icon-bg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف العملاء</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-graduation-cap text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class=" las la-certificate text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('listPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-user-graduate text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف التسجيل
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('registerPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">حركه ملفات
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('movementPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h4 class="card-title text-white">جدول الموظفين</h4>
                                </div>
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                         <table class="table zero-configuration">
                                    <thead class="thead_primary">
                                    <tr>
                                        <th>الاسم</th>
                                        <th>المهمة</th>
                                        <th>تاريح التسجيل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($academicGuides as $academicGuide)
                                        <tr>
                                            <td>{{  $academicGuide->name }}</td>
                                            <td>{{ $academicGuide->role }}</td>
                                            <td>{{ $academicGuide->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="text-uppercase text-white">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            @endif




    @if (auth()->user()->role === 'data-entry')
        @if (auth()->user()->admin_status == 0)



        <section class="data-entry">
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('destinations.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-info b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">اماكن البلاد</span>
                                    
                                        <i class="las la-globe icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
               
                
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('faculties.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-warning b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الكليات</span>
                                        <i class="las la-university icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('universities.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الجامعات</span>
                                        <i class="fas fa-school icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('university_faculty_percentage.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0"> كليات / الجامعات</span>
                                        <i class="fas fa-chalkboard icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('majors.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-danger b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الدرجات العلميه</span>
                                        <i class="fa fa-percent icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('departments.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-light b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الاقسام</span>
                                        <i class="las la-arrows-alt icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('specializations.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-dark b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الشعبه</span>
                                        <i class="las la-user-secret icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('sliders.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-link b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0 text-dark">صور الواجهه</span>
                                        <i class="las la-images text-dark icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('clients.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-grills b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">الشركاء</span>
                                        <i class="fa fa-users icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('ad-form-countries.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-orange b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">البلاد الخاصة بالفورم</span>
                                        <i class="las la-atlas icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('feeback.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-danger b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">جهة اتصال المستخدم</span>
                                        <i class="las la-headset icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{ route('contact-us.index') }}">
                        <div class="card o-hidden border-0 text-white">
                            <div class="bg-success b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body">
                                        <span class="m-0">تواصل معنا</span>
                                        <i class="las la-phone-alt icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



            </div>
        </section>
        @endif
    @endif

    @if (auth()->user()->role === 'data-entry')
        @if (auth()->user()->admin_status == 1)

        <section id="dashboard-ecommerce">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1 class="text-primary">مرحبا بكم</h1>
                    <h5> لوحة تحكم المصرية الخليجية للخدمات التعليمية</h5>
                </div>
            </div>

           <div class="row">
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف العملاء</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-graduation-cap text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class=" las la-certificate text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('listPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-user-graduate text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف التسجيل
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('registerPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">حركه ملفات
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('movementPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




        </section>



        @endif
    @endif


    @if(auth()->user()->role === 'academic-guide')

    <section id="dashboard-ecommerce">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1 class="text-primary">مرحبا بكم</h1>
                <h5> لوحة تحكم المصرية الخليجية للخدمات التعليمية</h5>
            </div>
        </div>

       <div class="row">
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف العملاء</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-graduation-cap text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('listMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class=" las la-certificate text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('listPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-user-graduate text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف عملاء الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">كشف التسجيل
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('registerMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('registerPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">كشف تسجيل الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 dashboard-latest-update">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                <h4 class="card-title">حركه ملفات
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementBachelorView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-folder-open text-primary font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات البكالوريوس</span>
                                                    <!-- <small class="text-muted d-block">2k New Products</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0">
                                        <a href="{{ route('movementMasterView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-info m-0">
                                                        <div class="avatar-content">
                                                            <i class=" las la-file text-info font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الماجستير</span>
                                                    <!-- <small class="text-muted d-block">39k New Sales</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-action border-0 ">
                                        <a href="{{ route('movementPhdView') }}"
                                            class="d-flex align-items-center justify-content-between text-dark">

                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-danger m-0">
                                                        <div class="avatar-content">
                                                            <i
                                                                class="las la-file-medical-alt text-danger font-size-base"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-content  d-flex align-items-center">
                                                    <span class="list-title">حركه ملفات الدكتوراه</span>
                                                    <!-- <small class="text-muted d-block">43k New Revenue</small> -->
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


        

    </section>

    @endif

@endsection
