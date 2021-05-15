<?php
$data = flexi_image_data('thumbnail', get_the_ID(), $popup);
?>
<div class="fl-column">
<div class="fl-card">
  <header class="fl-card-header">
    <p class="fl-card-header-title">
  <?php echo  $data['title']; ?>
    </p>
  </header>
   <div class="fl-card-image">
      <div class="fl-image flexi-gallery-portfolio_sub">
        <div class="flexi-gallery-portfolio_img <?php echo $data['popup']; ?> flexi_effect" id="<?php echo $hover_effect; ?>">
          <a <?php echo $data['extra'] . ' href="' . $data['url'] . '" data-caption="' . $data['title'] . '" data-src="' . $data['src'] . '" border="0"'; ?>>
            <img src="<?php echo esc_url(flexi_image_src('medium', $post)); ?>" alt="<?php echo $data['title']; ?>" />
            <div class="flexi_figcaption"><?php echo $data['title']; ?></div>
          </a>
        </div>
      </div>
    </div>
  <div class="fl-card-content">
    <div class="fl-content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
      <a href="#">@bulmaio</a>
    </div>
  </div>
  

  <footer class="fl-card-footer">
 
    <a href="<?php echo get_post_meta($post->ID, 'flexi_field_1', '')[0]; ?>" class="fl-card-footer-item">
	<?php echo flexi_get_option('flexi_field_1_label', 'flexi_custom_fields', ''); ?></a>
	
    <a href="<?php echo get_post_meta($post->ID, 'flexi_field_2', '')[0]; ?>" class="fl-card-footer-item">
	<?php echo flexi_get_option('flexi_field_2_label', 'flexi_custom_fields', ''); ?></a>
  </footer>
</div>
</div>