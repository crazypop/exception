<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 4:55 PM
 */

class customException extends Exception {
    public function errorMessage() {
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage()."</b> is not a valid E-Mail address\n";
        return $errorMsg;
    }
}

//$email = "someone@example.com";
$email = "@softvision.ro";

try {
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if(strpos($email, "example") !== FALSE) {
        throw new Exception("$email is an example e-mail ");
    }
}
catch (customException $e) {
    echo $e->errorMessage() . " Error type: customException. \n";
}
catch(Exception $e) {
    echo $e->getMessage() . " Error type: Exception. \n";
}