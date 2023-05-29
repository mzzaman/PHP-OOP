<?php
class UserProfile{
    public function __construct(private string $name, private string $phone)
    {

    }
    public function changePhone(string $phone):string{
        return $this->phone = $phone;
    }
}

class UserOne{
    private readonly string $userName;
    private readonly UserProfile $profile;
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }
    public function setProfile(UserProfile $profile):UserProfile{
        return $this->profile = $profile;
    }

    public function profile():UserProfile{
        return $this->profile;
    }
}
$user = new UserOne('joe');
$user->setProfile(new UserProfile('joe Doe', +880123456789));
$user->profile()->changePhone(+880987654321);
var_dump($user->profile());