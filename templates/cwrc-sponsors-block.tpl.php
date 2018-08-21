<?php

/**
 * @file
 * Displays a sponsors block.
 */
?>
<ul class="sponsors clearfix">
  <li class="sponsor-1"><img src="<?php print file_create_url(drupal_get_path('module', 'cwrc_theme_compat') . '/img/INN_CFI_ENB_2C_RGB.png'); ?>" alt="Canada Foundation for Innovation"></li>
  <li class="sponsor-2"><img src="<?php print file_create_url(drupal_get_path('module', 'cwrc_theme_compat') . '/img/sshrc.png'); ?>" alt="Social Sciences and Humanities Research Council of Canada"></li>
  <li class="sponsor-3"><img src="<?php print file_create_url(drupal_get_path('module', 'cwrc_theme_compat') . '/img/compute-canada.png'); ?>" alt="Compute Canada"></li>
  <li class="sponsor-4"><img src="<?php print file_create_url(drupal_get_path('module', 'cwrc_theme_compat') . '/img/canarie.jpg'); ?>" alt="Canarie"></li>
</ul>
<span class="more-sponsors"><?php print l(t('More Sponsors'), 'sponsors'); ?></span>
