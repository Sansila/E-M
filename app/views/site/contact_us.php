<div style="word-wrap:break-word; width:780px; margin:10px auto;">
	<?php $art=$this->db->query("SELECT * FROM tblarticle WHERE article_id='8'")->row();
	echo $art->content;
	 ?>
</div>
<div style="word-wrap:break-word; width:780px; margin:10px auto;">
	<div style="width:250px; float:left;">
		<?php
			$img=$this->db->query("SELECT * FROM tblbanner WHERE menu_id='".$_GET['p']."'")->result();
			foreach ($img as $im) {
				echo "<a href='$im->link'><img style='margin:3px 0px; width:250px;' src='".site_url("/assets/upload/banner/$im->banner_id.png")."'></a>";
			}
		 ?>
	</div>
	<div style="width:500px; float:right; word-wrap:break-word;">
		<form id="feedbacksmallform" method="post" action="<?php echo site_url('site/savecontact?p='.$_GET['p']); ?>" name="gform">
			<table width="100%" border="0" cellspacing="0" cellpadding="3" >

			<tr> 
			      <td width="95" align="right">Nationality：</td>
			      <td> 
			        <input type="text" name="nationality" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">First Name：</td>
			      <td> 
			        <input type="text" name="first_name" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Family Name：</td>
			      <td> 
			        <input type="text" name="family_name" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			    <tr> 
			      <td width="95" align="right">Gender：</td>
			      <td> 
			        <select name="sex" required>
						<option value=M >M</option><option value=F >F</option>
			        </select>
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div> </td>
			    </tr>


			<tr> 
			      <td width="95" align="right">City：</td>
			      <td> 
			        <input type="text" name="city" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Region：</td>
			      <td> 
			        <input type="text" name="region"  value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">State/county：</td>
			      <td> 
			        <input type="text" name="country" value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Post Code：</td>
			      <td> 
			        <input type="text" name="post_code" value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Tel：</td>
			      <td> 
			        <input type="text" name="tel" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Mobile：</td>
			      <td> 
			        <input type="text" name="mobile" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Address：</td>
			      <td> 
			        <input type="text" name="address" required value="" class="input" style="width:300px" />
			        <font style='color:red'>*</font> <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Email：</td>
			      <td> 
			        <input type="text" name="email" value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			<tr> 
			      <td width="95" align="right">Preferred time to be contacted：</td>
			      <td> 
			        <input type="text" name="preferred_contact" value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			

			<tr> 
			      <td width="95" align="right">How do you get to know us?：</td>
			      <td> 
			        <input type="text" name="know_us" value="" class="input" style="width:300px" />
			         <div style="padding-top:3px;color:#666"></div>  </td>
			    </tr>

			    <tr> 
			      <td width="95" align="right">Purchase product：</td>
			      <td> 
			        <select name="purchase" >
					<option value=yes >yes</option><option value=no >no</option>
			        </select>
			         <div style="padding-top:3px;color:#666"></div> </td>
			    </tr>


			    <tr> 
			      <td width="95" align="right">Become a registered client：</td>
			      <td> 
			        <select name="register" >
					<option value=yes >yes</option><option value=no >no</option>
			        </select>
			         <div style="padding-top:3px;color:#666"></div> </td>
			    </tr>


			    <tr> 
			      <td width="95" align="right">Register as a distributor：</td>
			      <td> 
			        <select name="distribute" >
					<option value=yes >yes</option><option value=no >no</option>
			        </select>
			         <div style="padding-top:3px;color:#666"></div> </td>
			    </tr>


			    <tr> 
			      <td width="95" align="right">Others：</td>
			      <td> 
			        <select name="other" >
					<option value=yes >yes</option><option value=no >no</option>
			        </select>
			         <div style="padding-top:3px;color:#666"></div> </td>
			    </tr>


			    
			    <tr> 
			      <td width="95" align="right">&nbsp;</td>
			      <td height="30">
			        <input type="submit" name="Submit" value="Submit" class="submit">
			        <input type='hidden' name='act' value='formsend'>
			        <input name='groupid' type='hidden' id="groupid" value='18'>
					
				  </td>
			    </tr>
			  </table>
			</form>
	</div>
</div>