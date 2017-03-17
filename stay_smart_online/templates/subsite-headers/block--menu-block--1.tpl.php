<?php
/**
 * @file
 * Default theme implementation for blocks.
 */
?>
<div class="subsite-header subsite--sso">
  <div class="subsite-header__branding">
    <div class="subsite-header__layout">
      <a href="<?php print base_path() . drupal_get_path_alias('taxonomy/term/15'); ?>" class="subsite-header__logo-large">
        <img src="<?php print base_path() . drupal_get_path('theme', 'stay_smart_online'); ?>/images/example-svgs/business-area/sso--large.svg" alt="Logo" />
      </a>
    </div>

    <div class="subsite-header__layout--small">
      <a href="<?php print base_path() . drupal_get_path_alias('taxonomy/term/15'); ?>" class="subsite-header__logo-small">
        <img src="<?php print base_path() . drupal_get_path('theme', 'stay_smart_online'); ?>/images/example-svgs/business-area/sso--small.svg" alt="Logo" />
      </a>
      <nav class="subsite-header__nav" role="navigation" id="subsite-naviagtion">
        <?php print render($content); ?>
      </nav>
    </div>
   </div>
 </div>
