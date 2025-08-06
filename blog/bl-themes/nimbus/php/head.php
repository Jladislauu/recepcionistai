<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<?php echo Theme::favicon('assets/img/favicon.png'); ?>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<?php
echo Theme::css('assets/vendor/bootstrap/css/bootstrap.min.css');
echo Theme::css('assets/vendor/bootstrap-icons/bootstrap-icons.css');
echo Theme::css('assets/vendor/glightbox/css/glightbox.min.css');
echo Theme::css('assets/vendor/swiper/swiper-bundle.min.css');
echo Theme::css('assets/vendor/aos/aos.css');
echo Theme::css('assets/css/main.css');
Theme::plugins('siteHead');
?>