<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="login" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php //$template->the_action_template_message( 'register' ); ?>
	<?php $template->the_errors(); ?>
	<form name="registerform" id="registerform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'register' ); ?>" method="post">
		<p>
		</br> <h2>Welcome to the Miracle Tracking Experiment</h2>
		</br> <b>This is not a normal website.</b>
		</br> </br> By signing you sign up for this site you are agreeing to be available for Miracles to happen in your life.
		</br> </br> For anyone to participate or view the site, they agree to the following three agreements. Please read and consider them before registering.
		</br></br>

		<label> <b>Agreeement 1:</b>  I agree to be willing to have Miracles happen in my life. 
		</br>(For the purposes of this site, a Miracle is defined as something positive that happens that alters your worldview and causes you to interpret the world and how it works in a new way. By agreeing to this you are agreeing to be willing to have how you see the world and how it works be altered )
		</br></br>If you agree to Agreement 1, please type 'I agree' in the box below
		</label>
			<input type="text" name="agreement1" id="agreement1<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'agreement1' ); ?>" size="20" />
		</br></br>

		<label> <b>Agreeement 2:</b>  If a Miracle happens, I agree to acknowledge that my willingness to have Miracles happen as part of the cause of the Miracle happening.
		</br></br>If you agree to Agreement 2, please type 'I agree' in the box below
		</label>
			<input type="text" name="agreement2" id="agreement2<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'agreement2' ); ?>" size="20" />
		</br></br>

		<label> <b>Agreeement 3:</b> If a Miracle happens, I agree to "track" that Miracle on this website by filling out the Miracle Tracking form within 48 hours of the Miracle. 
		</br></br>If you agree to Agreement 3, please type 'I agree' in the box below
		</label>
			<input type="text" name="agreement3" id="agreement3<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'agreement3' ); ?>" size="20" />
		</br></br>

		</p>
		<p>
			<label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username' ); ?></label>
			<input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="30" />
		</p>

		<p>
			<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'E-mail' ); ?></label>
			<input type="text" name="user_email" id="user_email<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_email' ); ?>" size="30" />
		</p>

		<?php do_action( 'register_form' ); ?>

		<p id="reg_passmail<?php $template->the_instance(); ?>"><?php echo apply_filters( 'tml_register_passmail_template_message', __( 'A password will be e-mailed to you.' ) ); ?></p>

		<p class="submit">
			<input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Register' ); ?>" />
			<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'register' ); ?>" />
			<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
			<input type="hidden" name="action" value="register" />
		</p>
	</form>
	
</div>
