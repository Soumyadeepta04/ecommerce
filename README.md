<p align="center">
  <img src="assets/Banner.png" alt="SwipeKart Preview" width="600"/>
</p>

# 🛒 SwipeKart - Mobile E-Commerce Website

Welcome to **SwipeKart**, a complete mobile-friendly e-commerce web application built using **PHP** and **MySQL**.  
SwipeKart allows users to browse, add to cart, and purchase mobile products easily — designed for a fast and seamless shopping experience!

---

## 🚀 Features

✅ Fully responsive design — works great on mobile, tablet, and desktop  
✅ Dynamic product display from MySQL database  
✅ Add-to-cart and quantity management  
✅ Basic checkout flow  
✅ PHP + MySQL backend integration  
✅ Clean, modern, and lightweight UI  

---

## 🛠 Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript  
- **Styling**: Custom CSS  
- **Backend**: PHP  
- **Database**: MySQL  

---

## 📂 Project Structure

SwipeKart/
├── assets/ # CSS, JS, images
├── templates/ # Reusable PHP components (navbar, footer)
├── products.php # Product listing page
├── cart.php # Shopping cart page
├── checkout.php # Checkout page


---

## ⚙️ Setup Instructions

1️⃣ **Clone the repository**
```bash
git clone https://github.com/yourusername/SwipeKart.git
cd SwipeKart
```
2️⃣ Set up your MySQL database

Create the database and table:
```sql
CREATE DATABASE swipekart;
USE swipekart;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  image VARCHAR(255),
  description TEXT
);
```
Insert sample product data manually or via SQL script.

3️⃣ Configure database connection
In config.php:
```php
<?php
$connection = mysqli_connect("localhost", "root", "", "swipekart");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```
4️⃣ Run the project

Place your project in the web server directory (e.g. htdocs if using XAMPP).

Open in browser:
```
http://localhost/SwipeKart/
```

