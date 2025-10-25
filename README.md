# Larast

<p align="center">
<a href="https://github.com/kanekescom/larast/actions"><img src="https://github.com/kanekescom/larast/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/kanekescom/larast"><img src="https://img.shields.io/packagist/dt/kanekescom/larast" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/kanekescom/larast"><img src="https://img.shields.io/packagist/v/kanekescom/larast" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/kanekescom/larast"><img src="https://img.shields.io/github/license/kanekescom/larast" alt="License"></a>
</p>

## About Larast

Larast is a Laravel 12 starter kit with popular and essential packages pre-installed.

If you need a starter kit based on Filament, try [Filamentum](https://github.com/kanekescom/filamentum).

## Installation

You can install Larast in two ways:

### 1. Via Laravel Installer

Create a new project using Laravel installer with Larast as the starter kit:

```bash
laravel new my-app --using=kanekescom/larast
```

### 2. Via Composer

You can install Larast in two ways:

a. Using Composer Create-Project:
```bash
composer create-project kanekescom/larast my-app
```

b. Clone from GitHub:
```bash
git clone https://github.com/kanekescom/larast.git my-app
cd my-app
composer install
```

After installation, your application will be ready with all the essential packages and configurations set up.

## Creating a User

You can create default users with predefined roles by running the database seeder:

```bash
php artisan db:seed
```

This will create users with the following credentials and roles:

| Name              | Email                     | Role        | Password  |
|-------------------|---------------------------|-------------|-----------|
| Super Admin User  | superadmin@larast.com | Super Admin | password  |
| Admin User        | admin@larast.com      | Admin       | password  |
| Regular User      | user@larast.com       | User        | password  |

## AI Coding Assistance

For developers using AI coding assistants, run the following command to install the MCP server and coding guidelines:

```bash
php artisan boost:install
```

This will set up the Model Context Protocol (MCP) server and configure coding guidelines that enhance your AI-assisted development experience.

### Keeping Guidelines Up-to-Date

You may want to periodically update your local AI guidelines to ensure they reflect the latest versions of the Laravel ecosystem packages you have installed. To do so, you can use the boost:update Artisan command:

```bash
php artisan boost:update
```

You may also automate this process by adding it to your Composer "post-update-cmd" scripts:

```json
{
  "scripts": {
    "post-update-cmd": [
      "@php artisan boost:update --ansi"
    ]
  }
}
```

## Laravel Octane

This project comes with Laravel Octane pre-installed for high-performance serving of your Laravel application. To use Octane with FrankenPHP (the default server for this project), you need to run the installation command:

```bash
php artisan octane:install
```

When prompted, select "frankenphp" as your server.

After installation, you can start your application using Octane with:

```bash
php artisan octane:start
```

For more information about Laravel Octane configuration and usage, please refer to the [official Laravel Octane documentation](https://laravel.com/docs/12.x/octane).

## Installed Packages

Larast comes with several pre-installed packages to help you build your application:

- [laravel/octane](https://github.com/laravel/octane) v2 - Supercharge your Laravel application's performance with high-powered application servers
- [laravel/boost](https://github.com/laravel/boost) v1 - Laravel Boost for enhanced AI-assisted development experience with Laravel
- [laravel/sail](https://github.com/laravel/sail) v1 - Docker files for running a basic Laravel application
- [laravel/telescope](https://github.com/laravel/telescope) v5 - An elegant debug assistant for the Laravel framework
- [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog) v4 - Log activity inside your Laravel app
- [spatie/laravel-backup](https://github.com/spatie/laravel-backup) v9 - A package to backup your application and database
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission) v6 - Permission handling for Laravel with roles and permissions management
- [spatie/laravel-query-builder](https://github.com/spatie/laravel-query-builder) v6 - Easily build Eloquent queries from API requests
- [pestphp/pest](https://github.com/pestphp/pest) v4 - An elegant PHP testing framework with a focus on simplicity, meticulously designed to bring back the joy of testing in PHP
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) v3 - Debugbar for Laravel (Integrates PHP Debug Bar)
- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) v3 - IDE Helper for generating helper files for Laravel facades and adding PHPDocs

## Running Tests

You can run the test suite using Composer:

```bash
composer test
```

This will execute all tests using PestPHP, which is configured as the default testing framework for this project.

Alternatively, you can run tests directly using the Artisan command:

```bash
php artisan test
```

## Recommended Additional Packages

To further enhance your Laravel application, consider adding these recommended packages:

- [laravel/horizon](https://github.com/laravel/horizon) - Dashboard and code-driven configuration for Laravel queues
- [laravel/nightwatch](https://github.com/laravel/nightwatch) - Laravel Nightwatch for application monitoring and performance insights
- [laravel/passport](https://github.com/laravel/passport) - OAuth2 server and API authentication package that is simple and enjoyable to use
- [laravel/sanctum](https://github.com/laravel/sanctum) v - Featherweight authentication system for SPAs and simple APIs
- [laravel/socialite](https://github.com/laravel/socialite) - Laravel Socialite for OAuth authentication with social networks
- [sentry/sentry-laravel](https://github.com/getsentry/sentry-laravel) - The official Laravel SDK for Sentry error tracking and monitoring

Refer to each package's documentation for specific installation and configuration instructions.

## License

Larast is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
