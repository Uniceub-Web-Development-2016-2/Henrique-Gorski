<?php session_start(); ?>
<?php include_once('../view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Edit Avatar</title>
    <meta name="description" content="User perfil page.">
    <meta name="keywords" content="edit, avatar">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
			<h2>Edit Avatar</h2>
            </div>
            <div id="content-info-profile">
                <div id="avatar">
					<img class="img-avatar" src="../images/avatar/8.jpg"  alt="Register"/>
					<div id="p-avatar">
					<p><strong>Iki</strong>, choose your new master!</p>
					</div>
				</div>
				
			<form name="register" action="" method="POST" autocomplete="off">
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
						<td><input type="radio" name="Leonhard Euler" value="2" id="1" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="2" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="3" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="4" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="5" /></td>
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
						<td><input type="radio" name="Leonhard Euler" value="2" id="6" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="7" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="8" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="9" /></td>
						<td><input type="radio" name="Leonhard Euler" value="2" id="10" /></td>
					  </tr>
						</table>
					<br />
                    <input type="submit" class="button-contact" value="Update!" /><input name="Cancelar" type="submit" class="button-contact" value="Cancel" />
                </form>
            </div>
            <div id="content-principal-perfil">

        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>		
</body>
</html>