<?php $social_options = get_option( 'standard_theme_social_options' ); ?>

<ul class="nav social-icons clearfix">

	<?php if ( '' != $social_options['twitter'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['twitter'] ); ?>" title="<?php esc_attr_e( 'Twitter', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/twitter.png' ); ?>" alt="<?php esc_attr_e( 'Twitter', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<?php if ( '' != $social_options['facebook'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['facebook'] ); ?>" title="<?php esc_attr_e( 'Facebook', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/facebook.png' ); ?>" alt="<?php esc_attr_e( 'Facebook', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<?php if ( '' != $social_options['google_plus'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['google_plus'] ); ?>" rel="publisher" title="<?php esc_attr_e( 'Google+', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/google_plus.png' ); ?>" alt="<?php esc_attr_e( 'Google+', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<?php if ( '' != $social_options['pinterest'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['pinterest'] ); ?>" title="<?php esc_attr_e( 'Pinterest', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/pinterest.png' ); ?>" alt="<?php esc_attr_e( 'Pinterest', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<?php if ( '' != $social_options['linkedin'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['linkedin'] ); ?>" title="<?php esc_attr_e( 'Linkedin', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/linkedin.png' ); ?>" alt="<?php esc_attr_e( 'Linkedin', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<?php if ( '' != $social_options['youtube'] ) { ?>
		<li><a class="fademe" href="<?php echo esc_url( $social_options['youtube'] ); ?>" title="<?php esc_attr_e( 'YouTube', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/youtube.png' ); ?>" alt="<?php esc_attr_e( 'YouTube', 'standard'); ?>" /></a></li>
	<?php } // end if ?>

	<li><a class="fademe" href="<?php echo esc_url( $social_options['rss'] ); ?>" title="<?php esc_attr_e( 'Subscribe via RSS', 'standard'); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/social/big/rss.png' ); ?>" alt="<?php esc_attr_e( 'Subscribe via RSS', 'standard'); ?>" /></a></li>

</ul>