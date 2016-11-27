<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Fail Registration</title>
    <meta name="description" content="Fail registration page.">
    <meta name="keywords" content="registration">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
			<h2>Fail Registration!</h2>
            </div>
            <div id="content-info-profile">
				<p>Something went wrong.. :(</p>
            </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>