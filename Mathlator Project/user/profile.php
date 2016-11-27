<?php session_start(); ?>
<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Profile</title>
    <meta name="description" content="User profile page.">
    <meta name="keywords" content="edit, profile">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
			<h2>Profile</h2>
            </div>
            <div id="content-info-profile">
                <div id="avatar">
					<img class="img-avatar" src="../images/avatar/8.jpg"  alt="Register"/>
					<div id="p-avatar">
					<p>Hello <strong>Iki</strong>, Here you can edit your profile!</p>
					</div>
				</div>

				<ul>
					<li><a href="edit-avatar.php">Edit Avatar</a></li>
					<li><a href="edit-nick.php">Edit Nick</a></li>
					<li>Edit Country</li>
					<li>Edit Password</li>
					<li>Log out</li>
				</ul>
				<p><strong>Your Best Game Scores:</strong></p>
				Game 1: - <br />
				Game 2: -
            </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>