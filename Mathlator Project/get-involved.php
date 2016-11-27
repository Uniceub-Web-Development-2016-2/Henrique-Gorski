<?php session_start(); ?>
<?php include_once('view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Get Involved</title>
    <meta name="description" content="Get involved helping us to spread and develop calculators and tools in Mathlator Project website.">
    <meta name="keywords" content="get, involved, mathlator, project, calculators, tools">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>Get Involved</h2>
            </div>
            <div id="content-info">
                <p>Did you find the website tools useful? <strong>Help us</strong> to spread to the world! <strong>Share</strong> the page link and <strong>follow us</strong> in our social medias listed <strong>below</strong>. Your contribution <strong>matters a lot!</strong></p>
            </div>
            <div id="content-principal">
                <div class="fb-page" data-href="https://www.facebook.com/mathlator" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mathlator" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mathlator">Mathlator</a></blockquote></div>
            </div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>
