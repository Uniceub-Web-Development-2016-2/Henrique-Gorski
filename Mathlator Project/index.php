<?php session_start(); ?>
<?php include_once('view/template.php'); ?>
<?php include_once('control/util.php'); ?>
<?php $template = new Template(); ?>
<?php $util = new Util(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Mathlator | Math Calculators and Tools</title>
    <meta name="description" content="Mathlator is a collection of powerful mathematic calculators, converters, tools and facts about numbers.">
    <meta name="keywords" content="math, mathematic, calculator, converter, tools">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>Mathlator Project</h2>
            </div>
            <div id="content-info">
                <p>Welcome to <strong>Mathlator.com</strong> project! Here you gonna find several <strong>tools</strong> for many <strong>mathematical</strong> purposes being developed, to satisfy your curiosity about math or  help solving some problems with useful applications. Our goal is to help <strong>professionals</strong> and <strong>students</strong> from several academic's based on <strong>mathematics</strong>. Take advantage and enjoy the magic of math!</p>
            </div>
            <div id="content-img-main"><img src="images/<?php echo $util->randomImg(); ?>"  alt="We love Math!" /></div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>