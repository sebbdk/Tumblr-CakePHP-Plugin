<?php echo $this->Html->script('/tumblr/js/lib/jquery-jsonp-2.2.1.min.js'); ?>
<?php echo $this->Html->script('/tumblr/js/jquery.tumblr.js'); ?>

<div id="blog_box" class="blog_box" style="visibility: hidden; border-bottom: 1px solid black">
	<div id="headline" class="headline"></div>
	<div id="breadcrumbs" class="breadcrumbs"></div>
	<div id="the_text" class="the_text"></div>
	
	<div id="question" class="question"></div>
	<div id="answer" class="answer"></div>
</div>

<div id="ajax_loader" class="ajax_loader">
	<?php echo $this->Html->image('/tumblr/img/ajax_loader.gif'); ?>
</div>

<div id="blog_holder">
	
</div>


