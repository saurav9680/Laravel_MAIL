
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('users',"users");
Route::post('userscontroller',"userscontroller@formSubmit");

Route::get('/form', function () {
    return view('forms');
});

Route::post('get-data',function(Request $request){
    $name=$request->input('name');
    $age=$request->input('age');
    $email=$request->input('email');
    $Course=$request->input('Course');
    $Gender=$request->input('Gender');
    return 'Hi,Your Entered value in Form is as below <br><strong> Name : '.$name. ' <br> Age : 
    '.$age.' <br> Your E-Mail Id : '.$email. ' <br>Selected Course :
 '.$Course. ' <br> Gender : '.$Gender ;
    return redirect('forms')->with('message','successful');
    
});