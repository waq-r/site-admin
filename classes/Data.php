<?php

/**
 * Data handling, accept input and save in file
 */
class Data
{

    public function isWriteable($filename)
    {
        # confirm data file/dir is writeable
        if (is_writable($filename)) {
            return true;
        }
        return false;
    }

}
