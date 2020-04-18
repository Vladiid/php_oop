<?php


//class File
//{
//
//    public $fp;   //указатель на открытие фала
//    public $file; //путь к файлу
//
//    public function __construct($file)
//    {
//        $this->file = $file; //путь к файлу
//        if (!is_writable($this->file)) {    //проверка существует ли файл и открыт ли он для записи
//            echo "Файл {$this->file} недоступен для записи";
//            exit;
//        }
//        $this->fp = fopen($this->file, 'a');    //отрытие файла для записи
//    }
//
//    public function __destruct()
//    {
//        fclose($this->fp);    //закрытие
//    }
//
//    public function write($text){
//        if (fwrite($this->fp, $text. PHP_EOL) === FALSE) {
//            echo "Не могу произвести запись в файл ($this->fp)";    //запись
//            exit;
//        }
//    }
//}

class File
{
    public $file_open;
    public $fpath;

    public function __construct($fpath)
    {
        $this->fpath = $fpath;
        if (!is_writable($this->fpath)) {
            echo "Файл $this->fpath недоступен для записи";
            exit;
        }
        $this->file_open = fopen($this->fpath, 'a');
    }

    public function __destruct()
    {
        fclose($this->file_open);
    }

    public function write($text)
    {
        if (fwrite($this->file_open, $text . PHP_EOL) == false) {
            echo "Не могу произвести запись в файл ($this->file_open)";
            exit;
        }
    }

}