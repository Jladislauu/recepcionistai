<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include(THEME_DIR_PHP.'head.php'); ?>
  <!-- =======================================================
  * Template Name: Nimbus
  * Template URL: https://bluditlab.com/themes/technology/nimbus
  * Updated: April 19th, 2024
  * Author: BluditLab
  * License: CC BY-NC
  ======================================================== -->
</head>
<body class="blog<?php if ($WHERE_AM_I == 'page') { echo '-details'; } ?>-page" data-bs-spy="scroll" data-bs-target="#navmenu">
  <?php Theme::plugins('siteBodyBegin'); ?>
  <header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="<?php echo $site->url(); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1><?php echo $site->title(); ?></h1>
      </a>
      <?php include(THEME_DIR_PHP.'navigation.php'); ?>
    </div>
  </header>
  <main id="main">
    <div class="page-title">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <?php
              if ($WHERE_AM_I != 'home') { echo '<li><a href="'.$site->url().'">Home</a></li>'; }
              if ($WHERE_AM_I == 'page') {
                if ($page->categoryPermalink()) {
                  echo '<li><a href="'.$page->categoryPermalink().'">'.$page->category().'</a></li>';
                }
                echo '<li class="current">'.$page->title().'</li>';
              } elseif ($WHERE_AM_I == 'category') {
                $categoryKey = $url->slug();
                $category = new Category($categoryKey);
                echo '<li class="current">'.$category->name().'</li>';
              } elseif ($WHERE_AM_I == 'error') {
                echo '<li class="current">ERROR</li>';
              } elseif ($WHERE_AM_I == 'search') {
                echo '<li class="current">Searching</li>';
              } else {
                echo '<li class="current">Home</li>';
              }
            ?>
          </ol>
        </div>
      </nav>
    </div>
    <section id="blog<?php if ($WHERE_AM_I == 'page') { echo '-details'; } ?>" class="blog<?php if ($WHERE_AM_I == 'page') { echo '-details'; } ?>">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <?php
          if ($WHERE_AM_I == 'page') {
            if ($WHERE_AM_I == 'error') {
              //include(THEME_DIR_PHP.'error.php');
            } else {
              include(THEME_DIR_PHP.'page.php');
            }
          } else {
            include(THEME_DIR_PHP.'home.php');
          }
        ?>
      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-12 footer-about">
          <a href="<?php echo $site->url(); ?>" class="logo d-flex align-items-center">
            <span><?php echo $site->title(); ?></span>
          </a>
          <p><?php echo $site->description(); ?></p>
          <div class="social-links d-flex mt-4">
            <?php
              foreach (Theme::socialNetworks() as $key=>$label) {
                echo '<a href="'.$site->{$key}().'" target="_blank"><i class="bi bi-'.str_replace('twitter', 'twitter-x', $key).'"></i></a>';
              }
            ?>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Categories</h4>
          <ul>
            <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
            <li>
              <a href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a>
            </li>
            <?php endif;endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Pages</h4>
          <ul>
            <?php
              foreach ($staticContent as $staticPage) {
                  echo '<li>';
                    echo '<a href="'.$staticPage->permalink().'">'.$staticPage->title().'</a>';
                  echo '</li>';
              }
            ?>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 footer-links text-center text-md-start">
          <h4>Recent Posts</h4>
          <ul>
            <?php
              $latestFive = $pages->getList(1, 5, true);
              foreach ($latestFive as $key) {
                  $footerPage = buildPage($key);
                  echo '<li>';
                    echo '<a href="'.$footerPage->permalink().'">'.$footerPage->title().'</a>';
                  echo '</li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <?php echo date('Y'); ?> <strong><a href="<?php echo $site->url(); ?>" class="fw-bold"><?php echo $site->title(); ?></a></strong>; <span>All Rights Reserved</span></p>
      <div class="credits">
        Powered by <a href="https://www.bludit.com" class="fw-bold" target="_blank">Bludit</a> - Theme by <a href="https://bluditlab.com/themes/technology/nimbus" class="fw-bold" target="_blank">BluditLab</a>
      </div>
    </div>
  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  <?php
	 echo Theme::js('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
   echo Theme::js('assets/vendor/glightbox/js/glightbox.min.js');
   echo Theme::js('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js');
   echo Theme::js('assets/vendor/isotope-layout/isotope.pkgd.min.js');
   echo Theme::js('assets/vendor/swiper/swiper-bundle.min.js');
   echo Theme::js('assets/vendor/aos/aos.js');
   echo Theme::js('assets/js/main.js');
	Theme::plugins('siteBodyEnd');
  ?>
</body>
</html>