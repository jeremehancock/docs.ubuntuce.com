<h1 class="title"><?php echo $page->title(); ?></h1>

<div class="d-none d-lg-block">
<div id="toc">
	<ul id="toc-content"></ul>
</div>
</div>

<div id="page-content">
<?php echo $page->content(); ?>
</div>

<?php if (!$url->notFound()): ?>
<div class="text-right mt-5">
	<a class="btn btn-primary" target="_blank" href="<?php echo $GITHUB_BASE_URL.$page->key().'/'.$FILENAME ?>"><?php echo $language->get('Help Make This Page Better'); ?></a>
</div>
<?php endif ?>
