<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <footer class="site-footer">
       <p>&copy; <?php echo date('Y'); ?>&nbsp;<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
	   <p>Theme by <a href="http://varfate.com" target=_blank>Klose</a> & <a href="https://lhcy.org" target=_blank>LinHai</a><p>
    </footer>

<?php $this->footer(); ?>
</body>
</html>
