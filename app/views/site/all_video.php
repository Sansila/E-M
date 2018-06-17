<style type="text/css">
	
</style>
<div class="contant">
	<div class="container">
		<div class="page-heading">
			<!-- <div class="container"> -->
			<h2 style="padding-left:10px;"><?php echo $lang=='en'?'All Videos':'វីដេអូទាំងអស់' ?></h2>
	<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p> -->
		</div>
	</div>
</div>
</div>
<div class="contant">
	<div class="container">
		<div class="event-page">
			<ul id="vdo-list" style="padding:0px;">
				<?php
				$i=1;
				foreach ($data as $pro) {?>
						<li class="span4">
							<iframe style="width:100%; height:330px;" src="https://www.youtube.com/embed/<?php echo $pro->url ?>" frameborder="0" allowfullscreen></iframe>
							
						</li>
				<?php	$i++; }
				?>
			</ul>
			
			<div style="clear:both"></div>
		</div>
	</div>
</div>