<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	protected $thead;
	protected $idfield;
	protected $searchrow;	
	function __construct(){
		parent::__construct();

		//Setting language in session on first load
		if(!$this->session->userdata('site_lang')){ 
			// $this->load->library('session');
			$newdata = array(
				'site_lang'  => 'english'
			);
			$this->session->set_userdata($newdata);
		}
		//Loading language from session variable
		$this->language = $this->session->userdata['site_lang']; 
		$this->lang->load('site_page',$this->language);	

		$this->load->model("ModMenu","men");			
		$this->load->model("Modsite","sites");			
		$this->thead=array(
			"No"=>'no',
			"Menu Name"=>'name',
			"Menu Type"=>'type',
			"Layout"=>'layout',	
			"Visibled"=>'visibled',
			"Action"=>'Action'
		);
		$this->idfield="categoryid";
	}
	public function index(){
		$datas['site_lang'] = $this->language;
		// $this->load->view('site/header');
		
		// $this->load->view('site/home'); 
		// $this->load->view('site/footer');

		$this->load->view('site/green/header',$datas);
		//$this->load->view('site/header',$datas); //used before
		//$this->load->view('site/slider'); //used before
		if(isset($_GET['p'])){
			// $this->parser->parse('site/view_page', $data);
			$row=$this->db->query("SELECT * FROM tblmenus where menu_id='".$_GET['p']."'")->row();
			$datas['menurow']=$row;
			$r='';
			if ($row) {
				$r=$row->menu_type;
			}
			if($r=='article'){
				if($row->article_id==0 || $row->article_id==''){
					show_404();
				}else{
					$this->load->view('site/view_page', $datas);
				}
			}
			elseif ($r=='3') { //3 = event
				$data['eventrow']=$this->db->query("SELECT * FROM tblarticle WHERE location_id=3")->result();

				$this->load->view('site/view_event', $data);
				# code...
			}
			else{
				if ($_GET['p']=='vgal') {
					$datas['galrow'] = $this->db->query("SELECT * FROM tblarticle WHERE location_id=12")->result();
					$this->load->view('site/view_gallery',$datas);
				}else{
					$datas['menu_type']=$row->menu_type;
					$this->load->view('site/view_category', $datas);
				}
				
			}
		}else{
			$datas['videos'] = $this->sites->get_videos()->result();
			$datas['departments'] = $this->sites->get_banner(11, 'all')->result();
			$datas['directors'] = $this->sites->get_banner(12)->result();
			
			$datas['infb']=$this->sites->getinf();
			$datas['sld']=$this->sites->getsld();
			$datas['couse']=$this->sites->getcouse();
			$datas['teacher']=$this->sites->getteacher();
			$datas['service']=$this->sites->getservice();
			$datas['infor']=$this->sites->getinfor();
			$datas['getvdo']=$this->sites->getvdo()->result();
			$datas['getcustomer']=$this->sites->getcustomer()->result();
			// var_dump($this->db);die();getupproduct getupproject
			$datas['gal']=$this->sites->getgallery();
			
			$datas['home']=$this->sites->gethome();

    	  	$datas['news'] = $this->sites->getupevent();
    	  	$datas['getcategory']=$this->sites->getcategory();
      		$datas['newsmarquee'] = $this->sites->getupeventmarquee();
      		$datas['event_gallery'] = $this->sites->getevent();
      		$datas['event_customer'] = $this->sites->getupcustomer();
      		$datas['event_service'] = $this->sites->getupservice();
      		$datas['event_product'] = $this->sites->getupproduct();
      		$datas['event_project'] = $this->sites->getupproject();
      		$datas['event_getprofile'] = $this->sites->getprofile();
      		$datas['event_getuptemplate_home'] = $this->sites->getuptemplate_home();
      		$datas['rowgetoutproduct'] = $this->sites->getoutproduct();
      		$datas['rowgetproductdescription'] = $this->sites->getproductdescription();
      		$datas['loadbanner'] = $this->sites->loadbanner();
      		$datas['loadblog2'] = $this->sites->loadblog2();
		}
		$this->load->view('site/green/index',$datas);
		//$this->load->view('site/home',$datas); //used before

		$this->load->view('site/green/footer'); 
		//$this->load->view('site/footer'); //used before
	}


	function service(){
		$data['serviceblog'] = $this->sites->serviceblog();
		$this->load->view('site/green/header');
		$this->load->view('site/green/service/service',$data);
		$this->load->view('site/green/footer');
	}
	function mechanical(){
		// $data['withoutimage'] = $this->sites->withoutimage();
		$data['loadmechanical'] = $this->sites->loadmechanical();
		$this->load->view('site/green/header');
		$this->load->view('site/green/service/mechanicalservice',$data);
		$this->load->view('site/green/footer');
	}
	function electrical(){ 
		$this->load->view('site/green/header');
		$data['loadelectrical'] = $this->sites->loadelectrical();
		$this->load->view('site/green/service/electricalservice',$data);
		$this->load->view('site/green/footer');
	}
	function plumbing(){
		$this->load->view('site/green/header');
		$data['loadplumbing'] = $this->sites->loadplumbing();
		$this->load->view('site/green/service/plumbingservice',$data);
		$this->load->view('site/green/footer');
	}
	function building(){
		$this->load->view('site/green/header');
		$data['loadbuilding'] = $this->sites->loadbuilding();
		$this->load->view('site/green/service/building', $data);
		$this->load->view('site/green/footer');
	}
	function specialty(){
		$this->load->view('site/green/header');
		$data['loadspecialty'] =$this->sites->loadspecialty();
		$this->load->view('site/green/service/specialty',$data);
		$this->load->view('site/green/footer');
	}
	function buildinginformation(){
		$this->load->view('site/green/header');
		$data['loadbuildinginformation'] =$this->sites->loadbuildinginformation();
		$this->load->view('site/green/service/buildinginformation',$data);
		$this->load->view('site/green/footer');
	}

	function allitem($id=''){
		$data['loaditem'] = $this->sites->loaditem();
		$this->load->view('site/green/header');
		$this->load->view('site/green/items',$data);
		$this->load->view('site/green/footer');
	}
	function more_detail($article_id=''){
		// $query = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1";
		$data['content']=$this->sites->load_detail($article_id)->result();
		$data['header']=$this->sites->load_detail($article_id)->row();
		$this->load->view('site/green/header');
		$this->load->view('site/green/detail',$data);
		$this->load->view('site/green/footer');
	}

	function projects($menu_id=''){
		$this->load->view('site/green/header');
		$data['projectmenu'] = $this->sites->getmenuproject();
		$data['listmenu'] = $this->sites->getitemmenu($menu_id);
		$data['menu_id'] = $menu_id;
		$this->load->view('site/green/menu_project/projects',$data);
		$this->load->view('site/green/footer');

	}

	function articlespecify($article_id=''){
		//print_r($article_id);
		$data['loadarticle'] = $this->sites->loadarticle($article_id);
		$this->load->view('site/green/header');
		$this->load->view('site/green/menu_project/articledetail',$data);
		$this->load->view('site/green/footer');
	}



	function getcategory($id=''){
		$lid=$id;
		$datas['category'] = $this->sites->getcategory_id($lid);
		$this->load->view('site/header');
		$this->load->view('site/view_customer',$datas);
		$this->load->view('site/footer');
	}
	function allcustomer($id='') {
		$this->load->library('pagination');

		$config['base_url'] = site_url('site/allcustomer/'.$id);
        $config['total_rows'] = $this->db->where('location_id', 10)->where('is_active', 1)->get('tblarticle')->num_rows();
        $config['per_page'] = 12;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


        $datas['pagination'] = $this->pagination->create_links();
		$datas['event_customer'] = $this->sites->getupcustomerall($config['per_page'], $page);
		$this->load->view('site/header');
		$this->load->view('site/view_customer',$datas);
		$this->load->view('site/footer');
	}
	function allservice($id='') {
		$this->load->library('pagination');

		$config['base_url'] = site_url('site/allservice'.$id);
        $config['total_rows'] = $this->db->where('location_id', 9)->where('is_active', 1)->get('tblarticle')->num_rows();
        $config['per_page'] = 12;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


        $datas['pagination'] = $this->pagination->create_links();
		$datas['event_service'] = $this->sites->getupserviceall($config['per_page'], $page);
		$this->load->view('site/header');
		$this->load->view('site/view_service',$datas);
		$this->load->view('site/footer');
	}
	function allproduct($id='') {
		$this->load->library('pagination');

		$config['base_url'] = site_url('site/allproduct'.$id);
        $config['total_rows'] = $this->db->where('location_id', 6)->where('is_active', 1)->get('tblarticle')->num_rows();
        $config['per_page'] = 12;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


        $datas['pagination'] = $this->pagination->create_links();
		$datas['event_product'] = $this->sites->getupproductall($config['per_page'], $page);
		$this->load->view('site/header');
		$this->load->view('site/view_product',$datas);
		$this->load->view('site/footer');
	}
	function aboutus() {
		$datas['row'] = $this->sites->getupaboutus();
		$this->load->view('site/header');
		$this->load->view('site/aboutus',$datas);
		$this->load->view('site/footer');
	}

	function about() 
	{
		$this->load->view('site/green/header');
		$this->load->view('site/green/aboutus/aboutus');
		$this->load->view('site/green/footer');
	}
	function book_detail() {
		// $datas['row'] = $this->sites->getupaboutus();
		$datas['site_lang'] = $this->language;
		$this->load->view('site/header',$datas);
		$this->load->view('site/book_detail',$datas);
		$this->load->view('site/footer');
	}
	function contact_us() {
		$this->load->view('site/green/header');
		$this->load->view('site/green/contact/contactus');
		$this->load->view('site/green/contact/footer');
	}
	// function contactus() {
	// 	$this->load->view('site/header');
	// 	$this->load->view('site/contactus');
	// 	$this->load->view('site/footer');
	// }
	function requestquote() {
		$this->load->view('site/header');
		$this->load->view('site/requestquote');
		$this->load->view('site/footer');
	}
	function templates($id='') {
		$datas['site_lang'] = $this->language;
		$this->load->library('pagination');

		$config['base_url'] = site_url('site/templates/'.$id);
        $config['total_rows'] = $this->db->where('location_id', 11)->where('is_active', 1)->get('tblarticle')->num_rows();
        $config['per_page'] = 12;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev" >';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


        $datas['pagination'] = $this->pagination->create_links();
		$datas['templates'] = $this->sites->getuptemplate($config['per_page'], $page);
		$this->load->view('site/header',$datas);
		$this->load->view('site/templates',$datas);
		$this->load->view('site/footer');
	}
	function viewgallary($id='') {
		$datas['site_lang'] = $this->language;
		$this->load->library('pagination');

		$config['base_url'] = site_url('site/templates/'.$id);
        $config['total_rows'] = $this->db->where('location_id', 11)->where('is_active', 1)->get('tblarticle')->num_rows();
        $config['per_page'] = 4;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


        $datas['pagination'] = $this->pagination->create_links();
		$datas['templates'] = $this->sites->getuptemplate($config['per_page'], $page);
		$this->load->view('site/header',$datas);
		$this->load->view('site/viewgallary',$datas);
		$this->load->view('site/footer');
	}
	function detail($article_id=''){
		// $datas['row']=$this->db->query("SELECT * FROM tblproduct WHERE product_id='$product_id'")->row();	customer_detail
		// $datas['result'] = $this->sites->getupproductdetail($article_id)->result();
		$sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1";
		$datas['result']=$this->db->query($sql)->result();
		$datas['row']=$this->db->query($sql)->row();
		$this->load->view('site/header');
		$this->load->view('site/product_detail', $datas);
		$this->load->view('site/footer');
	}
	function templatedetail($article_id=''){
		$datas['site_lang'] = $this->language;
		// $datas['row']=$this->db->query("SELECT * FROM tblproduct WHERE product_id='$product_id'")->row();	customer_detail
		// $datas['result'] = $this->sites->getupproductdetail($article_id)->result();
		$sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1";
		$datas['result']=$this->db->query($sql)->result();
		$datas['row']=$this->db->query($sql)->row();
		$this->load->view('site/header',$datas);
		$this->load->view('site/administrationdetail', $datas);
		$this->load->view('site/footer');
	}
	function gallarydetail($article_id=''){
		$datas['site_lang'] = $this->language;
		// $datas['row']=$this->db->query("SELECT * FROM tblproduct WHERE product_id='$product_id'")->row();	customer_detail
		// $datas['result'] = $this->sites->getupproductdetail($article_id)->result();
		$sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1";
		$datas['result']=$this->db->query($sql)->result();
		$datas['row']=$this->db->query($sql)->row();
		$this->load->view('site/header',$datas);
		$this->load->view('site/viewgallary', $datas);
		$this->load->view('site/footer');
	}
	function customerdetail($article_id=''){
		// $datas['row']=$this->db->query("SELECT * FROM tblproduct WHERE product_id='$product_id'")->row();	
		// $datas['result'] = $this->sites->getupproductdetail($article_id)->result();
		$sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1";
		$datas['result']=$this->db->query($sql)->result();
		$datas['row']=$this->db->query($sql)->row();
		$this->load->view('site/header');
		$this->load->view('site/customer_detail', $datas);
		$this->load->view('site/footer');
	}
	 function sendMail() {
		$name = $this->input->post('txt_name');
		$email = $this->input->post('txt_email');
		$Product=$this->input->post('((sproduct))');
		$message = $this->input->post('txt_message'); 
		// print_r($this->input->post());die();

		$ci = get_instance();
		$ci->load->library('email');
		// $config['useragent'] = "CodeIgniter";
		// $config['protocol']  = "smtp";
		// $config['smtp_host'] = "ssl://mail.jinbei-casino.com"; //get from config email in cpanel
		// $config['smtp_port'] = "465";	//get from config email in cpanel
		// $config['smtp_user'] = "webmail@jinbei-casino.com"; //get from config email in cpanel
		// $config['smtp_pass'] = "Sys@min@168";	//get from config email in cpanel
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$ci->email->initialize($config);
		$ci->email->from($email, $name);
		$list = 'info@atmcambo.com';
		$ci->email->to($list);

		$ci->email->subject('REQUESTQUOTE');
		$ci->email->message($message);
		// $ci->email->message("EKALOMAN<br><a href='""\$ma.site_url('assets/upload/attachment/'.$data_upload['file_name'])."' target='_blank'>View Attachment</a>");
		
	    if($this->email->send()) {
	    	$this->session->set_flashdata('mail_sent', 'Your email has been sent to our HR. Thank you...!<br>Please wait for further information contact to you later.');
	    	// redirect($_SERVER['HTTP_REFERER']);
	    	// echo 'Email sent.';
	     	// show_error($this->email->print_debugger());
	    } else {
	    	$this->session->set_flashdata('mail_sent', 'There is something wrong in your form. Please check again.');
	    	//$this->session->set_flashdata('mail_sent', show_error($this->email->print_debugger()));
	    	// redirect($_SERVER['HTTP_REFERER']);
	    	// show_error($this->email->print_debugger());
	    }
	    redirect($_SERVER['HTTP_REFERER']);
	  }
	  function send()
	  {
	  	//$datas['site_lang'] = $this->language;
	  	//$this->lang->load('email_lang');
	  	$this->load->library('session');

	  	$name=$this->input->post('name');
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');


		// echo "form correct";
		$config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'smtp.mailtrap.io',//this im using mailtrap server for send mailing
		  'smtp_port' => 2525,//port of mailtrap
		  'smtp_user' => 'a458e08858ba00',//account mailtrap
		  'smtp_pass' => 'f0fb41ec16fb15',//password mailtrap
		  'crlf' => "\r\n",
		  'newline' => "\r\n"
		);

		$ci = get_instance();
		$ci->load->library('email');
		
   
       
        $ci->email->initialize($config);
        $ci->email->from('a458e08858ba00');//acount mailtrap
		$ci->email->to($email,$name);
		$ci->email->subject($subject);
		$ci->email->message($message);
		// echo "form correct";
		// $ci->email->send();
	    if($this->email->send())
	     {
	     
	     	$this->load->index();
	   		// redirect(base_url() . "site/index");
	   		// $this->session->set_flashdata('mail_sent', 'Your email has been sent. Thank you...!')
	   		// redirect('site/index');
	     	
	      
	     }
	     else
	    {
	     show_error($this->email->print_debugger());
	    }

	  }
}
