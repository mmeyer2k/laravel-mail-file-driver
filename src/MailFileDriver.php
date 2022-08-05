<?php

namespace Mmeyer2k\LaravelMailFile;

use Illuminate\Mail\Transport\Transport;
use Swift_Mime_SimpleMessage;

class MailFileDriver extends Transport
{
    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null)
    {
        $time = number_format(microtime(true), '4', '.', '');

        $base = env('MAIL_FILE_PATH') ?? sys_get_temp_dir();

        $file = "$base/$time.txt";

        file_put_contents($file, $message->toString());

        return 0;
    }
}
