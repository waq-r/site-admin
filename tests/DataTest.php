<?php

include '../autoload.php';
/**
 *
 */
$datatest = new DataTest();
class DataTest
{
    public function __construct()
    {
        $data = new Data();

    }

    public function testWriteable($file)
    {
        # code...
        return $data->fileWriteable($file);

    }
}
