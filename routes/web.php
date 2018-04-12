<?php


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function(){
//     return view('admins/include/adminleft');
// });

Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/register/{referral_code}', 'Users\RegistrationController@regnew')->name('regnew');
Route::post('/registerreferrer/{referral_code}','Users\RegistrationController@registerRef')->name('registerRef');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', 'Users\AccountsController@dashboard')->name('dashboard');
    Route::get('/fund', 'Users\AccountsController@fund_wallet')->name('fund_wallet');
    Route::get('/withdrawal', 'Users\AccountsController@withdrawal')->name('withdrawal');
    Route::get('/referrals', 'Users\AccountsController@referrals')->name('referrals');
    Route::get('/investment', 'Users\AccountsController@investment')->name('investment');
    Route::get('/support', 'Users\AccountsController@support')->name('support');
    Route::get('/profile', 'Users\AccountsController@profile')->name('profile');
    Route::get('/settings', 'Users\AccountsController@settings')->name('settings');
    Route::get('/profile/edit/profile', 'Users\AccountsController@edit')->name('edit.profile');
    Route::get('/forgotpassword', 'Users\AccountsController@forgotpassword')->name('forgotpassword');
    Route::get('/logout', 'Users\AccountsController@logout');

    //post actions
    Route::post('/fund', 'Users\AccountsController@fund_bank_data')->name('fund_bank_data');
    Route::post('/withdrawal','Users\AccountsController@make_withdrawal')->name('make_withdrawal');
    Route::post('/profile/update/profile', 'Users\AccountsController@updateuser')->name('updateuser');
    Route::post('/profile/update/nextofkind', 'Users\AccountsController@nextup')->name('nextup');
    Route::post('/user/invest/fund','Users\AccountsController@investfund')->name('investfund');
});


Route::get('/admin', 'Admin\AdminController@admin')->name('admin');
Route::get('/admin/users', 'Admin\AdminController@manage_users')->name('manage_users');
Route::get('/admin/user_profile', 'Admin\AdminController@user_profile')->name('user_profile');
Route::get('/admin/user_deposit', 'Admin\AdminController@user_deposit')->name('user_deposit');
Route::get('/admin/user_deposit_history', 'Admin\AdminController@user_deposit_history')->name('user_deposit_history');
Route::get('/admin/user_deposit_pending', 'Admin\AdminController@user_deposit_pending')->name('user_deposit_pending');
Route::get('/admin/user_add_money', 'Admin\AdminController@user_add_money')->name('user_add_money');
Route::get('/admin/withdrawal_pending', 'Admin\AdminController@withdrawal_pending')->name('withdrawal_pending');
Route::get('/admin/withdrawal_completed', 'Admin\AdminController@withdrawal_completed')->name('withdrawal_completed');
Route::get('/admin/withdrawal_history', 'Admin\AdminController@withdrawal_history')->name('withdrawal_history');
Route::get('/admin/support_admin', 'Admin\AdminController@support_admin')->name('support_admin');
Route::get('/admin/support_admin_message', 'Admin\AdminController@support_admin_message')->name('support_admin_message');
Route::get('/admin/support_pending', 'Admin\AdminController@support_pending')->name('support_pending');
Route::get('/admin/user_blocked', 'Admin\AdminController@user_blocked')->name('user_blocked');
Route::get('/admin/investment', 'Admin\AdminController@investment')->name('investment');
Route::get('/admin/referrals', 'Admin\AdminController@referrals')->name('referrals');
