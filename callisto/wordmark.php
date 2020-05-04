

		<?php
			switch(get_current_blog_id()){
				case 988: ?>

				      <a id='school-logo' href="/">
				        <picture>
				          <source srcset="/websvcs/templates/obcc/UTDmono_circle_2c_flame_eco_rgb.jpg">
				          <img class="utd-logo" src="/websvcs/templates/obcc/UTDmono_circle_2c_flame_eco_rgb.jpg" alt="UT Dallas">
				        </picture>
				      </a>
				      <div id='wordmark-container'>
				      		<a href='#' id='extra-wordmark'>Naveen Jindal School of Management</a>
				      		<h2 id='main-wordmark'><a href="/obcc">Organizational Behavior, Coaching and Consulting</a></h2>
				      </div>
				
				<?php	break;	
						
						case 1014: ?>
				      <a id='school-logo' href="/">
				        <picture>
				          <source srcset="/websvcs/shared/svg/utd-monogram-orange.svg">
						<img class="utd-logo" src="/websvcs/shared/svg/utd-monogram-orange.svg" alt="UT Dallas">
				        </picture>
				      </a>
				      <div id='wordmark-container'>
				      		<a href='#' id='extra-wordmark'>Naveen Jindal School of Manangement</a>
				      		<h2 id='main-wordmark'><a href="/project">Project Management Program</a></h2>
				      </div>
				
				<?php	break;	
						case 1016: ?>
				<a href="/">
					<picture>
						<source srcset="/theleadershipcenter/files/UT_Dallas_tex_flame-1.png">
						<img class="utd-logo" src="/theleadershipcenter/files/UT_Dallas_tex_flame-1.png" alt="UT Dallas">
					</picture>
				</a>
				<h2><a href="<?php print site_url(); ?>"><? bloginfo('name'); ?></a></h2>
				<?php break;			
					default: ?>

				<a href="/">
					<picture>
						<source srcset="/websvcs/shared/svg/utd-monogram-orange.svg">
						<img class="utd-logo" src="/websvcs/shared/svg/utd-monogram-orange.svg" alt="UT Dallas">
					</picture>
				</a>
				<h2><a href="<?php print site_url(); ?>"><? bloginfo('name'); ?></a></h2>
		<?php 
			break;
			}
		?>