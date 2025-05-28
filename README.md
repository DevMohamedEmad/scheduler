<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


---
# Laravel Platform Manager

A Laravel-based web application for managing platforms associated with users. Includes features like filtering posts, scheduling, and platform assignment via modal interface.

## 🚀 Features

- User authentication
- Platform listing and management
- Sync platforms to users using modals
- Filter posts by status and scheduled date
- Bootstrap 5 UI
- Allow to user to post only 10 posts per day

---

## 🛠️ Installation

Follow these steps to install and run the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/DevMohamedEmad/scheduler.git
cd scheduler
```

### 2. Run this commands in your terminal

```bash
composer update
cp .env.example .env () 
php artisan key:generate
php artisan migrate:fresh --seed
npm run dev
php artisan serve
```
### don't forget to update the section in .env file 

from : 
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

to :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
