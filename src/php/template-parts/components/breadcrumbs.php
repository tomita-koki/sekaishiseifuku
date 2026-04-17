<div class="breadcrumbs">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs__text">TOP</a>

  <?php if (!empty($args['current_url']) && !empty($args['current_label'])) : ?>
    <a href="<?php echo esc_url($args['current_url']); ?>" class="breadcrumbs__text">
      <?php echo esc_html($args['current_label']); ?>
    </a>
  <?php endif; ?>
</div>