<?php if (empty($content)) { echo $language->p('No pages found'); } else { echo '<div class="row gy-4 posts-list">'; foreach ($content as $page) { ?>
<div class="col-xl-4 col-lg-6">
    <article>
        <div class="post-img">
        <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('assets/img/no-image.png')); ?>" alt="<?php echo htmlspecialchars($page->title(), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid">
        </div>
        <p class="post-category"><?php echo $page->category() ?></p>
        <h2 class="title">
        <a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
        </h2>
        <div class="d-flex align-items-center">
        <img src="<?php echo $page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('assets/img/no-image.png'); ?>" alt="<?php echo htmlspecialchars($page->user('nickname'), ENT_QUOTES, 'UTF-8'); ?> Avatar" class="img-fluid post-author-img flex-shrink-0">
        <div class="post-meta">
            <p class="post-author"><?php echo $page->user('nickname'); ?></p>
            <p class="post-date">
            <time datetime="2022-01-01"><?php echo $page->date(); ?></time>
            </p>
        </div>
        </div>
    </article>
</div>
<?php } echo '</div>'; } ?>