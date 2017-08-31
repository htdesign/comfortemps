<?php

session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
$sent = isset($_SESSION['sent']) ? $_SESSION['sent'] : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comfortemps - Your heat pump specialist</title>
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="css/page.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
</head>
<body>

    <?php if(!empty($sent)): ?>
    <div class="success"><?php echo $sent ?></div> 
    <?php endif; ?>

    <div class="site">
        <header class="header">
            <div class="header__branding">
                <a href="#" class="logo"><img src="images/logo.png"/></a>
                <div class="copy">
                    <h1 class="h1">Comfortable Temperature <span>All Year Round</span></h1>
                    <small class="subhead">Your Heat Pump Specialist!</small>
                    <!-- <a href="#contact" class="button">Request for Quote Now</a> -->
                    <a href="#contact" class="button">Request for Free Quote And Consulation</a>
                </div>
                <div class="masthead">
                    <img src="images/header_img.png">
                </div>
            </div>
        </header>
        <section class="intro">
            <div class="intro__header">
                <div class="wrap">
                    <h4 class="intro__header__text">Comfortemps is all about guaranteed Quality Service</h4>
                </div>
            </div>
            <div class="intro__text">
                <div class="wrap">
                    <p>Beyond the installation that we do, we offer solutions that meet our customer's valuable time and budget.</p>
                    <p>As we are a starting company composed of accredited installer and licensed electrician, we aim to deliver our service to the Auckland market focusing on residential suits and commercial establishments.</p>
                    <p>With 3 years solid experience in the field of Air Conditioning and Heat Pump Installation, Service, and Maintenance from reputable companies in NZ.</p>
                </div>
            </div>
        </section>
        <section class="panasonic">
            <img src="images/panasonic-logo.png">
            <h3 class="copy">PANASONIC DEALER AND ACCREDITED INSTALLER</h3>
            <img src="images/trusted.jpg">
        </section>
        <section class="packages">
            <div class="packages__copy">
                <h2 class="packages__header">Energy and Cost Efficient, practical home technology!</h2>
                <p class="copy">Panasonic Heat Pumps are designed to provide more than just cooling and heating comfort to your home. They save energy. They purify your surroundings. They adjust cooling and heating power to suit your living spaces and styles. Living an eco-lifestyle your way is now easier.</p>
                <h2 class="quick">Quick Quote</h2>
            </div>
            <div class="package-list">
                <div class="package">
                    <h4 class="package__name">Perfect For Small Bedroom</h4>
                    <img class="photo" src="images/unit_b.jpg" alt="Panasonic CS/CU E7PKR">
                    <h5 class="unit__name">Panasonic CS/CU E7PKR</h5>
                    <div class="specs">
                            <div class="spec cooling">
                                <p class="value">2.05kW<span class="unit">Cooling</span></p>
                            </div>
                            <div class="spec heating">
                                <p class="value">2.70kW<span class="unit">Heating</span></p>
                            </div>
                            <div class="spec purifier">
                                <p class="value">nanoe-G<span class="unit">Air Purifier</span></p>
                            </div>
                            <div class="spec energy">
                                <p class="value">5/5<span class="unit">Energy Rating</span></p>
                            </div>
                        </div>
                    <ul>
                        <li><strong>Feature: </strong>Back-to-Back Installation</li>
                    </ul>
                    <p class="price">Only $1,599</p>
                </div>
                <div class="package">
                    <h4 class="package__name">Perfect For Big Bedroom</h4>
                    <img class="photo" src="images/unit_b.jpg" alt="Panasonic CS/CU E7PKR">
                    <h5 class="unit__name">Panasonic CS/CU E9PKR</h5>                    
                    <div class="specs">
                        <div class="spec cooling">
                            <p class="value">2.05kW<span class="unit">Cooling</span></p>
                        </div>
                        <div class="spec heating">
                            <p class="value">2.70kW<span class="unit">Heating</span></p>
                        </div>
                        <div class="spec purifier">
                            <p class="value">nanoe-G<span class="unit">Air Purifier</span></p>
                        </div>
                        <div class="spec energy">
                            <p class="value">5/5<span class="unit">Energy Rating</span></p>
                        </div>
                    </div>
                    <ul>
                        <li><strong>Feature: </strong>Back-to-Back Installation</li>
                    </ul>
                    <p class="price">Only $1,749</p>
                </div>
                <div class="package">
                    <h4 class="package__name">Perfect For Lounge</h4>
                    <img class="photo" src="images/unit_b.jpg" alt="Panasonic CS/CU E7PKR">
                    <h5 class="unit__name">Panasonic CS/CU E12PKR</h5>
                    <div class="specs">
                            <div class="spec cooling">
                                <p class="value">3.50kW<span class="unit">Cooling</span></p>
                            </div>
                            <div class="spec heating">
                                <p class="value">4.90kW<span class="unit">Heating</span></p>
                            </div>
                            <div class="spec purifier">
                                <p class="value">nanoe-G<span class="unit">Air Purifier</span></p>
                            </div>
                            <div class="spec energy">
                                <p class="value">3/5<span class="unit">Energy Rating</span></p>
                            </div>
                        </div>
                    <ul>
                        <li><strong>Feature: </strong>Back-to-Back Installation</li>
                    </ul>
                    <p class="price">Only $1,999</p>
                </div>
                <div class="package">
                    <h4 class="package__name">Perfect For Open Lounge</h4>
                    <img class="photo" src="images/unit_b.jpg" alt="Panasonic CS/CU E7PKR">
                    <h5 class="unit__name">Panasonic CS/CU E18PKR</h5>                    
                    <div class="specs">
                            <div class="spec cooling">
                                <p class="value">5.0kW<span class="unit">Cooling</span></p>
                            </div>
                            <div class="spec heating">
                                <p class="value">6.35kW<span class="unit">Heating</span></p>
                            </div>
                            <div class="spec purifier">
                                <p class="value">nanoe-G<span class="unit">Air Purifier</span></p>
                            </div>
                            <div class="spec energy">
                                <p class="value">2.5/5<span class="unit">Energy Rating</span></p>
                            </div>
                        </div>
                    <ul>
                        <li><strong>Feature: </strong>Back-to-Back Installation</li>
                    </ul>
                    <p class="price">Only $2,349</p>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="left">
                <h2 class="services__title">Other Services</h2>
            </div>
            <div class="right">
                <div class="service">
                    <h3 class="service__title installation">Installation</h3>
                    <p>We pride in what we do. This is why we partner only with the brand that we can trust. Comfortemps expertise in installation of Panasonic Heat Pump and Air Conditioning System provides you piece of mind. Our After Sales Support ensures Quality Service of every installation we do for our customers. What’s more, Panasonic Heat Pump is rightfully designed for Kiwi Homes focusing on efficiency, air purification, and most importantly, value for your money – definitely, the preferable heating system for your home. We can install different types or model heat pumps such as high wall models, floor consoles models, under ceiling models, cassettes models and ducted system.</p>
                </div>
                <div class="service">
                    <h3 class="service__title serv">Service</h3>
                    <p>Just like a car engine that needs regular tune-up, Comfortemps make sure your Heat Pump and Air Conditioning System is ready for the freezing winter or hot summer. Our expert service offers quick diagnosis and solution or repair for your system. Booking with us is easy as we understand the time of our working customers.</p>
                </div>
                <div class="service">
                    <h3 class="service__title maintenance">Maintenance</h3>
                    <p>Comfortemps values the life span of your Heat Pump and Air Conditioning System. We offer contractual service to both residential and commercial establishment in maintaining your Heat Pump and Air Conditioning System for a longer lasting and consistent performance of your product.</p>
                </div>
            </div>
        </section>
        <section class="ducted">
            <div class="video">
                <iframe class="youtube" width="640" height="360" src="https://www.youtube.com/embed/vqs6vnFoZ14?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="title">
                <h2>Ducted System</h2>
                <a href="#contact" class="button">Free Quote And Consulation</strong></a>
            </div>
        </section>
    </div>
    <section class="contact" id="contact">
        <div class="wrap">
            <div class="details">
                <h2><span>Contact</span> Comfortemps</h2>
                <div class="map">
                    <!-- <img src="images/map_test.jpg" alt="Address"> -->
                    <iframe class="mapa"
                        width="450"
                        height="250"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDcVEnh4sMHLPOwGX2EVAE3C781qjvODhM&q=30+Aranui+Road,Mt+Wellington,Auckland+NZ" allowfullscreen>
                  </iframe>
                    <p class="address">30 Aranui Road, Mt Wellington, Auckland NZ</p>
                </div>
                <p class="reachus">You can reach us for an immediate service through</p>
                <ul>
                    <li>Denver</li>
                    <li>0223 915 764</li>
                </ul>
            </div>
            <div class="form">
                <p>We love to hear from you. Flick us your details below and will reach out within the next 48 hours.</p>
                <?php if(!empty($errors)): ?>
                    <div class="error">
                        <ul>
                            <li><?php echo implode('</li><li>', $errors); ?></li>
                        </ul>
                    </div> 
                <?php endif; ?>
                
                <form action="details.php" method="post" id="form">
                    <input type="text" placeholder="Name" name="name" <?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"' : '' ?>>
                    <input type="email" placeholder="Email Address" name="email" <?php echo isset($fields['email']) ? 'value="' . e($fields['email']) . '"' : '' ?>>
                    <input type="text" type="" placeholder="Phone / Mobile" name="phone" <?php echo isset($fields['phone']) ? 'value="' . e($fields['phone']) . '"' : '' ?>>
                    <button type="submit" name="submit" class="button">submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>


<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);
unset($_SESSION['sent']);

?>