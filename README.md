# CRUD User Management Application

This is a simple CRUD (Create, Read, Update, Delete) user management application API implemented in PHP. It provides basic functionalities for user registration, login, logout, change password, edit user information, and delete user.

## Features

- User registration: Users can register by providing their name, email, and password.
- User login: Registered users can log in using their email and password.
- User logout: Logged-in users can log out of their account.
- Change password: Users can change their account password after logging in.
- Edit user information: Administrators can edit user information, such as name and email.
- View all users information: Users can view all other users information.
- Delete user: Administrators can delete user accounts from the system.

## Getting Started
Follow these instructions to get the API up and running on your local machine for development and testing purposes.

## Prerequisites
To run and test this app, you will need the following installed on your system:

* XAMPP, WAMP, or MAMP
* POSTMAN 

## Setup Instructions

To run the application locally, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/Namibra-Devs/crud-user-management-application.git

2. Set up a local development environment with PHP and a MySQL database.
3. Create a new database with the name user_management_application using phpmyadmin.
4. Configure the database connection in the config.php file if necessary.
5. Start your local server (e.g., XAMPP, WAMP, or MAMP).
6. Access the application in a web browser by visiting `http://localhost/Namibra/crud-user-management-application.`

## Testing with Postman

You can test the application's APIs using Postman. Here are some sample requests:

## Authentication

## Register a new user as admin: 

Method: POST

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/register.php`

Body: Select "x-www-form-urlencoded" and provide the following key-value pairs:
- name: Mohammed Aminah
- email: mohammedaminah@gmail .com
- password: password541
- is_admin: true

## Register a new user: 

Method: POST

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/register.php`

Body: Select "x-www-form-urlencoded" and provide the following key-value pairs:
- name: Mohammed Aminah
- email: mohammedaminah@gmail.com
- password: password541

## Log in: 

Method: POST

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/login.php`

Body: Select "x-www-form-urlencoded" and provide the following key-value pairs:
- email: mohammedaminah@gmail.com
- password: password541

## Change password: 

Method: POST

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/change_password.php`

Body: Select "x-www-form-urlencoded" and provide the following key-value pairs:
- current_password: password541
- new_password: password145

## Edit user: 

Method: POST

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/edit_user.php?user_id=1`

Body: Select "x-www-form-urlencoded" and provide the following key-value pairs:
- name: Mohammed Aisha
- email: mohammedaisha24@gmail.com

## View all users: 

Method: GET

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/get_all_users`

## Delete user: 

Method: GET

Endpoint: `http://localhost/Namibra/crud-user-management-application/vendor/delete_user.php?user_id=1`

## Additional Information

- The `auxiliaries.php` file contains custom functions/methods used throughout the application.
- The `config.php` file handles the database connection configuration.

## Built With

* PHP 8.0
* SQL

