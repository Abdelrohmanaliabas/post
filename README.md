# Laravel Post Management System

A comprehensive post management system built with Laravel framework, featuring user authentication, CRUD operations, and a clean, responsive interface.

## 📋 Table of Contents
- [Features](#features)
- [Screenshots](#screenshots)
- [Installation](#installation)
- [API Documentation](#api-documentation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [Contact Information](#contact-information)

## ✨ Features

- **User Authentication System**
  - User login and registration
  - Password reset functionality
  - Session management

- **Post Management**
  - Create, Read, Update, Delete (CRUD) operations
  - Post listing with pagination
  - Author attribution
  - Timestamp tracking

- **RESTful API**
  - JSON-based API endpoints
  - Bearer token authentication
  - Proper HTTP status codes

- **Responsive Design**
  - Clean and modern UI
  - Mobile-friendly interface
  - Intuitive navigation

## 📸 Screenshots

### Posts Dashboard

<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152325.png" alt="Build Status">
*Main dashboard showing all posts with pagination and action buttons*

### Create New Post
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152349.png" alt="Build Status">
*Form interface for creating new posts with title, content, and author selection*

### Post Details View
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152501.png" alt="Build Status">
*Individual post view with full content and metadata*

### Edit Post
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152531.png" alt="Build Status">
*Edit interface for updating existing posts*

### Authentication
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152600.png" alt="Build Status">
*User login interface with email and password fields*

<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152618.png" alt="Build Status">
*Password reset interface for account recovery*

### API Testing
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152737.png" alt="Build Status">
*API endpoints testing with Postman showing JSON responses*
<img src="https://github.com/Abdelrohmanaliabas/post/blob/main/screenshots/Screenshot%202025-06-14%20152720.png" alt="Build Status">
## 🚀 Installation

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL/PostgreSQL
- Node.js & NPM (for frontend assets)

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Abdelrohmanaliabas/post.git
   cd post
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # Configure your database credentials in .env file
   php artisan migrate
   php artisan db:seed  # Optional: seed with sample data
   ```

6. **Build frontend assets**
   ```bash
   npm run dev
   # or for production
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`

## 🔧 API Documentation

### Authentication
All API requests require authentication using Bearer tokens.

**Headers:**
```
Authorization: Bearer {your-token}
Accept: application/json
```

### Endpoints

#### Posts
- `GET /api/posts` - List all posts (paginated)
- `GET /api/posts/{id}` - Get specific post
- `POST /api/posts` - Create new post
- `PUT /api/posts/{id}` - Update post
- `DELETE /api/posts/{id}` - Delete post

#### Sample API Response
```json
{
  "current_page": 1,
  "data": [
    {
      "id": 59,
      "title": "test create task",
      "content": "Rem et fugiat eos natus labore vel...",
      "user_id": 1,
      "created_at": "2025-06-14T12:24:42.000000Z",
      "updated_at": "2025-06-14T12:24:42.000000Z",
      "deleted_at": null
    }
  ]
}
```

## 📖 Usage

### Creating a Post
1. Navigate to the Posts dashboard
2. Click "Create new post" button
3. Fill in the post title and content
4. Select the author from the dropdown
5. Click "Create Post" to save

### Managing Posts
- **View**: Click the blue "View" button to see post details
- **Edit**: Click the yellow "Edit" button to modify the post
- **Delete**: Click the red "Delete" button to remove the post

### User Authentication
- Access the login page at `/login`
- Use "Forgot your password?" link for password recovery
- Register new users through the registration form

## 🛠 Technologies Used

- **Backend**: Laravel 10.x
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Authentication**: Laravel Sanctum/Passport
- **API**: RESTful API with JSON responses
- **Testing**: Postman for API testing

## 📧 Contact Information

**Developer**: Abdelrahman Ali  
**Email**: abdelrahmanali2310@gmail.com  
**Phone**: +20 1097077419  
**GitHub**: [Abdelrohmanaliabas](https://github.com/Abdelrohmanaliabas)

---



## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

⭐ **Don't forget to star this repository if you found it helpful!**
