# 📋 Cliente – Simple Customer Registration System

> Early career project developed to practice backend fundamentals using PHP and Slim Framework.

---

## 📌 About the Project

**Cliente** is a simple customer registration and consultation system built with PHP.

This project was developed during the early stages of my backend learning journey, focusing on:

- Routing with Slim Framework
- API integration
- MySQL database structure
- Basic MVC organization
- Form handling and validation

Although it is a simpler project compared to my recent work, it represents an important milestone in my development evolution.

---

## 🛠 Tech Stack

- PHP
- Slim Framework
- MySQL
- HTML / CSS
- ViaCEP Public API Integration

---

## 🔌 External API Integration

The system integrates with the **ViaCEP API** to automatically retrieve address data based on the Brazilian ZIP code (CEP).

API used:
https://viacep.com.br/

### How it works

- When the user fills in the CEP field
- On blur event (focus out)
- The system requests the API
- Address fields are auto-filled

This was implemented to practice REST API consumption and asynchronous requests.

---

## 📦 Features

- Customer registration
- Customer listing
- Address auto-fill via CEP
- MySQL database persistence

---

## 🗄 Database

The MySQL database creation script is available at:

