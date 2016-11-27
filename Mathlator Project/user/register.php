<?php session_start(); ?>
<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Register</title>
    <meta name="description" content="Register to use all features in Mathlator.com.">
    <meta name="keywords" content="register, mathlator">
    <?php echo $template->metaLinks(); ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
        <div id="content">
            <div id="content-title">
                <h2>Register</h2>
            </div>
            <div id="content-info">
                <p><strong>Register now</strong> and get access to all features on <strong>Mathlator.com</strong> and get famous in the score board of the maths games!</p>
            </div>
            <div id="content-principal">
                <img class="img-contact" src="../images/Register-Icon2.png"  alt="Register"/>
                <form name="register" action="../scripts/register.php" method="POST" autocomplete="off">
                    <input type="text" name="name" id="name" class="text-field-contact" placeholder="Your name" maxlength="30" required/><br />
					<input type="text" name="nick" id="nick" class="text-field-contact" placeholder="Your nick" maxlength="30" required/><br />
                    <select name="gender" id="gender" class="combo-box-contact" required>
						<option selected value="G">Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select><br />
					<input type="text" name="country" id="country" class="text-field-contact" placeholder="Country" maxlength="30" required/><br />					
                    <input type="text" name="email" id="email" class="text-field-contact" placeholder="Your@E-mail.com" maxlength="30" required/><br />
					<input type="password" name="password" id="password" class="text-field-contact" placeholder="Password" maxlength="30" required/><br />				
                    <label for="select"></label>
					<p><strong>Choose your favorite mathematician to be your guide:</strong></p>
					<table class="avatar-table" cellspacing="0" cellpadding="0">
					  <tr>
						<td>Leonhard Euler</td>
						<td>Carl Friedrich Gauss</td>
						<td>G. F. Bernhard Riemann</td>
						<td>Euclid</td>
						<td>René Descartes</td>
					  </tr>
					  <tr>
						<td><img src="../images/avatar/1.jpg" width="66" height="66" alt="Leonhard Euler" /></td>
						<td><img src="../images/avatar/2.jpg" width="66" height="66" alt="Carl Friedrich Gauss" /></td>
						<td><img src="../images/avatar/3.jpg" width="66" height="66" alt="G. F. Bernhard Riemann" /></td>
						<td><img src="../images/avatar/4.jpg" width="66" height="66" alt="Euclid" /></td>
						<td><img src="../images/avatar/5.jpg" width="66" height="66" alt="René Descartes" /></td>
					  </tr>
					  <tr>
						<td><input type="radio" name="avatar" value="1" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="2" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="3" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="4" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="5" id="avatar" /></td>
					  </tr>
					  <tr>
						<td><br /></td>
					  </tr>
					  <tr>
						<td>Alan Turing</td>
						<td>Leonardo Pisano Blgollo</td>
						<td>Isaac Newton</td>
						<td>Wilhelm Leibniz</td>
						<td>Pythagoras of Samos</td>
					  </tr>
					  <tr>
						<td><img src="../images/avatar/6.jpg" width="66" height="66" alt="Alan Turing" /></td>
						<td><img src="../images/avatar/7.jpg" width="66" height="66" alt="Leonardo Pisano Blgollo" /></td>
						<td><img src="../images/avatar/8.jpg" width="66" height="66" alt="Isaac Newton" /></td>
						<td><img src="../images/avatar/9.jpg" width="66" height="66" alt="Wilhelm Leibniz" /></td>
						<td><img src="../images/avatar/10.jpg" width="66" height="66" alt="Pythagoras of Samos" /></td>
					  </tr>
					  <tr>
						<td><input type="radio" name="avatar" value="6" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="7" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="8" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="9" id="avatar" /></td>
						<td><input type="radio" name="avatar" value="10" id="avatar" /></td>
					  </tr>
						</table>
                    <br />
                    <br />
					<div class="g-recaptcha" data-sitekey="6LfMAA0UAAAAADSIZ13byzFnIEBmUwQtVzIVdDjX"></div>
					<br />
					<br />
                    <input type="submit" class="button-contact" value="Register!" /> <input name="Redefinir" type="reset" class="button-contact" value="Reset" />
                </form>
            </div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>