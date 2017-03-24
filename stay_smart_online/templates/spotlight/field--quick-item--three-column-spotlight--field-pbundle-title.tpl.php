<?php
/**
 * @file
 * Template implementation to correctly output title in 3 column grid.
 */
?>
<?php foreach ($items as $delta => $item): ?>
  <div class="heading--5"><?php print stay_smart_online_trim(render($item), 50); ?></div>
<?php endforeach; ?>
