<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>



<div class="container container-page">
	<div class="pageside">
	<div class="pagemenus">
		<ul class="pagemenu">
		<?php $this->widget('Widget_Contents_Page_List')->to($cpages);?>
<?php while ($cpages->next()): ?>
<li<?php if($cpages->title==$this->title){print ' class="active"';} ?>><a href="<?php $cpages->permalink();?>"><?php $cpages->title();?></a></li>
<?php endwhile; ?> 
		</ul>
	</div>
	</div>	

        <div class="article-meta">
		<span class="item"><?php echo date('Y-m-d H:i:s', $this->modified); ?>更新</span>
		<span class="item post-views">阅读(<?php get_post_view($this) ?>)</span>
		<span class="item">评论(<?php $this->commentsNum('0', '1', '%d'); ?>)</span>
	</div>

	<div class="content">
	<header class="article-header">
	<h1 class="article-title"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h1>
	</header>
	<article class="article-content">
	<?php parseContent($this); ?>
	</article>

        <div class="article-meta">
		<span class="item"><?php $this->date('Y-m-d'); ?></span>
		<span class="item post-views">阅读(<?php get_post_view($this) ?>)</span>
		<span class="item">评论(<?php $this->commentsNum('0', '1', '%d'); ?>)</span>
	</div>











<div class="post-copyright">未经允许不得转载：<a href="<?php $this->options ->siteUrl(); ?>"><?php $this->options->title();?></a> &raquo; <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></div>

<?php $this->need('comments.php'); ?>				
	</div>
</div>
<?php $this->need('footer.php'); ?>
