<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


Route::get('storage-link', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});


// ------------------------------------------------------------------------------------- public route ----------------------------------------------------------------------------------------------


// ------------------------------------ Excel Data --------------------------------------

Route::get('esvd/excel','ExcelController@excelPage')->name('excel.page');
Route::get('esvd/excel/json/data/','ExcelController@excelJson')->name('excel.json');

// ------------------------------------ Excel Data --------------------------------------

// --------------------------------- json formatted data --------------------------------

Route::get('get-user-data-json/{data}', 'ViewTableUserController@getData')->name('get-user-data-json');

// --------------------------------- json formatted data --------------------------------

// -------------------------------- Front page (welcome page) ---------------------------------------

Route::get(env('ROOT_DIRECTORY'), [FrontPageController::class, 'index']);

// -------------------------------- Front page (welcome page) ---------------------------------------


// -------------------------- visitor increment and download counter ----------------------------------

Route::post('visitor-counter-36592', "VisitorController@visitorCount")->name('visitor-counter');
Route::post('download-counter-36592', "VisitorController@downloadCount")->name('download-counter');


// -------------------------- visitor increment and download counter ---------------------------------


// ----------------------------- Map view from public route ------------------------------------------

Route::get('visitor-map-view', "VisitorController@mapView")->name('visitor-map-view');

// ----------------------------- Map view from public route -------------------------------------------

// ----------------------------- list view from public route ------------------------------------------

Route::get('visitor-list-view', "VisitorController@listView")->name('visitor-list-view');

// ----------------------------- list view from public route ------------------------------------------

// -------------------------------  json map route ----------------------------------------------------

Route::get('map/json', "VisitorController@studySite")->name('map-json-file');

// -------------------------------  json map route ----------------------------------------------------


//    ------------------------------ get data for user -------------------------------------------

Route::get('view-user-data/{data}', 'ViewTableUserController@singleData')->name('view-single-data');

//    ------------------------------ get data for user -------------------------------------------

//    ------------------------------ visitor about page ------------------------------------------

//Route::get('visitor/about', 'FrontPageController@about')->name('visitor.about');

//    ------------------------------ visitor about page -------------------------------------------


//    ------------------------------ visitor contact page ------------------------------------------

Route::get('visitor/contact', 'FrontPageController@contact')->name('visitor.contact');

//    ------------------------------ visitor contact page -------------------------------------------

//    ------------------------------------ teeb page ------------------------------------------------

Route::get('visitor/teeb', 'FrontPageController@teeb')->name('visitor.teeb');

//    ------------------------------------ teeb page ------------------------------------------------

//    ------------------------------------ iucn des ------------------------------------------------

Route::get('visitor/iucn/des', 'FrontPageController@iucn_des')->name('visitor.iucn_des');

//    ------------------------------------ iucn des ------------------------------------------------

//    ------------------------------------ teeb sub es ------------------------------------------------

Route::get('visitor/teeb/sub/es', 'FrontPageController@teeb_sub_es')->name('visitor.teeb_sub_es');

//    ------------------------------------ teeb sub es ------------------------------------------------

//    ------------------------------------ fao page ------------------------------------------------

Route::get('visitor/fao', 'FrontPageController@fao')->name('visitor.fao');

//    ------------------------------------ fao page ------------------------------------------------

// --------------------------------------- currency page ------------------------------------------

Route::get('visitor/currency', 'FrontPageController@currency')->name('visitor.currency');

// --------------------------------------- currency page ------------------------------------------

// ---------------------------------------- valuation ---------------------------------------------

Route::get('visitor/valuation', 'FrontPageController@valuation')->name('visitor.valuation');

// ---------------------------------------- valuation ---------------------------------------------


//    ------------------------------------ Analytics ------------------------------------------------

Route::get('visitor/analytics/{cul}/json', "AnalyticsController@analytics")->name('visitor.analytics');

//    ------------------------------------ Analytics ------------------------------------------------


// -------------------------------------- contact us ------------------------------------------------

Route::post('send/contact/mail','FrontPageController@sendMail')->name('send-contact-mail');

// -------------------------------------- contact us ------------------------------------------------


// --------------------------------------------------------------------------------------------- public route ------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ------------------------------------------------------------------------------------------------ Super admin -----------------------------------------------------------------------------------


Route::middleware(['auth', 'super-admin'])->group(function () {
    Route::get('test', function () {
        return "Test";
    });

//    ------------------------------- super admin panel -----------------------------------

    Route::get('super-admin-panel', "SuperAdminController@adminPanel")->name('super_admin.panel');

//    ------------------------------- super admin panel -----------------------------------

//    ------------------------------- super admin survey ----------------------------------

    Route::get('super-admin-survey', 'SuperAdminController@adminSurvey')->name('super_admin.survey');


//    ------------------------------- super admin survey ----------------------------------

//    ---------------------------- view super admin report --------------------------------

    Route::get('view-super-admin-report/{track}', 'SuperAdminController@reviewSingleData')->name('view-super-admin.report');

//    ----------------------------- view super admin report -------------------------------

//    ---------------------------- edit super admin survey --------------------------------

    Route::get('edit-super-admin-survey/{track}', 'SuperAdminController@editReviewSurvey')->name('edit-super-admin.survey');

//    ----------------------------- edit super admin survey -------------------------------

//    -------------------------------- super admin decision ----------------------------------

    Route::get('super-admin-decision/{track}/{decision}', 'SuperAdminController@adminDecision')->name('super-admin.decision');

//    ------------------------------- super admin decision -----------------------------------

//    ------------------- super admin review view data button from front page ------------------------

    Route::get('super-admin-view-admin-table', 'SuperAdminController@viewAdminTable')->name('super-admin-view-admin-table');

//    ------------------- super admin review view data button from front page -------------------------

//    ---------------------------- delete super admin report --------------------------------

    Route::get('delete-super-admin-report/{track}', 'SuperAdminController@deleteReport')->name('delete-super-admin.report');

//    ----------------------------- delete super admin report -------------------------------


//    ---------------------------------- super admin User Creation --------------------------------------

    Route::get('user-creation', "UserCreationController@allUser")->name('user-creation');

//    ---------------------------------- super admin User Creation --------------------------------------

//    ------------------------------ super admin User role permission -----------------------------------

    Route::get('user-role-permission/{role}/{id}', "UserCreationController@rolePermission")->name('user-role-permission');

//    ------------------------------ super admin User role permission -----------------------------------


// ---------------------------------------- super admin cms ----------------------------------------------

    Route::get('super-admin/dashboard', 'SuperAdminController@dashboard')->name('cms.dashboard');

// -------------------------- home page cms ------------------------------

    Route::resource('background', 'BackgroundController');

// -------------------------- home page cms ------------------------------

// ------------------------- about page cms ------------------------------

    Route::resource('about', 'AboutController');

// ------------------------- about page cms ------------------------------

// ------------------------- tutorial page cms ------------------------------

    Route::resource('tutorial', 'TutorialController');

// ------------------------- tutorial page cms ------------------------------


// ---------------------------------------- super admin cms ----------------------------------------------

});

// ------------------------------------------------------------------------------- Super admin --------------------------------------------------------------------------------------------------

// ---------------------------------------------------------------------------------- admin -----------------------------------------------------------------------------------------------------


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return "Admin";
    });

//    ------------------------------- admin panel -----------------------------------

    Route::get('admin-panel', 'AdminController@adminPanel')->name('admin.panel');

//    ------------------------------- admin panel -----------------------------------

//    ------------------------------- admin survey ----------------------------------

    Route::get('admin-survey', 'AdminController@adminSurvey')->name('admin.survey');


//    ------------------------------- admin survey ----------------------------------

//    -------------------------------- admin decision -------------------------------

    Route::get('admin-decision/{track}/{decision}', 'AdminController@adminDecision')->name('admin.decision');

//    ------------------------------- admin decision ---------------------------------

//    ---------------------------- view admin report --------------------------------

    Route::get('view-admin-report/{track}', 'AdminController@reviewSingleData')->name('view-admin.report');

//    ----------------------------- view admin report -------------------------------

    //    ---------------------------- delete admin report --------------------------------

    Route::get('delete-admin-report/{track}', 'AdminController@deleteReport')->name('delete-admin.report');

//    ----------------------------- delete admin report -------------------------------

//    ---------------------------- edit admin survey --------------------------------

    Route::get('edit-admin-survey/{track}', 'AdminController@editReviewSurvey')->name('edit-admin.survey');

//    ----------------------------- edit admin survey -------------------------------

//    -------------------------------- admin decision ----------------------------------

    Route::get('admin-decision/{track}/{decision}', 'AdminController@adminDecision')->name('admin.decision');

//    ------------------------------- admin decision -----------------------------------

//    ------------------- review view data button from front page ------------------------

    Route::get('view-admin-table', 'AdminController@viewAdminTable')->name('view-admin-table');

//    ------------------- review view data button from front page -------------------------

});

// ---------------------------------------------------------------------------------------------- admin ---------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------------- reviewer -------------------------------------------------------------------------------------


Route::middleware(['auth', 'reviewer'])->group(function () {

//    ------------------------------- reviewer panel -----------------------------------

    Route::get('reviewer-panel', 'ReviewerController@reviewerPanel')->name('reviewer.panel');

//    ------------------------------- reviewer panel -----------------------------------

//    ------------------------------- reviewer survey ----------------------------------

    Route::get('reviewer-survey', 'ReviewerController@reviewerSurvey')->name('reviewer.survey');


//    ------------------------------- reviewer survey ----------------------------------

//    ---------------------------- edit reviewer survey --------------------------------

    Route::get('edit-reviewer-survey/{track}', 'ReviewerController@editReviewSurvey')->name('edit-reviewer.survey');


//    ----------------------------- edit reviewer survey -------------------------------


//    ---------------------------- view reviewer report --------------------------------

    Route::get('view-reviewer-report/{track}', 'ReviewerController@reviewSingleData')->name('view-reviewer.report');

//    ----------------------------- view reviewer report -------------------------------


//    ------------------- review view data button from front page ------------------------

    Route::get('view-reviewer-table', 'ReviewerController@viewReviewerTable')->name('view-reviewer-table');

//    ------------------- review view data button from front page -------------------------

//    -------------------------------- reviewer decision ----------------------------------

    Route::get('reviewer-decision/{track}/{decision}', 'ReviewerController@reviewerDecision')->name('reviewer.decision');

//    ------------------------------- reviewer decision -----------------------------------


});

// ---------------------------------------------------------------------------------------------- reviewer --------------------------------------------------------------------------------------

// ---------------------------------------------------------------------------------------- user --------------------------------------------------------------------------------------------------


Route::middleware(['auth', 'user'])->group(function () {

//   ------------------------------- User panel ---------------------------------

    Route::get('user-panel', 'UserPartController@userPanel')->name('user.panel');

//   ------------------------------- User panel ---------------------------------


    //   ------------------------------- Clear Tracker ---------------------------------

    Route::get('user-forget-tracker', function () {
        session()->forget('tracker');
        return back();
    })->name('user-forget-tracker');

    //   ------------------------------- Clear Tracker ---------------------------------


//   ------------------------------- start survey ---------------------------------

    Route::get('start-survey', 'UserPartController@startSurvey')->name('start.survey');

//   ------------------------------- start survey ---------------------------------


//   ------------------------------- edit survey table -----------------------------

    Route::get('edit-survey', 'UserPartController@editSurvey')->name('edit.survey');
    Route::get('view-edit-survey/{track}', 'UserPartController@viewSurvey')->name('view-edit.survey');

//   ------------------------------- edit survey table -----------------------------


    //    ------------------------------ view all data for user --------------------------------------

    Route::get('view-table', 'ViewTableUserController@viewTable')->name('view-table');

    //    ------------------------------ view all data for user -------------------------------------

});

// ---------------------------------------------------------------------------------- user -------------------------------------------------------------------------------------------------------


// ----------------------------------------------------------------------------- user, admin, super-admin, reviewer ------------------------------------------------------------------------------

Route::middleware(['auth', 'allAuthUser'])->group(function () {

//    ---------------------------------- back track --------------------------------------------------------------

    Route::get('back/option', function (){
        return redirect()->back();
    })->name('back-option');

//    ---------------------------------- back track --------------------------------------------------------------


//    ------------------------- return back to Edit survey table -------------------------------------------------

    Route::get('back-track', function () {
        if (\auth()->user()->role == 'admin') {
            return redirect()->route('admin.survey');
        } else if (\auth()->user()->role == 'reviewer') {
            return redirect()->route('reviewer.survey');
        } else if (\auth()->user()->role == 'user') {
            return redirect()->route('edit.survey');
        } else if (\auth()->user()->role == 'super-admin') {
            return redirect()->route('super_admin.survey');
        } else {
            return redirect()->route('visitor-list-view');
        }
    })->name('back-track');

//    ------------------------- return back to Edit survey table -----------------------------------------------


//    ------------------------------ ecosystem ------------------------------------

    Route::resource('ecosystem', EcosystemController::class);

//    ------------------------------ ecosystem ------------------------------------

//    ------------------------------ es -------------------------------------------

    Route::resource('es', EsController::class);

//    ------------------------------ es -------------------------------------------


    //    ------------------------------ study -------------------------------------------

    Route::resource('study', StudyController::class);

    //    ------------------------------ study -------------------------------------------

    //    ------------------------------ valuation -------------------------------------------

    Route::resource('valuation', ValuationController::class);

    //    ------------------------------ valuation -------------------------------------------

    //    ------------------------------ bibilographic -------------------------------------------

    Route::resource('bibilographic', BibilographicController::class);

    //    ------------------------------ bibilographic -------------------------------------------

    //    ------------------------------ data -------------------------------------------

    Route::resource('data', DataController::class);

    //    ------------------------------ data -------------------------------------------

    // ------------------------------- change password ---------------------------------

    Route::post('change-password', 'ChangePassword@changePassword')->name('change-password');

    // ------------------------------- change password ---------------------------------

});

// ------------------------------------------------------------------------------- user, admin, super-admin, reviewer ------------------------------------------------------------------------------


// ---------------------------------------------- logout --------------------------------------------

Route::get('logout', function () {
    Auth::logout();
    session()->forget('tracker');
    return redirect('/');
})->name('logout');


//Route::get('session', function () {
//    \Illuminate\Support\Facades\Session::flush();
//});

// ---------------------------------------------- logout --------------------------------------------
