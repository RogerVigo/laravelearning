#Installation

```composer install```

On Root project, you must create .env file and add:

```
   APP_NAME=
   APP_KEY=
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=
   DB_USERNAME=
   DB_PASSWORD=
   
   
   MAIL_DRIVER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=
   MAIL_PASSWORD=
   MAIL_FROM_ADDRESS=
   MAIL_FROM_NAME=

```

Then, on your console type:

``` php artisan key:generate```

``` php artisan config:cache```
