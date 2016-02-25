<?php if( have_rows('repeater_field_name') ): ?>

  <?php while ( have_rows('repeater_field_name') ) : the_row(); ?>

  <?php endwhile; ?>

<?php else :

  // no rows found

endif; ?>
