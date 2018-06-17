<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Distribute extends CI_Controller {
	
	protected $thead;
	protected $idfield;
	protected $searchrow;	
	function __construct(){
		parent::__construct();
		//$this->lang->load('dis', 'english');
		$this->load->model("social/moddistribute","distr");	
		$this->load->model("setting/usermodel","user");	
		$this->load->library('pagination');	
		$this->thead=array("No"=>'no',
							"FamilyID"=>'family_code',
							"Distribute Date"=>'dis_date',
							 "Father Name"=>'father_name',
							 "Mother Name"=>'mother_name',						 
							 "Rice (kg)"=>'amt_rice',
							 "Oil (L)"=>'oil',							 
							 "Remark"=>'remark',							
							 
							 'Action'=>'action'
							);
		$this->idfield="displanid";
		
	}
	function getfamilyplan(){
		$dis_type=$this->input->post('dis_type');
		$year=date('Y');
		// $date=$this->input->post('date');
		// $adr=$this->input->post('adr');
		// $save=$this->input->post('save');
		$i=1;

		foreach ($this->distr->getfamilyplan($dis_type,$year) as $row) {

			echo "<tr>
					<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
					<td><input type='text' id='txtfamilyid' class='hide' name='txtfamilyid[]' value='".$row->familyid."'/>".$row->family_code."</td>
					<td>".$row->father_name."</td>
					<td>".$row->mother_name."</td>
					<td class='transdate alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_rice[]' value='".$row->amt_rice."' class='form-control input-sm p_rice'/></td>
					<td class='qty alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_oil[]' value='".$row->oil."' class='form-control input-sm p_oil'/></td>
					<td class='uom'>".$row->remark."</td>
					<td></td>
					<td>
						<a>
					 		<img  f_id='".$row->familyid."' onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
					 	</a>
					</td>

				</tr>";
				$i++;
		}
	}
	function index()
	{	
		$data['tdata']=$this->distr->getdistribute();
		$data['idfield']=$this->idfield;		
		$data['thead']=	$this->thead;
		$data['page_header']="Distribute Proposal";			
		$this->parser->parse('header', $data);
		$this->parser->parse('social/distribute/distibute_list', $data);
		$this->parser->parse('footer', $data);
	}
	function preview($dis_id){
		$data['dis_bl']=$this->distr->getdisdetail($dis_id);
		$this->parser->parse('header', $data);
		$this->parser->parse('social/distribute/preview_distribute', $data);
		$this->parser->parse('footer', $data);
	}
	function savenewplan(){
		$familyid=$this->input->post('familyid');
		$amt_rice=$this->input->post('amt_rice');
		$amt_oil=$this->input->post('amt_oil');
		$dis_type=$this->input->post('dis_type');
		$remark=$this->input->post('remark');
		$year=date('Y');
		$c_date=date('Y-m-d h:i:s');
		$user=$this->session->userdata('user_name');
		$dis_id=$this->input->post('dis_id');
		$data=array('familyid'=>$familyid,
					'amt_rice'=>$amt_rice,
					'rice_uom'=>'Kg',
					'oil'=>$amt_oil,
					'oil_uom'=>'L',
					'distrib_type'=>$dis_type,
					'remark'=>$remark,
					'year'=>$year,
					'is_newadd'=>'1',
					'created_by'=>$user,
					'created_date'=>$c_date);
		$count=$this->distr->getfamilyvalidate($familyid,$year);
		if($count>0){
			echo 'false';
		}
		else{
			$this->db->insert('sch_family_distribute_plan',$data);
			echo 'true';
		}
			
		if($dis_id>0){
			$this->savedisdetail($familyid,$amt_rice,$amt_oil,$dis_id,1);
		}
	}
	function edit($dis_id){
		$data['distrib']=$this->distr->getdistrrow($dis_id);
		$data['idfield']=$this->idfield;		
		$data['thead']=	$this->thead;
		$data['page_header']="Distribute Proposal";			
		$this->parser->parse('header', $data);
		$this->parser->parse('social/distribute/distribute_form',$data);
		$this->parser->parse('footer', $data);
	}
	function add(){
		$data['idfield']=$this->idfield;		
		$data['thead']=	$this->thead;
		$data['page_header']="Distribute Proposal";			
		$this->parser->parse('header', $data);
		$this->parser->parse('social/distribute/distribute_form',$data);
		$this->parser->parse('footer', $data);
	}
	function save($save_detail=0){
		$dis_type=$this->input->post('dis_type');
		$date=$this->green->formatSQLDate($this->input->post('date'));
		$adr=$this->input->post('adr');
		$c_date=date('Y-m-d h:i:s');
		$year=date('Y');
		$user=$this->session->userdata('user_name');
		$f_total=$this->input->post('f_total');
		$r_total=$this->input->post('f_rice');
		$o_total=$this->input->post('f_oil');
		$count=$this->db->where('year',$year)
					->where('distrib_type',$dis_type)
					->from('sch_family_distributed')->count_all_results();
		if($count>$dis_type){
			echo 'false';
		}else{
			$tranno=$this->db->select('sequence')
							->from('sch_z_systype')
							->where('typeid',6)
							->get()->row()->sequence;
			$data=array('dis_date'=>$date,
						'dis_adr'=>$adr,
						'tota_rice'=>$r_total,
						'total_oil'=>$o_total,
						'total_family'=>$f_total,
						'type'=>6,
						'transno'=>$tranno,
						'year'=>$year,
						'distrib_type'=>$dis_type,
						'created_by'=>$user,
						'created_date'=>$c_date);
			$this->db->insert('sch_family_distributed',$data);
			$dis_id=$this->db->insert_id();
			echo $dis_id;
			if($save_detail==0){
				foreach ($this->distr->getfamilyplan($dis_type,$year) as $row) {
					$data=array('distribut_id'=>$dis_id,
								'familyid'=>$row->familyid,
								'dis_date'=>$date,
								'type'=>6,
								'transno'=>$tranno,
								'amt_rice'=>$row->amt_rice,
								'rice_uom'=>$row->rice_uom,
								'oil'=>$row->oil,
								'oil_uom'=>$row->oil_uom,
								'remark'=>$row->remark,
								'year'=>$row->year,
								'created_by'=>$user,
								'created_date'=>$c_date);
					$this->db->insert('sch_family_distributed_detail',$data);
				}
			}
		$this->distr->updatetran($tranno+1,6);
		}
			
	}
	function fillfamily(){
		$key=$_GET['term'];
		$this->db->select('*')
				->from('sch_family')
				->like('family_name',$key)
				->or_like('family_code',$key);			
		$data=$this->db->get()->result();
		$array=array();
		foreach ($data as $row) {
			$array[]=array('value'=>$row->family_name.' | '.$row->family_code,
							'id'=>$row->familyid,
							'family_code'=>$row->family_code,
							'father_name'=>$row->father_name,
							'mother_name'=>$row->mother_name);
		}
	     echo json_encode($array);
	}
	function saveall(){
		$familyid=$this->input->post('txtfamilyid');
		$rice=$this->input->post('p_rice');
		$oil=$this->input->post('p_oil');
		$dis_id=$this->input->post('distribut_id');
		for($i=0;$i<count($familyid);$i++){
			$this->savedisdetail($familyid[$i],$rice[$i],$oil[$i],$dis_id);
		}
		redirect('social/Distribute/add');
	}
	function saverow(){
		$familyid=$this->input->post('familyid');
		$rice=$this->input->post('rice');
		$oil=$this->input->post('oil');
		$dis_id=$this->input->post('dis_id');
		$this->savedisdetail($familyid,$rice,$oil,$dis_id);
	}
	function savedisdetail($familyid,$rice,$oil,$dis_id,$is_new=0){
		try {
				$row=$this->db->where('distribut_id',$dis_id)->get('sch_family_distributed')->row();
				$c_date=date('Y-m-d h:i:s');
				$user=$this->session->userdata('user_name');
				$data=array('distribut_id'=>$dis_id,
										'familyid'=>$familyid,
										'dis_date'=>$row->dis_date,
										'type'=>6,
										'transno'=>$row->transno,
										'amt_rice'=>$rice,
										'rice_uom'=>'Kg',
										'oil'=>$oil,
										'oil_uom'=>"L",
										'created_date'=>$c_date,
										'created_by'=>$user,
										'remark'=>'',
										'is_newadd'=>$is_new,
										'year'=>$row->year);
				$count=$this->db->where('familyid',$familyid)
								->where('distribut_id',$dis_id)
								->from('sch_family_distributed_detail')->count_all_results();
				if($count>0){
					$this->db->where('familyid',$familyid)
							->where('distribut_id',$dis_id)
							->update('sch_family_distributed_detail',$data);
				}else{
					$this->db->insert('sch_family_distributed_detail',$data);
				}
				$this->updateplan($familyid,$row->distrib_type,$oil,$rice,$row->year);
		} catch (Exception $e) {
			
		}
		
	}
	function deletedis($dis_id){
		$this->db->where('distribut_id',$dis_id)
				->delete('sch_family_distributed');
		$this->db->where('distribut_id',$dis_id)
				->delete('sch_family_distributed_detail');
		redirect('social/distribute');
	}
	function updateplan($familyid,$dis_type,$oil,$rice,$year){
		$this->db->set('amt_rice',$rice)
				->set('oil',$oil)
				->set('modified_date',date('Y-m-d h:i:s'))
				->set('modified_by',$this->session->userdata('user_name'))
				->where('familyid',$familyid)
				->where('distrib_type',$dis_type)
				->where('year',$year)
				->update('sch_family_distribute_plan');
	}
	function deletes($familyid,$dis_id){
		$year=date('Y');
		$this->db->where('familyid',$familyid)
				->where('distribut_id',$dis_id)
				->delete('sch_family_distributed_detail');
		$this->db->where('familyid',$familyid)
				->where('year',$year)
				->delete('sch_family_distribute_plan');
		echo 'ok';
	}
	function rollback($dis_id){
		$year=date('Y');
		$this->db->where('distribut_id',$dis_id)
				->where('year',$year)
				->delete('sch_family_distributed_detail');
		$this->db->where('distribut_id',$dis_id)
				->delete('sch_family_distributed');
		redirect('social/distribute/add');
	}
	function updatetotal(){
		$this->db->set('tota_rice',$this->input->post('rice'))
					->set('total_oil',$this->input->post('oil'))
					->set('total_family',$this->input->post('f_total'))
					->where('distribut_id',$this->input->post('dis_id'))
					->update('sch_family_distributed');
		// echo $this->input->post('dis_id');
	}
	function search(){
		if(isset($_GET['f_id'])){
					$family_code=$_GET['f_id'];
					$father_name=$_GET['fn'];
					$mother_name=$_GET['mm'];
					$s_date=$_GET['s_date'];
					$e_date=$_GET['e_date'];
					$sort_num=$_GET['s_num'];
					$m=$_GET['m'];
					$p=$_GET['p'];
					$data['tdata']=$this->distr->search($family_code,$father_name,$mother_name,$s_date,$e_date,$sort_num,$m,$p);
					$data['idfield']=$this->idfield;		
					$data['thead']=	$this->thead;
					$data['page_header']="Distribute Proposal";			
					$this->parser->parse('header', $data);
					$this->parser->parse('social/distribute/distibute_list', $data);
					$this->parser->parse('footer', $data);

		}else{
					$family_code=$this->input->post('family_code');
					$father_name=$this->input->post('father_name');
					$mother_name=$this->input->post('mother_name');
					$s_date=$this->green->formatSQLDate($this->input->post('s_date'));
					$e_date=$this->green->formatSQLDate($this->input->post('end_date'));
					$sort_num=$this->input->post('sort_num');
					$i=1;
					$total_oil=0;
					$total_rice=0;
					$m=$this->input->post('m');
					$p=$this->input->post('p');
					$this->green->setActiveRole($this->input->post('roleid'));
					if($m!=''){
				        $this->green->setActiveModule($m);
				    }
				    if($p!=''){
				        $this->green->setActivePage($p); 
				    }
					foreach ($this->distr->search($family_code,$father_name,$mother_name,$s_date,$e_date,$sort_num,$m,$p) as $row) {
						echo "<tr>
								 	<td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
								 	 <td class='family_code'>".$row->family_code."</td>
								 	<td class='dis_date'>".$row->dis_date."</td>
									 <td class='father_name'>".$row->father_name."</td>
									 <td class='mother_name'>".$row->mother_name."</td>
									 <td class='amt_rice alignright'>$row->amt_rice $row->rice_uom</td>
									 <td class='oil alignright'>".$row->oil.' '.$row->oil_uom."</td>
									 <td class='remark'>$row->remark</td>										 
									 <td class='remove_tag no_wrap'>" ;
							if(!isset($arrtran[$row->transno])){
								if($this->green->gAction("P")){	
									echo "<a>
										 		<img rel='".$row->distribut_id."' type='".$row->distrib_type."' id='".$row->distribut_id."'  onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
										 	</a>";
								}
								if($this->green->gAction("D")){	
									echo "<a>
										 		<img rel='".$row->distribut_id."' onclick='deletedis(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
										 	</a>";
								}
								if($this->green->gAction("U")){	
									echo "<a>
										 		<img rel='".$row->distribut_id."' onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
										 </a>" ;
								}
							}	
							echo "</td>
							</tr>";
						 	$i++;
						 	$total_rice+=$row->amt_rice;
						 	$total_oil+=$row->oil;
						 	$arrtran[$row->transno]=$row->transno; 
					}
					//===========================show pagination=======================
							echo "
								<tr>
		                   			<th>Total</th>
		                   			<th>".($i-1)."</th>
		                   			<th></th>
		                   			<th></th>
		                   			<th></th>
		                   			<th>".$total_rice." kg</th>
		                   			<th>".$total_oil." L</th>
		                   			<th></th>
		                   			<th></th>
		                   			<th></th>
								</tr>
							";
							echo "<tr class='remove_tag'>
									<td colspan='12' id='pgt'>
										<div style='margin-top:20px; width:10%; float:left;'>
										Display : <select id='sort_num'  onchange='search(event);' style='padding:5px; margin-right:0px;'>";
														
														$num=10;
														for($i=0;$i<20;$i++){?>
															<option value="<?php echo $num ;?>" <?php if($num==$sort_num) echo 'selected';?> ><?php echo $num;?></option>
															<?php $num+=10;
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
