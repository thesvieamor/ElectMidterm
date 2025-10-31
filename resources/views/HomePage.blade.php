<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
          margin-bottom: 100px;
      }

      header {
          background-color: #f7cdecff;
          color: #0f0e0eff;
          text-align: center;
          padding: 20px;
      }

      section {
          max-width: 800px;
          margin: 20px auto;
          padding: 20px;
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      img {
          width: 300px; 
          height: 300px; 
          border-radius: 50%;
          display: block;
          margin: 0 auto;
      }
      #qoute {
          width: 800px; 
          height: 300px; 
          border-radius: 10%;
          display: block;
          margin: 0 auto;
      }

      h2 {
          color: #000000;
          font-weight: bolder;
      }

      h1 {
          margin-top: 10vh;
          color: #fff;
          font-weight: bolder;
      }

      p {
          color: #000000;
          font-weight: bold;
      }

      #font-color {
          color: #fff;
      }

      
      </style>
    <title>HomePage</title>

</head>
<body>

   <div class="topnav" id="myTopnav">
          
            
            <a href="/"  class="active"  >Home Page</a>
            <a href="/About"   class="active"  >About Me</a>
            <a href="/Gallery"  class="active"  >Gallery</a>
         
          </a>
    </div>
        <header>
          <h1>Home Page</h1>
      </header>

<section>
          
          <h2>Introduction To Laravel</h2>
          <p>Laravel is a popular open-source PHP web application framework designed to make the development of web applications more efficient and enjoyable.
           Created by Taylor Otwell in 2011, it follows the Model-View-Controller (MVC) architectural pattern,
            which separates application logic into distinct components for better organization and maintainability. 
           Laravel emphasizes elegant syntax, developer productivity, and robust features like built-in authentication, routing,
            and caching, making it a go-to choice for building scalable websites and APIs. 
           Its official website, laravel.com, serves as the central hub for documentation, tutorials, and community resources,
            helping developers get started quickly
            The Laravel ecosystem extends far beyond the core framework, offering a rich set of tools and packages that enhance website development. 
            For instance, Laravel Forge and Vapor provide seamless deployment and server management, while Laravel Nova offers an admin panel for backend interfaces. 
            The framework's expressive query builder and Eloquent ORM simplify database interactions, allowing developers to create dynamic websites with minimal boilerplate code. 
            Security is a priority, with features like CSRF protection and encryption built-in, ensuring that Laravel-powered sites are robust against common vulnerabilities.
            This makes it ideal for everything from simple blogs to complex e-commerce platforms.
          </p>

          <h2>Key Features of Laravel</h2>
          <ul class="list-disc list-inside space-y-2 text-left max-w-2xl">
            <li>MVC Architecture – Separates logic, presentation, and data for cleaner code. </li>
            <li>Routing System – Defines how URLs map to specific controllers and actions. </li>
            <li>Eloquent ORM – Allows interaction with databases using PHP instead of raw SQL.</li>
            <li>Blade Template Engine – Simplifies the creation of dynamic views. </li>
            <li>Artisan Command-Line Interface – Automates repetitive tasks using commands. </li>
            <li>Security – Protects against SQL injection, XSS, and CSRF attacks. </li>
            <li>Authentication & Authorization – Simplifies user login and access control. </li>
            <li>Database Migration & Seeding – Helps manage and version-control database schema.</li>
          </ul>

          <h2></h2>
          
          
        
        
</section>   

</body>
</html>

