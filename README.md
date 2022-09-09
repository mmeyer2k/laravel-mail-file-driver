# laravel-mail-file-driver
A Laravel Mail driver that saves messages to disk for testing/ci purposes.

## Install
```bash
composer require mmeyer2k/laravel-mail-file-driver '0.0.1'
```

## Replace default laravel mail manager in /config/app.php
```php
return [
  'providers' => [
    # ...
    
    #Illuminate\Mail\MailServiceProvider::class,
    Mmeyer2k\LaravelMailFile\MailFileServiceProvider::class,
    
    # ...
  ],
];
```

## Add to .env
```ini
MAIL_DRIVER=file
```

## Custom storage location in .env
By default, messages are saved to path returned by `sys_get_temp_dir()`.
```ini
MAIL_FILE_PATH=/path/to/storage
```
