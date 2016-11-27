<?php session_start(); ?>
<?php include_once('view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>About Mathlator Project</title>
    <meta name="description" content="About Mathlator Project and his creator.">
    <meta name="keywords" content="about, mathlator, project">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>About The Project</h2>
            </div>
            <div id="content-info">
                <p>Hello, my name is <strong>Henrique Gorski</strong> and I am the creator of <strong>Mathlator.com Project</strong>. I am currently attending college of computer science and the idea of the project came about in order to improve my knowledge in performing <strong>web projects in PHP</strong>. The goal is adding and improving <strong>mathematical tools</strong> while I go along the course. I hope that the tools developed can help people everywhere in the world and help people take an interest in this science so amazing and stigmatized that is mathematics. Feel free to give your <strong>suggestions</strong> on what kind of tools you would like to have here, just write by clicking <a href="contact.php">here</a> or accessing our facebook page and leave a messenge there: <a href="http://www.facebook.com/mathlator" target="_blank">facebook.com/mathlator</a></p>
            </div>
            <div id="content-principal">
                <img src="images/programming2.png"  alt="Programming Java" />
            </div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>