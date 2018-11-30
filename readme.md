<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Frontend Blog

#5. Install New Laravel Project
1. Create a new laravel project
2. Create database 

#6. Setup Application Layout

1. Added ready asset files to public
2. In views, create blog/index.blade.php and add ready made template
3. Create a route to be able to access it
4. Adjust the css link in the header, use asset helper function, href="{{ asset('css/bootstrap.min.css') }}" or can be like this, much simpler, href="/css/bootstrap.min.css"
5. In views, create layouts/main.blade.php 
   1. 5.1. Modify the index to main file by moving all codes that will be shown in each page (header, and footer) + use @yield('main-content')
   2. 5.2 extends the layouts to index, add section of main-content to index as well
   3. 5.3 test it out :)
6. In layouts, create a new page: sidebar.blade.php
   1. Move the sidebar codes from the index to sidebar.blade.php
   2. Include sidebar to index
   3. Test it out :)
   4. In views/blog, create show.blade.php
      1. 4.1 Copy index codes to show page
      2. 4.2 In show page, replace the 'col-md-8' by 'col-md-8' from asset post.html file   
      3. 4.3 Modify the links of images, css and js if any
      4. 4.4 Define a new route for show page with uri: blog/show
   5. Show page
      1. 5.1 In sidebar, disable search and widget
      2. 5.2 In blog, create a file: comments.blade.php
      3. 5.3 Move comments form show to comments  
      4. 5.4 for now, do not include comments in show page
      5. 5.5 Test it out :) 
   6. Create inc folder
      1. 6.1 Move sidebar to inc
      2. 6.2 Move comments to inc
      3. 6.3 In index and show page, change @include('layouts.sidebar') to  @include('inc.sidebar')
      4. 6.4 Test it out :)

7. Create Posts table using Database Migration
	1. Create model Post with migration flag
	2. Add more columns to posts table
	3. Change db config and Run migration
	4. Test it out :)

8. Insert Posts table with dummy data using Database Seed & Faker

	1. Create posts table seeder (php artisan make:seed PostsTableSeeder)
	2. Create users table seeder (php artisan make:seed UsersTableSeeder)	
	3. Open UsersTableSeeder.php and add 3 users/authors
	4. Go to https://github.com/fzaninotto/Faker
	5. Open PostsTableSeeder.php and add 10 dummy data	
	   1. use Faker\Factory;
	   2. Create Faker data
	   3. In DatabaseSeeder, add UsersTableSeeder::class and PostsTableSeeder::class
	   4. run db seed (php artisan db:seed) 
	   5. Test it out :)	