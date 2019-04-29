<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
    <!--footer-->

<?php if($this->options->footad && !empty($this->options->footad) ): ?><div class="branding branding-black">
	<div class="container">
		<?php $this->options->footad(); ?>
	</div>
</div><?php endif; ?>

<footer id="footer" class="footer">
	<div class="container">
		<?php if($this->options->flinks && !empty($this->options->flinks) ): ?>
		<div class="flinks"><?php /* 底部导航条 一般li格式 友情链接使用*/ ?>			
                <font color="red" size="2px"><strong>友情链接</strong></font>
			<ul class='xoxo blogroll'>
				<?php $this->options->flinks(); ?>
			</ul>
		</div><?php endif; ?>


		<?php if($this->options->fcode && !empty($this->options->fcode) ): ?><div class="fcode"><?php $this->options->fcode(); ?></div><?php endif; ?>



		<p>&copy; <?php echo date("Y"); ?> <a href="<?php $this->options ->siteUrl(); ?>"><?php $this->options->title();?></a>&nbsp; 本站所有资源链接均从互联网收集而来，版权归原创者所有，如果侵犯了你的权益，请通知我们( 904037151#qq.com #换@ )，我们会及时删除侵权内容，谢谢合作！ <a href="https://www.appmews.com/" target="_blank">APP喵</a>
</p>

加载用时：<?php echo timer_stop();?>	

		<div class="hide"></div>	
	</div>
</footer>
<?php if ($this->options->useHighline == 'able'): ?>
<script src="//cdn.bootcss.com/highlight.js/9.9.0/highlight.min.js"></script>
<?php endif; ?>
<script>
window.jsui={
    www: '<?php $this->options ->siteUrl(); ?>',
    uri: '<?php echo rtrim($this->options ->themeUrl,"/");?>',
    ver: '0.1',
	roll: [<?php if (!empty($this->options->sitebar_fu)) {$text = $this->options->sitebar_fu;}
	else{$text='1,2';} $sf_arr = explode(",", $text);foreach($sf_arr as $val){echo '"'.$val.'",';} //侧边栏第几个模块浮动?>],
    ajaxpager: '0',
    url_rp: '<?php $this->options->adminUrl('login.php'); ?>'
};



</script>








<script type="text/javascript">

    /*
     * https://heidb.cn
     */
    !function (e, t, a) {
        function r() {
            for (var e = 0; e < s.length; e++) s[e].alpha <= 0 ? (t.body.removeChild(s[e].el), s.splice(e, 1)) : (s[e].y--, s[e].scale += .004, s[e].alpha -= .013, s[e].el.style.cssText = "left:" + s[e].x + "px;top:" + s[e].y + "px;opacity:" + s[e].alpha + ";transform:scale(" + s[e].scale + "," + s[e].scale + ") rotate(45deg);background:" + s[e].color + ";z-index:99999");
            requestAnimationFrame(r)
        }

        function n() {
            var t = "function" == typeof e.onclick && e.onclick;
            e.onclick = function (e) {
                t && t(), o(e)
            }
        }

        function o(e) {
            var a = t.createElement("div");
            a.className = "heart", s.push({
                el: a,
                x: e.clientX - 5,
                y: e.clientY - 5,
                scale: 1,
                alpha: 1,
                color: c()
            }), t.body.appendChild(a)
        }

        function i(e) {
            var a = t.createElement("style");
            a.type = "text/css";
            try {
                a.appendChild(t.createTextNode(e))
            } catch (t) {
                a.styleSheet.cssText = e
            }
            t.getElementsByTagName("head")[0].appendChild(a)
        }

        function c() {
            return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
        }

        var s = [];
        e.requestAnimationFrame = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) {
            setTimeout(e, 1e3 / 60)
        }, i(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"), n(), r()
    }(window, document);
</script>






<script type='text/javascript' src='//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js?ver=0.1'></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/loader.js?ver=0.1'); ?>'></script>
<?php if($this->options->GoogleAnalytics): ?>
<?php $this->options->GoogleAnalytics(); ?>
<?php endif; ?>
<?php $this -> footer(); ?>
</body>
</html>