####

## Instalation:

####

```sh
# Environment

delete composer.lock
composer install

# in your .env Change:
1.
```sh
  APP_URL= <http[s]://your-app-url>
  ASSET_URL= <http[s]://your-app-url>
```


# optionally you can to delete APP_KEY - it by gen in next step automatically
APP_KEY=

2. Create database
3. Configure .env DB with your settings
4. <http[s]://your-app-url>/installOrReset  # -> ok

```

####

### App Configuration

####

```sh

1. All configurations located at resources/views/app.blade.php
 - By default, all sections are included
3. All data can be changed from database

```
####

#### ... VIDEO:

####


```sh

# Store this file in your "public/assets/videos" :
https://storage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4

```

####

#### ... USE:

####

```sh

<http[s]://your-app-url>/

```

####

### --- BASIS CLEAR:

####

```sh
# run installOrReset:
# in your .env remove APP_KEY (total reset):
APP_KEY=

<http[s]://your-app-url>/installOrReset

```

####

### --- TO CLEAR (MANUALLY):

####

```sh
storage/framework/sessions/* - clean the sessions folder
    !Exept:
     .gitignore


php artisan queue:flush
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
php artisan event:clear
php artisan cache:clear
php artisan clear-compiled

php artisan view:clear
php artisan cache:clear

```
