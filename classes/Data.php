<?php
namespace SiteAdmin\Data

/**
 * Data handling, accept input and save in file
 */
class Data
{

    public function fileWriteable($filename)
    {
        # confirm data file is writeable
        if (is_writable($filename)) {
            return true;
        }
        return false;
    }
}
