# DevSpace Blog Site

DevSpace is a blogging platform designed for programmers to share posts about programming languages, frameworks, SQL, and more. Users can create posts with code snippets, images, and comments. Admins have full control over categories, posts, and comments.

## Features

- **User Roles**: Admin, Blog, and User.
- **Post Creation**: Add posts with titles, images, and code snippets.
- **Category Management**: Admins can create, edit, and manage categories.
- **Commenting System**: Users can comment on posts and delete their own comments.
- **SEO Optimization**: Categories include meta fields for better search visibility.
- **Responsive Design**: Built with Bootstrap for seamless usage across devices.

## Technologies Used

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP Laravel 8
- **Database**: MySQL
- **Additional Tools**: AJAX, Font Awesome
- **Environment**: XAMPP

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/devspace.git
   cd devspace
   
2. Install dependencies:
  composer install
  npm install

3. Configure .env:
    Set up your database connection, email configurations, and app URL.

4. Run migrations and seeders:
  php artisan migrate --seed

5. Start the development server:
  php artisan serve

6. Access the application at: http://localhost:8000
