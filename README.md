<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2020/10/kakashi-boruto.jpg" width="400">
</a>
</p>

## About This Project

This is a sample project of a TODO list for a PHP course

## Contributing

- Frederick Alvarez

## Setup instructions

Before run this site you have to

- Install PHP7
- Install MySQL8
- Install Composer
- Install nodejs
- Install Git

Once you have cloned the project run

    cp .env.example .env
    php artisan key:generate

add db info to .env

    DB_DATABASE=<replaceme>
    DB_USERNAME=<replaceme>
    DB_PASSWORD=<replaceme>

then run

    composer install
    npm install
    npm run dev
    php artisan migrate
    php artisan storage:link

## How to run the app

    php artisan serve --host=0.0.0.0
    
