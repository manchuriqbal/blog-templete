# Blog-Template

This is a simple blog management system built with **Laravel** as part of an assignment.  
The project demonstrates **form handling, Eloquent relationships, validation, and Blade templating**.

---

##  Features & Approach

- Created **separate controllers** for Admin and Frontend.  
- Used **Form Requests** for input validation (e.g., required fields, unique slug).  
- Implemented **one-to-many relationship** between Category and Post.  
- Used **Blade layouts and components** for reusability.  
- Applied **factories & seeders** to generate demo data.  
- **Admin Panel**: CRUD for Categories & Posts with pagination.  
- **Frontend**: Displayed dynamic data (categories with their respective posts).  

---

##  Technologies Used

- Laravel  
- PHP  
- MySQL  
- Blade  
- Tailwind CSS  

---

##  How to Run the Project

1. Clone the repository:  
   git clone https://github.com/manchuriqbal/blog-template.git  
   cd blog-template  

2. Install dependencies:  
   composer install  
   npm install && npm run dev  

3. Set up environment file:  
   cp .env.example .env  
   php artisan key:generate  

4. Run migrations and seed demo data:  
   php artisan migrate --seed  

5. Start the development server:  
   php artisan serve  

6. Visit the project in your browser:  
   http://127.0.0.1:8000  

---

##  Notes

- Admin Panel: Manage categories and posts.  
- Frontend: Browse blog posts by category.  
- This project is for **educational purposes only** (Assignment on Laravel Form Handling & Eloquent Relationships).  

---
