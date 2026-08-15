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

<img width="928" height="2047" alt="05c93c4e-5230-4e4d-a967-4830c4ef1caf" src="https://github.com/user-attachments/assets/d66a2235-e48b-4af8-be81-4110e9102c56" />

## Problems Encountered

During the development of the NexaTech Solutions company profile website, several problems were encountered while configuring Laravel, implementing the MVC structure, and applying the website styling.

### 1. CompanyController Class Not Found

One of the initial errors encountered was:

```text
Target class [App\Http\Controllers\CompanyController] does not exist.
```

This happened because Laravel could not locate the CompanyController referenced by the routes. The controller and its connection to the routes had to be checked and properly configured.

### 2. Missing Controller.php File

```text
include(C:\Users\Reyben\week03-company-profile\vendor\composer/../../app/Http/Controllers/Controller.php):
Failed to open stream: No such file or directory
```

This prevented the CompanyController from properly extending the base controller class.

### 3. Undefined $services Variable

```text
Undefined variable $services
```

The Blade view expected a `$services` variable, but the required data was not being properly passed from the controller to the view.

## Solutions

The following solutions were applied to resolve the problems encountered during the development of the project.

### 1. CompanyController Class Not Found

The `CompanyController` file and namespace were checked to make sure Laravel could properly locate the controller. The controller was placed inside `app/Http/Controllers/` and imported correctly in `routes/web.php`.

```php
use App\Http\Controllers\CompanyController;
```

### 2. Undefined $services Variable

The $services variable was defined inside the services() method of CompanyController. The service data was then passed to the Services Blade view using compact().

```php
return view('pages.services', compact('services'));
```

This allowed services.blade.php to access the $services variable and dynamically display each service using the @foreach directive.

### 3. Missing Controller.php File

The project encountered an error because the base `Controller.php` file was missing from the `app/Http/Controllers/` directory.

To resolve the problem, a new `Controller.php` file was created inside:

```text
app/Http/Controllers/Controller.php
```

After creating the missing base controller, CompanyController was able to extend the Controller class properly.

## Reflection

Before doing this activity, I already had some experience in creating websites, but working with Laravel made me realize that developing a web application is not only about making the pages look good or making the buttons work. There is also a proper way of organizing the code behind the website. Through this project, I understood the MVC architecture better because I was able to actually use routes, controllers, and Blade views instead of only learning what they mean in theory.

One of the things I learned is how the different parts of Laravel communicate with each other. When a user visits a page, the request first goes through the route in `web.php`. The route then calls a method inside `CompanyController`, and the controller decides which Blade view should be displayed. I also experienced passing data from the controller to the view when I created the Services page. At first, I encountered the `Undefined variable $services` error, but fixing it helped me understand why the controller needs to properly provide the data that a Blade view expects.

I also learned why separation of concerns is important. If the routes, page logic, and HTML were all placed in one file, the project would quickly become confusing, especially when more features are added. Laravel's MVC structure makes it easier to know where a certain part of the code belongs. I also liked using a reusable layout, navbar, and footer because I did not have to copy the same code into every page. If I needed to change something in the navigation bar, I could simply edit one component and the change would appear across the website.

The errors I encountered were also an important part of the activity. Problems such as the missing `Controller.php` file, Laravel not finding `CompanyController`, and the undefined `$services` variable were frustrating at first because the website would not run correctly. However, solving these problems helped me understand the Laravel folder structure and MVC flow more than simply following working code would have. I learned to read the error messages carefully and check which part of the application might be causing the problem.

After finishing this activity, I now have a clearer understanding of how Laravel organizes a web application and why MVC is useful in development. This project may only be a company profile website, but the concepts I learned can also be applied when developing larger and more complicated systems. For example, features such as user accounts, databases, inventory management, and other modules can have their own controllers, models, and views instead of putting everything in one place. I still have a lot to learn about Laravel, especially when it comes to more advanced features, but this activity gave me a good foundation and made me more comfortable with how routes, controllers, and Blade views work together.

Note: The Reflection above is paraphrased using an AI tool but the idea inside are all made by me.
