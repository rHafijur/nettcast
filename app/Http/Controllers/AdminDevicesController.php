<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;
	use Storage;

	use App\Models\Brand;
	use App\Models\Category;
	use App\Models\Device;
	use App\Models\DeviceImage;
	use Illuminate\Support\Str;

	class AdminDevicesController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "title";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "devices";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Title","name"=>"title"];
			$this->col[] = ["label"=>"Slug","name"=>"slug"];
			$this->col[] = ["label"=>"Image","name"=>"image","image"=>true];
			$this->col[] = ["label"=>"Price","name"=>"price"];
			// $this->col[] = ["label"=>"Status","name"=>"is_active"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'User Id','name'=>'user_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'user,id'];
			$this->form[] = ['label'=>'Category Id','name'=>'category_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'category,id'];
			$this->form[] = ['label'=>'Brand Id','name'=>'brand_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'brand,id'];
			$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Slug','name'=>'slug','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Image','name'=>'image','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10','help'=>'File types support : JPG, JPEG, PNG, GIF, BMP'];
			$this->form[] = ['label'=>'Price','name'=>'price','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Meta Title','name'=>'meta_title','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Meta Description','name'=>'meta_description','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Meta Keywords','name'=>'meta_keywords','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Specifications','name'=>'specifications','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cover Specifications 1','name'=>'cover_specifications_1','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cover Specifications 2','name'=>'cover_specifications_2','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'View Count','name'=>'view_count','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Affilate Links','name'=>'affilate_links','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"User Id","name"=>"user_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"user,id"];
			//$this->form[] = ["label"=>"Category Id","name"=>"category_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"category,id"];
			//$this->form[] = ["label"=>"Brand Id","name"=>"brand_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"brand,id"];
			//$this->form[] = ["label"=>"Title","name"=>"title","type"=>"text","required"=>TRUE,"validation"=>"required|string|min:3|max:70","placeholder"=>"You can only enter the letter only"];
			//$this->form[] = ["label"=>"Slug","name"=>"slug","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Image","name"=>"image","type"=>"upload","required"=>TRUE,"validation"=>"required|image|max:3000","help"=>"File types support : JPG, JPEG, PNG, GIF, BMP"];
			//$this->form[] = ["label"=>"Price","name"=>"price","type"=>"money","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Meta Title","name"=>"meta_title","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Meta Description","name"=>"meta_description","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Meta Keywords","name"=>"meta_keywords","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Specifications","name"=>"specifications","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Cover Specifications 1","name"=>"cover_specifications_1","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Cover Specifications 2","name"=>"cover_specifications_2","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"View Count","name"=>"view_count","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Affilate Links","name"=>"affilate_links","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array([
				'label'=>'Images',
				'url' =>CRUDBooster::mainpath("upload-photo/[id]"),
				'icon'=>'fa fa-image',
				'color'=>'primary',

			],
			[
				'label'=>'Review',
				'url' =>CRUDBooster::mainpath("review/[id]"),
				'icon'=>'fa fa-comments',
				'color'=>'success',

			],
			[
				'label'=>'Deactivate',
				'url' =>CRUDBooster::mainpath("deactivate/[id]"),
				'icon'=>'fa fa-skull-crossbones',
				'color'=>'danger',
				"showIf"=>"[is_active] == 1"
			],
			[
				'label'=>'Activate',
				'url' =>CRUDBooster::mainpath("activate/[id]"),
				'icon'=>'fa fa-check',
				'color'=>'succecss',
				"showIf"=>"[is_active]==0"
			]
		);


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }

		public function getAdd(){
			$page_title="Add new device";
			$brands=Brand::orderBy('title','asc')->get();
			$categories=Category::orderBy('title','asc')->get();
			return view("admin.device.create",compact('page_title','categories','brands'));
		}
		public function getEdit($id){
			$page_title="Edit device";
			$device=Device::findOrFail($id);
			$brands=Brand::orderBy('title','asc')->get();
			$categories=Category::orderBy('title','asc')->get();
			return view("admin.device.edit",compact('page_title','categories','brands','device'));
		}
		public function postAdd(){
			$request=request();
			// dd($request);
			if($request->meta_keywords){
				$mk=json_encode(explode(',',$request->meta_keywords));
			}else{
				$mk=null;
			}
			$category=Category::findOrFail($request->category_id);
			$category->brands()->syncWithoutDetaching([$request->brand_id]);
			$id=Device::create([
				'user_id' => CRUDBooster::myId(),
				'title' => $request->title,
				'slug' => $request->slug,
				'brand_id' => $request->brand_id,
				'category_id' => $request->category_id,
				'specifications' => $request->specifications,
				'cover_specifications_1' => $request->cover_specifications_1,
				'cover_specifications_2' => $request->cover_specifications_2,
				'meta_title' => $request->meta_title,
				'meta_description' => $request->meta_description,
				'price' => $request->price,
				'meta_keywords' =>$mk,
			])->id;
			return redirect(CRUDBooster::mainpath("upload-photo/".$id));
		}
		public function postEdit(){
			$request=request();
			// dd($request);
			if($request->meta_keywords){
				$mk=json_encode(explode(',',$request->meta_keywords));
			}else{
				$mk=null;
			}
			$id=Device::findOrFail($request->id)->update([
				// 'user_id' => CRUDBooster::myId(),
				'title' => $request->title,
				'slug' => $request->slug,
				'brand_id' => $request->brand_id,
				'category_id' => $request->category_id,
				'specifications' => $request->specifications,
				'cover_specifications_1' => $request->cover_specifications_1,
				'cover_specifications_2' => $request->cover_specifications_2,
				'meta_title' => $request->meta_title,
				'meta_description' => $request->meta_description,
				'price' => $request->price,
				'meta_keywords' => $mk,
			])->id;
			return redirect(CRUDBooster::mainpath("edit/".$request->id));
		}

		public function getUploadPhoto($id){
			// dd($id);
			$page_title="Upload Image";
			$device=Device::findOrFail($id);
			return view('admin.device.upload_image',compact('device','page_title'));
		}
		public function postUploadImage(){
			// dd(request());
			$request=request();
			// $request->validate([
			// 	'main_image' => 'required',
			//   ]);
			$device=Device::findOrFail($request->id);
			// dd();
			if($request->file('main_image')){
				$ext=$request->file('main_image')->extension();
				$path= $request->file('main_image')->storeAs("public","device_images/".$device->id."/".$device->slug."-".Str::random(4).".".$ext);
			}
			// dd($path);
			$device->image=str_replace("public/","storage/",$path);
			$device->save();
			if($request->file('images')){
				foreach($request->file('images') as $img){
					$ext=$img->extension();
					$path= $img->storeAs("public","device_images/".$device->id."/".$device->slug."-".Str::random(5).".".$ext);
					$device->deviceImages()->create([
						'path'=>str_replace("public/","storage/",$path)
					]);
				}
			}
			return redirect()->back();
		}
		public function getDeleteMainImage($id){
			$device=Device::findOrFail($id);
			Storage::delete(str_replace("storage","public",$device->image));
			$device->image=null;
			$device->save();
			return redirect()->back();
		}
		public function getDeleteDeviceImage($id){
			$deviceImage=DeviceImage::findOrFail($id);
			Storage::delete(str_replace("storage","public",$deviceImage->path));
			$deviceImage->delete();
			return redirect()->back();
		}
		public function getReview($id){
			$device=Device::findOrFail($id);
			$page_title="Device Review - ".$device->title;
			return view('admin.device.review',compact('device','page_title'));
		}


		private function uploadFile($name, $encrypt = false, $resize_width = null, $resize_height = null, $id = null)
		{
			if (Request::hasFile($name)) {
				$file = Request::file($name);
				$ext = $file->getClientOriginalExtension();
				$filename = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
				if(method_exists($file, 'getClientSize')) {
					$filesize = $file->getClientSize() / 1024;
				} else {
					$filesize = $file->getSize() / 1024;
				}
				$device=Device::findOrFail($id);
				$file_path = "public/device_images/".$device->id;
	
				//Create Directory Monthly
				Storage::makeDirectory($file_path);
	
				if ($encrypt == true) {
					$filename = md5(str_random(5)).'.'.$ext;
				} else {
					$filename = $device->slug."-".Str::random(5).'.'.$ext;
				}
	
				if (Storage::putFileAs($file_path, $file, $filename)) {
					// self::resizeImage($file_path.'/'.$filename, $resize_width, $resize_height);
	
					return str_replace("public/","storage/",$file_path.'/'.$filename);
				} else {
					return null;
				}
			} else {
				return null;
			}
		}

		public function postCustomUploadSummernote()
		{
			$this->cbLoader();
			$name = 'userfile';
			$id=request()->id;
			if ($file = $this->uploadFile($name,false,null,null,$id)) {
				echo asset($file);
			}
		}
		public function postSaveReview(){
			$request = request();
			// dd($request);
			$device=Device::findOrFail($request->id);
			$img=$request->file('thumbnail');
			$review=$device->review;
			$thumbnail_path=null;
			if($review->thumbnail){
				$thumbnail_path=$review->thumbnail;
			}
			if($img){
				$ext=$img->extension();
				$thumbnail= $img->storeAs("public","device_images/".$device->id."/".$device->slug."-".Str::random(5).".".$ext);
				$thumbnail_path=str_replace("public/","storage/",$thumbnail);
			}
			
			$audio=$request->file('audio');
			$audio_path=null;
			if($review->audio_path){
				$audio_path=$review->audio_path;
			}
			if($audio){
				$ext=$audio->extension();
				$audio_path= $audio->storeAs("public","device_audios/".$device->id."/".$device->slug."-".Str::random(5).".".$ext);
				$audio_path=str_replace("public/","storage/",$audio_path);
			}
			$tags=[];
			if($request->meta_keywords){
				$tags=explode(",",$request->meta_keywords);
			}
			$bodySections=[];
			foreach($request->body as $key=> $section){
				if($section!="<p><br></p>"){
					$bodySections[$key]=$section;
				}
			}
			if($review){
				$review->update([
					"title"=>$request->title,
					"slug"=>$request->slug,
					"thumbnail"=>$thumbnail_path,
					"audio_path"=>$audio_path,
					"meta_title"=>$request->meta_title,
					"meta_description"=>$request->meta_description,
					"meta_keywords"=>json_encode($tags),
					"video_url"=>$request->video_url,
					"body"=>json_encode($bodySections),
				]);
			}else{

				$device->review()->create([
					"title"=>$request->title,
					"slug"=>$request->slug,
					"thumbnail"=>$thumbnail_path,
					"audio_path"=>$audio_path,
					"meta_title"=>$request->meta_title,
					"meta_description"=>$request->meta_description,
					"meta_keywords"=>json_encode($tags),
					"video_url"=>$request->video_url,
					"body"=>json_encode($bodySections),
				]);
			}
			return redirect()->back();
		}

		public function getActivate($id){
			$device=Device::findOrFail($id);
			$device->is_active=1;
			$device->save(); 
			return redirect()->back();
		}
		public function getDeactivate($id){
			$device=Device::findOrFail($id);
			$device->is_active=0;
			$device->save(); 
			return redirect()->back();
		}
	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	            
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :) 


	}