<?php
class SampleAuth{
    private $session = null;

    function __construct($userName, $password)
    {
        $this->authUser($userName, $password);
    }
    private function authUser($userName, $password){
        echo "Authenticating User \n";
        $this->session = "THESAMPLESESSION";
    }
    private function releaseUserSession(){
        echo "Release User Session \n";
    }
    function __destruct()
    {
        if ($this->session != null){
            $this->releaseUserSession();
        }
    }
}
$user = new SampleAuth("Mzzaman", "devil");
unset($user);