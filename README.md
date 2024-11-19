# 🍴 E-foodfinder  
![GitHub License](https://img.shields.io/badge/license-MIT-brightgreen)  
![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)  
![Laravel](https://img.shields.io/badge/Laravel-v8.0-red)  
![MySQL](https://img.shields.io/badge/MySQL-v5.7%2B-orange)  

## 📚 Table of Contents  
- [Project Overview](#project-overview)  
- [Objectives](#objectives)  
- [Target Audience](#target-audience)  
- [Key Features](#key-features)  
- [Technology Stack](#technology-stack)  
- [Installation](#installation)  
- [Usage](#usage)  
- [Contributing](#contributing)  
- [License](#license)  
- [Acknowledgments](#acknowledgments)  
- [Credits](#credits)  

---

## Project Overview  
**E-foodfinder** is an online platform that enables users to search for food from various restaurants and allows them to filter results based on preferences like price, rating, and more. It offers both a user management system for individuals looking to discover food and an admin panel for managing users, restaurants, and other platform features. The platform is designed to provide an intuitive and efficient way to find food based on specific filters, providing a seamless experience to both users and administrators.  

---

## Objectives  
The primary objective of **E-foodfinder** is to create an easy-to-use platform where users can search for food items from various restaurants, apply filters to sort by price, rating, and other criteria, and find the best food options available. The admin panel empowers platform administrators to manage users, restaurants, and other critical system settings effectively.  

---

## Target Audience  
- **Food Enthusiasts**: Individuals who want to discover food options from various restaurants, customize their search, and choose meals that meet their preferences.  
- **Restaurant Owners**: Restaurants wishing to showcase their menu items to a wider audience and connect with customers in a user-friendly platform.  
- **Platform Administrators**: Users responsible for managing the overall platform, overseeing user registrations, restaurant listings, and ensuring smooth functionality.  

---

## Key Features  
- 🔍 **Food Search & Filters**:  
  - Users can search for food items and apply filters based on criteria like price, rating, and cuisine to find the best options.  
- 👤 **User Management System**:  
  - Users can register, login, and manage their profile. Admins can monitor and manage user activity and account status.  
- 🛠️ **Admin Panel**:  
  - Admins can manage users, restaurants, food listings, and filter configurations.  
  - Admins have the ability to approve or reject restaurant submissions.  
  - Admin panel dashboard to oversee platform statistics, including user and restaurant activity.  
- ⭐ **Rating & Reviews**:  
  - Users can rate and leave reviews for food items, helping others make informed decisions.  
- 🍽️ **Restaurant Listings**:  
  - Restaurants can list their menu items and provide detailed information, including images, descriptions, and prices.  
- 🔒 **Authentication & Security**:  
  - Secure user authentication with password encryption and login systems.  
- 📨 **Email Notifications**:  
  - Automated email notifications for user registration, food order status, and system updates.  

---

## Technology Stack  
| **Category**      | **Technology**                        |  
|-------------------|--------------------------------------|  
| **Backend**       | Laravel (PHP Framework)              |  
| **Frontend**      | Tailwind CSS, jQuery, JavaScript      |  
| **Database**      | MySQL                                |  
| **Authentication**| Laravel Auth                         |  
| **Deployment**    | InfinityFree (for hosting)           |  
| **CI/CD**         | Automated via GitHub Actions         |  
| **Live Link**     | [efood-finder.rf.gd](https://efood-finder.rf.gd/) |  

---

## Installation  

### Prerequisites  
- PHP 7.4 or higher  
- Composer (for managing PHP dependencies)  
- MySQL (for the database)  
- Laravel (you'll need to install Laravel if it's not already installed)  

### Laravel Installation Steps  
1. **Install Laravel** (if you haven't already):  
   ```bash  
   composer global require laravel/installer  
