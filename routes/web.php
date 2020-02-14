<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function () {
    return view('home');
});
// Route::get('/dash', function () {
    
// });



// Auth::routes();
Auth::routes([
  // 'register' => false,
  'verify' => true,
  'reset' => false
]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// TEST AJAX
Route::resource('ajaxproducts','ProductAjaxController');

// HOME
Route::get('my-form','HomesController@myform');
Route::post('my-form','HomesController@store');

// CLASSROOMS/ LECTURE HALLS
Route::get('classroom','ClassroomController@index');
Route::post('classroom','ClassroomController@store');
Route::get('classroom/delete','ClassroomController@classroomdelete');
Route::get('classroom/report','ClassroomController@classroomReport');


// TEACHERS / LECTURERS
Route::get('lecturer','TeacherController@index');
Route::post('lecturer','TeacherController@store');
Route::get('teacher/delete','TeacherController@teacherdelete');
Route::get('teacher/report','TeacherController@teacherReport');

// LECTURE / CLASSES
Route::get('lecture','LectureController@index');
Route::post('lecture','LectureController@store');
Route::post('lecture/isavailable','LectureController@isavailable');
Route::get('lecture/delete','LectureController@lecturedelete');
Route::get('lecture/report','LectureController@lectureReport');

// OPERATOR
Route::get('lectureoperator','LectureOperatorController@index');
Route::post('lectureoperator','LectureOperatorController@store');

// INVOICE
Route::get('invoice','InvoiceController@index');
Route::post('invoice','InvoiceController@store');
Route::get('/invoice/lectures','InvoiceController@returnLectures');
Route::post('/invoice/lecture_price_filler','InvoiceController@lecture_price_filler');
Route::post('invoice/payment','InvoiceController@payment');
Route::get('invoice/delete','InvoiceController@invoicedelete');
Route::get('invoice/report','InvoiceController@invoiceReport');

Route::get('earning/delete','InvoiceController@earningdelete');
Route::get('earning/report','InvoiceController@earningReport');

Route::get('salary/report','InvoiceController@salaryReport');

// STUDENT
Route::get('student','StudentController@index');
Route::get('student/profile','StudentController@profile');
Route::post('student','StudentController@store');
Route::post('student/isavailable','StudentController@isavailable');
Route::post('student/isavailable/marking','StudentController@isavailablemarking');
Route::post('student/isqravailable','StudentController@isQRAvailable');
Route::post('student/photo/upload/fresh','StudentController@photoUploadFresh');
Route::get('student/delete','StudentController@studentdelete');
Route::get('student/report','StudentController@studentReport');

Route::get('cardmarking/','CardMarkingController@index');
Route::post('cardmarking/','CardMarkingController@store');
Route::post('cardmarking/entry/withouthpaid','CardMarkingController@entrywithoutpaid');


Route::get('cashier/','HomeController@cashier');
Route::get('admin/','HomeController@admin');
Route::get('operator/','HomeController@operator');
Route::get('cardmarker/','HomeController@cardmarker');

Route::get('systemuser/delete','AdminPageController@systemuserdelete');
Route::get('systemuser/report','AdminPageController@systemuserReport');


// Route::post('admin/url/find','AdminPageController@findURL');

// Route::get('admin/invoice/report','AdminPageController@invoiceReport');
Route::get('admin/earning/report','AdminPageController@earningReport');
Route::get('admin/salary/report','AdminPageController@salaryReport');
Route::get('admin/student/report','AdminPageController@studentReport');

Route::get('admin/classroom/report','AdminPageController@classroomReport');
Route::get('admin/lecture/report','AdminPageController@lectureReport');
Route::get('admin/systemuser/report','AdminPageController@systemuserReport');

Route::get('admin/teacher/report','AdminPageController@teacherReport');
Route::get('admin/teacher/report/fetch','AdminPageController@classroomReportPaginate');

// ADMIN =========================================================== 


//OPERATOR OWN URLS
// --------------------------------------------
// 01 . /markerreports
// 02 . /cardmarking
// ============================================



//OPERATOR OWN URLS
// ---------------------------------------------
// 01 . /student/add
// 02 . /teacher/add
// 03 . /classroom/add
// 04 . /lectures
// ============================================



//CASHIER OWN URLS
// ---------------------------------------------
// 01 . /invoice
// 02 . /students [search, view]

// ============================================




//ADMIN OWN URLS
// ---------------------------------------------
// 01 . /register      [ operator, cashier and cardmarker ]
// 02 . admin/cardprinting
// 03 . /Reports
//		01 . 
//		02 . admin/invoices
//		03 . admin/eranings
//		04 . 
//		05 . admin/salary
//		06 . admin/students
//		07 . admin/teachers
//		08 . admin/users
//		09 . admin/lectures
//		10 . admin/classrooms
//

// ============================================