<?php session_start(); ?>
<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Login</title>
    <meta name="description" content="Login page.">
    <meta name="keywords" content="login">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
			<h2>Login</h2>
            </div>
            <div id="content-info-profile">
	
			<form name="register" action="../scripts/login.php" method="POST" autocomplete="off">
				<input type="text" name="email" id="email" class="text-field-contact" placeholder="Your@E-mail.com" maxlength="30" required/><br />
				<input type="password" name="password" id="password" class="text-field-contact" placeholder="Password" maxlength="30" required/><br />
				<input type="submit" class="button-contact" value="Login" />
            </form>
				<P>To register, <a href="register.php">click here!</a></p>
            </div>
            <div id="content-principal-perfil">

        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>