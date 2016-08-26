<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div class="offscreen__inner <?php print ($is_front) ? 'header-background--blue' : 'header-background'; ?>">


  <div id="page">

    <?php if (!$is_front):?><a id="skip-content" href="#skip-content"></a><?php endif;?>
    <div class="main_content" data-js="on-this-page__content responsive-video external-links">

      <div>
        <?php print render($page['highlighted']); ?>
        <?php if ($title): ?>
          <div class="layout-max spacer">
            <?php print $breadcrumb; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($title): ?>
        <h1 class="<?php print ($is_front) ? 'element-invisible' : 'page__title'; ?>" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($tabs); ?>
      <div role="main">
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_right'])): ?>
          <div class="layout-max">
            <section class="layout-sidebar__main">
              <?php print render($page['content']); ?>
            </section>
            <aside class="layout-sidebar__sidebar" role="complementary">
              <?php print render($page['sidebar_right']); ?>
            </aside>  <!-- /#sidebar-second -->
          </div>
        <?php else: ?>
          <?php print render($page['content']); ?>
        <?php endif; ?>

        <?php print $feed_icons; ?>
      </div>

    </div>

    <?php if (!empty($page['sidebar_right'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_right']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

    <?php if (theme_get_setting('feedback_enabled') == 1): ?>
      <div class="site-feedback-block" id="site-feedback-block">
        <div class="site-feedback-block__inner">
          <div class="main">
            <div class="site-feedback-block__content">
              <p><?php print check_plain(theme_get_setting('feedback_text_init')); ?></p>
            </div>
            <div class="site-feedback-block__simple">
              <a href="#" class="site-feedback-action" data-spf-option="1">Yes</a>
              <span class="divider">/</span>
              <a href="#" class="site-feedback-action" data-mfp-src="#site-feedback-form" data-spf-option="0">No</a>
            </div>
          </div>
          <div class="message" style="display: none;">
            <?php print theme_get_setting('feedback_text_ok'); ?>
          </div>
        </div>
      </div>
      <div id="site-feedback-form" class="site-feedback-form mfp-hide">
        <div class="site-feedback-form__content">
          <?php print render($site_pages_feedback_form); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (theme_get_setting('external_link_enable_popup') == 1): ?>
      <!-- External link popup window -->
      <div id="external-link-popup-content" class="external-link-popup mfp-hide">
        <h2><?php print check_plain(theme_get_setting('external_link_popup_title')); ?></h2>
        <div class="external-link-popup__content">
          <?php print filter_xss_admin(theme_get_setting('external_link_popup_text')); ?>
          <div>
            <ul>
              <li><a href="#" id="external-link-action-cancel">Cancel</a></li>
              <li><a href="#" id="external-link-action-continue">Continue</a></li>
            </ul>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php print render($page['footer_top']); ?>
    <div class="footer__wrapper">

      <div class="layout-max spacer--vertical center-left">

        <div class="spacer--medium show-at__medium"><?php print render($footer_menu); ?></div>

        <div class="spacer--large footer__border"><div class="copyright">
            <div class="copyright__left">
              <div class="copyright__item">
                <a href="http://creativecommons.org/licenses/by/3.0" target="_blank">
                  <img class="copyright__icon" src="https://i.creativecommons.org/l/by/3.0/88x31.png" alt="Attribution CC BY" />
                </a>
              </div>
              <div class="copyright__item"><?php print t('This work is licensed under a Creative Commons') . ' <br />' . t('Attribution 3.0 International License'); ?></div>
            </div>
            <div class="copyright__right">
              <?php print render($footer_auxilary_menu); ?>
              <div><?php print t('&copy; Attorney-General\'s Department') . ' ' . date('Y'); ?></div>
            </div>
          </div></div>

      </div>

    </div>

  </div>

  <?php print render($page['bottom']); ?>

</div>
