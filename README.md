# 🗂️ Task Management System — ts-sys

A simple task management application built with **Laravel**, **Filament Admin Panel**, and **Blade** views. This project was created as part of a full-stack Laravel technical challenge.

---

## 🚀 Features

### User (Blade Side)
- Register and login with built-in authentication
- Create, edit, delete tasks
- Mark tasks as complete or incomplete
- View personal task list
- Soft delete & restore tasks

### Admin (Filament Panel)
- Admin panel through `/admin`
- View and manage all users
- View, create, edit, delete all tasks
- Dashboard with task statistics
- User-role management using Spatie Roles & Permissions
- normal user access control and sensitive data protection (optinal)

### Dashboard Stats (Filament)
- Total Tasks
- Completed Tasks
- Pending Tasks
- Total Users

---

## Tech Stack Usage

- Laravel 10
- Laravel Breeze (Blade-based auth)
- Filament Admin Panel
- Spatie Laravel Permission
- Tailwind CSS
- MySQL / SQLite
- PHP 8.1+

---

## 📦 Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/your-username/ts-sys.git
cd tm-sys
```

### 2. Install Dependencies

Install PHP dependencies using Composer:

```bash
composer i
```

Install JavaScript dependencies using npm:

```bash
npm i
```

### 3. Set Up Environment File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

Update the `.env` file with your database credentials:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 4. Run Migrations and Seeders

Run the database migrations to create the necessary tables:

```bash
php artisan migrate
```

Seed the database with initial data (e.g., roles, tasks, and a default admin user):

```bash
php artisan db:seed
```

### 5. Complie Assets

Compile the frontend assets (CSS, JavaScript) using Vite:

```bash
npm run build
```

### 6. Start the Development Server

```bash
php artisan serve
```

Visit the application in your browser at [http://localhost:8000](http://localhost:8000).

## Usage

Access the application:

## As Normal User 
-   open your browser at [http://localhost:8000](http://localhost:8000).
-   Log in with the default credentials:
    -   **Email**: test@gmail.com
    -   Password: 123456

## As Admin 
-   open your browser at [http://localhost:8000/admin](http://localhost:8000/admin).
-   Log in with the default admin credentials:
    -   **Email**: admin@gmail.com
    -   Password: 123456
