<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    Route::post('/signin', 'AuthSignInController@signin');
    Route::post('/signup', 'AuthSignUpController@signup');
    Route::post('/logout', 'AuthLogoutController@logout');
    Route::get('/profile', 'AuthProfileController@profile');
});
Route::get('/engineering', 'HomeController@engineering')->name('engineering');
Route::get('/facultyData' , 'HomeController@facultyData')->name('facultyData');
Route::get('/universityData' , 'HomeController@universityData')->name('universityData');
Route::get('/allData' , 'HomeController@allData')->name('allData');
Route::get('/recomendationData' , 'HomeController@recomendationData')->name('recomendationData');
Route::group(['middleware' => ['auth:api']], function() {

    Route::get('/', 'HomeController@index')->name('home');
    
    Route::put('/update-password', 'HomeController@updatePassword')->name('update-password');
    
    Route::get('/userLog' , 'HomeController@userLog')->name('userLog');
    Route::post('/userLog' , 'HomeController@userLog')->name('userLog');
    Route::get('/userLogData' , 'HomeController@userLogData')->name('userLogData');
    Route::post('/userLogData' , 'HomeController@userLogData')->name('userLogData');
    
    
    Route::get('/addmissionFormGetData' , 'HomeController@addmissionFormGetData')->name('HomeControlleraddmissionFormGetData');
    
    Route::post('/addmissionFormGetData' , 'HomeController@addmissionFormGetData')->name('HomeControlleraddmissionFormGetData');
    
    Route::post('/addmissionFormUpdateData' , 'HomeController@addmissionFormUpdateData')->name('HomeControlleraddmissionFormUpdateData');
    
    Route::get('/addmissionFormGetDataAcademicGuide' , 'HomeController@addmissionFormGetDataAcademicGuide')->name('HomeControlleraddmissionFormGetDataAcademicGuide');
    Route::post('/addmissionFormUpdateDataAcademicGuide' , 'HomeController@addmissionFormUpdateDataAcademicGuide')->name('HomeControlleraddmissionFormUpdateDataAcademicGuide');
    
    Route::get('/notificationLog' , 'HomeController@notificationLog')->name('notificationLog');
    
    Route::post('/notificationLog' , 'HomeController@notificationLog')->name('notificationLog');
    
    Route::get('/newdataregistered' , 'HomeController@newdataregistered')->name('newdataregistered');

    Route::get('/personal-info/{user_id}', 'HomeController@showPersonalInfo')->name('show-personal-info');
    Route::post('/personal-info', 'HomeController@submitPersonalInfo')->name('submit-personal-info');

    Route::get('/academic-info/{user_id}', 'HomeController@showAcademicInfo')->name('show-academic-info');
    Route::post('/academic-info', 'HomeController@submitAcademicInfo')->name('submit-academic-info');

    Route::get('/admission-info/{user_id}', 'HomeController@showAdmissionInfo')->name('show-admission-info');
    Route::post('/admission-info', 'HomeController@submitAdmissionInfo')->name('submit-admission-info');
    
    Route::get('/paper-info/{user_id}', 'HomeController@showPaperInfo')->name('show-movement-info');

    Route::post('/first-paper-info', 'HomeController@submitFirstPaperInfo')->name('submit-first-paper-info');
    Route::post('/second-paper-info', 'HomeController@submitSecondPaperInfo')->name('submit-second-paper-info');
    Route::post('/first-money-info', 'HomeController@submitFirstMoneyInfo')->name('submit-first-money-info');
    Route::post('/second-money-info', 'HomeController@submitSecondMoneyInfo')->name('submit-second-money-info');
    Route::post('/third-money-info', 'HomeController@submitThirdMoneyInfo')->name('submit-third-money-info');
    Route::post('/fourth-money-info', 'HomeController@submitFourthMoneyInfo')->name('submit-fourth-money-info');

    Route::get('/filterUniversities', 'HomeController@filterUniversities')->name('filterUniversities');
    Route::get('/filterColleges', 'HomeController@filterColleges')->name('filterColleges');
    Route::get('/filterMajors', 'HomeController@filterMajors')->name('filterMajors');
    Route::get('/filterDepartments', 'HomeController@filterDepartments')->name('filterDepartments');

    Route::get('/admissionfilterUniversities', 'HomeController@filterUniversitiesAdmission')->name('filterUniversitiesAdmission');
    Route::get('/admissionfilterColleges', 'HomeController@filterCollegesAdmission')->name('filterCollegesAdmission');
    Route::get('/admissionfilterMajors', 'HomeController@filterMajorsAdmission')->name('filterMajorsAdmission');
    Route::get('/admissionfilterDepartments', 'HomeController@filterDepartmentsAdmission')->name('filterDepartmentsAdmission');

    Route::post('/search', 'HomeController@search')->name('search');

    Route::get('/clients', 'HomeController@clients')->name('clients');
    Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
    Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
    Route::post('/send-feedback', 'HomeController@sendInquiry')->name('send-feedback');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    
    Route::get('/destinations', 'HomeController@destinations')->name('destinations');
    
    // Route::get('/recomendationData' , 'HomeController@recomendationData')->name('recomendationData');
    Route::get('/newdata' , 'HomeController@newdata')->name('newdata');

    Route::get('/getListBachelorDataUserCreate' , 'HomeController@getListBachelorDataUserCreate')->name('getListBachelorDataUserCreate');
    
    Route::post('/getListBachelorDataUserStore' , 'HomeController@getListBachelorDataUserStore')->name('getListBachelorDataUserStore');
    
    Route::post('/getListMasterDataUserStore' , 'HomeController@getListMasterDataUserStore')->name('getListMasterDataUserStore');
    
    Route::post('/getListPhdDataUserStore' , 'HomeController@getListPhdDataUserStore')->name('getListPhdDataUserStore');
    
    
    
    Route::get('/listBachelorDataUserId' , 'HomeController@listBachelorDataUserId')->name('listBachelorDataUserId');
    
    Route::post('/listBachelorDataUserIdUpdate' , 'HomeController@listBachelorDataUserIdUpdate')->name('listBachelorDataUserIdUpdate');
    
    Route::post('/listMasterDataUserIdUpdate' , 'HomeController@listMasterDataUserIdUpdate')->name('listMasterDataUserIdUpdate');
    
    Route::post('/listPhdDataUserIdUpdate' , 'HomeController@listPhdDataUserIdUpdate')->name('listPhdDataUserIdUpdate');
    
    Route::post('/listBachelorDataUserIdUpdateAcademicGuide' , 'HomeController@listBachelorDataUserIdUpdateAcademicGuide')->name('listBachelorDataUserIdUpdateAcademicGuide');
    Route::post('/listBachelorDataUserIdUpdateDataEntry' , 'HomeController@listBachelorDataUserIdUpdateDataEntry')->name('listBachelorDataUserIdUpdateDataEntry');
    
    Route::post('/listMasterDataUserIdUpdateAcademicGuide' , 'HomeController@listMasterDataUserIdUpdateAcademicGuide')->name('listMasterDataUserIdUpdateAcademicGuide');
    Route::post('/listMasterDataUserIdUpdateDataEntry' , 'HomeController@listMasterDataUserIdUpdateDataEntry')->name('listMasterDataUserIdUpdateDataEntry');
    
    Route::post('/listPhdDataUserIdUpdateAcademicGuide' , 'HomeController@listPhdDataUserIdUpdateAcademicGuide')->name('listPhdDataUserIdUpdateAcademicGuide');
    Route::post('/listPhdDataUserIdUpdateDataEntry' , 'HomeController@listPhdDataUserIdUpdateDataEntry')->name('listPhdDataUserIdUpdateDataEntry');
    
    
    
    
    Route::post('/registerBachelorDataUserIdUpdate' , 'HomeController@registerBachelorDataUserIdUpdate')->name('registerBachelorDataUserIdUpdate');
    
    Route::post('/registerMasterDataUserIdUpdate' , 'HomeController@registerMasterDataUserIdUpdate')->name('registerMasterDataUserIdUpdate');
    
    Route::post('/registerPhdDataUserIdUpdate' , 'HomeController@registerPhdDataUserIdUpdate')->name('registerPhdDataUserIdUpdate');
    
    Route::post('/registerBachelorDataUserIdUpdateAcademicGuide' , 'HomeController@registerBachelorDataUserIdUpdateAcademicGuide')->name('registerBachelorDataUserIdUpdateAcademicGuide');
    Route::post('/registerBachelorDataUserIdUpdateDataEntry' , 'HomeController@registerBachelorDataUserIdUpdateDataEntry')->name('registerBachelorDataUserIdUpdateDataEntry');
    
    Route::post('/registerMasterDataUserIdUpdateAcademicGuide' , 'HomeController@registerMasterDataUserIdUpdateAcademicGuide')->name('registerMasterDataUserIdUpdateAcademicGuide');
    Route::post('/registerMasterDataUserIdUpdateDataEntry' , 'HomeController@registerMasterDataUserIdUpdateDataEntry')->name('registerMasterDataUserIdUpdateDataEntry');
    
    Route::post('/registerPhdDataUserIdUpdateAcademicGuide' , 'HomeController@registerPhdDataUserIdUpdateAcademicGuide')->name('registerPhdDataUserIdUpdateAcademicGuide');
    Route::post('/registerPhdDataUserIdUpdateDataEntry' , 'HomeController@registerPhdDataUserIdUpdateDataEntry')->name('registerPhdDataUserIdUpdateDataEntry');
    
    
    
    
    Route::post('/movementBachelorDataUserIdUpdate' , 'HomeController@movementBachelorDataUserIdUpdate')->name('movementBachelorDataUserIdUpdate');
    
    Route::post('/movementMasterDataUserIdUpdate' , 'HomeController@movementMasterDataUserIdUpdate')->name('movementMasterDataUserIdUpdate');
    
    Route::post('/movementPhdDataUserIdUpdate' , 'HomeController@movementPhdDataUserIdUpdate')->name('movementPhdDataUserIdUpdate');
    
    Route::post('/movementBachelorDataUserIdUpdateAcademicGuide' , 'HomeController@movementBachelorDataUserIdUpdateAcademicGuide')->name('movementBachelorDataUserIdUpdateAcademicGuide');
    Route::post('/movementBachelorDataUserIdUpdateDataEntry' , 'HomeController@movementBachelorDataUserIdUpdateDataEntry')->name('movementBachelorDataUserIdUpdateDataEntry');
    
    Route::post('/movementMasterDataUserIdUpdateAcademicGuide' , 'HomeController@movementMasterDataUserIdUpdateAcademicGuide')->name('movementMasterDataUserIdUpdateAcademicGuide');
    Route::post('/movementMasterDataUserIdUpdateDataEntry' , 'HomeController@movementMasterDataUserIdUpdateDataEntry')->name('movementMasterDataUserIdUpdateDataEntry');
    
    Route::post('/movementPhdDataUserIdUpdateAcademicGuide' , 'HomeController@movementPhdDataUserIdUpdateAcademicGuide')->name('movementPhdDataUserIdUpdateAcademicGuide');
    Route::post('/movementPhdDataUserIdUpdateDataEntry' , 'HomeController@movementPhdDataUserIdUpdateDataEntry')->name('movementPhdDataUserIdUpdateDataEntry');
    
    

    Route::get('/{country}', 'HomeController@destination')->name('destination');
   
    
    


});


    
    Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider')->name('facebook-login');
    Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');
    
    Route::get('login/google', 'Auth\LoginController@redirectToGoogleProvider')->name('google-login');
    Route::get('login/google/callback', 'Auth\LoginController@handleGoogleProviderCallback');
    
    
    
    Route::get('/clients', 'HomeController@clients')->name('clients');
    Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
    Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
    Route::post('/send-feedback', 'HomeController@sendInquiry')->name('send-feedback');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/sliders', 'HomeController@slider')->name('sliders');

    Route::get('/destinations', 'HomeController@destinations')->name('destinations');
    
    
    
    
    Route::get('/medicine/{country}', 'HomeController@medicine')->name('medicine');
    Route::get('/intelligence/{country}', 'HomeController@intelligence')->name('intelligence');
    Route::get('/commerce/{country}', 'HomeController@commerce')->name('commerce');
    Route::get('/science/{country}', 'HomeController@science')->name('science');
    Route::get('/law/{country}', 'HomeController@law')->name('law');
    Route::get('/creativeArts/{country}', 'HomeController@creativeArts')->name('creativeArts');
    Route::get('/humanities/{country}', 'HomeController@humanities')->name('humanities');

    Route::get('/{country}', 'HomeController@destination')->name('destination');
    if(app()->getLocale() == 'en') {
        Route::get('/{country}/{university}_university', 'HomeController@university')->name('university');
        Route::get('/{country}/{university}_university/{faculty}', 'HomeController@facultyInfo')->name('facultyInfo');
    } else {
        Route::get('/{country}/جامعة-{university}', 'HomeController@university')->name('university');
        Route::get('/{country}/جامعة-{university}/{faculty}', 'HomeController@facultyInfo')->name('facultyInfo');
    }
    Route::get('/allFaculty/{country}/{university}_university/{faculty}' , 'HomeController@facultyInfoNoMejor')->name('facultyInfoNoMejor');
