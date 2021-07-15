<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="container">
<nav id="nav-menu">
        <ul class="topNav-items">
            <li class="menu-item<?php if($this->is('index')): ?> current-menu-item<?php endif; ?>"> <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="menu-item<?php if($this->is('page', $pages->slug)): ?> current-menu-item<?php endif; ?>"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
</nav>	
<main class="main-content">
    <section class="blockGroup">
    <h1 class=archiveTitle><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>	
		
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
	    <article itemscope itemtype="http://schema.org/BlogPosting">
		<div class="posttime" itemprop="datePublished">
                    <time><?php $this->date('Y/m/d'); ?></time>

                <div class="block-title" itemprop="name headline">
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </div>

                </div>
            </article>
        <?php endwhile; ?>
        <?php else: ?>
            <article>
                <div class="block-title"><?php _e('没有找到内容'); ?></div>
            </article>
        <?php endif; ?>
    </section>
   <!-- <?php $this->pageNav('<', '>'); ?> -->
   <nav class="blog-nav">

<?php $this->pageLink('<span>上一页</span>'); ?>
<?php $this->pageLink('<span>下一页</span>','next'); ?>
   </nav>
</main>
</div>
<?php $this->need('footer.php'); ?>

