
# 🌍 Trip Registration Form (PHP + MySQL)

A simple web application that allows users to register for a trip. The form collects user details and stores them in a MySQL database using PHP.

---

## 🚀 Features

- User-friendly form
- Stores data in MySQL database
- Same-page form submission
- Clean and responsive UI

---

## 🛠️ Tech Stack

- HTML
- CSS
- PHP
- MySQL
- XAMPP

---

## 📂 Project Structure

cwh/
│── trip.php
│── trip.php
│── style.css

---

## ⚙️ How to Run Locally

1. Install XAMPP  
2. Start Apache and MySQL  
3. Move project folder to:

   /Applications/XAMPP/xamppfiles/htdocs/

4. Open browser and go to:

   http://localhost/cwh/trip.php

---

## 🗄️ Database Setup

1. Open phpMyAdmin  
2. Create a database:

   trip

3. Run this SQL:

CREATE TABLE trip (
    sno INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    gender VARCHAR(10),
    email VARCHAR(50),
    phone VARCHAR(15),
    other TEXT,
    dt DATETIME
);

---
<img width="3408" height="1964" alt="image" src="https://github.com/user-attachments/assets/dbbf7a2e-17c4-4f82-9823-c7028ff52395" />

## 💡 Future Improvements

- Add form validation
- Use prepared statements (security)
- Show submitted data
- Add admin panel

---

## 🙌 Author

Shivansh

---

## ⭐ Support

If you like this project, give it a star ⭐
