<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Newsletter Schedule

To run this application, do the following:

- Pull Git Repository.
- Run composer update(make sure composer is installed).
- Go to https://github.com/microsoftarchive/redis/releases to Download Redis .zip or .msi file.
- The ZIP file will require you to add the environment variables manually while the MSI file is an installer and will do it automatically for you.
- Run php artisan migrate command and makes sure you have the database configured properly in the .env file.
- Run php artisan serve command to start the application.
- After a successful subscription via the front end app, run the following commands:
- Run php artisan monthly:newsletter
- Run php artisan queue:work

Note:The Mail Server has to be configured so that the email can be delivered. <a href="https://mailtrap.io/">Mail Trap</a> can be used for testing. 



