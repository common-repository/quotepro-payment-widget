<form class="quotepro-payment-widget" method="POST" action="<?php echo $url; ?>/<?php echo $lang; ?>/Payment/RetrievePayment">
  <div class="widget-title"><h3><?php _e($title); ?></h3></div>

  <?php if ( !empty( $affid ) ) {
  ?>
	  <input type="hidden" name="affid" value="<?php echo $aff; ?>"/>
  <?php } ?>

  <p><input name="Phone" class="number" class="Phone col-460"  placeholder="<?php _e('Enter Phone Number'); ?>" maxlength="15" required/></p>
  <p><input name="ZipCode" class="number" class="ZipCode col-460"  placeholder="<?php _e('Enter Zip Code'); ?>" maxlength="5" required/></p>
  <input type="submit" class="submit" value="Go" />
  <a class="colorbox" title="<?php _e($title); ?>" href="#"></a>
</form>
