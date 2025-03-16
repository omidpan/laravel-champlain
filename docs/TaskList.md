
<img src="https://champlainsaintlambert.ca/wp-content/uploads/2022/07/logo-without-flag.png" alt="Champlain-college" width="30%" />

---
</br><img src="https://laravel.com/img/favicon/apple-touch-icon.png" alt="Laravel Logo" width="12%" />

---
# Task List
### 1. Branching
- Start from the **01-task-list** branch and proceed as required.
- Each section of a completed part includes an associated tag that you can checkout to it directly. 
- How to switch to a tag :
   ```sh
   git checkout 00-initial
   ```
- if you want to switch to the latest code, it is very easy . Just instead of tag name you can checkout to   the branch. supposed we want to checkout to branch 01-branch , then type
   ```sh
    git checkout 01-task-list
   ```
- Each branch is dedicated to a different project, so be sure to check out the correct branch before working on a specific project.

---

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
   ```
2. Start the Laravel development server:
   ```sh
   php artisan serve
   ```
3. Open your browser and visit `http://127.0.0.1:8000` to see your Laravel application in action.

---

