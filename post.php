<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="container">
        <header>
		<nav id="nav-menu">
        <ul class="topNav-items" itemscope itemtype="http://schema.org/BlogPosting">
            <li class="menu-item<?php if($this->is('index')): ?> current-menu-item<?php endif; ?>"> <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="menu-item<?php if($this->is('page', $pages->slug)): ?> current-menu-item<?php endif; ?>"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </nav>
		
            <div class="post-title" itemprop="name headline"><?php $this->title() ?></div>
            <div class="post-time" itemprop="datePublished">
                <time><?php $this->date('Y-m-d'); ?></time>&nbsp;&nbsp;&nbsp;<?php _e('分类：'); ?><?php $this->category(','); ?>
            </div>
        </header>
        <div class="diary" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="post-tags"><?php $this->tags('', true, ''); ?></p>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
