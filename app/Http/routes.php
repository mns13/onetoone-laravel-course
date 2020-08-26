<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;
use App\Address;
use App\Post;
use App\Role;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/insert', function (){
////    $user = User::findOrFail(2);
////    $address = new Address(['name'=>'21312321 Baker Street UK']);
////    $user->address()->save($address);
////});

//Route::get('/update', function(){
//
//    $address = Address::whereUserId(1)->first();
////    $address = Address::where('user_id', 1) ;  # equal to query bellow
//
//    $address->name = "43434 Updated Av, Moscow";
//    $address->save();
//});
//
//Route::get('/read', function(){
//    $user = User::findOrFail(1);
//    echo $user->address->name;
//});
//
//Route::get('/delete', function(){
//    $user = User::findOrFail(1);
//    $user->address()->delete();
//    return "done";
//});

//Route::get('/create', function(){
////    $user = User::findOrFail(3);
////    $posts = new Post(['title'=>'JavaScript', 'body'=>'JS seems nice to me now']);
////    $user->posts()->save($posts);
////});
////
////Route::get('/read', function(){
////    $user = User::findOrFail(1);
////    foreach($user->posts as $post){
////        echo $post->title . "<br>";
////    }
//////     dd($user);
////});
////
////Route::get('/update', function(){
////    $user = User::findOrFail(1);
////    $user->posts()->whereId(1)->update(['title'=>'Updated Title', 'body'=>'Updated Body']);
////    return 'success';
////});
////
////Route::get('/delete', function(){
////    $user = User::find(1);
////    $user->posts()->whereId(1)->delete();
////});
//

//Route::get('/create', function(){
//    $user = User::findOrFail(2);
//    $user->roles()->save(new Role(['name'=>'subcriber']));
//});
//
//Route::get('/update', function(){
//    $user = User::findOrFail(1);
//    if($user->has('roles')){
//        foreach($user->roles as $role){
//            if($role->name == "admin"){
//                $role->name = "manager";
//                $role->save();
//            }
//        }
//    }
//});
//
//Route::delete('/delete', function (){
//    $user = User::findOrFail(1);
//    $user->roles()->delete();
//});

Route::get('/attach', function(){
    $user = User::findOrFail(1);
    $user->roles()->attach(2);
    return $user;
});

Route::get('/dettach', function(){
    $user = User::findOrFail(1);
    $user->roles()->detach(2);
    return $user;
});
Route::get('/sync', function(){
    $user = User::findOrFail(1);
    $user->roles()->sync([1,2]);
});
