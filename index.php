<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Nova Orsa Trucking</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/bkg.css">
</head>

<?php
    $userName = $userEmail = $userPhone = 
    $messageSubject = $message = '';

    $errors = '';
    $messageSent = false;


    if(isset($_POST["submit"])){

        if (empty($_POST['name']) || empty($_POST['email']) || 
        empty($_POST['phone']) || empty($_POST['subject']) || 
        empty($_POST['message'])) {
            $errors = 'Please Fill In All Fields';
        } else {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                $errors = 'Please Use a Valid Email';
            } else {
                $errors = '';
                $userName = htmlspecialchars($_POST['name']);
                $userEmail = htmlspecialchars($_POST['email']);
                $userPhone = htmlspecialchars($_POST['phone']);
                $messageSubject = htmlspecialchars($_POST['subject']);
                $message = htmlspecialchars($_POST['message']);


                $to = "alexbenta20@gmail.com";
                $body = "";
        
                $body .= "From: $userName \r\n";
                $body .= "Email: $userEmail \r\n";
                $body .= "Message: $message \r\n";

                mail($to, $messageSubject, $body);
                $messageSent = true; 
            }
        }
    }
?>

<body>
    <div class="circles">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle4"></div>
        <div class="circle circle5"></div>
        <div class="circle circle6"></div>
    </div>

    <div class="side-menu-mobile">
        <div></div>

        <div class="mobile-menu-list">
            <div class="mobile-list-item home"
            id="homepage">
                <p>Home</p>
            </div>
            <div class="mobile-list-item services-list"
            id="services">
                <p>Services</p>
            </div>
            <div class="mobile-list-item about"
            id="about-section">
                <p>About</p>
            </div>
            <div class="mobile-list-item contact"
            id="contact-section">
                <p>Contact</p>
            </div>
        </div>
    </div>

    <div class="page-top-button">
        <img src="./Assets/iconmonstr-arrow-up-thin.svg" alt="page-top-button">
    </div>

    <div class="container">
        <div class="message-status">
            <?php if($messageSent === true) {
                echo '<h2>Message was sent</h2>';
            } ?>
        </div>
        
        <header>
            <div class="logo-image">
                <img src="./Assets/image 3.png"
                 alt="Nova Orsa Logo">

                 <img 
                 class="img-mobile"
                 src="./Assets/logoIconMobile.svg" 
                 alt="Nova Orsa Mobile Logo">
            </div>

            <div class="hamburger-menu">
                <img src="./Assets/HamMenu.svg" 
                alt="Hamburger Menu">
            </div>

            <div class="menu-list">
                <div class="menu-list-item home"
                id="homepage">
                    <p>Home</p>
                </div>
                <div class="menu-list-item services-list"
                id="services">
                    <p>Services</p>
                </div>
                <div class="menu-list-item about"
                id="about-section">
                    <p>About</p>
                </div>
                <div class="menu-list-item contact"
                id="contact-section">
                    <p>Contact</p>
                </div>
            </div>
        </header>

        <div class="homepage">
            <div class="homepage-left">
                <div class="CTA-title">
                    <h1>We make your cargo transport simple</h1>
                </div>

                <div class="CTA-text">
                    <p>Reliable and secure way of shipping cargo</p>
                </div>

                <div class="CTA-btn">
                    <p>Request a Quote</p>
                </div>
            </div>

            <div class="homepage-right">
                <div class="truck-img-1">
                    <img src="Assets\homepage-truck.png"
                     alt="truck image 1">
                </div>
            </div>
        </div>

        <div class="services">
            <div class="services-left">
                <div class="services-title">
                    <h3>Our Services</h3>
                </div>
    
                <div class="services-text">
                    <p>We come with a variety of services,
                        available to you when needed
                    </p>
                </div>

                <div class="service-panels">
                    <div class="service service1">
                        <div class="service-icon
                        service-icon1"><img src="/Assets/ServiceIcon1.svg"
                         alt="Service Icon 1"></div>
                        <div class="service-text
                        service-text1"><p>Expedited Freight
                        </p></div>
                    </div>

                    <div class="service service2">
                        <div class="service-icon
                        service-icon2"><img src="/Assets/ServiceIcon2.svg"
                         alt="Service Icon 2"></div>
                        <div class="service-text
                        service-text2"><p>Temperature Controlled Freight
                        </p></div>
                    </div>

                    <div class="service service3">
                        <div class="service-icon
                        service-icon3"><img src="/Assets/ServiceIcon3.svg"
                         alt="Service Icon 3"></div>
                        <div class="service-text
                        service-text3"><p>LTL Freight Shipping
                        </p></div>
                    </div>

                    <div class="service service4">
                        <div class="service-icon
                        service-icon4"><img src="/Assets/ServiceIcon4.svg"
                         alt="Service Icon 4"></div>
                        <div class="service-text
                        service-text4"><p>Custom Freight Solutions
                        </p></div>
                    </div>

                    <div class="service service5">
                        <div class="service-icon
                        service-icon5"><img src="/Assets/ServiceIcon5.svg"
                         alt="Service Icon 5"></div>
                        <div class="service-text
                        service-text5"><p>Truckload Shipping
                        </p></div>
                    </div>
                </div>
            </div>

            <div class="services-right">
                <div class="truck-image-2">
                    <img src="/Assets/Daco_5992587 1.png"
                     alt="truck image 2s">
                </div>
            </div>
        </div>

        <div class="about-section">
            <div class="about-title">
                <h3>About Us</h3>
            </div>

            <div class="about-panel">
                <p>Nova Orsa Trucking is a dry van carrier company with offices
                    in Florida and Michigan. 
                    We service the entire United States, from east to west coast, and we are 
                    licensed to transport all types of commodities. 
                    We transport those goods in our modernized fleet of dry van trailers.<br>
                    <br>
                    At Nova Orsa, we believe in building relationships – with our customers, 
                    with our drivers, and with our community. 
                    We are a local-owned and operated company.  Companies in need of reliable transportation 
                    service come back to us because of our 
                    excellent record for safety and on-time delivery.<br>
                    <br>
                    Our drivers spend their careers with us because 
                    they are treated like people, not numbers. We believe in a personal 
                    relationship and in one on one contact with the people who get behind the wheel. 
                    We look for dependable, reliable drivers to represent us. 
                    So we make sure that our drivers are comfortable working for us, are compensated fairly and are recognized 
                    for their hard work with incentives and safety bonuses.</p>
            </div>
        </div>

        <div class="contact-section">
            <div class="contact-title">
                <h3>Request a Quote</h3>
            </div>

            <div class="contact-panel">

                <div class="error"><?php echo $errors ?></div>
                
                <form action="index.php" method="POST">
                    <div class="contact-details">

                        <input type="text" name="name" 
                        id="name" placeholder="Name"
                        value="<?php echo isset($_POST['name']) ? $userName : ''; ?>">

                        <input type="email" name="email" 
                        id="email" placeholder="Email"
                        value="<?php echo isset($_POST['email']) ? $userEmail : ''; ?>">

                        <input type="tel" name="phone" 
                        id="phone" placeholder="Phone"
                        value="<?php echo isset($_POST['phone']) ? $userPhone : ''; ?>">

                        <input type="text" name="subject" 
                        id="subject" placeholder="Email Subject"
                        value="<?php echo isset($_POST['subject']) ? $messageSubject : ''; ?>">
                    </div>

                    <textarea name="message" id="message" 
                    cols="30" rows="10" 
                    placeholder="Message"
                    value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>

                    <input type="submit" name="submit" 
                    value="Send">
                </form>
            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="./Assets/logoIcon2.svg" 
                    alt="Footer Logo">
                </div>

                <div class="company-details">
                    <div class="social-media">
                        <div class="social-media-title">
                            <p>Follow us on:</p>
                        </div>

                        <div class="social-media-links">
                            <div class="social-link instagram">
                                <a href="https://www.instagram.com/nova_orsa_trucking/"
                                target="_blank">
                                    <img src="./Assets/instagramIcon.svg" 
                                alt="Instagram Icon"></a>
                            </div>

                            <div class="social-link twitter">
                                <a href="https://twitter.com/nova_orsatruck"
                                target="_blank">
                                    <img src="./Assets/twitterIcon.svg" 
                                alt="Twitter Icon"></a>
                            </div>

                            <div class="social-link facebook">
                                <a href="https://www.facebook.com/NovaOrsaTrucking"
                                target="_blank">
                                    <img src="./Assets/facebookIcon.svg" 
                                alt="Facebook Icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-details-section">
                        <div class="contact-title">
                            <p>Contact Us:</p>
                        </div>

                        <div class="contact-info">
                            <div class="contact-location">
                                <img src="./Assets/locationIcon.svg" 
                                alt="Location Icon">
    
                                <p>Key West, FL<br>
                                Rochester Hills, MI</p>
                            </div>
    
                            <div class="contact-phone">
                                <img src="./Assets/phoneIcon.svg" 
                                alt="Phone Icon">
    
                                <p>(734)396-NOVA</p>
                            </div>
    
                            <div class="contact-email">
                                <img src="./Assets/emailIcon.svg" 
                                alt="Email Icon">
    
                                <p>sales@novaorsatrucking.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-media-mobile">
                        <div class="social-media-title">
                            <p>Follow us on:</p>
                        </div>

                        <div class="social-media-links">
                            <div class="social-link instagram">
                                <a href="https://www.instagram.com/nova_orsa_trucking/"
                                target="_blank">
                                    <img src="./Assets/instagramIcon.svg" 
                                alt="Instagram Icon"></a>
                            </div>

                            <div class="social-link twitter">
                                <a href="https://twitter.com/nova_orsatruck"
                                target="_blank">
                                    <img src="./Assets/twitterIcon.svg" 
                                alt="Twitter Icon"></a>
                            </div>

                            <div class="social-link facebook">
                                <a href="https://www.facebook.com/NovaOrsaTrucking"
                                target="_blank">
                                    <img src="./Assets/facebookIcon.svg" 
                                alt="Facebook Icon"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="trademark">
                    <p>©2021. All Rights Reserved. Designed By Novaorsatrucking</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="./index.js"></script>
</body>
</html>