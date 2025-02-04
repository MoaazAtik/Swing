# Swing API

A simple **Registration & Login API** built with Laravel, following **MVC architecture** and secured with **Sanctum authentication**.

<br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/6fe5f285-53cf-4f1b-ba95-0c4ad6c38742" alt="Swing Api Ape" width="500"/>
</div>
<br>
<div align="center">
  Swinging Ape: "How can I help you 🐵🗞️"
</div>

<br>

## Navigate Your Journey of exploring Swing 🗺️
1. [Features](#features-)
2. [API Documentation](#api-documentation-)
3. [API Endpoints](#api-endpoints-)
4. [Security Measures](#security-measures-)
5. [Utilized Techniques and Technologies](#utilized-techniques-and-technologies-)
6. [Main Files](#main-files-)

<br>

## Features 🧩
✅ User authentication (Register, Login, Retrieve user)<br>
✅ Secure authentication with Laravel Sanctum<br>
✅ API rate limiting (10 requests per minute per user)<br>
✅ Request validation for better data handling<br>
✅ MVC architecture

<br>

## API Documentation 📜
Postman Collection: [View Postman Documentation](https://documenter.getpostman.com/view/your-doc-id)

<br>

## API Endpoints 🔗
Swing provides endpoints for the following functionalities:
1. Resiter a User
2. Login a User
3. Retrieve Authenticated User

<br>

## Security Measures 🔒
- Laravel Sanctum Authentication: Secures API routes with token-based authentication.
- Rate Limiting: Users can make a maximum of 10 requests per minute for retrieving authentication info.
- Input Validation: Prevents invalid data submission.

<br>

## Utilized Techniques and Technologies 🔧
- **Framework:** Laravel 10 (Laragon, PHP)
- **Database:** MySQL, MySQL Workbench
- **Authentication:** Laravel Sanctum (Tokens)
- **API Testing and Documentation:** Postman
- **Architecture:** MVC
- **API Design:** RESTful
- **Version Control:** Git & GitHub
- **IDE:** VS Code

<br>

## Main Files 📁
- [AuthController.php](app/Http/Controllers/AuthController.php)
- [api.php](routes/api.php)
- [AppServiceProvider.php](app/Providers/AppServiceProvider.php)
- [User.php](app/Models/User.php)
- [2014_10_12_000000_create_users_table.php](database/migrations/2014_10_12_000000_create_users_table.php)
