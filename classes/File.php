<?php

/**
 * File handling, check, read, write data in a file
 */
class File
{

    public function isWriteable($filename)
    {
        # confirm data file/dir is writeable
        if (is_writable($filename)) {
            return true;
        }
        return false;
    }

    public function wrtie($filename)
    {
        if (file_put_contents($filename, $data)) {
            return true;
        }
        return false;
    }

    public function read($filename)
    {
        if (file_get_contents($filename)) {
            return true;
        }
        return false;
    }

}
