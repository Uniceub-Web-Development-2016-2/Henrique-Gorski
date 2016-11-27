<?php session_start(); ?>
<?php include_once('view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Contact Us</title>
    <meta name="description" content="Contact the Mathlator Project webmaster.">
    <meta name="keywords" content="contact, webmaster">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>Contact Us</h2>
            </div>
            <div id="content-info">
                <p>We are constantly increasing and adding new <strong>mathematical tools</strong>, and it's very important the <strong>feedback</strong> from our users. Feel free to send us your <strong>comments</strong> or <strong>suggestions</strong>.</p>
            </div>
            <div id="content-principal">
                <img class="img-contact" src="images/Mail-Send-icon2.png"  alt="Mail"/>
                <form action="" method="POST" autocomplete="off">
                    <input type="text" name="name" class="text-field-contact" placeholder="Your name" maxlength="30" required/><br />
                    <input type="text" name="email" class="text-field-contact" placeholder="Your@E-mail.com" maxlength="30" required/><br />
                    <label for="select"></label>
                    <select name="subject" class="combo-box-contact" required>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Comments">Comments</option>
                        <option value="Others">Others</option>
                    </select>
                    <br />
                    <input type="text" name="country" class="text-field-contact" placeholder="Country/City where you from" maxlength="30" required/><br />
                    <label for="textarea"></label>
                    <textarea name="messenge" cols="45" rows="5" class="text-area-contact" placeholder="Type here your messenge.." maxlength="500" required></textarea><br />
                    <input type="submit" class="button-contact" value="Send" /> <input name="Redefinir" type="reset" class="button-contact" value="Reset" />
                </form>
            </div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>