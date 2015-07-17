<?php
/**
 * @file
 *
 * Template (admin) for the ob-glossary layout.
 */
?>
<div class="container po-box">
  <div class="row">
    <?php if (!empty($content['top'])) : ?>
      <?php print $content['top']; ?>
    <?php endif; ?>

    <?php if (!empty($content['content_left'])) : ?>
      <?php print $content['content_left']; ?>
    <?php endif; ?>

    <?php if (!empty($content['content_center'])) : ?>
    <div class="col-xs-9 right-line-office">
      <?php print $content['content_center']; ?>
      </div>
    <?php endif; ?>

  </div>
</div>
