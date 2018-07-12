<div class="main-title" style="background-color: #154360; ">
    <div class="container">
        <?php $title = $this->db->query("SELECT * FROM tblmenus where menu_id = 38")->row();?>
        <h1 class="main-title__primary style" align="center"><?php echo $title->menu_name;?></h1>
    </div>
</div>

<section id="aboutuscontent">
	<div class="container">
		<?php $about = $this->db->query("SELECT * FROM tblarticle where location_id = 7 and article_id=194")->row();?>
		<div class="about-content">
			<?php echo $about->content;?></div>


			<!-- <p>CAMBODIASOFT is an information technology company in Cambodia. Our team has a proven reputation for delivering high quality and reliable solutions across a broad spectrum of technologies. CambodiaSoft started it business since early 2005.</p>

			<p>CambodiaSoft provides a wide range of IT services such as Database Development, Software Development, Web Design, Network Installation, Security Camera Installation, System Analysis, Maintenance and Support, and Consultation and Training, with reliability, high quality and convenience.</p>
			<p>Our goals is to provide the best and standard quality solutions with the affordable price. we commit to  on-time completion and a strict focus on cost management.</p>
			<p>Our quality solutions ensure successful implementation reducing cost, complexity and maximum return on investment for your business.</p>
			<p>All staffs of CambodiaSoft are full of experience and have high qualification in the field of information technology. They all are very responsible and creative in their work so that they can bring high quality service for every IT solutions.</p>
			<p>CAMBODIASOFT is one of the leading software solution companies in Cambodia, and recently has been award the INTERNATIONAL STAR FOR LEADERSHIP IN QUALITY from Business initiative Directions based in Europe. </p>
			<p>We are the only software solution in Cambodia that proudly to be award and certified internationally to be one of the most competitive software companies in the world for its best in total quality management in software solutions.</p> -->
		
	</div>
</section>