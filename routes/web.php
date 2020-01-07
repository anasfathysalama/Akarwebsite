<?php





/*
   Admin routes

*/

Route::group(['middleware' => ['web', 'admin']] , function(){

  // USERS
  Route::get('/adminpanel','AdminController@index');
  Route::resource('/adminpanel/users' , 'UsersController');
  Route::post('/adminpanel/users/changePassword' , 'UsersController@updatePassword');
  Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');

  // Settings
   Route::get('/adminpanel/settings' , 'SitesettingController@index');

    // SHOW AKARAT
    Route::get('/adminpanel/akar' , 'AkarController@index');
    Route::get('/adminpanel/addAkar' , 'AkarController@addAkar');
    Route::post('/adminpanel/addAkar' , 'AkarController@store');
    Route::get('/adminpanel/akar/{id}/edit' , 'AkarController@edit');
    Route::post('/adminpanel/akar/{id}/update' , 'AkarController@update');
    Route::get('/adminpanel/akar/{id}/delete' ,'AkarController@destroy');

// CONTUCT US

    Route::get('/adminpanel/contact' , 'ContactController@show');
    Route::get('/adminpanel/contact/{id}/delete' ,'ContactController@destroy');
    

   
    

});


/*
   User routes
*/

Route::group(['middleware' => 'web'] , function(){

  Auth::routes();
  Route::get('/', function () {
      return view('welcome');
  });

// show items
  Route::get('/allitems' , 'AkarController@showAll');
  Route::get('/showdetails/{id}' , 'AkarController@showDetails');
  
// contact us
  Route::get('/contact' , 'ContactController@index');
  Route::post('/contact' , 'ContactController@store');

// USER CREATE POST
  Route::get('/user/create' , 'AkarController@userShow');
  Route::post('/user/create' , 'AkarController@userStore');

// USER SHOW HIS  POSTS
  Route::get('/user/showItem' , 'AkarController@showUserBulding')->middleware('auth');
  

});



Route::get('/home', 'HomeController@index')->name('home');


