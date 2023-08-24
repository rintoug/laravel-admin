Publish your view by issuing the below command
```php artisan vendor:publish --provider="Rintoug\LaravelAdmin\Providers\LaravelAdminServiceProvider" --tag="views"```


![Alt text](https://assets.wallpapernoon.com/media/wp/medium/black-handled-key-on-key-hole-door_xkZDbEuq.jpg "key admin")

(Source [From here](https://wallpapernoon.com/wp/black-handled-key-8ls6pCmWCym2) )


### Instructions

#### Installation

1. Add the the package source from github in composer.json of your Laravel application.
   ```
   "repositories": [
        {
            "type": "github",
            "url": "https://github.com/rintoug/laravel-admin.git",
            "no-api": true
        }
    ]
   
2. Add the package name in the composer required section.
   ```
   "rintoug/laravel-admin": "dev-master"
3. Run ```composer update```
4. Optional: if you want customize the admin template, try to publish the view.
   ```
    php artisan vendor:publish --provider="Rintoug\LaravelAdmin\Providers\LaravelAdminServiceProvider" --tag="views"
5. Run ```php artisan migrate```
6. At this step you are ready to go, hit the url ```http://localhost/admin```
7. Create a user by running below commands
   ```
   php artisan tinker

   User::create(["name"=> "Rinto George","type" => "admin",email"=>"mail.rinto@gmail.com","password"=>bcrypt("123456")]);
   ```
8. Copy the dist folder of core ui to ```public/themes/admin``` folder   

