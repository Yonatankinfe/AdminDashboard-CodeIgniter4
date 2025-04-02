# 🚀 CodeIgniter 4 Admin Panel with Chart.js Integration

[![CI Version](https://img.shields.io/badge/CodeIgniter-4.x-red?style=flat-square&logo=codeigniter)](https://codeigniter.com)
[![Chart.js Version](https://img.shields.io/badge/Chart.js-3.x-FF6384?style=flat-square&logo=chart.js)](https://www.chartjs.org)
[![License](https://img.shields.io/github/license/yourusername/reponame?style=flat-square)](LICENSE)
[![Downloads](https://img.shields.io/github/downloads/yourusername/reponame/total?style=flat-square)](https://github.com/yourusername/reponame/archive/main.zip)

A modern admin dashboard built with CodeIgniter 4 framework featuring data visualization using Chart.js. Perfect for managing web applications with real-time statistics and user-friendly interface.

![Admin Panel Preview](screenshots/dashboard-preview.png)

## ✨ Features

- **User Management**
  - Role-based access control (Admin)
  - User CRUD operations
  - Activity logging
- **Data Visualization**
  - Interactive charts (Line, Bar)
  - Real-time data updates
- **Dashboard Features**
  - Recent activities feed
  - Quick action buttons
- **Responsive Design**
  - Mobile-friendly layout
  - Dark/Light theme toggle

## 🛠️ Tech Stack

- **Framework**: CodeIgniter 4
- **Charts**: Chart.js 3.x
- **Frontend**: Bootstrap 5 + jQuery
- **Database**: MySQL
- **Additional**: DataTables, Font Awesome

## 📦 Installation

1. **Clone repository:**
```bash
   git clone https://github.com/YonatanKinfe/AdminDashboard-CodeIgniter4.git
   cd AdminDashboard-CodeIgniter4
```
2. **Install dependencies:**
```bash
   composer install
```
3 **Configure database**:
- Create MySQL database example blog
- Create Table as you need
- Edite the database configuration file
- **NB** change the port to default port of mysql
- Import database/admin_panel.sql
- Update .env file:
```bash
database.default.hostname = localhost
database.default.database = your_db_name
database.default.username = your_db_user
database.default.password = your_db_pass
```
4 **Serve application:**
```bash
php spark serve
```
5 **Access dashboard:**
```bash
http://localhost:8080/
http://localhost:8080/product
```
# 📸 Screenshots
![Image](https://github.com/user-attachments/assets/d26445f1-a888-4dc6-9c71-b7cb138591d4)
![Image](https://github.com/user-attachments/assets/3cddb9b8-a76b-4211-a8b1-f079308d0302)
![Image](https://github.com/user-attachments/assets/4c4fae5f-688f-4a5d-aae0-1d15da73c4a1)
![Image](https://github.com/user-attachments/assets/bb53aa0a-62e2-4e98-a120-2af5a0db65e0)
![Image](https://github.com/user-attachments/assets/9d997014-313f-43d6-8d56-362d9eb93fa9)
![Image](https://github.com/user-attachments/assets/45f5c872-b5f0-4142-937b-9945d15fa913)
## 📄 License
***MIT License***
+ Customize this admin panel by editing configuration files in app/Config and modifying views in app/Views
