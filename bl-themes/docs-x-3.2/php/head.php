<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<!-- <?php echo Theme::metaTags('description'); ?> -->

<!-- Favicon -->
<!-- <?php echo Theme::favicon('img/favicon.png'); ?> -->

<meta name="title" content="UbuntuCE -- Documentation" />
<meta name="description" content="Ubuntu Christian Edition Documentation" />
<link rel="apple-touch-icon" sizes="180x180" href="/bl-themes/docs-x-3.2/img/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/bl-themes/docs-x-3.2/img/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/bl-themes/docs-x-3.2/img/favicon-16x16.png" />
<link rel="manifest" href="/bl-themes/docs-x-3.2/img/site.webmanifest" />
<link rel="mask-icon" href="/bl-themes/docs-x-3.2/img/safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#ffffff" />

<meta property="og:type" content="website" />
<meta property="og:url" content="https://docs.ubuntuce.com/" />
<meta property="og:title" content="UbuntuCE -- Documentation" />
<meta property="og:description" content="Ubuntu Christian Edition Documentation" />
<meta property="og:image" content="https://docs.ubuntuce.com/bl-themes/docs-x-3.2/img/bible-laptop.jpg" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://ubuntuce.com/" />
<meta property="twitter:title" content="UbuntuCE Documentation" />
<meta property="twitter:description" content="Ubuntu Christian Edition Documentation" />
<meta property="twitter:image" content="https://docs.ubuntuce.com/bl-themes/docs-x-3.2/img/bible-laptop.jpg" />

<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/style.css'); ?>

<!-- CSS: Highlight -->
<?php echo Theme::css('css/highlight.github.min.css'); ?>

<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
