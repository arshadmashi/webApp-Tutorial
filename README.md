# PHP User Authentication System

This is a simple user authentication system built with PHP and MySQL. It provides basic functionalities such as user registration, login, and logout.

## Features

-   User registration with password hashing
-   User login with session management
-   Secure password storage using `password_hash()` and `password_verify()`
-   Logout functionality

## Requirements

-   PHP 7.0 or higher
-   MySQL 5.6 or higher
-   A web server (e.g., Apache, Nginx)

## Installation

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/your-repo-name.git
    cd your-repo-name
    ```

2.  **Create the database:**

    -   Create a new database in MySQL named `webApp_Tutorial`.

3.  **Create the `users` table:**

    -   Run the following SQL query in your `webApp_Tutorial` database to create the `users` table:

    ```sql
    CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    );
    ```

4.  **Configure the database connection:**

    -   Open `config.php` and update the database credentials:

    ```php
    define('DBSERVER', 'localhost'); // Database server
    define('DBUSERNAME', 'root'); // Database username
    define('DBPASSWORD', ''); // Database password
    define('DBNAME', 'webApp_Tutorial'); // Database name
    ```

## Usage

1.  **Register a new account:**
    -   Navigate to `register.php` in your web browser.
    -   Fill in the required fields (full name, email, password, and confirm password) and click "Submit".

2.  **Login to your account:**
    -   Navigate to `login.php` in your web browser.
    -   Enter your email and password, and click "Submit".
    -   Upon successful login, you will be redirected to `welcome.php`.

3.  **Logout:**
    -   On the `welcome.php` page, click the "Log Out" button to end your session. You will be redirected to the login page.

## File Structure

```
.
├── config.php
├── login.php
├── logout.php
├── README.md
├── register.php
├── session.php
└── welcome.php
```
