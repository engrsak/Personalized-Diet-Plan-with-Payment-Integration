# Diet Plan - Personalized Nutrition Plan with PayHere Integration

This is a PHP, MySQL, and phpMyAdmin-based web application that allows users to generate a personalized diet plan. Users input their details via a multi-step form wizard. Based on their data (gender, weight, height, target), a suitable plan is assigned. After payment via PayHere, a customized PDF is generated and sent to the user via email.

## Screenshots
![Diet Plan Screenshot](img/screenshot-2.png)
![Diet Plan Screenshot](img/screenshot-1.png)


## Features

- Multi-step form wizard (gender, height, weight, target)
- Automated plan assignment logic based on user input
- PayHere online payment integration
- PDF generation and delivery via email
- Admin-side MySQL database for user and plan tracking


## Installation Guide

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/diet-plan.git
cd diet-plan
```
2. Import the SQL Database
Open phpMyAdmin, Create a new database (e.g., dietplan), Import the SQL file from the db/dietplan.sql file

3. Set Up Configurations
Database Connection: Update your DB credentials in config.php

``` php
// config.php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dietplan';
```

PayHere Integration

⚠️ In order for the payment gateway to work properly:

Replace **merchant_id in payhere.php** and Replace **secret_key in payhere-notify.php**

``` php
// payhere.php
$merchant_id = 'YOUR_MERCHANT_ID';

// payhere-notify.php
$merchant_secret = 'YOUR_SECRET_KEY';
```

Note: Always refer to the official [PayHere documentation](https://support.payhere.lk/) for the latest code snippets and integration updates.

## Contributing

Pull requests and feedback are welcome! If you have suggestions or improvements, feel free to fork this repository and submit a pull request.


