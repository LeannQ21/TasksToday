# Tasks for Today Management System

## IT0049 Web System Technologies

### Technical Summative Assessment 3

**Created by:** Leann Marie Querubin

A Laravel-based task management system for a small pastry business.

## Features

- Displays today's pastry-business tasks
- Displays all tasks ordered by date
- Shows a business profile
- Includes an About page
- Uses Laravel migrations and seeders
- Uses Eloquent models for database records
- Uses SQLite as the database

## Completed TSA3 Requirements

- [x] Created a Laravel project
- [x] Configured SQLite database
- [x] Created the `tasks` table migration
- [x] Created the `users` table migration
- [x] Created the Task Eloquent model
- [x] Created the User Eloquent model
- [x] Created a TaskSeeder with eight pastry-business tasks
- [x] Created a UserSeeder with exactly one user record
- [x] Displayed only today's tasks on the Welcome page
- [x] Displayed all tasks ordered by date
- [x] Created the Profile page
- [x] Created the About page
- [x] Added navigation links between all pages
- [x] Tested all required routes

## Pages

- `/` - Today's tasks
- `/tasks` - All tasks
- `/profile` - Business profile
- `/about` - About the developer

## Technologies Used

- Laravel 12
- PHP
- SQLite
- Blade Templates
- Eloquent ORM

## How to Run

1. Clone or download the project.
2. Open the project folder in the terminal.
3. Install dependencies:

```bash
composer install