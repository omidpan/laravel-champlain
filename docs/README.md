
<img src="https://champlainsaintlambert.ca/wp-content/uploads/2022/07/logo-without-flag.png" alt="Champlain-college" width="30%" />

---
</br><img src="https://laravel.com/img/favicon/apple-touch-icon.png" alt="Laravel Logo" width="12%" />

---
# Task List
### 1. Branching
- Start from the **01-task-list** branch and proceed as required with relative tags.

## 2. Before to build a Laravel first app, Let's be sure *php* works without the problem.
- There is a **checking.php** file that you should execute it from terminal and see the result 
```sh
php checking.php
```
If everything is ok, then go to the next step.
---

### 3. Creating a Laravel Project
Laravel can be set up in multiple ways, but the **best method** is using **Composer**, as it automatically installs all necessary dependencies.

---

### Installation using Composer:
Run the following command to create a new Laravel project:
```sh
composer create-project laravel/laravel task-list
```
This command will:
- Download the latest Laravel framework.
- Install all required dependencies.
- Set up the initial project structure.
---

### 4. Next Steps
After creating the Laravel project:
1. Navigate into the project directory:
   ```sh
   cd task-list
   composer install
   ```
2. Start the Laravel development server:
   ```sh
   php artisan serve
   ```
3. Open your browser and visit `http://127.0.0.1:8000` to see your Laravel application in action.

4. After having sqlite database and .env file , then we will stop tracking these 2 files because of security
  ```
      git update-index --assume-unchanged task-list/.env
      git update-index --assume-unchanged task-list/database/database.sqlite
   ```

---

