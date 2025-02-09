<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Student Management System

## Overview

This is a simple web-based **Student Management System** built with **Laravel**. It allows users to manage student data, such as their names, addresses, and mobile numbers, with full CRUD functionality (Create, Read, Update, Delete).

## Features

- **CRUD Operations**: Add, Edit, View, and Delete students.
- **Responsive Design**: Built with **Bootstrap** for a mobile-friendly interface.
- **Simple UI**: A user-friendly interface with clear navigation.
- **Data Handling**: Student data is stored in a MySQL database.

## Technologies Used

- **PHP**: Backend programming language
- **Laravel**: PHP framework for developing the web application
- **Bootstrap**: Frontend framework for responsive design
- **MySQL**: Database used for storing student records
- **Blade**: Laravel's templating engine

## Installation

To run this project locally, follow these steps:

### Prerequisites

- **PHP** >= 8.0
- **Composer** (PHP dependency manager)
- **MySQL** (Database)

### Setup Instructions

1. **Clone the repository**:
   ```bash
   git clone https://github.com/KHALIDKHELIL/student_management.git

Navigate to the project directory:

cd student-management-system

Install the dependencies: Use Composer to install the required PHP packages:

composer install

Configure the environment file: Copy the .env.example file to .env:

cp .env.example .env

Configure your database: Edit the .env file and set your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbstudentms
DB_USERNAME=root
DB_PASSWORD=

Generate the application key: Run the following command:

php artisan key:generate

Run the migrations: Set up your database by running the migrations:

php artisan migrate

Serve the application: Finally, run the application:

    php artisan serve

    The application will now be available at http://127.0.0.1:8000.

Routes

Here are the available routes:

    GET /students: Display all students in the system.
    GET /student/create: Show the form to add a new student.
    POST /student: Add a new student to the database.
    GET /student/{id}: Show the details of a student.
    GET /student/{id}/edit: Show the form to edit a student's details.
    PUT /student/{id}: Update a student's information.
    DELETE /student/{id}: Delete a student from the database.

Usage

    Student Dashboard: Displays a list of all students.
    Add Student: Adds a new student record.
    Edit Student: Edits the details of an existing student.
    Delete Student: Deletes a student record with confirmation.

Contributing

Feel free to fork this project and submit pull requests to contribute. To contribute:

    Fork the repository.
    Create a feature branch (git checkout -b feature/your-feature).
    Commit your changes (git commit -m 'Add new feature').
    Push to the branch (git push origin feature/your-feature).
    Open a pull request.

License

This project is open-source and available under the MIT License.
Acknowledgments

    Laravel: For the powerful PHP framework and tools.
    Bootstrap: For making responsive web development easy.
    All contributors: Thank you for your support in improving this project!
