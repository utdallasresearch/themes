// Projects Filter

jQuery(function() {

  let $ = jQuery;

  let doProjectFilter = function() {

    let query = document.querySelector('input.project_searchbox').value;
    let department = document.querySelector('select.department_filter option:checked').value;
    let sponsor = document.querySelector('select.sponsor_filter option:checked').value;
    let industry = document.querySelector('select.industry_filter option:checked').value;
    let solution = document.querySelector('select.solution_filter option:checked').value;
    let award = document.querySelector('select.award_filter option:checked').value;
    let national = document.querySelector('input.national_filter').checked;
    let semester = document.querySelector('select.semester_filter option:checked').value;
    let year = document.querySelector('select.year_filter option:checked').value;

    let $projects = $('#project_section .project');

    let $filtered_projects = $projects.filter(function (index, project) {

      let search_filtered = (query === '') || project.textContent.includes(query);
      let dept_filtered = (department === 'all') || project.getAttribute('data-department').includes(department);
      let sponsor_filtered = (sponsor === 'all') || (project.getAttribute('data-sponsor') === sponsor);
      let industry_filtered = (industry === 'all') || project.getAttribute('data-industry').includes(industry);
      let solution_filtered = (solution === 'all') || project.getAttribute('data-solution').includes(solution);
      let award_filtered = (award === 'all') || (project.getAttribute('data-award') === award);
      let national_filter = national ? (project.getAttribute('data-national') === '1') : true;
      let semester_filtered = (semester === 'all') || (project.getAttribute('data-semester') === semester);
      let year_filtered = (year === 'all') || (project.getAttribute('data-year') === year);

      return search_filtered && dept_filtered && sponsor_filtered && industry_filtered && solution_filtered && award_filtered && national_filter && semester_filtered && year_filtered;
    });

    $projects.not($filtered_projects).hide();
    $filtered_projects.show();

    if ($projects.length === $filtered_projects.length) {
      $('#project_count').hide().html('');
    } else {
      $('#project_count').show().html("Matched " + $filtered_projects.length + " projects (out of " + $projects.length + ")");
    }
  }

  $.fn.extend({
    toggleAria: function (property) {
      return this.each(function () {
        let $this = $(this);
        let aria = 'aria-' + property;
        let currently = $this.attr(aria);
        $this.attr(aria, (currently === 'true') ? 'false' : 'true');
      });
    },
  });

  // Register event listeners

  $('#ActivateSearch').click(function() {
    $(this).toggleAria('expanded');
    $('#search_and_filter_container').toggle();
  });

  $('#filterResetForm').click(function() {
    $('#project_section .project').show();
  });

  $('#search_and_filter_form').submit(function(event) {
    doProjectFilter();
    event.preventDefault();
  });

  $('#search_and_filter_form').on('reset', function(event) {
    $('#project_count').hide().html('');
  });

});

// Polyfill String.includes for IE
if (!String.prototype.includes) {
  String.prototype.includes = function (search, start) {
    'use strict';

    if (search instanceof RegExp) {
      throw TypeError('first argument must not be a RegExp');
    }
    if (start === undefined) { start = 0; }
    return this.indexOf(search, start) !== -1;
  };
}