<?php
/*
Code by: Raad Haddad (@raadfhaddad)
*/
class Download_Image {
    public $path;
    public $operation;
    public $logfile;
    function __wakeup() {
        $image_path=base64_decode($this->path);
        if(file_exists($image_path) && $this->operation == "Download") {
            header('Content-Description: File Transfer');
            header('Content-Type: image/jpeg');
            header('Content-Disposition: attachment; filename="'.basename($image_path).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($image_path));
            flush();
            readfile($image_path);
            file_put_contents(__DIR__.'/'.$this->logfile,"image :".base64_decode($this->path)." has been downloaded by ".$_SERVER['REMOTE_ADDR']." and is comming from ".$_SERVER['HTTP_REFERER']."\r\n",FILE_APPEND);
        }
    }
}

$obj_image=base64_decode($_POST['image_path']);
$get_image=unserialize($obj_image);
?>
