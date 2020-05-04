<?php
	//Template Name: Companies_New
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell persona" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>


<section>
	<div class="wrapper-gutters">
		<h2 class="title">A Company’s Role in UTDesign</h2>
		<div class="column-half">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
		</div>
		<div class="column-half">
			<?php 
				$image = get_field('overview_image'); ?>
				<img class="push" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</section>


<section id="benefits" class="no-top">
	<div class="wrapper-gutters">
		<h2 class="title">Benefits</h2>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-1.svg">
					</div>
					<div class="cell">
						<span>Progress on lower-priority projects without expending staff resources</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-2.svg">
					</div>
					<div class="cell">
						<span>Potential for high return on a small investment</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-3.svg">
					</div>
					<div class="cell">
						<span>Opportunity to recruit top graduates from a diverse pool of students</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-4.svg">
					</div>
					<div class="cell">
						<span>Full ownership of results</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-5.svg">
					</div>
					<div class="cell">
						<span>Relationships with faculty members who are subject matter experts</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-6.svg">
					</div>
					<div class="cell">
						<span>Brand promotion among students, other sponsors, and the community</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section id="deliverables" class="bg-green">
			<img class="sectionimg" src="http://utdesign.modmktg.com/wp-content/uploads/2017/10/IMG_6105.jpg" alt="">
	<div class="wrapper-gutters">
		<h2 class="title">Deliverables</h2>
		<div class="column-half">
							<img class="push800" src="http://utdesign.modmktg.com/wp-content/uploads/2017/10/IMG_6105.jpg" alt="">
		</div>
		<div class="column-half">
			<p>Depending on the characteristics and field of the project, companies may expect some or all of the following deliverables:</p>
<ul>
<li>Technical reports</li>
<li>Drawings and design specifications</li>
<li>Prototypes, computer programs, simulation models</li>
<li>Final report and presentation</li>
<li>Test and evaluations results</li>
</ul>
		</div>
	</div>
</section>


<section class="cta bg-green2">
	<div class="wrapper-gutters">
		<div class="column-two-third">
			<span>What can our students do for you?</span>
		</div>
				<div class="column-third">
			<div class="dropdown">
				<button class="dropbtn">Let's Talk</button>
				<div class="dropdown-content">
					<a href="/contact">Email us</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_d4HuL6sWWS7gsQd">Schedule a phone call</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_9zTKmHiVuSwtP6J">Schedule a studio visit</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="ip">
	<div class="wrapper-gutters">
		<h2 class="title">IP &amp; NDA</h2>
		<div class="column-half">
							<img class="push" src="http://utdesign.modmktg.com/wp-content/uploads/2019/04/bs-computer-science-fy19-1.jpg" alt="">
		</div>
		<div class="column-half">
			<p>UTDesign Capstone projects may result in ideas, inventions, creations, developments or improvements that are important to corporate sponsors.  Partners typically secure rights to UTDesign intellectual property by having student participants sign intellectual property (IP) agreements and non-disclosure agreements (NDAs).</p>
			<h3 class="title">For the Student</h3>
			<p><strong>Intellectual Property Agreement (IP)</strong> – Corporate partners are encouraged to enter into mutually acceptable agreements with the UTDesign students and their teams. This allows them to secure rights to the IP developed during the course of the project. These agreements are to be made between the company and the students. </p>
			<p><strong>Non-Disclosure Agreement (NDA)</strong> – All students engaged in corporate projects must be aware of and committed to an NDA. Usually, the NDA is incorporated into the IP agreement.</p>
		
		</div>
	</div>
	<span>You retain 100% of the IP for the work and results</span>
</section>


<section id="cost" class="no-top">
	<div class="wrapper-gutters">
		<h2 class="title">Cost</h2>
			<div class="wrapper-gutters">
		<div class="column">
			<p><strong>There is $2,000 DISCOUNT if the project proposal has been submitted through <a href="https://utdallas.qualtrics.com/jfe/form/SV_bwtu6EoYKKzjCPr?Q_JFE=qdg">UTDesign Capstone portal</a> 30 DAYS before the semester begins.</strong> </p>
		</div>
</div>
		<div class="column-three-fourth">
			<span><strong>Computer Science and Software Engineering projects</strong> (one semester):</span>
		</div>
		<div class="column-fourth">
			<span class="c-orange"><strong> <strike>$10,000</strike>  $8,000 </strong></span>
		</div>
	</div>
	<div class="wrapper-gutters">
		<div class="column-three-fourth">
			<span><strong>Engineering projects</strong> (two semesters):</span>
		</div>
		<div class="column-fourth">
			<span class="c-green"><strong><strike>$15,000</strike>  $13,000</strong></span>
		</div>
			</div>


<div class="wrapper-gutters">
		<div class="column-half">
			<p>Funding from corporate partners supports UTDesign Capstone projects by providing materials, licensing, studio facilities, staff and UT Dallas Advisor.  The cost above covers up to $2,000 for materials and fabrication expenses for engineering projects, and $1,000 for computer science.  The UT Dallas Advisor and corporate mentor will discuss options for reimbursing costs that exceed these expenses.</p>
			
	
		</div>
		<div class="column-half">
			<h3 class="title">Gifts to Support the Studio</h3>
			<p>In addition to hosting senior teams, several companies elect to support the entire studio in ways that include:</p>
<ul>
<li>In-kind donations: equipment, parts and services.</li>
<li>Naming opportunities:  a few opportunities still exist for donors to name labs, conference rooms or classrooms.</li>
<li>Competitions:  typically using technology from the gifting company.</li>
<li>Events: tech talks, seminars, social networking, tech meet-ups, etc.</li>
</ul>
		</div>
	</div>
</section>


<section class="bg-orange">
	<div class="wrapper-gutters">
		<h2 class="title">Roles</h2>
		<div class="column-half">
			<p>The involvement of the company is crucial for the success of the project and the learning process for the student. To help the team succeed, the corporate mentor must:</p>
<ul>
<li>Mentor the team so students can get a corporate experience</li>
<li>Help the students with new technology used in the company</li>
<li>Guide the team to meet benchmarks</li>
<li>Foster teamwork</li>
<li>Encourage high-quality communication and professionalism</li>
</ul>
		</div>
		<div class="column-half">
			<p>Previous corporate mentors recommend the following as best practices:</p>
<ul>
<li>Weekly meetings are required</li>
<li>Weekly reports are very beneficial</li>
<li>Give feedback on reports</li>
<li>Designate one person to be the point of contact, usually the team leader</li>
<li>Hold the team accountable for its schedule</li>
<li>Propose a project doable in 30 weeks (15 for Computer Science)</li>
<li>Make sure the team understands the objective</li>
</ul>
<p><span class="bg-green2"><strong>The Corporate Mentor Guidelines</strong></span>  for <a href="http://utdesign.utdallas.edu/wp-content/uploads/2019/04/Computer-Science-Corporate-Mentor-Guidelines.pdf"> Computer Science Projects</a> and <a href="http://utdesign.utdallas.edu/wp-content/uploads/2019/04/Engineering-Corporate-Mentor-Guidelines.pdf"> Engineering Projects</a> detail these roles and outline a typical semester schedule.</p>
		</div>
	</div>
</section>

<section class="cta bg-green2">
	<div class="wrapper-gutters">
		<div class="column-two-third">
			<span>Ready to sponsor a project?</span>
		</div>
		<div class="column-third">
			<div class="button clear">
				<a href="https://utdallas.qualtrics.com/jfe/form/SV_bwtu6EoYKKzjCPr?Q_JFE=qdg">Click HERE</a>
			</div>
		</div>
	</div>
</section>

<section id="faq">
	<div class="wrapper-gutters">
		<h2 class="title">FAQ</h2>
	</div>
	<div class="wrapper-table">
						<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p>I’ve never done anything like this before, so what is my first step?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>Brainstorm some ideas for projects with people from your company.  Submit these ideas through the <a href= "https://utdallas.qualtrics.com/jfe/form/SV_bwtu6EoYKKzjCPr?Q_JFE=qdg">online portal</a>.  Schedule a meeting with the UTDesign Capstone Faculty Director to discuss topic ideas. Determine together the appropriate scope of the project and whether the project will be successful for the students and your company.  The project scope is designed to have a rigorous yet achievable “minimally viable product” and a couple of stretch goals.  </p>
				</div>
			</div>
	    			<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p>What should I expect after I submit a UTDesign project proposal?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>A UTDesign director will contact you to discuss your project. Once all details of the project are worked out, you can secure the project by making a commitment and/or down payment before classes start. Your team will be assigned as soon as possible into the semester.</p>
				</div>
			</div>
	    		</div>
	<div class="button blu text_align-center">
		<a href="/faq?ref=corporate">More FAQs</a>
	</div>
</section>

	
	
<?php get_footer(); ?>













