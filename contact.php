<?php
$currentPage = "Contact";
include 'includes/session.php';
include 'includes/header.php';
?>
            <!-- Offices -->
            <div class="offices">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h3 class="section-title">Our Offices</h3>
                            </div>                        
                        </div>                    
                    </div>
                    <div class="row office-items">
                        <div class="col-md-12 col-lg-4">                        
                            <div class="card card-design news-item">
                                <a href="cambridge-office" >
                                    <img src="images/cambridge.jpg" alt="Cambridge Office">
                                </a>                    
                                <div class="news-wrap">
                                    <a href="cambridge-office">
                                        <h4>Cambridge Office</h4>
                                    </a>
                                    <p>Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS</p>
                                    <a href="tel:01223375772" class="body-link">01223 37 57 72</a>
                                    <a href="cambridge-office" class="btn btn-sm btn-design">View more</a>           
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">                        
                            <div class="card card-design news-item">
                                <a href="cambridge-office" >
                                    <img src="images/wymondham.jpg" alt="Wymondham Office">
                                </a>                    
                                <div class="news-wrap">
                                    <a href="wymondham-office">
                                        <h4>Wymondham Office</h4>
                                    </a>
                                    <p>Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ</p>
                                    <a href="tel:01603704020" class="body-link">01603 70 40 20</a>
                                    <a href="wymondham-office" class="btn btn-sm btn-design">View more</a>           
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">                        
                            <div class="card card-design news-item">
                                <a href="cambridge-office" >
                                    <img src="images/cambridge.jpg" alt="Cambridge Office">
                                </a>                    
                                <div class="news-wrap">
                                    <a href="yarmouth-office">
                                        <h4>Great Yarmouth Office</h4>
                                    </a>
                                    <p>Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA</p>
                                    <a href="tel:01493603204" class="body-link">01493 60 32 04</a>
                                    <a href="yarmouth-office" class="btn btn-sm btn-design">View more</a>           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="footing">
                                <h4 class="section-link"><a href="#">View All <i class="fas fa-arrow-right"></i></a></h4>
                            </div>                        
                        </div>                    
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xl-4 order-xl-2">
                            <div class="contact-info">
                                <p>Email us on:</p>
                                <p><a href="tel:01223375772" class="body-link">sales@netmatters.com</a></p>
                                <p>Business hours:</p>
                                <p>Monday - Friday 07:00 - 18:00</p>

                                <p>
                                    <a href="#" class="accordion-trigger">
                                        <span>Out of Hours IT Support</span>
                                        <span class="fa fa-chevron-down rotate down"></span>
                                    </a>
                                </p>
                                <div class="accordion-item">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    
                                    <p>
                                        <b>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00</b></br>
                                        <b>Sunday 10:00 - 18:00</b>
                                    </p>

                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. 
                                </div>          
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-8 order-xl-1">
                            <form action="process.php" method="post">
                                <input type="hidden" name="enquire" value="1">
                                <div class="contact-form">
                                    <a id="contact-form"></a>
                                    <div class="row">    
                                        <div class="col-md-12">
                                            <?php if($_SESSION['success'] == 0){ ?>
                                            <div class="alert alert-danger" >
                                                There were errors found in the form.
                                            </div>
                                            <?php } else if($_SESSION['success'] == -1) { ?>
                                            <div class="alert alert-warning" >
                                                Could not connect to the database
                                            </div>
                                            <?php } else if($_SESSION['success'] == -2) { ?>
                                            <div class="alert alert-warning" >
                                                Could not save to the database
                                            </div>
                                            <?php } else { ?>
                                            <div class="alert alert-success" >
                                                Your message has been sent!
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="name" class="required">Your Name</label>
                                                <input type="text" id="name" name="name" class="input-field <?php if($form->getError('name')) echo "error"; ?>" value="<?php echo $form->getValue('name'); ?>">
                                                <span class="error-message"><?php echo $form->getError('name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="company" >Company Name</label>
                                                <input type="text" id="company" name="company"  class="input-field <?php if($form->getError('company')) echo "error"; ?>" value="<?php echo $form->getValue('company'); ?>">
                                                <span class="error-message"><?php echo $form->getError('company'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="required">Your Email</label>
                                                <input type="text" id="email" name="email" class="input-field <?php if($form->getError('email')) echo "error"; ?>" value="<?php echo $form->getValue('email'); ?>">
                                                <span class="error-message"><?php echo $form->getError('email'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="telephone" class="required">Your Telephone Number</label>
                                                <input type="text" id="telephone" name="telephone"  class="input-field <?php if($form->getError('telephone')) echo "error"; ?>" value="<?php echo $form->getValue('telephone'); ?>">
                                                <span class="error-message"><?php echo $form->getError('telephone'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="subject" class="required">Subject</label>
                                                <input type="text" id="subject" name="subject" class="input-field <?php if($form->getError('subject')) echo "error"; ?>" value="<?php echo $form->getValue('subject'); ?>">
                                                <span class="error-message"><?php echo $form->getError('subject'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="message" class="required">Message</label>
                                                <textarea id="message" name="message"  rows="20" class="input-field message <?php if($form->getError('message')) echo "error"; ?>"><?php echo $form->getValue('message'); ?></textarea>
                                                <span class="error-message"><?php echo $form->getError('message'); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="checkbox-field">
                                                <div class="element2">
                                                    <input type="checkbox" id="opt-in2" name="opt-in2" class="opt-in2">
                                                    <label for="opt-in2"></label>
                                                </div>
                                                <div class="description2">
                                                    <label for="opt-in2">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-design btn-regular">
                                        Send  Enquiry
                                    </button>
                                </div>
                            </form>                
                        </div>
                    </div>
                </div>
            </div>

            <?php
                require 'includes/newsletter.php';
            ?>

<?php
@include 'includes/footer.php';
?>