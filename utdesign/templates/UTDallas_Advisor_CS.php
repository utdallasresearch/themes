<?php
	//Template Name: UTDallas_Advisor_New
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell persona" style="background:url(https://utdesign.utdallas.edu/wp-content/uploads/2017/11/IMG_2963-1.jpg)center center no-repeat; background-size:cover;">
			<h1>UT Dallas Advisors get the opportunity to advise students through the final project of their school career</h1>
		</div>
	</div>
</div>





<section class="split50">
	<div class="wrapper">
		<h2 class="title">Overview of the Program</h2>
	</div>
	<div class="wrapper-gutters flip">
		<div class="column-half photo">
			<?php 
				$image = get_field('overview_image'); ?>
				<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="column-half copy">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
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
						<img src="<?php bloginfo('template_url');?>/images/bf-10.svg">
					</div>
					<div class="cell">
						<span>Learn what is occurring in industry and possibly further your research</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-11.svg">
					</div>
					<div class="cell">
						<span>Interact with engineers from industry and build your professional network</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-12.svg">
					</div>
					<div class="cell">
						<span>Help build relationships between the Jonsson School and local companies</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-13.svg">
					</div>
					<div class="cell">
						<span>Share your specialized expertise with a team of dedicated, highly motivated students</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-14.svg">
					</div>
					<div class="cell">
						<span>Support a key program that prepares our students for engineering careers</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-15.svg">
					</div>
					<div class="cell">
						<span>Help distinguish our graduates from those of other universities</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section class="bg-orange">
	<div class="wrapper-gutters">
		<h2 class="title">Roles</h2>
				<div class="column-half">
			<p>The UT Dallas Advisor advises the team from the start to the end of the project (one semester for computer science, two semesters for engineering). To help the team achieve success, the UT Dallas Advisor must:</p>
<ul>
<li>Advise the team during the design process, ensuring a project deliverable</li>
<li>Connect the team to technical resources and experts necessary to understand and complete the project</li>
<li>Help the team establish and meet benchmarks</li>
<li>Facilitate the student-corporate relationship</li>
<li>Foster teamwork and self-confidence</li>
</ul>
		</div>
		<div class="column-half">
			<p>One of a UT Dallas Advisor's most difficult tasks is finding the right advisory balance on the project.</p>
<p>Students should come up with their own solutions.   The UT Dallas Advisor's role is to advise and guide the students, but is not to solve the problem for them.  UT Dallas Advisors are permitted to provide technical advice but should minimize contributions of intellectual property to the project.</p>
		</div>
	</div>
</section>



<section class="split50 bg-green">
			<img class="sectionimg" src="http://utdesign.modmktg.com/wp-content/uploads/2017/11/10-10-13-UT-Design-0220.jpg" alt="">
	<div class="wrapper">
		<h2 class="title">Expectations</h2>
	</div>
	<div class="wrapper-table">
		<div class="row">
			<div class="cell copy">
				<p>UT Dallas Advisors should expect to spend an average of two hours per week working with each team. A summary of the tasks expected is as follows:</p>
<ul>
<li>Be familiar with the project. Know the project goals, status and individual team members’ contributions.</li>
<li>Ensure that the project’s scope remains realistic.<br />
If the scope is too large, the students won’t be able to deliver.<br />
If the scope is too small, they won’t be challenged.</li>
<li>Hold regular team meetings.<br />
Weekly meetings are mandatory.</li>
<li>Maintain open communication with the corporate mentor and team.<br />
If possible, attend the corporate kick-off event with the team.</li>
<li>Develop an effective team.<br />
Make certain the team members learn about the strengths and skills of one another to work effectively. Have them choose a team leader. Hold the students accountable for their assignments.</li>
</ul>
			</div>
			<div class="cell photo">
									<img class="push800" src="http://utdesign.modmktg.com/wp-content/uploads/2017/11/10-10-13-UT-Design-0220.jpg" alt="">
			</div>
			<div class="cell copy">
				<p>UT Dallas Advisors should expect to spend an average of two hours per week working with each team. A summary of the tasks expected is as follows:</p>
<ul>
<li>Be familiar with the project. Know the project goals, status and individual team members’ contributions.</li>
<li>Ensure that the project’s scope remains realistic.<br />
If the scope is too large, the students won’t be able to deliver.<br />
If the scope is too small, they won’t be challenged.</li>
<li>Hold regular team meetings.<br />
Weekly meetings are mandatory.</li>
<li>Maintain open communication with the corporate mentor and team.<br />
If possible, attend the corporate kick-off event with the team.</li>
<li>Develop an effective team.<br />
Make certain the team members learn about the strengths and skills of one another to work effectively. Have them choose a team leader. Hold the students accountable for their assignments.</li>
</ul>
			</div>
		</div><!-- .row -->
	</div>
</section>





<section id="budget" class="bg-blue1">
	<div class="wrapper-gutters">
		<h2 class="title">Budget</h2>
	</div>
	<div class="wrapper-gutters">
		<div class="column-half">
			<p>Each UTDesign Engineering project team has a budget of $2,000 for materials and up to $1,000 towards fabrication costs, if any. And each Computer Science project team has a budget of $1,000. This allowance can be used only for materials and supplies needed for the project.</p>
<p>Some projects may require equipment that exceeds the assigned budget. In this case, the team should work with the UTDesign department director and corporate mentor to determine the best way to proceed.</p>

		</div>
		<div class="column-half">
		<p>Every purchase needs approval from the team’s UT Dallas Advisor. Purchase request forms will be returned to the team if they have not been previously approved by the UT Dallas Advisor. Approval can be done through email or by signing the request form.</p>
<p>The <a href="http://utdesign.modmktg.com/wp-content/uploads/2017/11/UTDesign-purchase-process.docx">UTDesign purchase process document <i class="fa fa-file-word-o"></i></a> provides all the information needed to order what the team needs for the project.</p>
<p>It is very important that your team reads and understand the procedure.</p>
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
					<p>What is a typical project schedule?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>For a sample schedule, please visit this <a href="https://utdesign.utdallas.edu/resources/project-schedule/">link.</a></p>
				</div>
			</div>
	    			<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p>How are project stations assigned?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>Each team is assigned a project station for the duration of the project.  Project stations include work and storage space, as well as necessary equipment, as applicable.  Table assignment is done by the UTDesign Studio shop manager, Gene Woten, in collaboration with the appropriate Faculty Director.</p>
				</div>
			</div>
	    		</div>
	
		<div class="button blu text_align-center">
		<a href="/faq?ref=ut-dallas-advisor">More FAQs</a>
	</div>
	
</section>

	
	

	
	
<?php get_footer(); ?>













