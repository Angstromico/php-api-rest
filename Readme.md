# PHP REST API – Practice Project

This is a simple REST API built with `PHP` for learning and practice purposes.
The goal is to understand how to structure an `API`, handle `HTTP` methods, work with `JSON` data, and interact with a database (optional).

## 🚀 Features

- Lightweight `REST API` built with native `PHP` (no frameworks)

- Clean folder structure

- JSON request/response handling

- Basic CRUD operations (Create, Read, Update, Delete)

- Simple routing system

## 📂 Project Structure

``bash
project/
├── config/
│   └── Database.php          # Database connection and configuration
├── src/
│   ├── controllers/          # Handles request logic, interacts with models
│   ├── models/               # Data access and business logic (e.g., classes for Post, User)
│   ├── routes/               # Defines API endpoints and maps them to controllers
│   └── helpers/              # Utility functions and reusable code
├── public/
│   └── index.php             # Single entry point for all API requests (front controller)
└── README.md                 # Project information and documentation
``

## 🛠 Requirements

- PHP 8+

- Apache or Nginx (recommended)

- MySQL (optional, only if using a database)

- Postman, Thunder Client, or cURL to test API endpoints

## ⚙️ Installation

### Clone the repository:

``bash
    git clone https://github.com/yourusername/php-rest-api.git
``

### Enter the project folder:

``bash
    cd php-rest-api
``

### Now visit:

📌 Notes

This project is for learning only — not production ready.

You can extend it with authentication (JWT), middleware, or more advanced routing.

📝 License

This project is free to use and modify.