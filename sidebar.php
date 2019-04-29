<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<aside class="sidebar">
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>


    <div class="widget widget-tops">
      <ul class="widget-nav">
        <li class="active">最新文章</li>
        <li class="active">喵喵喵喵</li>
        <li class="active">谢谢支持</li>
     </ul>
      <ul class="widget-navcontent">
        <li class="item item-01">
          <ul>
		<?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($post); ?>
		<?php while($post->next()): ?>
		<li><time><?php $post->date('m-d'); ?></time><a href="<?php $post->permalink(); ?>" title="<?php $post->title(); ?>"><?php $post->title(); ?></a></li>
		<?php endwhile; ?>
          </ul>
        </li>

        <li class="item item-02 active">
              <h4>如果觉得本站不错请点下广告谢谢 </h4> 
        </li>
       
        <li class="item item-04 ">
            <table><tr> 
    <td>#微信<img alt="" src="https://www.appmews.com/usr/uploads/2019/04/1282187981.jpg" width="140" hegiht="150" align=center /></td> 
    <td>#支付宝<img alt="" src="https://www.appmews.com/usr/uploads/2019/04/2170590763.jpg" width="140" hegiht="150" align=center /></td> 
        </tr></table>
        </li>

      </ul>
    </div>

	<?php endif; ?>


<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>


    <div class="widget widget-tops">
      <ul class="widget-nav">
        <li class="active">最热随机</li>
     </ul>
      <ul class="widget-navcontent">
        <li class="item item-01 active">
          <ul>
		<?php $this->widget('Widget_Contents_Post_Recent','pageSize=1')->to($post); ?>
		<?php ArticleList::hot(); ?>
		<li><time><?php $post->date('m-d'); ?></time><a href="<?php $post->permalink(); ?>" title="<?php $post->title(); ?>"><?php $post->title(); ?></a></li>

          </ul>
        </li>

       
    </div>

	<?php endif; ?>



	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
	<?php $sad1=sitebar_ad($this->options->sidebarAD); 
	$maxi=floor(count($sad1)/3);
	for($i=1;$i<=$maxi;$i++){
		$icss=($i%2)+1;
		$tmp='<div class="widget widget_ui_textasb"><a class="style0'.$icss.'" href="'.$sad1[$i*3-3].'" target="_blank"><strong>特别推荐</strong><h2>'.$sad1[$i*3-2].'</h2><p>'.$sad1[$i*3-1].'.</p></a></div>';
		echo $tmp;
	} ?>
	<?php endif; ?>

	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
	<div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>

    <div class="widget widget_ui_comments">


  <h3>最新评论</h3>
      <ul>
	  <?php $this->widget('Widget_Comments_Recent','pageSize=3')->to($comments); ?>
		<?php while($comments->next()): ?>
		<li>
          <a href="<?php $comments->permalink(); ?>" title="<?php $comments->title(); ?>上的评论">
            <?php $comments->gravatar('50', 'robohash'); ?>
            <strong><?php $comments->author(false); ?></strong>(<?php $comments->date('m-d'); ?>)说：
            <br><?php $comments->excerpt(22, '...'); ?></a></li>
		<?php endwhile; ?>
      </ul>
    </div>
	<?php endif; ?>
	<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?>
    <div class="widget widget_ui_tags">



      <h3>标签云</h3>
      <div class="items"><?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=40')->to($tags); ?><?php while($tags->next()): ?>
<a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?> （<?php $tags->count(); ?>）</a>
<?php endwhile; ?></div>










    </div>
	<?php endif; ?>



  </aside><!-- end #sidebar -->
