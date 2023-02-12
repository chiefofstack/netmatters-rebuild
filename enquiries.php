<?php
$currentPage = "Enquiries";
include 'includes/session.php';
include 'layout/header.php';
?>

 
            <!-- News -->
            <div class="news">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h3 class="section-title">Enquiries</h3>
                                <h4 class="section-link"></h4>
                            
                            </div>   
                            
                            
                            <table class="table d-block w-100">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Newsletter</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include 'layout/enquiry-items.php'?>

                                    </tbody>
                                </table>
                        </div>                    
                    </div>
                </div>
            </div>


<?php
@include 'layout/footer.php';
?>