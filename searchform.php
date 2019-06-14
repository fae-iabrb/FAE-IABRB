<form class="search-form" action="<?php echo home_url(); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
  <input type="text" class="header-input-search" name="s" id="s" value="<?php the_search_query(); ?>" />
  <button type="submit" class="header-input-search-button" id="searchsubmit" value="Search"><img src="<?php echo get_template_directory_uri() ?>/lib/images/icons/search-icon.svg" width="15px" height="15px"/></button>
</form>