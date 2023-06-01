<?php
interface LoggerInterface{
    public function log($log_message);
}

class DatabaseLogger implements LoggerInterface{
    public function log($log_message)
    {
        // TODO: Implement log() method.
        echo  "To Database: ".$log_message."\n";
    }
}


class FileLogger implements LoggerInterface{
    public function log($log_message)
    {
        // TODO: Implement log() method.
        echo "To File: ".$log_message."\n";
    }
}

class TerminalLogger implements LoggerInterface{
    public function log($log_message)
    {
        // TODO: Implement log() method.
        echo "To Terminal: ".$log_message."\n";
    }
}

trait LoggerTrait{
    protected $logger;
    public function setLogger(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function log($log_message){
        if ($this->logger){
            $this->logger->log($log_message);
        }
    }
}

class SocketStream{
    use LoggerTrait;
}
class UserProfile{
    use LoggerTrait;
}


$socketStream = new SocketStream();
$socketStream->setLogger(new TerminalLogger());
$socketStream->log("Socket Stream Message 2 \n");

$userProfile = new UserProfile();
$userProfile->setLogger(new DatabaseLogger());
$userProfile->log("User Profile added... 2");