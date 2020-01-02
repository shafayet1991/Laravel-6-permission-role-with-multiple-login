## Laravel 6 Roles Permissions with multiple Login



This is a Laravel 6 adminpanel starter project with roles-permissions management and user login with multiple app based on [Socialite](https://github.com/laravel/socialite), [Spatie Laravel-permission package](https://github.com/spatie/laravel-permission), [CoreUI](https://coreui.io) and [Datatables.net](https://datatables.net).

## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone git@github.com:shafayet1991/Laravel-6-permission-role-with-multiple-login.git`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `cp .env.example .env`
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `sys@admin.com` - `secrect`

This boilerplate has one role (`administrator`), one permission (`users_manage`) and one administrator user.

With that user you can create more roles/permissions/users, and then use them in your code, by using functionality like `Gate` or `@can`, as in default Laravel, or with help of Spatie's package methods.


