# Login App

## Introduction

This is a simple login application built with Laravel and Laravel Sail. It includes a login form with AJAX authentication and API endpoints.

## Requirements

- **Docker Desktop** installed and running
- **Composer**
- **Node.js and npm**

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/login-app.git
    ```
   
2. **Change into the project directory:**

    ```bash
    cd login-app
    ```
   
3. **Install PHP dependencies:**

    ```bash
    composer install
    ```
   
4. **Install NPM dependencies:**

    ```bash
    npm install
    ```
   
5. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```
   
6. **Generate an application key:**
    
        ```bash
        php artisan key:generate
        ```
7. **Start the Laravel Sail containers:**

    ```bash
    ./vendor/bin/sail up -d
    ```
   
8. **Run the database migrations:**

    ```bash
    ./vendor/bin/sail artisan migrate
    ```
   
9. **Run the database seeders:**
    
        ```bash
        ./vendor/bin/sail artisan db:seed
        ```
10. **Build the frontend assets:**
    
        ```bash
        npm run dev
        ```
11. **Visit the application in your browser:**

    [http://localhost](http://localhost)
12. **Use test credentials to login:**

    - **Email:** `testuser@example.com`
    - **Password:** `password`
