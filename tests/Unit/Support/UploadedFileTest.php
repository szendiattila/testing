<?php

use App\Support\UploadFile;

class UploadedFileTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function is_return_true()
    {
        $this->assertTrue(UploadFile::saveImage());
    }
}
