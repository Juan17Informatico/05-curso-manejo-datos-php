<?php 

use PHPUnit\Framework\TestCase; 
use App\Validate; 

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email("j@gmail.com");
        $this->assertTrue($email); 
    }
    public function test_url(){
        $url = Validate::url("https://platzi.com");
        $this->assertTrue($url); 
        
        $url2 = Validate::url("platzi.com");
        $this->assertFalse($url2); 
    }

    public function test_password(){
        $pass = Validate::password("12345678911");
        $this->assertFalse($pass); 
    }
}