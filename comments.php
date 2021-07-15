<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="responsesWrapper">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<div class="comments-title"><?php $this->commentsNum(_t(''), _t('已有 1 条评论'), _t('已有 %d 条评论')); ?></div>
    <div class="comment-list-wrap">
    <?php $comments->listComments(); ?>
    </div>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
   
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<div id="response" class="comment-reply-title"><?php _e('发表看法'); ?></div>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="comment-form-author">
            <label for="author"><?php _e('称呼'); ?> <span class="required">*</span></label>
    			<input type="text" name="author" id="author" class="text" placeholder="<?php _e('必填'); ?>" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p class="comment-form-email">
                <label for="mail"><?php _e('Email'); ?> <span class="required">*</span></label>
    			<input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('必填，不会被公开'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p class="comment-form-url">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p class="comment-form-comment">
                <label for="textarea"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" placeholder="欢迎参与讨论，请在这里发表您的看法、交流您的观点。" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p class="form-submit">
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <div style="display:none;"><?php _e(''); ?></div>
    <?php endif; ?>
</div>
