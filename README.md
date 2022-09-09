# laravel-mail-file-driver
A Laravel Mail driver that saves messages to disk for testing/ci purposes.

## Install
```bash
composer require mmeyer2k/laravel-mail-file-driver 'dev-main'
```

## Add to env
```ini
MAIL_DRIVER=file
```

## Custom save location in env
```ini
MAIL_FILE_PATH=/path/to/storage
```
