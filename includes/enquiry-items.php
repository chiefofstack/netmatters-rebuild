<?php
include 'functions.php';

        if(isset($dbConnection->error))
        {   
                //connection error                                          
                echo   '<div class="col-md-12" style="display:block">
                            <div class="alert alert-danger" >
                                Error connecting to the database
                            </div>
                        </div>';
        }else{
            $enquiries = $dbConnection->getEnquiries();

            //loop through each item
            foreach($enquiries as $enquiryItem){
      
                    // escape outputs
                    $id = strip_tags($enquiryItem['id']);
                    $name = strip_tags($enquiryItem['name']);
                    $company = strip_tags($enquiryItem['company']);
                    $email = strip_tags($enquiryItem['email']);
                    $telephone = strip_tags($enquiryItem['telephone']);
                    $subject = strip_tags($enquiryItem['subject']);
                    $message = strip_tags($enquiryItem['message']);
                    $optin = strip_tags($enquiryItem['optin']);
                   
                echo   '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$company.'</td>
                            <td>'.$email.'</td>
                            <td>'.$telephone.'</td>
                            <td>'.$subject.'</td>
                            <td>'.$message.'</td>
                            <td>'.$optin.'</td>
                        </tr>';
            }  
        }
?>