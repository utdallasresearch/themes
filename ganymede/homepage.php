<?php

/* Template Name: Homepage */

get_header('home'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 text-left bg-white">
						<p class="lead">According to artist Hakan Topal, in artistic research, "perhaps more so than other disciplines, intuition is utilized as a method to identify a wide range of new and unexpected productive modalities".</p>
						<p>The Society for Artistic Research (SAR) publishes the triannual Journal for Artistic Research (JAR), a searchable, documentary database of artistic research, to which anyone can <a href="#">contribute</a>.</p>
						<div class="row mt-5">
							<div class="col-lg-6">	
								<div><img src="http://labs.test/app/uploads/sites/28/2020/04/microscrope.jpg" class="img-responsive" alt=""></div>
							</div> 
							<div class="col-lg-6">      
								<h2 class="microsite"><a href="#">Our Research</a></h2>
								<p>There are two major types of empirical research design: qualitative research and quantitative research. Researchers choose qualitative or quantitative methods according to the nature of the research topic they want to investigate and the research questions they aim to answer.</p>
							</div><!-- .col-lg-6 -->		
						</div><!--  row mt-5-->
						<div class="row mt-5 mb-5">
							<div class="col-lg-6">
								<div><img src="http://labs.test/app/uploads/sites/28/2020/04/concept.jpg" class="img-responsive" alt=""></div> 
							</div>
							<div class="col-lg-6">       
								<h2 class="microsite"><a href="#">Our Publications</a></h2>
								<p>To publish is to make content available to the general public. While specific use of the term may vary among countries, it is usually applied to text, images, or other audio-visual content, including paper (newspapers, magazines, catalogs, etc.). The word publication means the act of publishing, and also refers to any printed copies.</p>
							</div><!-- .col-lg-6 -->
						</div><!-- .row mt-5 mb-5 -->
						<div class="table-holder">
							<h2>Tables &lt;h2&gt;</h2>
							<h3>Heading, table option &lt;h3&gt;</h3>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Header</th>
											<th scope="col">Header</th>
											<th scope="col">Header</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Row 1</th>
											<td>content</td>
											<td>content</td>
										</tr>
										<tr>
											<th scope="row">Row 2</th>
											<td>content</td>
											<td>content</td>
										</tr>
									</tbody>
								</table>
							</div><!-- .table-holder -->
							<div class="table-holder">
								<h3>Table with class="table-dark"</h3>
								<table class="table table-dark">
									<thead>
										<tr>
											<th scope="col">Header</th>
											<th scope="col">Header</th>
											<th scope="col">Header</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Row 1</th>
											<td>content</td>
											<td>content</td>
										</tr>
										<tr>
											<th scope="row">Row 2</th>
											<td>content</td>
											<td>content</td>
										</tr>
									</tbody>
								</table>
							</div><!-- .table-holder -->
						<div class="bootstrap-form">
							<h2>Form using Bootstrap</h2>
							<p><a href="https://getbootstrap.com/docs/4.3/components/forms/">More on using Bootstrap for forms.</a></p>
						</div><!-- .bootstrap-form -->
						<div class="form-group">
							<label for="Name">Name</label><br>
							<input id="Name" type="text" class="form-control" name="Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
						</div><!-- .form-group -->
						<div class="form-group">
							<label for="Phone_Number">Phone number </label><br>
							<input id="Phone_Number" type="text" class="form-control" name="Phone_Number">
							<button id="formSubmit" class="more-button" name="submit" data-toggle="modal" data-target="#" style="border: none;"> Submit Form button.more-button</button>
						</div><!-- .form-group -->
					</div><!-- .col-md-8 -->
					<div class="col-md-4 px-3 ">
						<div class="microsite-nav">
							<nav class="navbar navbar-expand-lg">
								<ul style="list-style-type: none" class="navbar-nav">
									<li class="microsite-name">
										<a class="nav-link" href="#">Ganymede Microsite <span style="text-transform: none;"></span></a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="#">Section One</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Section Two</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Section Three</a>
									</li>
								</ul>
							</nav>
						<a href="#" class="microsite-lead-btn w-100">Call to Action</a>
							<h2>Bullet List</h2>
								<ul>
									<li>Default list item</li>
									<li>Default list item</li>
								</ul>
							<h2>Numbered List</h2>
								<ol>
									<li>Default list item</li>
									<li>Default list item</li>
								</ol>
						</div><!-- .microsite-nav -->
					</div><!-- .col-md-4 px-3 -->
					<div class="page-content">
          <?php
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
              endwhile; // End of the loop.
              ?>
          </div><!-- .page-content -->  
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();
