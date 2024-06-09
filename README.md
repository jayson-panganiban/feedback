# Customer Feedback System

A simple web application for collecting feedback and generating reports. Built using PHP, HTML, CSS, JavaScript, and SQLite.

## Prerequisites

- XAMPP (or any web server with PHP support)
- Composer (PHP dependency manager)

## Installation

1. **Clone the repository**:

    ```sh
    git clone https://github.com/jayson-panganiban/feedback.git
    cd feedback
    ```
2. **Start XAMPP**:
   - Open XAMPP Control Panel.
   - Start Apache and MySQL services.

3. **Set up the project**:
   - Place the project folder inside the `htdocs` directory of XAMPP (e.g., `C:/xampp/htdocs/feedback` on Windows or `/Applications/XAMPP/xamppfiles/htdocs/feedback` on macOS).

4. **Create the SQLite database**:
   - Navigate to `http://localhost/feedback/install.php` in your web browser.
   - You should see a message indicating that the database and table were created successfully.

5. **Install Composer dependencies**:
   - Make sure you have Composer installed. If not, you can install it from [Composer's official website](https://getcomposer.org/).
   - Run the following command to install the dependencies:
     ```sh
     composer install
     ```

6. **Access the application**:
   - Navigate to `http://localhost/feedback/index.php` to access the feedback form.
   - Submit feedback through the form.
   - Click the "View Feedback Reports" button to view submitted feedback.

## Usage

1. **Submit Feedback**:
   - Navigate to `http://localhost/feedback/index.php`.
   - Fill out the feedback form and submit.

2. **View Feedback Reports**:
   - Click the "View Feedback Reports" button on the main page.
   - Alternatively, navigate directly to `http://localhost/feedback/templates/report.php`.

## Running Unit Tests

1. **Install PHPUnit**:
   - If not already installed, install PHPUnit using Composer:
     ```sh
     composer require --dev phpunit/phpunit ^9
     ```

2. **Run PHPUnit**:
   - Run the following command to execute your tests:
     ```sh
     vendor/bin/phpunit --configuration phpunit.xml
     ```


For a working demo, see: http://13.211.211.35/feedback