<?php

class model
{
    public $conn="";
    public function __construct()

    {
        try
        {
            $this->conn=mysqli_connect("localhost","root","","mvc");
        
        }
        catch(exception $e)
        {
            die(mysqli_error($this->conn,$e));
        }
    }
}
?>