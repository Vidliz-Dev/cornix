<div class="block-preview">
    <?php if (empty(block_value('preview-image'))) { ?>
       <h3>Section</h3>
    <?php } else { ?>
      <img src="<?php block_field('preview-image'); ?>" style="width:100%; height:auto;">
    <?php } ?>      
</div>