<?php
/**
 * 宽版页面
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="article-meta">
		<p align="center"><span class="item"><?php echo date('Y-m-d H:i:s', $this->modified); ?>更新</span>
		<span class="item post-views">阅读(<?php get_post_view($this) ?>)</span>
		<span class="item">评论(<?php $this->commentsNum('0', '1', '%d'); ?>)</span></p>
	</div>


<div class="container container-no-sidebar">
	<div class="content">
	<header class="article-header">
	<h1 class="article-title"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h1>
	</header>

	<article class="article-content">
		<?php parseContent($this); ?>
	</article>



<?php $this->need('comments.php'); ?>		

</div>
</div>
<?php $this->need('footer.php'); ?>