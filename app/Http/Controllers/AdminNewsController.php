<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use Storage;
	use CRUDBooster;
	use Illuminate\Support\Str;
	use App\Models\News;
	use App\Models\Brand;

	class AdminNewsController extends \crocodicstudio\crudbooster\controllers\CBController {

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
			$this->table = "news";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Brand Id","name"=>"brand_id","join"=>"brands,title"];
			$this->col[] = ["label"=>"User Id","name"=>"user_id","join"=>"cms_users,name"];
			$this->col[] = ["label"=>"Title","name"=>"title"];
			$this->col[] = ["label"=>"Slug","name"=>"slug"];
			$this->col[] = ["label"=>"Thumbnail","name"=>"thumbnail","image"=>true];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Brand','name'=>'brand_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'brands,title'];
			$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Slug','name'=>'slug','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Thumbnail','name'=>'thumbnail','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Meta Title','name'=>'meta_title','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','help'=>'File types support : JPG, JPEG, PNG, GIF, BMP'];
			$this->form[] = ['label'=>'Meta Description','name'=>'meta_description','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Meta Keywords','name'=>'meta_keywords','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Body','name'=>'body','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'View Count','name'=>'view_count','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Brand Id","name"=>"brand_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"brand,id"];
			//$this->form[] = ["label"=>"User Id","name"=>"user_id","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"user,id"];
			//$this->form[] = ["label"=>"Title","name"=>"title","type"=>"text","required"=>TRUE,"validation"=>"required|string|min:3|max:70","placeholder"=>"You can only enter the letter only"];
			//$this->form[] = ["label"=>"Slug","name"=>"slug","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Thumbnail","name"=>"thumbnail","type"=>"upload","required"=>TRUE,"validation"=>"required|image|max:3000","help"=>"File types support : JPG, JPEG, PNG, GIF, BMP"];
			//$this->form[] = ["label"=>"Meta Title","name"=>"meta_title","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Meta Description","name"=>"meta_description","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Meta Keywords","name"=>"meta_keywords","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Body","name"=>"body","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"View Count","name"=>"view_count","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
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
	        $this->addaction = array();


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
			$page_title="Create news";
			return view('admin.news.create',compact('page_title'));
		}
		public function getEdit($id){
			$page_title="Edit news";
			$news=News::findOrFail($id);
			return view('admin.news.edit',compact('page_title','news'));
		}
		public function postSave(){
			$request=request();
			// dd($request);
			$tags=[];
			if($request->meta_keywords){
				// $tags=explode(",",$request->meta_keywords);
				$tags=$request->meta_keywords;
			}
			$brand=Brand::findOrFail($request->brand_id);
			$img=$request->file('thumbnail');
			$thumbnail_path=null;
			if($img){
				$ext=$img->extension();
				$thumbnail= $img->storeAs("public","news_images/".$brand->id."/".$request->slug."-".Str::random(5).".".$ext);
				$thumbnail_path=str_replace("public/","storage/",$thumbnail);
			}
			News::create([
				'user_id' => CRUDBooster::myId(),
				"title"=>$request->title,
				"brand_id"=>$request->brand_id,
				"slug"=>$request->slug,
				"thumbnail"=>$thumbnail_path,
				"meta_title"=>$request->meta_title,
				"meta_description"=>$request->meta_description,
				"meta_keywords"=>json_encode($tags),
				"video_url"=>$request->video_url,
				"body"=>$request->body,
			]);
			return redirect(CRUDBooster::mainpath("/"));
		}
		public function postUpdate(){
			$request=request();
			// dd($request);
			$tags=[];
			if($request->meta_keywords){
				// $tags=explode(",",$request->meta_keywords);
				$tags=$request->meta_keywords;
			}
			$brand=Brand::findOrFail($request->brand_id);
			$news=News::findOrFail($request->id);
			// dd($request->meta_keywords);
			$img=$request->file('thumbnail');
			$thumbnail_path=$news->thumbnail;
			if($img){
				$ext=$img->extension();
				$thumbnail= $img->storeAs("public","news_images/".$brand->id."/".$request->slug."-".Str::random(5).".".$ext);
				$thumbnail_path=str_replace("public/","storage/",$thumbnail);
			}
			$news->update([
				"title"=>$request->title,
				"brand_id"=>$request->brand_id,
				"slug"=>$request->slug,
				"thumbnail"=>$thumbnail_path,
				"meta_title"=>$request->meta_title,
				"meta_description"=>$request->meta_description,
				"meta_keywords"=>json_encode($tags),
				"video_url"=>$request->video_url,
				"body"=>$request->body,
			]);
			return redirect(CRUDBooster::mainpath("/"));
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
				$brand=Brand::findOrFail($id);
				$file_path = "public/news_images/".$brand->id;
	
				//Create Directory Monthly
				Storage::makeDirectory($file_path);
	
				if ($encrypt == true) {
					$filename = md5(str_random(5)).'.'.$ext;
				} else {
					$filename = request()->slug."-".Str::random(5).'.'.$ext;
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