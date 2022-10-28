<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements 
- PHP >= 7.4.27
- Laravel Framework v9
- Composer v2.3.5

## How to install
- Open your termimal and move to where to install the application
### Copy or clone the repo
 `git clone https://github.com/mmsh350/library.git`

## Copy and setup environment

`.env.example` to `.env` and setup your database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME={username}
DB_PASSWORD={password}

Replace `{username}` and `{password}` with your db username and password

## Setup

### Run and update all dependancies

`composer install`
 
### Run all migrations

`php artisan migrate`

### Seed Database

`php artisan db:seed`

## Admin Credentials 
- Username : sani.muhammad38@gmail.com
- Password : password

## Accessing the software 
- Use the php artisan command (php artisan serve) to run the software
- http://127.0.0.1:8000/

 


 
