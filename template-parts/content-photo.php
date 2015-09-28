<?php if ($image = get_field('photo')): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php else: ?>
    <div class="page-header">
        <h1>[Photo Not Found]</h1>
    </div>
<?php endif; ?>
