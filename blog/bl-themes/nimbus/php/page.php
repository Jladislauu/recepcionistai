<?php Theme::plugins('pageBegin'); ?>
<div class="row g-5">
    <div class="col-lg-8">
        <article class="article">
            <?php if ($page->coverImage()) { ?><div class="post-img"><img src="<?php echo $page->coverImage(); ?>" alt="<?php echo htmlspecialchars($page->title(), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid"></div><?php } ?>
            <h2 class="title"><?php echo $page->title(); ?></h2>
            <div class="meta-top">
                <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?php echo $page->user('nickname'); ?></li>
                    <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <?php echo $page->date(); ?></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?php echo $page->readingTime(); ?></li>
                </ul>
            </div>
            <div class="content">
                <?php echo $page->content(); ?>
            </div>
            <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                    <li><a href="<?php echo $page->categoryPermalink(); ?>"><?php echo $page->category(); ?></a></li>
                </ul>
                <?php if (!empty($page->tags(true))) { ?>
                    <i class="bi bi-tags"></i>
                    <ul class="tags">
                        <?php foreach ($page->tags(true) as $tagKey=>$tagName) { echo '<li><a href="'.DOMAIN_TAGS.$tagKey.'">'.$tagName.'</a></li>'; } ?>
                    </ul>
                <?php } ?>
            </div>
        </article>
    </div>
    <div class="col-lg-4">
        <div class="sidebar">
            <?php Theme::plugins('siteSidebar') ?>
        </div>
    </div>
</div>
<?php Theme::plugins('pageEnd'); ?>