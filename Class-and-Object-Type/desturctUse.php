<?php
class File{
    private $handle;
    private string $fileName;

    public function __construct($fileName, $fileMode){
        $this->fileName = $fileName;
        $this->handle = fopen($fileName, $fileMode);
    }
    public function __destruct()
    {
        if ($this->handle){
            fclose($this->handle);
        }
    }
    public function display():string{
        return fread($this->handle, filesize($this->fileName));
    }
}

$file = new File('read.txt', 'r');
echo $file->display();