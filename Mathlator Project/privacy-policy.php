<?php session_start(); ?>
<?php include_once('view/template.php'); ?>
<?php $template = new Template(); ?>
<?php echo $template->pageTop(); ?>
<head>
    <title>Privacy Policy</title>
    <meta name="description" content="Privacy Policy of Mathlator Project website usage.">
    <meta name="keywords" content="privacy, policy">
    <?php echo $template->metaLinks(); ?>
</head>
<body>
    <div id="main">    
        <?php echo $template->pageHeader(); ?>
        <?php echo $template->mainMenu(); ?>
        <?php echo $template->adsMenu(); ?>
        <div id="content">
            <div id="content-title">
                <h2>Privacy Policy</h2>
            </div>
            <div id="content-principal-text">

                <p>This Privacy Policy governs the manner in which <a href="http://www.mathlator.com">mathlator.com</a> website ("Site", "We", "Us") collects, uses, maintains and discloses information collected from its Users (each, a "User").</p>

                <p><strong>Personal identification information</strong></p>

                <p>We may collect personal identification information from Users in a variety of ways in connection with activities, services, features or resources we make available on our Site. Users may visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>

                <p><strong>Non-personal identification information</strong></p>

                <p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>

                <p><strong>Web browser cookies</strong></p>

                <p>Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>

                <p><strong>How we use collected information</strong></p>

                <p>Site collects and uses Users personal information for the following purposes:</p>
                <ul>
                    <li><i>To personalize User experience</i></br>
                        We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li>
                    <li><i>To improve our Site</i></br>
                        We continually strive to improve our website offerings based on the information and feedback we receive from you.</li>
                    <li><i>To improve customer service</i></br>
                        Your information helps us to more effectively respond to your customer service requests and support needs.</li>
                </ul>
                <p><strong>How we protect your information</strong>

                <p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, Username, password, transaction information and data stored on our Site.</p>

                <p><strong>Sharing your personal information</strong>

                <p>We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and Users with our business partners, trusted affiliates and advertisers for the purposes outlined above.</p>

                <p><strong>Third party websites</strong>

                <p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p>

                <p><strong>Advertising</strong>

                <p>Ads appearing on our site may be delivered to Users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile non personal identification information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This privacy policy does not cover the use of cookies by any advertisers.</p>

                <p><strong>Google Adsense</strong></p>

                <p>Some of the ads may be served by Google. Google's use of the DART cookie enables it to serve ads to Users based on their visit to our Site and other sites on the Internet. DART uses "non personally identifiable information" and does NOT track personal information about you, such as your name, email address, physical address, etc. You may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at: <strong><a href="http://www.google.com/privacy_ads.html" target="_blank">http://www.google.com/privacy_ads.html</a></strong></p>

                <p><strong>Changes to this privacy policy</strong></p>

                <p>Site has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p>

                <p><strong>Your acceptance of these terms</strong></p>

                <p>By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p>

                <p><strong>Contacting us</strong></p>

                <p>If you have any questions about this <strong>Privacy Policy</strong>, the practices of this site, or your dealings with this site, please contact us at: <strong><a href="contact.php">mathlator.com/contact</a></strong></p>

            </div>
        </div>
        <?php echo $template->adsFooter(); ?>
        <?php echo $template->footerMenu(); ?>
        <?php echo $template->footer(); ?>
    </div>
</body>
</html>