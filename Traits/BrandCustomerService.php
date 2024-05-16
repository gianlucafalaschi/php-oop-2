<?php

trait BrandCustomerService {
    protected $email;
    public $phone;

 /**   
 * This function returns the value of the procted attribute $email
 * 
 * @return int The instance email
 */

public function getEmail() {
    return $this->email;
}

/**
 * Set the $email attribute
 * 
 * @param int $newEmail The new email to be set in the instance
   */

public function setEmail($newEmail) {
    $this->email = $newEmail;
}


}

?>