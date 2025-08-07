# Laravel Blog Project

This is a simple blog-style Laravel application featuring basic user authentication, blog categories, profile management, and standard pages like About and Contact. It follows a clean MVC structure and Blade templating for frontend layout.

---

## Features

- User Authentication (Login & Register)
- Blog Categories & Posts
- User Profile Management
- Static Pages: Home, About, Contact
- Layouts and Blade Components
- Clean and modular MVC structure

---

##  Controllers

- `HomeController`
- `CategoryController`
- `BlogController`
- `ProfileController`
- `LoginController`
- `RegisterController`
- `AboutController`
- `ContactController`

---

##  Blade File Structure

resources/views/
├── auth/
│ ├── login.blade.php
│ └── register.blade.php
├── layouts/
│ └── app.blade.php
├── pages/
│ └── home/
│   └── index.blade.php
│ └── about/
│   └── index.blade.php
│ └── Post/
│   └── index.blade.php
│ └── category/
│   └── index.blade.php
│ └── contact/
│   └── index.blade.php
│ └── profile/
│   └── index.blade.php
├── partial/
│ ├── nav.blade.php
| └── nav.blade.php


---

## 🛠️ Requirements

Make sure your system has the following:

- PHP >= 8.1
- Composer
- Laravel >= 10.x
- MySQL or any supported database
- Node.js & npm (for frontend assets, optional)

---

### ⚙️ How to Execute (Run the Project)

Follow these steps to set up and run the project locally:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/your-laravel-project.git
   cd your-laravel-project
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Create Environment File**
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Configure `.env` File**
   - Set your database name, username, and password in the `.env` file.

6. **Run Migrations (if any)**
   ```bash
   php artisan migrate
   ```

7. **Start the Development Server**
   ```bash
   php artisan serve
   ```

   Open your browser and go to:
   ```
   http://127.0.0.1:8000
   ```

8. **(Optional) Install Node Modules & Compile Assets**
   ```bash
   npm install
   npm run dev
   ```

