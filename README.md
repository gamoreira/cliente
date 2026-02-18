# 📋 Cliente – Customer Registration System

![PHP](https://img.shields.io/badge/PHP-7-blue)
![Slim](https://img.shields.io/badge/Slim-Framework-green)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![License](https://img.shields.io/badge/license-MIT-black)

> Early backend project developed to practice PHP fundamentals, routing, database integration and external API consumption.

---

## 📌 About the Project

**Cliente** is a simple customer registration and listing system built using PHP and Slim Framework.

This project was developed during the early stage of my backend learning journey, focusing on understanding:

- Routing with Slim Framework
- MySQL database integration
- Basic application structure
- External REST API consumption
- Form handling and data persistence

Although simple, this project represents an important milestone in my technical evolution.

---

## 🛠 Tech Stack

- PHP
- Slim Framework
- MySQL
- HTML / CSS
- ViaCEP Public API

---

## 🔌 External API Integration

The system integrates with the Brazilian postal code API:

https://viacep.com.br/

### How it works

- User enters a CEP (ZIP code)
- On blur event (focus out)
- The application makes a request to the ViaCEP API
- Address fields are automatically populated

This integration was implemented to practice REST API consumption and asynchronous requests.

---

## 📦 Features

- Customer registration
- Customer listing
- Address auto-fill via CEP
- MySQL database persistence

---

## 🗄 Database

The MySQL database creation script is available at:

`database.sql`

Located in the root directory of the project.

---

## ⚙️ Setup Instructions

### 1️⃣ Configure local environment

Make sure you have:

- PHP installed
- MySQL running
- Apache or similar server (XAMPP, WAMP, etc.)

### 2️⃣ Import the database

Import the `database.sql` file into your MySQL server.

### 3️⃣ Configure BASE_URL

The project was originally developed in localhost using the folder name:

`cliente`

If your project folder name is different, update the constant:

`BASE_URL`

Located in:

`index.php (line 3)`

---

## 🎯 Learning Objectives

This project helped me understand:

- How routing works in Slim Framework
- Basic MVC-style organization
- MySQL integration
- API consumption
- Request/response lifecycle
- Handling form data securely

---

## 📈 Professional Evolution

Since this project, I have progressed to building:

- Full-stack applications
- REST APIs with Node.js
- JWT authentication systems
- Dockerized environments
- Structured SaaS-style architectures
- Scalable project organization

This repository remains published to document my growth as a developer.

---

## 📄 License

MIT
