# Customer Feedback System

A simple web application for collecting feedback and generate reports. Built using PHP, HTML, CSS, JavaScript, and SQLite.


## Prerequisites

- XAMPP (or any web server with PHP support)
- Basic knowledge of PHP, HTML, CSS, and JavaScript

## Installation

1. **Clone the repository**:

    ```sh
    git clone https://github.com/your-username/feedback.git
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

5. **Access the application**:
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
