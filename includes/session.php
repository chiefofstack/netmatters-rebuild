<?php 

// The session class, handles starting the session
include 'db.php';
include 'form.php';
include 'functions.php';

class sessionObject{
    public $errors = array();
    public $values = array();
    public $errorCount;

    // Constructor class, start the session 
    public function __construct(){
        session_start();   //Tell PHP to start the session
    }

    // Filter inputs
    public function filterInputs($post = array()){
        foreach($post as $key => $value){
            if($key == 'email'){
                $post[$key] = filter_var( $value, FILTER_SANITIZE_EMAIL );
            }
            else{
                $post[$key] = filter_var( $value, FILTER_SANITIZE_SPECIAL_CHARS );
            }
        }
        return $post;
    }

    public function enquire($name,$company,$email,$telephone,$subject,$message,$optIn){
        global $form, $dbConnection;

        /* Validate inputs */

        // Name error checking
        $field = "name";  
        if(!$name || strlen($name = trim($name)) == 0){
            $form->setError($field, "* Name is required");
        }
        else{
            $name = stripslashes($name);
            if(strlen($name) < 2){
                $form->setError($field, "* Name too short");
            }
            else if(strlen($name) > 35){
                $form->setError($field, "* Name too long");
            }
            /* Check if name is not alphanumeric */
            else if(!preg_match("/^[a-zA-Z-\s']*$/", $name)){
                $form->setError($field, "* Please enter a valid name");
            }            
        }
 

        // Company error checking
        $field = "company"; 
        if($company != NULL){
            $company = stripslashes($company);
            if(strlen($company) < 2){
                $form->setError($field, "* Company name too short");
            }
            else if(strlen($company) > 300){
                $form->setError($field, "* Company name too long");
            }
            /* Check if company is not alphanumeric */
            else if(!preg_match("/^[\w\-\s\.\,]+$/", $company)){
                $form->setError($field, "* Please enter a valid company name");
            }            
        }

        // Email error checking 
        $field = "email"; 
        if(!$email || strlen($email = trim($email)) == 0){
            $form->setError($field, "* Email is required");
        }
        else{
            $email = stripslashes($email);
            if(strlen($email) > 254){
                $form->setError($field, "* Email too long");
            }
            /* Check if valid email address */
            if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)){
                $form->setError($field, "* Please enter a valid email");
            }            
        }
      
        // Telephone error checking 
        $field = "telephone"; 
        if(!$telephone || strlen($telephone = trim($telephone)) == 0){
            $form->setError($field, "* Telephone is required");
        }
        else{
            $telephone = stripslashes($telephone);
            if(strlen($telephone) < 11){
                $form->setError($field, "* Telephone too short");
            }
            else if(strlen($telephone) > 13){
                $form->setError($field, "* Telephone too long");
            }
            /* Check if name is not alphanumeric */
            else if(!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/", $telephone)){
                $form->setError($field, "* Please enter a valid telephone");
            }     
        }
      
        // Subject error checking
        $field = "subject";  
        if(!$subject || strlen($subject = trim($subject)) == 0){
            $form->setError($field, "* Subject is required");
        }
        else{
            $subject = stripslashes($subject);
            if(strlen($subject) < 2){
                $form->setError($field, "* Subject too short");
            }
            else if(strlen($subject) > 254){
                $form->setError($field, "* Subject too long");
            }
            /* Check if subject is not alphanumeric */
            else if(!preg_match("/^[\w\-\s\.\,]+$/", $subject)){
                $form->setError($field, "* Subject not alphanumeric");
            }            
        }

        // Message error checking
        $field = "message";  
        if(!$message || strlen($message = trim($message)) == 0){
            $form->setError($field, "* Message is required");
        }
        else{
            $message = stripslashes($message);
            if(strlen($message) < 2){
                $form->setError($field, "* Message too short");
            }
            else if(strlen($message) > 2000){
                $form->setError($field, "* Message too long");
            }
            /* Check if message is not alphanumeric */
            else if(!preg_match("/^[\w\-\s\.\,]+$/", $message)){
                $form->setError($field, "* Message not alphanumeric");
            }            
        }


        // If errors found show form again with error messages, else save to database
        if($form->errorCount > 0 ){
            return 0; // 0 = have validation errors
        }
        else{
            if($dbConnection->error)
            {   
                return -1; // -1 = connection error
                
            }else{
                $result = $dbConnection->saveEnquiry($name, $company, $email, $telephone, $subject, $message, $optIn);
                if(!$result){
                    return -2; // -2 = error while saving
                }
                else{
                    return 1; // success!
                }
            }
        }
    }
}

$session = new sessionObject();
$form = new formObject();

?>