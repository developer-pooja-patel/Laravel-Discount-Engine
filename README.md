<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Steps to Run a Laravel Project from GitHub

1️⃣ Download the Repository
----------------------------
Open a terminal and run the following command:

cd <your-project-folder>


2️⃣ Install Dependencies
---------------------
Install Composer Dependencies

composer install


3️⃣ Configure Environment Variables
------------------------------
Copy the example environment file and set up the database credentials:

cp .env.example .env

Then, edit the `.env` file and update:

DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password


4️⃣ Generate Application Key
------------------------
php artisan key:generate


5️⃣ Run Database Migrations
------------------------
php artisan migrate

If the project requires seed data, run:

php artisan db:seed


6️⃣ Start the Development Server
---------------------------
php artisan serve

The application will be available at: **http://127.0.0.1:8000/discount**

---

7️⃣ Run Tests 
------------
Enter cart total like : 540
Enter Items with comma seprate : item1, item2, item3

Then click apply discount,

you will see like below....

Discount Applied

Total Before Discount: $540

Discount Percentage: 10%

Total Discount: $54

Final Cart Total: $486
