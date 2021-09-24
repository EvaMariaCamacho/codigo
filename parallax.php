<?php

include_once 'conexion.php';

include_once 'includes/parallax/header.php';

include_once 'includes/parallax/nav.php';

include_once 'includes/parallax/parallax_content.php';

include_once 'includes/parallax/sectionPages.php';


?>

    <div class="tabs-content" id="blog">
        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="col-md-4">
                        <div class="section-heading">
                            <h4>Our Blog Posts</h4>
                            <div class="line-dec"></div>
                            <p>Nam vulputate elementum nulla, sit amet congue ipsum malesuada pretium. Vivamus vel gravida quam.</p>
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li><a href="#tab1" class="active">Nulla eget convallis augue</a></li>
                                <li><a href="#tab2">Quisque ultricies maximus</a></li>
                                <li><a href="#tab3">Sed vel elit et lorem</a></li>
                                <li><a href="#tab4">Vivamus purus neque</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <img src="img/blog_item_01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Nulla eget convallis augue</h4>
                                    <span><a href="#">Digital Marketing</a> / <a href="#">Honey</a> / <a href="#">21 September 2020</a></span>
                                    <p>Donec interdum scelerisque auctor. Nulla id lorem auctor, bibendum lectus elementum, porta felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                            <div id="tab2">
                                <img src="img/blog_item_02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Quisque ultricies maximus</h4>
                                    <span><a href="#">Branding</a> / <a href="#">David</a> / <a href="#">24 August 2020</a></span>
                                    <p>Etiam fringilla posuere pretium. Maecenas tempor pellentesque elit in dapibus. Curabitur viverra urna sem, ut sollicitudin sem congue vel. Donec fringilla augue in justo molestie fermentum quis ac mi.</p>
                                </div>
                            </div>
                            <div id="tab3">
                                <img src="img/blog_item_03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed vel elit et lorem</h4>
                                    <span><a href="#">Web Design</a> / <a href="#">William</a> / <a href="#">18 July 2020</a></span>
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id ipsum porta, dictum sem sed, bibendum quam. Maecenas mattis risus eget orci rhoncus.</p>
                                </div>
                            </div>
                            <div id="tab4">
                                <img src="img/blog_item_04.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus purus neque</h4>
                                    <span><a href="#">E-Commerce</a> / <a href="#">George</a> / <a href="#">14 July 2020</a></span>
                                    <p>Aliquam erat volutpat. Nulla at nunc nec ante rutrum congue id in diam. Nulla at lectus non turpis placerat volutpat lacinia ut mi. Quisque ultricies maximus justo a blandit. Donec sit amet commodo arcu. Sed sit amet iaculis mi, vel fermentum nisi. Morbi dui enim, vestibulum non accumsan ac, tempor non nisl.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                        <p>Nunc posuere non quam at pharetra. Mauris tincidunt purus vel ultrices malesuada. Integer euismod erat ut nulla ultrices, ut auctor eros feugiat.</p>
                        <div class="pop-button">
                            <h4>Send us a message</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

include_once 'includes/parallax/footer.php';

?>