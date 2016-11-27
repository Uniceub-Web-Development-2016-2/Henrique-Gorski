<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Success Registration</title>
    <meta name="description" content="Success registration page.">
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
			<h2>Success Registration!</h2>
            </div>
            <div id="content-info-profile">
				<p>Your profile was created successfully! Click <strong><a href="login.php">here</a></strong> to access the login page!</p>
            </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>