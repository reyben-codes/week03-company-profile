# NexaTech Solutions — Company Profile Website

A multi-page company profile website developed using **Laravel** and the **Model-View-Controller (MVC)** architecture for the Week 3 Client-Server Technologies laboratory activity.

## Introduction

### What is a Company Profile Website?

A company profile website is a website that provides information about a company, including its identity, services, background, contact information, and other important details. It serves as an online representation of an organization and allows visitors to learn more about the company.

### Why Businesses Need a Company Profile Website

Businesses can use a company profile website to establish an online presence and provide customers with accessible information about their organization. A well-organized website can also help present the company's services, contact details, and identity in a professional way.

### Purpose of the Project

The purpose of this project is to develop a multi-page company profile website using Laravel's MVC architecture. The project demonstrates how routes, controllers, and Blade views work together to create an organized web application.

The website developed for this activity is **NexaTech Solutions**, a fictional technology company that provides digital products and IT services.

The website contains four main pages:

- **Home** — Introduces NexaTech Solutions and presents its main message and services.
- **About** — Provides information about the company's history, mission, vision, values, and team.
- **Services** — Displays the company's services using dynamic data passed from the controller.
- **Contact** — Provides company contact information and a UI-only contact form.

## Objectives

The objectives of this project are to:

- Develop a multi-page company profile website using Laravel.
- Apply the Model-View-Controller (MVC) architecture in a Laravel application.
- Configure Laravel routes using `routes/web.php`.
- Create and use a `CompanyController` to handle the application pages.
- Create reusable Blade layouts and components for the website.
- Use Blade directives such as `@extends`, `@section`, `@yield`, `@include`, and `@foreach`.
- Implement dynamic service data passed from the controller to the Services page.
- Create a clean, responsive, and professional user interface.
- Demonstrate how routes, controllers, and Blade views work together in a Laravel application.

  ## MVC Architecture

This project uses the **Model-View-Controller (MVC)** architecture provided by Laravel. MVC separates the different responsibilities of the application into organized parts, making the code easier to manage, understand, and maintain.

### What is MVC?

MVC stands for:

- **Model** — Handles the application's data and data-related operations.
- **View** — Handles what the user sees. In this project, the views are created using Laravel Blade templates.
- **Controller** — Handles application logic and connects the routes to the appropriate views.

### Why Laravel Uses MVC

Laravel uses the MVC architecture to separate the application's responsibilities. Instead of placing routing, application logic, and HTML code in one place, Laravel organizes them into different parts of the project.

In this project, the routes are defined in `routes/web.php`, the page-handling logic is placed in `CompanyController`, and the user interface is created using Blade views.

### Advantages of MVC

Using MVC provides several advantages:

- **Separation of concerns** — Different parts of the application have different responsibilities.
- **Better organization** — Files and functionality are organized according to their purpose.
- **Maintainability** — Changes to one part of the application can be made without unnecessarily affecting other parts.
- **Reusability** — Blade layouts and components can be reused across multiple pages.
- **Scalability** — The organized structure can make larger applications easier to develop and maintain.

### MVC Request Flow

The basic request flow of this Laravel application is:

```text
Browser
   │
   ▼
Route (routes/web.php)
   │
   ▼
CompanyController
   │
   ▼
Blade View
   │
   ▼
HTML Response
   │
   ▼
Browser
```

## Laravel Routing

Laravel routing determines how the application responds to requests made to specific URLs. In this project, the routes are defined in `routes/web.php`.

### Route Definitions

The project uses `GET` requests and named routes to connect each URL to the appropriate method in `CompanyController`.

```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');

Route::get('/about', [CompanyController::class, 'about'])->name('about');

Route::get('/services', [CompanyController::class, 'services'])->name('services');

Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

## Controllers

Controllers are responsible for handling the application's request logic and connecting routes to the appropriate views. In this project, the main controller is `CompanyController`.

The controller is located at:

```text
app/
└── Http/
    └── Controllers/
        └── CompanyController.php
```

## Blade Templating Engine

Blade is Laravel's templating engine used to create the user interface of the application. In this project, Blade is used to organize the website into reusable layouts, components, and individual page views.

### Blade Layout

The main layout is located at:

```text
resources/
└── views/
    └── layouts/
        └── app.blade.php
```

## Laravel Folder Structure

Laravel follows an organized project structure where files are grouped according to their purpose. The following folders and files are important to this project:

```text
week03-company-profile/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── CompanyController.php
│
├── public/
│   └── build/
│       └── ...
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   └── views/
│       ├── components/
│       │   ├── footer.blade.php
│       │   └── navbar.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── services.blade.php
│           └── contact.blade.php
│
├── routes/
│   └── web.php
│
├── .env
├── artisan
├── composer.json
├── package.json
└── README.md
```

## Screenshots

Screenshots are included to document the implemented Laravel application and demonstrate the final appearance and functionality of the website.

The following screenshots will be included:

### Home Page

Shows the NexaTech Solutions homepage, including the hero/banner section, company introduction, feature cards, and call-to-action section.

<img width="1919" height="1030" alt="image" src="https://github.com/user-attachments/assets/ac3726ab-64e1-4347-a547-31a645b1b240" />


### About Page

Shows the company's history, mission, vision, core values, and team information.

<img width="1919" height="1032" alt="image" src="https://github.com/user-attachments/assets/5f6a1707-54cb-4e8c-8b52-3c86d6a56b2a" />


### Services Page

Shows the services dynamically rendered from the `$services` data provided by `CompanyController`.

<img width="1919" height="1029" alt="image" src="https://github.com/user-attachments/assets/0573f06e-9ee8-4c1e-a817-5554df847bdd" />


### Contact Page

Shows the company's contact information and the UI-only contact form.

<img width="1919" height="1031" alt="image" src="https://github.com/user-attachments/assets/4ea9838f-b68d-4d92-b05d-83a9e71481c7" />


### Routes

Shows the routes defined in `routes/web.php` and how the four main pages are connected to `CompanyController`.

<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/2b614365-9161-4603-a178-0676485b04d6" />


### Controller

Shows the `CompanyController` containing the methods used by the company profile pages and the dynamic services data.

<img width="1567" height="953" alt="image" src="https://github.com/user-attachments/assets/f765c546-8fef-46bf-8a8e-d446d9bda486" />
<img width="1919" height="1030" alt="image" src="https://github.com/user-attachments/assets/06106864-012e-405f-841a-70ff79986672" />


### Responsive Design

Screenshots of the website on different screen sizes may also be included to demonstrate that the website adapts to desktop, tablet, and mobile displays.

<img width="763" height="1074" alt="image" src="https://github.com/user-attachments/assets/def138ac-aba0-46d7-84e8-1f57d773cc98" />
