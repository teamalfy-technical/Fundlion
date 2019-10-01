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

	Route::get('/', function () {
		return view('pages.home.index');
	})->name('home');
	Route::get('/admin', function () {
		return redirect('/admin/login');
	});
	Route::get('/lenders', function () {
		return redirect('/lenders/login');
	});
	Route::get('/clients', function () {
		return redirect('/clients/login');
	});

//Route::get('/', function () { return view('welcome'); });
//Auth::routes(['verify' => true]);

//Pages Routes
	Route::group(['namespace' => 'Pages'], function () {
		Route::get('/', 'PagesController@index')->name('pages.home');
		Route::post('apply', 'PagesController@apply')->name('pages.home.apply');
		Route::get('about-us', 'PagesController@about')->name('pages.about');
		Route::get('terms', 'PagesController@terms')->name('pages.terms');
		Route::get('privacy', 'PagesController@privacy')->name('pages.privacy');
		Route::get('our-team', 'PagesController@team')->name('pages.team');
		Route::get('small-business-loans', 'PagesController@small_business_loans')->name('pages.small-business-loans');
		Route::get('helping-small-business', 'PagesController@helping_small_business')->name('pages.helping-small-business');
//    Route::get('industry-funding', 'PagesController@funding')->name('pages.funding');
		Route::get('lending-products', 'PagesController@lending')->name('pages.lending-products');
		Route::get('industry-specific', 'PagesController@industry')->name('pages.industry-specific');
		Route::get('news-and-insights', 'PagesController@news')->name('pages.news');
		Route::get('news-and-insights/{title}', 'PagesController@news_detail')->name('pages.news.detail');
		Route::get('events', 'PagesController@events')->name('pages.events');
		Route::get('events/{title}', 'PagesController@events_detail')->name('pages.events.details');
		Route::get('investor-relations', 'PagesController@investor_relations')->name('pages.investor-relations');
		Route::get('contact', 'PagesController@contact')->name('pages.contact');
		Route::post('contact/mail', 'ContactController@mailToAdmin')->name('pages.contact.mail');
		Route::get('careers', 'PagesController@careers')->name('pages.careers');
		Route::get('careers/{title}', 'PagesController@careers_categories')->name('pages.careers.categories');
		Route::get('careers/{category}/{title}', 'PagesController@careers_details')->name('pages.careers.details');
		Route::get('loans/detail/{title}', 'PagesController@loan_detail')->name('pages.loans.details');
		Route::get('appointment/', 'PagesController@appointment')->name('pages.appointment');
		Route::get('faq/', 'PagesController@faq')->name('pages.faq');
		Route::get('large-corporate-funding/', 'PagesController@large_corporate_funding')->name('pages.large-corporate-funding');
		Route::get('investing-in-the-future/', 'PagesController@investing_in_the_future')->name('pages.investing-in-the-future');
		Route::get('introducers-and-brokers/', 'PagesController@introducers_and_brokers')->name('pages.introducers-and-brokers');
		Route::get('banking-and-lending-partnership/', 'PagesController@banking_and_lending_partnership')->name('pages.banking-and-lending-partnership');
		Route::get('become-a-lending-partner/', 'PagesController@become_a_lending_partner')->name('pages.become-a-lending-partner');
	});

//Users Routes
	Route::group(['namespace' => 'Users', 'prefix' => 'admin'], function () {
		Route::get('/login', 'Auth\LoginController@showLoginForm')->name('users.login');
		Route::post('/login', 'Auth\LoginController@login')->name('users.login.submit');
		Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('users.register');
		Route::post('/register', 'Auth\RegisterController@register')->name('users.register.submit');
		Route::post('/logout', 'Auth\LoginController@logout')->name('users.logout');
		//Password Reset Routes
		Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('users.password.email');
		Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('users.password.update');
		Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('users.password.request');
		Route::get('/reset/{token}', 'Auth\ResetPasswordController@showRequestForm')->name('users.password.reset');
		//Verification Routes
		Route::post('/email/resend', 'Auth\VerificationController@resend')->name('users.verification.resend');
		Route::post('/email/verify', 'Auth\VerificationController@show')->name('users.verification.notice');
		Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('users.verification.verify');
		//Dashboard Routes
		Route::get('/dashboard', 'Views\DashboardController@index')->name('users.dashboard');

		Route::get('/all-clients', 'Views\ClientsController@index')->name('users.clients');
		Route::get('/clients/loans', 'Views\LoansController@index')->name('users.clients.loans');

//    Route::get('/clients/loans/generate', 'Views\LoansController@pdfgen')->name('users.loans.generate');
		Route::get('/clients/loans/generate/{id}', 'Views\LoansController@printPDF')->name('users.loans.generate');
		Route::post('/clients/loans/notes/{id}', 'Views\LoansController@update')->name('users.loans.update');

		Route::post('/all-clients/{id}', 'Views\ClientsController@update')->name('users.clients.update');
		Route::post('clients/documents/remove', 'Views\ClientsController@doc_remove')->name('users.documents.remove');
		Route::post('/clients/destroy/{id}', 'Views\ClientsController@destroy')->name('users.clients.destroy');

		Route::get('/my-account', 'Views\AccountController@index')->name('users.account');
		Route::post('/my-account/update', 'Views\AccountController@update')->name('users.account.update');
		Route::post('/account/password', 'Views\AccountController@password')->name('users.password.change');

		Route::get('/messages/inbox', 'Views\MessagesController@index')->name('users.messages.inbox');
		Route::get('/messages/sent', 'Views\MessagesController@sent')->name('users.messages.sent');
		Route::post('/messages/store', 'Views\MessagesController@store')->name('users.messages.store');
		Route::post('/messages/reply/{id}', 'Views\MessagesController@reply')->name('users.messages.reply');
		Route::post('/messages/search', 'Views\MessagesController@search')->name('users.messages.search');
		Route::post('/messages/destroy/{id}', 'Views\MessagesController@destroy')->name('users.messages.destroy');

		Route::get('/users-accounts', 'Views\AccountsController@index')->name('users.accounts');

		Route::get('/lenders', 'Views\LendersController@index')->name('users.lenders');
		Route::post('/lenders/store', 'Views\LendersController@store')->name('users.lenders.store');
		Route::post('/lenders/update', 'Views\LendersController@update')->name('users.lenders.update');

		Route::post('/users-accounts/store', 'Views\AccountsController@store')->name('users.accounts.store');
		Route::post('/users-accounts/update', 'Views\AccountsController@update')->name('users.accounts.update');
		Route::post('/users-accounts/destroy/{id}', 'Views\AccountsController@destroy')->name('users.accounts.destroy');

		Route::post('/avatar', 'Views\AccountController@avatar')->name('users.avatar.update');

		Route::post('/lenders', 'Views\LendersController@search')->name('users.lenders.search');
		Route::post('/clients/loans', 'Views\LoansController@search')->name('users.loans.search');


		Route::get('/cms', 'Views\CmsController@index')->name('users.cms');
		Route::get('/cms/homepage', 'Views\CmsController@homepage')->name('users.cms.homepage');
		Route::get('/cms/aboutus', 'Views\CmsController@about_us')->name('users.cms.aboutus');
		Route::post('/cms/aboutus_update', 'Views\CmsController@about_us_update')->name('users.cms.about_update');

		Route::get('/cms/loans', 'Views\CmsController@loans')->name('users.cms.loans');
		Route::get('/cms/new_loan', 'Views\CmsController@new_loan')->name('users.cms.new_loan');

		Route::get('/cms/delete_loan', 'Views\CmsController@delete_loan')->name('users.cms.delete_loan');
		Route::post('/cms/delete_loanp', 'Views\CmsController@delete_loanp')->name('users.cms.delete_loanp');

		Route::post('/cms/new_loan_save', 'Views\CmsController@new_loan_save')->name('users.cms.new_loan_save');
		Route::post('cms/loans_update', 'Views\CmsController@loans_update')->name('users.cms.loans_update');

		Route::get('/cms/news', 'Views\CmsController@news')->name('users.cms.news');		

		Route::get('/cms/how_it_works', 'Views\CmsController@how_it_works')->name('users.cms.how_it_works');
		Route::post('/cms/how_it_works_update', 'Views\CmsController@how_it_works_update')->name('users.cms.how_it_works_update');

		Route::get('/cms/get_started', 'Views\CmsController@get_started')->name('users.cms.get_started');
		Route::post('/cms/get_started_update', 'Views\CmsController@get_started_update')->name('users.cms.get_started_update');

		Route::get('/cms/general', 'Views\CmsController@general')->name('users.cms.general');
		Route::post('/cms/general_update', 'Views\CmsController@general_update')->name('users.cms.general_update');		

		Route::get('/cms/footer', 'Views\CmsController@footer')->name('users.cms.footer');
		Route::post('/cms/footer_update', 'Views\CmsController@footer_update')->name('users.cms.footer_update');

		Route::get('/cms/lending_patners', 'Views\CmsController@lending_patners')->name('users.cms.lending_patners');
		Route::post('/cms/lending_patners_update', 'Views\CmsController@lending_patners_update')->name('users.cms.lending_patners_update');
		Route::get('/cms/new_lending_patner', 'Views\CmsController@new_lending_patner')->name('users.cms.new_lending_patner');
		Route::post('/cms/new_lending_patners_save', 'Views\CmsController@new_lending_patners_save')->name('users.cms.new_lending_patners_save');
		Route::get('/cms/delete_lending_patner', 'Views\CmsController@delete_lending_patner')->name('users.cms.delete_lending_patner');
		Route::post('/cms/delete_lending_patnerp', 'Views\CmsController@delete_lending_patnerp')->name('users.cms.delete_lending_patnerp');

		Route::post('/cms/lending_patner_img_update', 'Views\CmsController@lending_patner_img_update')->name('users.cms.lending_patner_img_update');

		Route::post('/cms/aboutus_update', 'Views\CmsController@about_us_update')->name('users.cms.about_update');		

		Route::post('/cms/homepage/update', 'Views\CmsController@homepage_update')->name('users.cms.homepage_update');
		// Route::get('/cms/homepage/create', 'Views\CmsController@index')->name('users.cms.create');
		Route::get('/cms/business_model', 'Views\CmsController@business_model')->name('users.cms.business_model');
		Route::post('/cms/business_model_update', 'Views\CmsController@business_model_update')->name('users.cms.business_model_update');	

		// pages_test	
		Route::get('/cms/pages', 'Views\CmsController@pages')->name('users.cms.pages');	

		Route::get('/cms/pages_update', 'Views\CmsController@pages_update')->name('users.cms.pages_update');	

		Route::get('/cms/pages_test', 'Views\CmsController@pages_test')->name('users.cms.pages_test');		
	});

//Clients Routes
	Route::group(['namespace' => 'Clients', 'prefix' => 'clients'], function () {
		//Auth Routes
		Route::get('/login', 'Auth\LoginController@showLoginForm')->name('clients.login');
		Route::post('/login', 'Auth\LoginController@login')->name('clients.login.submit');
		Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('clients.register');
		Route::post('/register', 'Auth\RegisterController@register')->name('clients.register.submit');
		Route::post('/logout', 'Auth\LoginController@logout')->name('clients.logout');
		//Password Reset Routes
		Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('clients.password.email');
		Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('clients.password.update');
		Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('clients.password.request');
		Route::get('/reset/{token}', 'Auth\ResetPasswordController@showRequestForm')->name('clients.password.reset');
		//Verification Routes
		Route::post('/email/resend', 'Auth\VerificationController@resend')->name('clients.verification.resend');
		Route::post('/email/verify', 'Auth\VerificationController@show')->name('clients.verification.notice');
		Route::get('/email/verify/{id}', 'Auth\VerificationController@verify')->name('clients.verification.verify');
		//Dashboard Routes
		Route::get('/dashboard', 'Views\DashboardController@index')->name('clients.dashboard');
		Route::post('dashboard/funding', 'Views\DashboardController@funding')->name('clients.funding');
		Route::post('dashboard/provider', 'Views\DashboardController@loanDetail')->name('clients.provider');
		Route::post('/avatar', 'Views\AccountController@avatar')->name('clients.avatar.update');
		Route::post('/document', 'Views\AccountController@document')->name('clients.documents.store');
		Route::get('/account', 'Views\AccountController@index')->name('clients.account');
		Route::post('/account/update', 'Views\AccountController@update')->name('clients.account.update');
		Route::post('/account/password', 'Views\AccountController@password')->name('clients.password.change');
		//Loans Routes
		Route::get('/my-loans', 'Views\LoansController@index')->name('clients.loans');
		Route::post('/loans/apply', 'Views\LoansController@store')->name('clients.loans.apply');
		Route::get('/lenders', 'Views\LendersController@index')->name('clients.lenders');
		Route::get('/lenders/profile/{id}', 'Views\LendersController@profile')->name('clients.lenders.profile');

		Route::post('/avatar', 'Views\AccountController@avatar')->name('clients.avatar.update');
		Route::post('/documents/upload', 'Views\AccountController@doc_upload')->name('clients.documents.upload');
		Route::post('/documents/remove', 'Views\AccountController@doc_remove')->name('clients.documents.remove');

		Route::get('/account', 'Views\AccountController@index')->name('clients.account');
		Route::post('/account/update', 'Views\AccountController@update')->name('clients.account.update');
		Route::post('/account/password', 'Views\AccountController@password')->name('clients.password.change');

		Route::get('/messages/inbox', 'Views\MessagesController@index')->name('clients.messages.inbox');
		Route::get('/messages/sent', 'Views\MessagesController@sent')->name('clients.messages.sent');
		Route::post('/messages/store', 'Views\MessagesController@store')->name('clients.messages.store');
        Route::post('/messages/search', 'Views\MessagesController@search')->name('clients.messages.search');
        Route::post('/messages/destroy/{id}', 'Views\MessagesController@destroy')->name('clients.messages.destroy');

		Route::get('/notifications', 'Views\NotificationsController@index')->name('clients.notifications.view');

		Route::get('/notifications/read/{id}', 'Views\NotificationsController@read')->name('clients.notifications.read');
		Route::get('/notifications/all/{id}', 'Views\NotificationsController@all')->name('clients.notifications.all');

		Route::post('/lenders', 'Views\LendersController@search')->name('clients.lenders.search');
		Route::post('/loans/search', 'Views\LoansController@search')->name('clients.loans.search');

//		Route::post('/notifications/all/{id}', function($id) {
//			$when = Carbon::now()->addSeconds(10);
//			$client = Client::find($id);
//			$client->unreadNotifications()->update(['read_at' => now()]);
//			return redirect()->back();
//		})->name('clients.notifications.all');
	});
