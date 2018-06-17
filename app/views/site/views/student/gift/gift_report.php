<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gift_report extends CI_Controller {
	
	protected $thead;
	protected $thead2;
	protected $idfield;
	protected $searchrow;	
	function __construct(){
		parent::__construct();
		$this->lang->load('student', 'english');
		$this->load->model("student/ModGiftrpt","giftrpt");
		$this->load->library('pagination');	
		$this->thead=array("No"=>'no',
							 "Gift Name"=>'gifname',
							 "Total"=>'total',
							 "Unit"=>'Unit',						 	
							);
		$this->thead2=array("No"=>'no',
							 "Date"=>'date',
							 "Student name"=>'fullname',
							 "Donation Type"=>'donate_type',
							 "Class"=>'class_name',
							 "Year"=>'year'							 	
							);
		$this->idfield="studentid";
	}
	function index(){
		$data['tdata']=$this->giftrpt->getalltotal();
		$data['idfield']=$this->idfield;		
		$data['thead']=	$this->thead;
		$data['page_header']="Student List";			
		$this->parser->parse('header', $data);
		$this->parser->parse('student/gift/totalgift_report', $data);
		$this->parser->parse('footer', $data);
	}
	function listgifstd(){
		$data['tdata']=$this->giftrpt->getdonate();
		$data['idfield']=$this->idfield;		
		$data['thead']=	$this->thead2;
		$data['page_header']="Student List";			
		$this->parser->parse('header', $data);
		$this->parser->parse('student/gift/studentlistbygif', $data);
		$this->parser->parse('footer', $data);
	}
	function search(){
		$s_date=$this->green->formatSQLDate($this->input->post('s_date'));
		$e_date=$this->green->formatSQLDate($this->input->post('end_date'));
		$m=$this->input->post('m');
		$p=$this->input->post('p');
		$this->green->setActiveRole($this->input->post('roleid'));
		if($m!=''){
	        $this->green->setActiveModule($m);
	    }
	    if($p!=''){
	        $this->green->setActivePage($p); 
	    }
	    $i=1;
	    foreach ($this->giftrpt->search($s_date,$e_date) as $row) {
	    	
			echo "<tr>
				 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
					 <td class='date'>".$row->gifname."</td>
					 <td class='date'>".$row->total."</td>
					 <td class='date'>".$row->unit."</td>
			 	</tr>";
			 $i++;
	    }
	}
	function searchstd(){
		if(isset($_GET['s'])){
			$s_date=$this->green->formatSQLDate($_GET['s']);
			$e_date=$this->green->formatSQLDate($_GET['e']);
			$schlevelid=$_GET['l'];
			$classid=$_GET['c'];
			$yearid=$_GET['y'];
			$gifid=$_GET['gid'];
			$sort_num=$_GET['s_num'];
			$m=$_GET['m'];
			$p=$_GET['p'];
			$data['tdata']=$this->giftrpt->searchstd($s_date,$e_date,$schlevelid,$classid,$yearid,$gifid,$sort_num,$m,$p);
			$data['idfield']=$this->idfield;		
			$data['thead']=	$this->thead2;
			$data['page_header']="Student List";			
			$this->parser->parse('header', $data);
			$this->parser->parse('student/gift/studentlistbygif', $data);
			$this->parser->parse('footer', $data);
		}else{
			$s_date=$this->green->formatSQLDate($this->input->post('s_date'));
			$e_date=$this->green->formatSQLDate($this->input->post('e_date'));
			$schlevelid=$this->input->post('schlevelid');
			$classid=$this->input->post('classid');
			$yearid=$this->input->post('yearid');
			$gifid=$this->input->post('gifid');
			$sort_num=$this->input->post('sort_num');
			$m=$this->input->post('m');
			$p=$this->input->post('p');
			$this->green->setActiveRole($this->input->post('roleid'));
			if($m!=''){
		        $this->green->setActiveModule($m);
		    }
		    if($p!=''){
		        $this->green->setActivePage($p); 
		    }
		    $i=1;
		    foreach ($this->giftrpt->searchstd($s_date,$e_date,$schlevelid,$classid,$yearid,$gifid,$sort_num,$m,$p) as $row) {
		    	
				$tpe='';
				if($row->donate_type=='AG')
					$tpe="Annual Gift";
				else
					$tpe="Sponsor Order";
				
				echo "<tr>
					 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
						 <td class='date'>".date('d-m-Y',strtotime($row->date))."</td>
						 <td class='fullname'>".$row->fullname."</td>
						 <td class='donate_type'>".$tpe."</td>
						 <td class='class_name'>".$row->class_name."</td>
						 <td class='year'>".$row->sch_year."</td>
				 	</tr>";
				 $i++;
		    }
		    echo "<tr class='remove_tag'>
					<td colspan='12' id='pgt'>
						<div style='margin-top:20px; width:10%; float:left;'>
						Display : <select id='sort_num'  onchange='search(event);' style='padding:5px; margin-right:0px;'>";
										
										$num=50;
										for($i=0;$i<10;$i++){?>
											<option value="<?php echo $num ;?>" <?php if($num==$sort_num) echo 'selected';?> ><?php echo $num;?></option>
											<?php $num+=50;
										}
										
									echo "</select>
						</div>
						<div style='text-align:center; verticle-align:center; width:90%; float:right;'>
							<ul class='pagination' style='text-align:center'>
							 ".$this->pagination->create_links()."
							</ul>
						</div>

					</td>
				</tr> ";

		}
		
	}
}