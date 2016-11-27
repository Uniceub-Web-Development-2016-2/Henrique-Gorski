<?php session_start(); ?>
<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Is Prime Number?</title>
    <meta name="description" content="Tool to find out if the number is prime or not.">
    <meta name="keywords" content="prime, number, discover, tool">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>Is Prime Number?</h2>
            </div>
            <div id="content-info">
                <p>A <strong>prime number</strong> (or a <strong>prime</strong>) is a natural number greater than 1 that has no positive other than 1 and itself. A natural number greater than 1 that is not a prime number is called a composite number. <strong>Check below</strong> if the number is prime or not.</p>
            </div>
            <div id="content-img"><img src="http://localhost/Mathlator/images/e801c50c3f53509cbd5560f8526416e1.png" width="124" height="41" alt="Prime Number Formula" /></div>
            <div id="content-principal">
                <form name="isprime" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <input type="text" name="field1" class="text-field-med" placeholder="Insert a number" maxlength="6" onkeypress="return isNumberKey(event)" required />
                    <input type="submit" class="button-med" value="Check!" />
                </form>
                <p class="text-field-obs">(Limit: 6 digits)</p>
				<?php echo $algorithms->isPrime(); ?>
            </div>
        </div>
		<?php echo $template->fbShare(); ?>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>