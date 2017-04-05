<?php

/**
 * @file
 * Returns the HTML for the share row.
 */
?>
<div class="social-share-links">
  <h2><?php print t('Share this'); ?></h2>
  <ul class="share-links">
    <li class="facebook">
      <a class="no-style" rel="external" target="_blank" href="//www.facebook.com/share.php?u=<?php print $url; ?>">
        <span class="visually-hidden"><?php print t('Share article on '); ?></span><span>Facebook</span>
      </a>
    </li>
    <li class="twitter">
      <a class="no-style" rel="external" target="_blank" rel="nofollow" href="//twitter.com/intent/tweet?status=<?php print $title; ?>+<?php print $url; ?>">
        <span class="visually-hidden"><?php print t('Share article on '); ?></span><span>Twitter</span>
      </a>
    </li>
    <li class="google-plus">
      <a class="no-style" rel="external" target="_blank" href="//plus.google.com/share?url=<?php print $url; ?>">
        <span class="visually-hidden"><?php print t('Share article on '); ?></span><span>Google Plus</span>
      </a>
    </li>
  </ul>
</div>
