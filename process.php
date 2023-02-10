<?php
// The process class, processes the submitted form
include 'includes/session.php';


class processObject{
    

    // Constructor class
    public function __construct(){
        //process the enquiry form
        if(isset($_POST['enquire'])){
            $this->procEnquire();
        } else {
            // if not from form, redirect to homepage
            header("Location: index.php"); 
        }
    }

    public function procEnquire(){
        global $session, $form;

        $_POST['opt-in2'] = $_POST['opt-in2'] ?? "off";
        $_POST = $session->filterInputs($_POST);      
        $result = $session->enquire($_POST['name'],$_POST['company'],$_POST['email'],$_POST['telephone'],$_POST['subject'],$_POST['message'],$_POST['opt-in2']);
    
        // Save to database successful 
        if($result == 1){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['success'] = 1;
            header("Location: contact.php#contact-form");
        }
        // Validation errors in form
        else if($result == 0){
            $_SESSION['values'] = $_POST;
            $_SESSION['errors'] = $form->getErrors();
            $_SESSION['success'] = 0; //0 = validation errors
            header("Location: contact.php#contact-form");
        }
        /* Database connection error */
        else if($result == -1){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['success'] = -1; //-1 = database connection error
            header("Location: contact.php#contact-form");
        }
        /* Error while saving */
        else if($result == -2){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['success'] = -2; // -2 = error while saving
            header("Location: contact.php#contact-form");
        }
    
    }

}

$process = new processObject();


 

?>