<!-- This file is used to markup the public-facing widget. 
The Title will appear for you. This section is wrapped in <aside> tags. -->
  <div class="textwidget">
  <?php if ( strlen( trim( $week ) )  > 0 ) : ?>
    <p>
      <span class="days-of-week">Monday-Friday:</span>
      <?php echo $week ?>
    </p>
  <?php endif; ?>

  <?php if ( strlen( trim( $sat ) )  > 0 ) : ?>
    <p>
      <span class="days-of-week">Saturday:</span> 
      <?php echo $sat ?>
    </p>
  <?php endif; ?>

  <?php if ( strlen( trim( $sun ) )  > 0 ) : ?>
    <p>
      <span class="days-of-week">Sunday:</span> 
      <?php echo $sun ?>
    </p>
  <?php endif; ?>
  </div>