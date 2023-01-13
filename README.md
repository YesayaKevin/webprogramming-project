# bebassih-webprogramminglec
This repository is made for Web Programming LEC Final Project.

How to compile/run this program?

1. First of all, you have to install your local composer with "composer install" on your terminal
2, Second, check for ".env" file. If it’s not exist, create the .env file from ".envexample" by rename or duplicate it.
3. Third, check the database name and the APP_key on .env file. If it is not exist, call "php artisan generate:key".
4. And then, you must create your local database on phpmyadmin and set up the .env file with the same database name as you created.
5. After it's connected, do "php artisan migrate:fresh --seed" to run the migration and seeder.
6. Last, Do "php artisan serve" to open the website.

Note:
1. Don't forget to register a new user, to log in as user.
2. Admin account is created while migrate, with email admin@gmail.com and password admin1234.
