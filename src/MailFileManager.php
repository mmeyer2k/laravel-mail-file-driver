<?php

namespace Mmeyer2k\LaravelMailFile;

use Illuminate\Mail\MailManager;

class MailFileManager extends MailManager
{
    protected function createFileTransport()
    {
        return new MailFileDriver;
    }
}