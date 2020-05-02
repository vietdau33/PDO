<?php

class Logger{

    private $nameFile = '';
    private $folder = __DIR__ . DIRECTORY_SEPARATOR . "log" . DIRECTORY_SEPARATOR;

    public function __construct(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->nameFile = date("d_m_Y") . '.txt';
    }

    public function write($string){
        $preString = date("H:m:s") . ' ';
        if (!file_exists($this->folder)) {
            mkdir($this->folder, 0777, true);
        }
        $file = fopen($this->folder . $this->nameFile, "a+");
        fwrite($file, PHP_EOL);
        fwrite($file, $preString . $string);
        fclose($file);
        return true;
    }
}