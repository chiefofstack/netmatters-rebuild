            <!-- Footer -->
            <div class="footer">
                <div class="container">
                    <div class="footer-menus">
                        <div class="service-list">
                            <div class="menu">
                                <h4>About Netmatters</h4> 
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Our Careers</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Environmental Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="menu">
                                <h4>Our Services</h4> 
                                <ul>
                                    <li><a href="#">Bespoke Software</a></li>
                                    <li><a href="#">IT Support</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                    <li><a href="#">Telecoms Services</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Cyber Security</a></li>
                                    <li><a href="#">Developer Training</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="office-list">
                            <div class="menu">
                                <h4>Cambridge office</h4> 
                                <p> 
                                    Unit 1.31, <br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS
                                </p>
                                <p>     
                                    Tel: <a href="tel:01223375772">01223 37 57 72</a>
                                </p>
                            </div>
                            <div class="menu">
                                <h4>Wymondham Office</h4> 
                                <p> 
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ
                                </p>
                                <p>     
                                    Tel: <a href="tel:01603704020">01603 70 40 20</a>
                                </p>
                            </div>
                            <div class="menu">
                                <h4>Great Yarmouth Office</h4> 
                                <p> 
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA
                                </p>
                                <p>     
                                    Tel: <a href="tel:01493603204">01493 60 32 04</a>
                                </p>
                            </div>
                        </div>
                    </div>  
                    <div class="bottom-bar">
                        <div class="copyright">
                            <p>
                                &copy; Copyright Netmatters 2023. <br> All rights reserved.                             
                            </p>
                            <span> - </span>
                            <a href="#">Sitemap</a>
                        </div>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>             
                </div>
            </div>

        </main>
        <?php
        include 'overlay.php';
        include 'sidebar.php';
        ?>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>    
        <script src="js/slideshow.js"></script>
        <script src="js/navigation.js"></script>
        <script src="js/sidebar.js"></script>
        <script src="js/cookie.js"></script>
        <?php 
        if($currentPage == "Contact")
        echo '<script src="js/contact.js"></script>';
        ?>
        
    </body>
</html>