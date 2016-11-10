<?php if ( ap_user_can_answer(get_question_id() ) ) : ?>
	<div id="answer-form-c" class="ap-minimal-editor">
		<div class="ap-avatar ap-pull-left">
			<a href="<?php echo ap_user_link(get_current_user_id() ); ?>"<?php ap_hover_card_attributes(get_current_user_id() ); ?>>
				<?php echo get_avatar(get_current_user_id(), ap_opt('avatar_size_qquestion' ) ); ?>
			</a>
		</div>
		<div class="ap-a-cells ap-form-c clearfix">
			<div class="ap-minimal-placeholder">
				<div class="ap-dummy-editor"></div>
				<div class="ap-dummy-placeholder"><?php _e( 'Write your answer..', 'anspress-question-answer' ); ?></div>
				<div class="ap-editor-fade" ap="loadEditor" ap-query="ap_ajax_action=load_tinymce&post_type=answer" data-loadclass="ripple-loading"></div>
			</div>
			<div id="ap-form-main">
				<?php ap_answer_form( get_question_id() ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php ap_get_template_part('login-signup' ); ?>
