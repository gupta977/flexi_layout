<?php
$data = flexi_image_data('thumbnail', get_the_ID(), $popup);
?>
<div class="fl-column">
  <div class="fl-box">
    <div class="flexi-gallery-portfolio_img <?php echo $data['popup']; ?>">
      <a <?php echo $data['extra'] . ' href="' . $data['url'] . '" data-caption="' . $data['title'] . '" data-src="' . $data['src'] . '" border="0"'; ?>>
        <p class="fl-title fl-is-5" style="<?php flexi_evalue_toggle('title', $evalue); ?>"> <?php echo $data['title']; ?> </p>
        <div class="flexi_figcaption"><?php echo $data['title']; ?></div>
      </a>
      <p class="fl-subtitle" style="<?php echo flexi_evalue_toggle('excerpt', $evalue); ?>"> <?php echo flexi_excerpt(20); ?></p>
    </div>
  </div>
</div>