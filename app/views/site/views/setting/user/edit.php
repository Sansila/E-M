<div class="result_info">
			      	<div class="col-sm-6">
			      		<strong>USER INFORMATION</strong>
			      		
			      	</div>
			      	<div class="col-sm-6" style="text-align: center">
			      		<strong>
			      			<center style='color:red;'>
			      				<?php if(isset($error->error))
									echo $error->error;?>
							</center>
			      		</strong>	
			      	</div>
</div> 
<?php
	// $dash= array('Full'=>'/system/dashboard',
	// 			'Socail'=>'system/dashboard/view_soc/',
	// 			'Health'=>'/system/dashboard/view_health/',
	// 			'Employee'=>'/system/dashboard/view_staff',
	// 			'Student'=>'/system/dashboard/view_std/');
?>
<style type="text/css">
	tr ul{display: none !important;}
</style>
<div class="row">
	<div class="col-sm-12">
	    <div class="panel panel-default">
	      	<div class="panel-body">
		        <div class="table-responsive" id="tab_print">
						<form enctype="multipart/form-data" accept-charset="utf-8" method='post' id="defaultform" action='<?php echo site_url('setting/user/update');?>'>
							<input type='text' id='txtuserid' style='display:none;' name='txtuserid' value="<?php echo $query->userid;?>">
							<table align='center' width="900">
								<tr>
									<td><label for="emailField">First Name</label></td>
									<td> : </td>
									<td><input  type='text' class="form-control" name='txtf_name' value="<?php echo $query->first_name;?>" id='txtf_name' required data-parsley-required-message="Enter First Name" placeholder="your First name"/>
									</td>
									<td><label for="emailField">last name</label></td>
									<td> : </td>
									<td><input type='text' class="form-control" name='txtl_name' value="<?php echo $query->last_name;?>" id='txtl_name' required data-parsley-required-message="Enter Last Name" placeholder="your Last name"/>
									</td>
									<td rowspan='4' style='border:0px solid #CCCCCC; text-align:center; width:200px'>
										<img src="<?php if(@ file_get_contents(site_url('../assets/upload/'.$query->userid.'.png'))) echo site_url('../assets/upload/'.$query->userid.'.png'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px'>
										<input id="uploadImage" type="file" accept="image/gif, image/jpeg, image/jpg, image/png" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
										<input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
									</td>
								</tr>
								<tr>
									<td><label for="emailField">User Name</label></td>
									<td> : </td>
									<td><input type='text' class="form-control" name='txtu_name' value="<?php echo $query->user_name;?>" id='txtu_name' required data-parsley-required-message="Enter User Name" placeholder="your User name"/></td>
									<td><label for="emailField">Password</label></td>
									<td> : </td>
									<td><input type='password' class="form-control" name='txtpwd' id='txtpwd' value="<?php echo $query->password;?>" required data-parsley-required-message="Enter Password" placeholder="your Password"/></td>

								</tr>
								<tr>
									<td><label for="emailField">Email address</label></td>
									<td> : </td>
									<td class='control-group'><input type='text' class="form-control" value="<?php echo $query->email;?>" name='txtemail' id='txtemail' required data-parsley-required-message="Enter Email" placeholder="your Email Address"/></td>
									<td><label for="emailField">Role</label></td>
									<td> : </td>
									<td>
										<select name='cborole' id='cborole' class="form-control">
											<?php
											foreach ($this->role->getallrole() as $role_row) {?>
												<option value='<?php echo $role_row->roleid; ?>' <?php if($query->roleid==$role_row->roleid) echo 'selected';?>> <?php echo $role_row->role ; ?></option>
											<?php }
											?>
										</select>
									</td>
									
								</tr>
								
								<tr>
									<td></td>
									<td></td>
									<td colspan='2'>
										<input type='submit' class="btn btn-primary" name='btnsubmit' id='btnsubmit' value='Save User'>
										<input type='reset' class="btn btn-warning" name='btnreset' id='btnreset'>
										<button type="button" class="btn btn-danger" id='btncancel'>Cancel</button>
									</td>
									
									<td></td>
									<td></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<script type="text/javascript">
		function PreviewImage() {
		        var oFReader = new FileReader();
		        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

		        oFReader.onload = function (oFREvent) {
		            document.getElementById("uploadPreview").src = oFREvent.target.result;
		            document.getElementById("uploadPreview").style.backgroundImage = "none";
		        };
		    };
		    $(function(){
				$('#defaultform').parsley();				
			})
		$(document).ready(function() {
			
				$('#btncancel').click(function(){
					var r = confirm("Are you sure to cancel !");
					if (r == true) {
						location.href="<?PHP echo site_url('setting/user/');?>";
					} else {
					   
					}
				})
			
       });
	</script>