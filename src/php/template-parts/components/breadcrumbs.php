<?php
$items = get_query_var('breadcrumb_items', []);
?>

<div class="breadcrumbs">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs__text">TOP</a>

  <?php if (!empty($items)) : ?>
    <?php foreach ($items as $index => $item) : ?>

      <?php if ($index === array_key_last($items)) : ?>
        <span class="breadcrumbs__text">
          <?php echo esc_html($item['label']); ?>
        </span>
      <?php else : ?>
        <a href="<?php echo esc_url($item['url']); ?>" class="breadcrumbs__text">
          <?php echo esc_html($item['label']); ?>
        </a>
      <?php endif; ?>

    <?php endforeach; ?>
  <?php endif; ?>
</div>