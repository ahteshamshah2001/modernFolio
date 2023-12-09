# Free-open-source-portfolio-and-blogging-system-laravel (modernFolio)

🚀 Free Open-source portfolio website. It should show

## Portfolio Sections
✔️(Who you are)\
✔️Services Strip\
✔️Services\
✔️Packages\
✔️Experience Strip\
✔️Introduction\
✔️Achievements\
✔️Work examples\
✔️Approach\
✔️Testimonials\
✔️Blog Section\
✔️Great blogging system\
✔️Footer (Text, Links, Contact Me)

The design should be modern and responsive. Also, you should be able to manage everything easily through an admin panel was created using laravel voyager package. Check out [ahtesham.me](https://ahtesham.me) for a demo.


## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

You'll need
[Git](https://git-scm.com), [Composer](https://getcomposer.org/) and [Laragon](https://laragon.org/index.html).

## How To Use 

From your command line, clone and run modernFolio:

```bash
# Clone this repository
git clone (https://github.com/ahteshamshah2001/modernFolio.git)

# Go into the repository
cd modernFolio

Steps:
1- run command (composer install).
2- copy env.example to .env.
3- create database.
4- update database details in (.env) and also set project URL.

# Example
APP_URL=http://127.0.0.1:8000/
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=test123

5- run command (php artisan migrate).
6- run command (php artisan db:seed).
7- run command (php artisan serve).
8- goto url (http://127.0.0.1:8000/)
```
