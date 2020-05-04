<?php
// Template Name: Projects with Filter

$projects = new UTDesignTheme\ProjectCollection();

get_header();
?>

<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>

<div class="wrapper-gutters">
	<form id="search_and_filter_form">

		<div class="activate_search_btn_container">
			<button id="ActivateSearch" type="button" aria-expanded="false" aria-controls="search_and_filter_container">
				<h2>
					Search &amp; Filter
				</h2>
			</button>
		</div>

		<div id="search_and_filter_container" style="display: none;">

			<input class="project_searchbox" type="search" placeholder="Keyword Search...">

			<div class="project_filters">

				<div class="project_filter">
					<label for="department_p">Department</label>
					<select class="department_filter" name="department_p">
						<option selected value="all">All Departments</option>
						<option disabled>---</option>
						<?php foreach ($projects->department as $department) : ?>
							<option value="<?= $department ?>"><?= $department ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label for="sponsor_p">Sponsor</label>
					<select class="sponsor_filter" name="sponsor_p">
						<option selected value="all">All Sponsors</option>
						<option disabled>---</option>
						<?php foreach ($projects->sponsor as $spons) : ?>
							<option value="<?= $spons ?>"><?= $spons ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label for="industry_p">Industry</label>
					<select class="industry_filter" name="industry_p">
						<option selected value="all">All Industries</option>
						<option disabled>---</option>
						<?php foreach ($projects->industry as $indus) : ?>
							<option value="<?= $indus ?>"><?= $indus ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label for="type_of_solution_p">Solution</label>
					<select class="solution_filter" name="type_of_solution_p">
						<option selected value="all">All Solutions</option>
						<option disabled>---</option>
						<?php foreach ($projects->solution as $typeSol) : ?>
							<option value="<?= $typeSol ?>"><?= $typeSol ?></option>
						<?php endforeach; ?>
						<br />
					</select>
				</div>

				<div class="project_filter">
					<label for="type_of_award_p">Award</label>
					<select class="award_filter" name="type_of_award_p">
						<option selected value="all">Any or no Awards</option>
						<option disabled>---</option>
						<?php foreach ($projects->award as $award) : ?>
							<option value="<?= $award ?>"><?= $award ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label for="semester_p">Semester</label>
					<select class="semester_filter" name="semester_p">
						<option selected value="all">All Semesters</option>
						<option disabled>---</option>
						<?php foreach ($projects->semester as $semester) : ?>
							<option value="<?= $semester ?>"><?= $semester ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label for="year_p">Year</label>
					<select class="year_filter" name="year_p">
						<option selected value="all">All Years</option>
						<option disabled>---</option>
						<?php foreach ($projects->year as $year) : ?>
							<option value="<?= $year; ?>"><?= $year; ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="project_filter">
					<label>National</label>
					<input class="national_filter" type="checkbox" name="won_national_p" id="awardNational" value='1'> <label for="awardNational" class="checkbox_label">National Award Winners</label>
				</div>

			</div>

			<div class="search_and_filter_buttons">
				<input id="filterSubmitForm" type="submit" value="Apply Search & Filters">
				<input id="filterResetForm" type="reset" value="Reset">
			</div>

		</div><!-- searchDiv -->
	</form>
</div>

<section id="project_section">
	<div class="wrapper-gutters">
		<div id="project_count"></div>
		<?php foreach ($projects as $project) : ?>
			<div class="project project-wrapper" data-department="<?= is_array($project->department) ? implode(';', $project->department) : $project->department ?>" data-sponsor="<?= $project->sponsor ?>" data-award="<?= $project->award ?>" data-national="<?= $project->national_award ?>" data-semester="<?= $project->semester ?>" data-year="<?= $project->year ?>" data-industry="<?= is_array($project->industry) ? implode(';', $project->industry) : $project->industry ?>" data-solution="<?= is_array($project->solution) ? implode(';', $project->solution) : $project->solution ?>">

				<h4><?= $project->post_title ?></h4>

				<?php if ($project->award == 'Gold') : ?>
					<img class="medal" src="<?php bloginfo('template_url'); ?>/images/gold.svg">
				<?php elseif ($project->award == 'Silver') : ?>
					<img class="medal" src="<?php bloginfo('template_url'); ?>/images/silver.svg">
				<?php elseif ($project->award == 'Bronze') : ?>
					<img class="medal" src="<?php bloginfo('template_url'); ?>/images/bronze.svg">
				<?php endif; ?>

				<?php if ($project->national_award) : ?>
					<span class="national_award"><strong style="color: #fc9f4f;">National Award Winner!</strong></span>
				<?php endif; ?>
				<span><strong>Department:</strong> <?= is_array($project->department) ? implode(', ', $project->department) : $project->department ?></span>
				<span><strong>Sponsor:</strong> <?= $project->sponsor ?></span>
				<span><strong>Industry:</strong> <?= is_array($project->industry) ? implode(', ', $project->industry) : $project->industry ?></span>
				<span><strong>Type of Solution:</strong> <?= is_array($project->solution) ? implode(', ', $project->solution) : $project->solution ?></span>
				<span><strong>Semester:</strong> <?= $project->semester ?> <?= $project->year ?></span>
				<?php if (get_field($project->ID, 'pdf')) : ?>
					<span>
						<strong>Download:</strong>
						<a href="<?php the_field($project->ID, 'pdf'); ?>" target="_blank">
							<i class="fa fa-file-pdf-o"></i> PDF
						</a>
					</span>
				<?php endif; ?>
				<?= apply_filters('the_content', $project->post_content) ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<?php get_footer(); ?>