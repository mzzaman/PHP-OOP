<?php
namespace Trait;
// TODO: trait Declaration;
/*
 * trait TraitName{
 * static or non-static member property with visibility;
 * static or non-static member method with visibility;
 * use of another TraitName;
 * }
 */
trait LoggerTrait{
    protected $logger;
//    public function setLogger(Logger $logger){
//        $this->logger = $logger;
//    }
    public function log($message){
        $this->logger = $message;
        echo $this->logger;
    }
}
class UserProfile{
    use LoggerTrait;
}
class CompanyProfile{
    use LoggerTrait;
}

// create UserProfile Object;
$userProfile = new \Trait\UserProfile();
$userProfile->log("User Created Successfully\n");
$companyProfile = new \Trait\CompanyProfile();
$companyProfile->log("Company Created Successfully\n");