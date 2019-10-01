<?php

	namespace App\Http\Controllers\Users\Views;

	use App\Client;
	use App\FlClientsFiles;
	use App\FlClientsFilesType;
	use App\FlClientsLoan;
	use App\FlLoansStatus;
	use App\FlMessage;
	use App\Http\Controllers\Controller;
	use App\Lender;
	use App\Notifications\clientsNotifications;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Storage;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Support\Facades\DB;
	use App\FlUsersRole;

	class CmsController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware('auth');
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\View\View
		 */
	    public function index()
	    {

        $session = Auth::user();
        $User = User::where('id',$session->id)->first();
        $FlUsersRole = FlUsersRole::all();
        return view('cms.index')
            ->with('session',$session)
            ->with('userRoles',$FlUsersRole)
            ->with('admin',$User);
	    }

	    public function pages_test()
	    {

	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_pages')->where('name', 'about-us')->first();
	        return view('cms.pages_test')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);

	    }

	    public function pages(Request $request)
	    {

	    	$page=$request->name;
	    	// print_r($page);die();
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_pages')->where('name', $page)->first();
	        return view('cms.pages')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);

	    }

	    public function pages_update(Request $request)
	    {

	    	
	    	$content=$request->content;
	    	$page=$request->page;
	    	$content1=urlencode($content);

	    	// print_r($request->all());die();

			 try {
			 $data = DB::table('fl_cms_pages')
            ->where('name', $page)
            ->update(['content' => $content1]);
			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}	    	
	        // return view('cms.homepage')
	            
	    }

	    public function general()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_general')->where('id', '1')->first();
	        return view('cms.general')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }	    

	    public function homepage()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_pages')->where('name', 'homepage')->first();
	        return view('cms.homepage')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }


	    public function about_us()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_about_us')->where('id', '1')->first();
	        return view('cms.aboutus')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }

	    public function footer()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_footer')->where('id', '1')->first();
	        return view('cms.footer')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }	  
	    // lending_patners

	    public function lending_patners()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_lending_patners')->where('id', '1')->first();
	      	$data1 = DB::table('fl_cms_lending_patners')->paginate();
	        return view('cms.lending_patners')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data1',$data1)
	            ->with('data',$data);
	    }	


		 public function new_lending_patner()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);			
        	return view('cms.add_lending_patner')
            	->with('session',$session)
	            ->with('admin',$User);            	
           	 	      
	    }
	    
	     public function new_lending_patners_save(Request $request)
		{

			// echo "string";die();
			
			$name = $request->name;
			$image = $request->file('image');
			echo '<pre>';
			print_r($request->all());
			echo '</pre>';
			// die();
			 try {
	       	$data =  DB::table('fl_cms_lending_patners')->insert(
			    ['patner_name' => $name ]
			);

	       	$lastInsertId=DB::getPdo()->lastInsertId();
			 // var_dump($lastInsertId);

			 if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms/img/partners/",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_cms_lending_patners')
	            ->where('id', $lastInsertId)
	            ->update(['patner_image' => "img/partners/".$filenameWithExt ] );  

           	 }
			 // die();
			 return redirect('/admin/cms/lending_patners')->with("success", "content created successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect('/admin/cms/lending_patners')->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

	    public function delete_lending_patner()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);			
        	return view('cms.delete_lending_patner')
            	->with('session',$session)
	            ->with('admin',$User);            	
           	 	      
	    }

	     public function delete_lending_patnerp(Request $request)
		{

			// echo "string";die();
			$id = $request->id;

			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// die();
			 try {

	       	$data =  DB::table('fl_cms_lending_patners')->where('id', '=', $id)->delete();

			 // var_dump($data);

			 // die();
			 return redirect('/admin/cms/lending_patners')->with("success", "content deleted successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect('/admin/cms/lending_patners')->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}			    
		

		public function lending_patner_img_update(Request $request)
		{

			// echo "string";die();
			$id = $request->id;
			$name = $request->name;
			$image = $request->file('image');
			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// die();
			 try {

			 if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms/img/partners/",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_cms_lending_patners')
	            ->where('id', $id)
	            ->update(['patner_image' => "img/partners/".$filenameWithExt ] );  

           	 }

			 $data = DB::table('fl_cms_lending_patners')
            ->where('id', $id)
            ->update(['patner_name' => $name ] );

			 // var_dump($data);

			 return redirect('/admin/cms/lending_patners')->with("success", "content updated successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect('/admin/cms/lending_patners')->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);

		}			

		public function lending_patners_update(Request $request)
		{

			// echo "string";

			$title = $request->title;
			$text = $request->text;
			// $slider_title2 = $request->slider_title2;
			// $slider_text2 = $request->slider_text2;
			// $slider_title3 = $request->slider_title3;
			// $slider_text3 = $request->slider_text3;
			// $banner_text = $request->banner_text;
			 try {
			 $data = DB::table('fl_cms_lending_patners')
            ->where('id', 1)
            ->update(['title' => $title, 'text' => $text ]
            		
            	);

			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}	

		public function homepage_update(Request $request)
		{
			// $banner_pic = $request->banner_pic;
			$banner_title = $request->banner_title;
			$banner_text = $request->banner_text;
			$image = $request->file('banner_pic');
			// print_r($request->all());die();
			
			 try {
			 	 if ($request->hasFile('banner_pic')) {
                // Storage::delete("public/pages/assets/img/core-img/$data->logo");
                // Get Filename With The Extension
                $filenameWithExt = $image->getClientOriginalName();

                // echo $fileNameToStore;die();
                // Upload Image
                $path = $image->storeAs("cms",$filenameWithExt);
                // echo $path;die();
                // $User->update(['avatar' => $fileNameToStore]);
				 $data_image = DB::table('fl_cms_pages')
	            ->where('name', 'homepage')
	            ->update(['banner_pic' => $filenameWithExt]);                
           	 }

			 $data = DB::table('fl_cms_pages')
            ->where('name', 'homepage')
            ->update(['banner_title' => $banner_title, 'banner_text' => $banner_text] );

			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}
			    	    
		public function footer_update(Request $request)
		{

			// echo "string";

			$disclaimer = $request->disclaimer;
			// $email = $request->email;
			// $slider_title2 = $request->slider_title2;
			// $slider_text2 = $request->slider_text2;
			// $slider_title3 = $request->slider_title3;
			// $slider_text3 = $request->slider_text3;
			// $banner_text = $request->banner_text;
			 try {
			 $data = DB::table('fl_cms_footer')
            ->where('id', 1)
            ->update(['disclaimer' => $disclaimer ]);

			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}	

		public function general_update(Request $request)
		{

			// echo "string";

			$telephone = $request->telephone;
			$email = $request->email;
			$support_email = $request->support_email;
			$press_email = $request->press_email;
			$address = $request->address;
			$logo = $request->file('logo');
			// $slider_text2 = $request->slider_text2;
			// $slider_title3 = $request->slider_title3;
			// $slider_text3 = $request->slider_text3;
			// $banner_text = $request->banner_text;
			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// echo $logo;die();
			 try {
			 if ($request->hasFile('logo')) {
                // Storage::delete("public/pages/assets/img/core-img/$data->logo");
                // Get Filename With The Extension
                $filenameWithExt = $logo->getClientOriginalName();

                // echo $fileNameToStore;die();
                // Upload Image
                $path = $logo->storeAs("cms",$filenameWithExt);
                // echo $path;die();
                // $User->update(['avatar' => $fileNameToStore]);
				 $data_logo = DB::table('fl_cms_general')
	            ->where('id', 1)
	            ->update(['logo' => $filenameWithExt]);                
           	 }

            // else { return redirect("cms/general")->with("error", "No image detected!"); }

			 $data = DB::table('fl_cms_general')
            ->where('id', 1)
            ->update(['telephone' => $telephone,
            			'support_email' => $support_email,
            			'press_email' => $press_email,
            			'address' => $address,
		             	'email' => $email ] );

			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}	

		public function about_us_update(Request $request)
		{

			// echo "string";

			$slider_title1 = $request->slider_title1;
			$slider_text1 = $request->slider_text1;
			$slider_title2 = $request->slider_title2;
			$slider_text2 = $request->slider_text2;
			$slider_title3 = $request->slider_title3;
			$slider_text3 = $request->slider_text3;
			// $banner_text = $request->banner_text;

			$slider_image1 = $request->file('slider_image1');
			$slider_image2 = $request->file('slider_image2');
			$slider_image3 = $request->file('slider_image3');

			// echo '<pre>';
			// // print_r($request->all());
			// echo '</pre>';
			// die();
			 try {

			  if ($request->hasFile('slider_image1') ) {
                $filenameWithExt = $slider_image1->getClientOriginalName();
                $path = $slider_image1->storeAs("cms/about_us_section",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_slider_image1 = DB::table('fl_cms_about_us')
	            ->where('id', 1)
	            ->update(['slider_image1' => $filenameWithExt]);  

           	 }
           	if ($request->hasFile('slider_image2') ) {
                $filenameWithExt = $slider_image2->getClientOriginalName();
                $path = $slider_image2->storeAs("cms/about_us_section",$filenameWithExt);

                $data_slider_image2 = DB::table('fl_cms_about_us')
	            ->where('id', 1)
	            ->update(['slider_image2' => $filenameWithExt]);  

           	 }

           	if ($request->hasFile('slider_image3') ) {
                $filenameWithExt = $slider_image3->getClientOriginalName();
                $path = $slider_image3->storeAs("cms/about_us_section",$filenameWithExt);

                $data_slider_image3 = DB::table('fl_cms_about_us')
	            ->where('id', 1)
	            ->update(['slider_image3' => $filenameWithExt]);  

           	 }           

			 $data = DB::table('fl_cms_about_us')
            ->where('id', 1)
            ->update(['slider_title1' => $slider_title1,
		             	'slider_text1' => $slider_text1,
		              	'slider_title2' => $slider_title2,
		               	'slider_text2' => $slider_text2,
		              	'slider_title3' => $slider_title3,		               	
		                'slider_text3' => $slider_text3 ] );

			 // var_dump($data);
			 return redirect()->back()->with("success", " content updated successfully");
			 } catch(\Illuminate\Database\QueryException $ex){ 
  				// dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}	    

		// how_it_works
	    public function news()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);	
	        $data = DB::table('fl_cms_news')->paginate(10);		
        	return view('cms.news')
            	->with('session',$session)
            	->with('data',$data)
	            ->with('admin',$User);            	
           	 	      
	    }

	    public function loans()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
			$data = DB::table('fl_loans')->paginate(10);
        	return view('cms.loans')
            	->with('session',$session)
	            ->with('admin',$User)            	
           	 	->with('data',$data);       
	    }


	    public function new_loan()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);			
        	return view('cms.add_loan')
            	->with('session',$session)
	            ->with('admin',$User);            	
           	 	      
	    }
	    public function business_model()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_business_model')->where('id', '1')->first();
	        return view('cms.business_model')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }	
	    
	    public function delete_loan()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);			
        	return view('cms.delete_loan')
            	->with('session',$session)
	            ->with('admin',$User);            	
           	 	      
	    }

	     public function delete_loanp(Request $request)
		{

			// echo "string";die();
			$id = $request->id;

			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// die();
			 try {

	       	$data =  DB::table('fl_loans')->where('id', '=', $id)->delete();

			 // var_dump($data);

			 // die();
			 return redirect('/admin/cms/loans')->with("success", "content deleted successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect('/admin/cms/loans')->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

	     public function new_loan_save(Request $request)
		{

			// echo "string";die();
			$id = $request->id;
			$description = $request->description;
			$title = $request->title;
			$type = $request->type;
			$image = $request->file('image');
			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// die();
			 try {



	       	$data =  DB::table('fl_loans')->insert(
			    ['title' => $title, 'description' => $description, 'type' => $type]
			);

	       	$lastInsertId=DB::getPdo()->lastInsertId();
			 // var_dump($lastInsertId);

			 			 if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms/img/loan_icons/",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_loans')
	            ->where('id', $lastInsertId)
	            ->update(['img' => "img/loan_icons/".$filenameWithExt ] );  

           	 }
			 // die();
			 return redirect('/admin/cms/loans')->with("success", "content created successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect('/admin/cms/loans')->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

	     public function loans_update(Request $request)
		{

			// echo "string";die();
			$id = $request->id;
			$description = $request->description;
			$title = $request->title;
			$type = $request->type;
			$image = $request->file('image');
			// echo '<pre>';
			// print_r($request->all());
			// echo '</pre>';
			// die();
			 try {

			 if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms/img/loan_icons/",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_loans')
	            ->where('id', $id)
	            ->update(['img' => "img/loan_icons/".$filenameWithExt ] );  

           	 }

			 $data = DB::table('fl_loans')
            ->where('id', $id)
            ->update(['title' => $title, 'description' => $description, 'type' => $type ] );

			 // var_dump($data);

			 return redirect()->back()->with("success", "content updated successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

	     public function business_model_update(Request $request)
		{

			// echo "string";die();
			$banner_pic = $request->banner_pic;
			$title = $request->title;
			$subtitle = $request->subtitle;
			$line_of_credit1 = $request->line_of_credit1;
			$line_of_credit2 = $request->line_of_credit2;
			$line_of_credit3 = $request->line_of_credit3;
			$text = $request->text;
			 try {
			 $data = DB::table('fl_cms_business_model')
            ->where('id', '1')
            ->update(['title' => $title, 'subtitle' => $subtitle, 'line_of_credit1' => $line_of_credit1, 'line_of_credit2' => $line_of_credit2, 'line_of_credit3' => $line_of_credit3, 'text' => $text ] );

			 // var_dump($data);

			 return redirect()->back()->with("success", "content updated successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

		public function get_started()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_get_started_now')->where('id', '1')->first();
	        return view('cms.get_started')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }

	     public function get_started_update(Request $request)
		{

			// echo "string";die();
			
			$title = $request->title;
			$subtitle = $request->subtitle;
			$text = $request->text;
			$image = $request->file('image');
			// echo $image;die();
			 try {

			 	if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_cms_get_started_now')
	            ->where('id', 1)
	            ->update(['image' => $filenameWithExt ] );  

           	 }

			 $data = DB::table('fl_cms_get_started_now')
            ->where('id', '1')
            ->update(['title' => $title, 'subtitle' => $subtitle, 'text' => $text ] );

			 // var_dump($data);

			 return redirect()->back()->with("success", "content updated successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

	    public function how_it_works()
	    {
	        $session = Auth::user('client');
	        $User = User::findOrFail($session->id);
	        // $data = Cms::where('name',"home_page")->first();('fl_cms_pages')->get()
	        $data = DB::table('fl_cms_how_it_works')->where('id', '1')->first();
	        return view('cms.how_it_works')
	            ->with('session',$session)
	            ->with('admin',$User)
	            ->with('data',$data);
	    }

	     public function how_it_works_update(Request $request)
		{

			// echo "string";die();
			$step_1_title = $request->step_1_title;
			$step_1_text = $request->step_1_text;
			$step_2_title = $request->step_2_title;
			$step_2_text = $request->step_2_text;
			$step_3_title = $request->step_3_title;
			$step_3_text = $request->step_3_text;
			$text = $request->text;
			$image = $request->file('image');
			// echo $image;die();
			 try {

			 	if ($request->hasFile('image') ) {
			 		// die();
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs("cms",$filenameWithExt);

               // $exists= Storage::disk('local')->exists($filenameWithExt);
               // echo $exists;die();

                $data_image = DB::table('fl_cms_how_it_works')
	            ->where('id', 1)
	            ->update(['image' => $filenameWithExt ] );  

           	 }

			 $data = DB::table('fl_cms_how_it_works')
            ->where('id', '1')
            ->update(['step_1_title' => $step_1_title, 'step_1_text' => $step_1_text, 'step_2_title' => $step_2_title, 'step_2_text' => $step_2_text, 'step_3_title' => $step_3_title, 'step_3_text' => $step_3_text ] );

			 // var_dump($data);

			 return redirect()->back()->with("success", "content updated successfully");

			 } catch(\Illuminate\Database\QueryException $ex){ 
  				dd($ex->getMessage()); 
  			return redirect()->back()->with("warning", "There was a problem updating  content. Please try again!");
  		// Note any method of class PDOException can be called on $ex.
			}
			// return view('cms.homepage')
			// 		->with('data',$request);
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			//
				return view('cms.create')
	            ->with('session',$session)
	            ->with('admin',$User);
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			//
		}

		/**
		 * Display the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */

		

		/* DOC REMOVE */
		public function doc_remove(Request $request)
		{
			$session = Auth::user('client');
			$file_id = $request->file_id;
			$FlClientsFiles = FlClientsFiles::findOrFail($file_id);
			try {
				Storage::delete("clients/$session->id/documents/$FlClientsFiles->file");
				$FlClientsFiles->delete();
				return redirect()->back()->with("success", "File was removed successfully");
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "File not removed. Please try again!");
			}
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
			try {
				$Client = Client::findOrFail($id);
				Storage::deleteDirectory("clients/$id");
//            Storage::delete("clients/$id/avatar/$Client->avatar");
				$Client->delete();
				return redirect()->back()->with("success", "Client account deleted successfully.");
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "There was a problem deleting client account. Please try again!");
			}
		}
	}
