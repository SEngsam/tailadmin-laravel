# TailAdmin Laravel App

A Laravel-based admin dashboard integrated with the **TailAdmin** UI template. This project uses **Laravel Breeze** and **Livewire** for fast, interactive development.

## 📌 Project Overview

This is a starter Laravel project where the default Breeze layout has been replaced with a modern Tailwind CSS admin panel (TailAdmin). It includes registration/login UI customization and responsive layout integration.

## ✅ What I’ve Done

- Integrated TailAdmin layout into Laravel Blade views.
- Replaced the default Breeze registration page with a custom design.
- Configured routes and authentication pages using TailAdmin components.
- Resolved git conflicts and pushed the project to GitHub.
- Updated `.gitignore` to ignore unnecessary files.

## 🛠️ Requirements

To run this project locally, make sure you have:

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or SQLite database

## 🚀 Installation

```bash
git clone https://github.com/SEngSam/tailadmin-laravel.git
cd tailadmin-laravel
cp .env.example .env
composer install
npm install && npm run dev
php artisan key:generate
php artisan migrate
php artisan serve
