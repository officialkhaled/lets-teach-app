# Let's Teach Application

This basic Tutor Hiring Platform app is built using Laravel and many other laravel packages. It has three users: an admin who manages the users and their posts, a tutor who can create a profile and apply to available jobs, and a student who can make job posts according to their needs. 

A walkthrough going over the steps taken to produce this app.

## Prerequisites & Installation

Before jumping in, you'll want to make sure you have the system requirements met:
- PHP ([Installation Guide](https://www.php.net/manual/en/install.php))
- Composer ([Installation Guide](https://getcomposer.org/doc/00-intro.md)) 
- Laravel ([Installation Guide](https://laravel.com/docs/10.x))

# To install PHP dependencies:

```bash
composer install
```
# And JS dependencies:
```bash
npm install
```

#Get the project ready:

```bash
php artisan migrate:fresh --seed
```

# To run the application:

```bash
php artisan serve
npm run dev
```

# To view the application running on the server: 
<br>
(http://127.0.0.1:8000)
