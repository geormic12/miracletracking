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

<div style="text-align: center;">
<h1><span
 style="font-weight: bold;">Welcome to the Miracle
Tracking Experiment</span></h1>
</div>
This site is an experiment to answer the question: What happens when
you get a community of people willing and open to have Miracles
transform their lives, sharing their Miracles with each other?<br>
<br>
By signing you sign up for this site you are agreeing to be available
for Miracles in your life. <br>
<h4>All Miracle Tracking users
agree to two agreements for 45 days. <span
 style="color: rgb(102, 0, 0);">Please read and
consider them before registering.</span></h4>
<div style="margin-left: 40px;"><span
 style="text-decoration: underline; font-weight: bold;">Agreement
1:&nbsp; For 45 days, I agree to be willing to have Miracles alter
my life.</span><br>
</div>
<div style="margin-left: 40px;"><br>
<div style="margin-left: 40px;">For
the purpose of this site, a Miracle is something positive that happens
that alters your view of life and causes you to interpret life and how
it works in a new way.<br>
<br>
By agreeing to this, you are agreeing to be willing to have your
experience of the world, yourself, others and/or any other phenomena be
altered by a Miracle.<br>
</div>
</div>
<br>
<div style="margin-left: 80px;">If
you agree to this agreement, please type <span
 style="font-style: italic; font-weight: bold;">I agree</span>

in the box: <input type="text" name="agreement1" id="agreement1<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'agreement1' ); ?>" /><br>
</div>
&nbsp;<br>
<br>
<div style="margin-left: 40px;"><span
 style="font-weight: bold; text-decoration: underline;">Agreement
2: For 45 days, if a Miracle happens, I agree to share the Miracle by
filling out the Miracle Tracking form within 48 hours.</span><br>
</div>
<br>
<div style="margin-left: 80px;">If
you agree to this agreement, please type <span
 style="font-style: italic; font-weight: bold;">I agree</span>

in the box: <input type="text" name="agreement2" id="agreement2<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'agreement2' ); ?>" />
</div>
<br>
<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'E-mail' ); ?></label>
<input type="text" name="user_email" id="user_email<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_email' ); ?>" size="30" /><br>
<br>
<label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Display Name' ); ?></label>
<input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="30" />
<span style="font-style: italic;">
</span><small
 style="font-style: italic;">(This is the name that
will be displayed on the Miracles you track)</small><br><br>

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
