# Laravel Dashboard Template

## Project Overview
> Developed by Hajid Alkindi

## Introduction
This project is a robust Laravel template designed for quick and efficient web development. Featuring built-in user authentication (login and registration) and a variety of integrated theme designs, it's the perfect kickstarter for Laravel development. The template is pre-configured with Tailwind CSS and DaisyUI components, making it both functional and visually appealing.

## Visual Features

### Authentication Pages
- **Login Screen:** A user-friendly interface for signing in.
![Alt text](/demopics/login.png)
- **Registration Screen:** An intuitive layout for new user registration.
![Alt text](/demopics/register.png)
### Theme Variations
Explore diverse themes to enhance the user interface. Each theme is designed with attention to detail and usability:
- Dark Theme
![Dark Theme](/demopics/Dark.png)
- Halloween Theme
![Halloween Theme](/demopics/Halloween.png)
- Coffee Theme
![Coffee Theme](/demopics/coffee.png)
- Cyberpunk Theme
![Cyberpunk Theme](/demopics/cyberpunk.png)
- Black Theme
![Black Theme](/demopics/Black.png)


For more information on themes and customization options, visit the [DaisyUI Themes Documentation](https://daisyui.com/docs/themes/).

## System Requirements
- PHP version 7.3 or higher
- MySQL or PostgreSQL database
- Essential dependencies as specified in the project documentation.

## How to Install

### Cloning the Repository
Initiate by cloning the repository:
```bash
git clone [repository-url]
cd [project-directory]
```

### Dependency Installation
To install necessary dependencies:
```bash
composer install
npm install
```

### Environment Setup
Configure the environment file:
```bash
cp .env.example .env
```

### Application Key
Generate a unique key for the application:
```bash
php artisan key:generate
```

### Database Migration and Seeding
Prepare your database:
```bash
php artisan migrate --seed
```

### Running the Application
Start the Laravel application and compile assets:
```bash
php artisan serve
npm run dev
```

This comprehensive guide ensures a smooth setup and deployment of your Laravel Dashboard Template.