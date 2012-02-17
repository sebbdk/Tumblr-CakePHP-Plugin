<?php echo $this->Html->script('/tumblr/js/lib/jquery-jsonp-2.2.1.min.js'); ?>
<?php echo $this->Html->script('/tumblr/js/jquery.tumblr.js'); ?>
<?php echo $this->Html->script('/tumblr/js/init.js'); ?>

<div id="entryTemplate" class="entry" style="display:none;">
	<h3 class="tumblr-title"></h3>
	<div class="tumblr-type"></div>
	<div class="tumblr-date"></div>
	<div class="tumblr-url"></div>
	<p class="tumblr-body"></p>
	<hr />
</div>

<div id="blogHolder">
	Loading content from Tumblr please wait...
</div>


