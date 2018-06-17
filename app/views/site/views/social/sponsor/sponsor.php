<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class SponSor extends CI_Controller{

		function __construct(){
			parent::__construct();	
			$this->load->model("social/modsponsor","sponsor");	
			$this->load->library('pagination');	
			$this->thead=array("No"=>'no',
								"SponsorID"=>'sponsorid',
								"Sponsor Name"=>'sponsor_name',
								 "Position"=>'position',
								 "Country"=>'country',						 
								 "Note"=>'note',
								 'Action'=>'action'
								);
			$this->idfield="displanid";					
		}
		function index()
		{	
			$data['tdata']=$this->sponsor->getsponsor();
			$data['idfield']=$this->idfield;		
			$data['thead']=	$this->thead;
			$data['page_header']="Counseling";			
			$this->parser->parse('header', $data);
			$this->parser->parse('social/sponsor/sponsor_list', $data);
			$this->parser->parse('footer', $data);
		}
		function add()
		{	
			$data['idfield']=$this->idfield;		
			$data['thead']=	$this->thead;
			$data['page_header']="Counseling";			
			$this->parser->parse('header', $data);
			$this->parser->parse('social/sponsor/sponsor_form', $data);
			$this->parser->parse('footer', $data);
		}
		function edit($sponsorid)
		{	
			$data['idfield']=$this->idfield;		
			$data['data']=	$this->sponsor->getsponsorrow($sponsorid);
			$data['page_header']="Counseling";			
			$this->parser->parse('header', $data);
			$this->parser->parse('social/sponsor/sponsor_form', $data);
			$this->parser->parse('footer', $data);
		}
		function preview($sponsorid)
		{	
			$data['idfield']=$this->idfield;		
			$data['data']=	$this->sponsor->getsponsorrow($sponsorid);
			$data['page_header']="Counseling";			
			$this->parser->parse('header', $data);
			$this->parser->parse('social/sponsor/preview', $data);
			$this->parser->parse('footer', $data);
		}
		function save(){
			$sponsorid=$this->input->post('sponsorid');
			$last_name=$this->input->post('last_name');
			$first_name=$this->input->post('first_name');
			$dob=$this->input->post('dob');
			$count=$this->sponsor->validate($last_name,$first_name,$dob,$sponsorid);
			
			if($count>0){
				$data['idfield']=$this->idfield;		
				$data['error']="This Sponsor is already exist ...!";
				$data['page_header']="Counseling";			
				$this->parser->parse('header', $data);
				$this->parser->parse('social/sponsor/sponsor_form', $data);
				$this->parser->parse('footer', $data);
			}else{
				if($sponsorid!=''){
					$this->sponsor->save($sponsorid);
				}else{
					$this->sponsor->save();
				}
				$m='';
				$p='';
				if(isset($_GET['m'])){
			    	$m=$_GET['m'];
			    }
			    if(isset($_GET['p'])){
			        $p=$_GET['p'];
			    }
				redirect("social/sponsor?m=$m&p=$p");
			}
			
		}
		function deletes($s_id){
			$this->db->where('sponsorid',$s_id)->delete('sch_family_sponsor');
			redirect('social/sponsor');
		}
		function search(){
			if(isset($_GET['s_code'])){
					$sponsor_code=$_GET['s_code'];
					$name=$_GET['name'];
					$position=$_GET['p'];
					$country=$_GET['c'];
					$sort_num=$_GET['s_num'];
					$m=$_GET['m'];
					$p=$_GET['p'];
					$data['tdata']=$this->sponsor->search($sponsor_code,$name,$position,$country,$sort_num,$m,$p);
					$data['idfield']=$this->idfield;		
					$data['thead']=	$this->thead;
					$data['page_header']="Counseling";			
					$this->parser->parse('header', $data);
					$this->parser->parse('social/counseling/counseling_list', $data);
					$this->parser->parse('footer', $data);
			}else{
					$sponsor_code=$this->input->post('sponsor_code');
					$name=$this->input->post('name');
					$position=$this->input->post('position');
					$country=$this->input->post('country');
					$sort_num=$this->input->post('s_num');
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
					foreach ($this->sponsor->search($sponsor_code,$name,$position,$country,$sort_num,$m,$p) as $row) {
						
						echo "<tr>
							 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
								 <td class='sponsorid'>".$row->sponsor_code."</td>
								 <td class='familyid'>".$row->last_name.' '.$row->first_name."</td>
								 <td class='name'>".$row->position."</td>
								 <td class='plan_next_session'>".$row->country."</td>
								 <td class='plan_next_date'>".$row->note."</td>
								 <td class='remove_tag no_wrap'>
								 	<a>
								 		<img rel=".$row->sponsorid." onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
								 	</a>
								 	<a>
								 		<img rel=".$row->sponsorid." onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
								 	</a>
								 	<a>
								 		<img  rel=".$row->sponsorid." onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
								 	</a>
								 </td>
						 	</tr>
						 ";
						 	$i++;
					}
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
