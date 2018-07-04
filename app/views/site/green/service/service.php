
<div class="main-title" style="background-image: url('http://www.mep-eng.com/wp-content/uploads/2018/05/Mechanical3-edit.png'); background-position: center center; background-repeat: no-repeat; background-attachment: scroll; background-color: #f2f2f2; ">
	<div class="container">
				<h1 class="main-title__primary style">Services</h1>
	</div>
</div>

<section id="service">
	<div class="container">
		<div class="col-md-9">
			<div class="row">
				<?php foreach ($serviceblog as $key ) {
						if($key->article_id == 124)
							{ ?>
								<div class="col-md-6">
									<h4 class="servicetitle" ><?php echo $key->article_title;?></h4>
									<?php echo $key->content; ?>
								</div>
									<div class="col-md-6" style="padding-top: 20px;">
										<img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>" style="width: 100%; height: 380px;">
									</div>
								</div>
						<?php }
					} ?>
					<?php foreach ($serviceblog as $value) { 
						if($value->article_id== 125){ ?>
						<h4 class="articletitle"><?php echo $value->article_title;?></h4>
						<div class="textwidget">
							<?php echo $value->content; ?>
						</div>
					<?php 
				}
			} ?>
				<!-- <div class="col-md-6">
					<h4 class="servicetitle" > Let`s start the process right</h4>
					<div class="textwidget">
						<p>We offer an array of services at MEP Engineering; the unique service we offer is to help you decide exactly what you need. At project start, we invite you to engage in an open discussion about your goals. We give you our undivided attention and ask you to do most of the talking. We take notes. After all, you know your project best. During that conversation, we learn all we can about your project objectives, budget, timeline and return on investment expectations. Then, we focus our engineering expertise to provide the right solutions to meet those needs.</p>
					</div>
					<h4 class="articletitle">Expect support from a superb core team</h4>
					<div class="textwidget">
						<p>Once we outline solutions, we set up a well-rounded team to carry your project from start to finish. We select an engineer who is the best match for your project to lead a team that is supported by Quality Control Managers and Principals who work diligently on each phase of your project. In our organization, everyone has the opportunity to lead and </p>
					</div>
				</div> -->
				<!-- <div class="col-md-6" style="padding-top: 20px;">
					<img src="<?=base_url().'assets/img/feature.png'?>" style="width: 100%; height: 380px;">
				</div>
			</div> -->
			<!-- class grid 9 -->
			<!-- <div class="textwidget">
				<p>contribute. This dynamic structure keeps our team members motivated and inspired. Our staff provides engineering services to both public and private sector clients in 18 states.</p>
			</div> -->
			<h4 class="articletitle">Benefit from an integrated focus on Green Design</h4>
			<div class="textwidget">
				<p>Each of our designers and engineers is trained to recognize opportunities for and recommend Green Building Design Approaches wherever possible. We believe sustainable design equals good stewardship of our natural resources. We strive to exceed standards outlined by the US Green Building Council LEED and ASHRAE’s Standard 90.1 Energy Standard for Buildings on every project.</p>
			</div>
			<!-- end class grid 9 -->
			<div class="row">

					<div class="col-md-6">
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/img/c-slide-3.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title">MECHANICAL SERVICES</h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
					</div>
			</div>
		</div>
		<div class="com-md-3 ">
			<div class="row">
				<div class="right-grid">
					<div class="recent-blog">
						<h4 class="style-title">SERVICE</h4>
						<div  class="blog-menu">
							<ul id="service-menu" class="menu">
									<li class="menu-list"><a href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/specialty')?>">Specialty Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></li>
								</ul>
						</div>
					</div>
				</div>
				
				<div class="right-grid">
					<div class="recent-blog">
						<h4 class="style-title">Contact Us</h4>
						<div class="text-right-blog">
							<p>
								<a href="tel:911" title="call"><i class="fa fa-phone"></i> 911</a><br>
								<a href="google.com"><i class="fa fa-envelope"></i> info@google.com</a>
							</p>
							<p><i class="fa fa-home"></i> 6402 S. Troy Circle, Suite 100<br>Centennial, Colorado 80111</p>
							<p><a href="/contact-us/" title="Request a Proposal Online">Request a Proposal Online</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>