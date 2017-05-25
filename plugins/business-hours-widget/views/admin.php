<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
  <p><label for="<?php echo $this->get_field_id('title'); ?>"><strong>Title:</strong></label>
	  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
  </p>
  <p><label for="<?php echo $this->get_field_id('week'); ?>"><strong>Monday-Friday:</strong> </label>
    
	  <input class="widefat" id="<?php echo $this->get_field_id('week'); ?>" name="<?php echo $this->get_field_name('week'); ?>" type="text" value="<?php echo $week; ?>">
  </p>
  <p><label for="<?php echo $this->get_field_id('sat'); ?>"><strong>Saturday:</strong></label>    
	  <input class="widefat" id="<?php echo $this->get_field_id('sat'); ?>" name="<?php echo $this->get_field_name('sat'); ?>" type="text" value="<?php echo $sat; ?>">  
  </p>
  <p><label for="<?php echo $this->get_field_id('sun'); ?>"><strong>Sunday:</strong>:</label>
	  <input class="widefat" id="<?php echo $this->get_field_id('sun'); ?>" name="<?php echo $this->get_field_name('sun'); ?>" type="text" value="<?php echo $sun; ?>">  
  </p>
</div>
