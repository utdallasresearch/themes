<?php
/**
 * Template part for displaying top UTD green bar
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ganymede
 */

?>


<section id="UTD-TOPBAR" class="topbar">
    <div class="container">
      <div class="row">
        <div class="topbar col-md-12">
          <div class="utd-wordmark"> <a href="https://www.utdallas.edu/">The University of Texas at Dallas</a> </div>
          <div class="searchbox">
            <form role="search" action="/search/">
              <label class="screen-reader-only" for="sitesearch">Search UTD</label>
              <input type="hidden" value="main" name="s">
              <input type="text" value="Search UT Dallas" name="q" onclick="this.value=''" id="sitesearch">
              <button type="submit" class="search-button" aria-label="Submit search"><img src=""></button>
            </form>
          </div>
          <div class="link-set">
            <ul>
              <li><a href="https://galaxy.utdallas.edu">Galaxy</a></li>
              <li><a href="https://elearning.utdallas.edu">eLearning</a></li>
              <li><a href="/directory/">Directory</a></li>
              <li><a href="/maps/">Maps</a></li>
              <li><a href="https://giving.utdallas.edu">Give</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #UTD-TOPBAR -->