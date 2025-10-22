<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Larast') }}</title>
        <style>
            :root {
                color-scheme: light dark;
            }
            body {
                margin: 0;
                padding: 0;
                font-family: system-ui, -apple-system, sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #fff;
                color: #1a1a1a;
            }
            @media (prefers-color-scheme: dark) {
                body {
                    background: #0f172a;
                    color: #fff;
                }
                .nav-link {
                    color: #94a3b8 !important;
                }
                .nav-link:hover {
                    color: #fff !important;
                }
            }
            .container {
                text-align: center;
                padding: 2rem;
            }
            .product-name {
                font-size: 3rem;
                font-weight: 700;
                margin-bottom: 1rem;
            }
            .description {
                font-size: 1.25rem;
                color: #666;
                margin-bottom: 2rem;
            }
            @media (prefers-color-scheme: dark) {
                .description {
                    color: #94a3b8;
                }
            }
            .links {
                display: flex;
                gap: 1.5rem;
                justify-content: center;
                flex-wrap: wrap;
            }
            .link {
                text-decoration: none;
                color: #1a1a1a;
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                transition: color 0.2s;
            }
            .link:hover {
                color: #4a5568;
            }
            .nav {
                position: absolute;
                top: 1rem;
                right: 1rem;
            }
            .nav-links {
                display: flex;
                gap: 1rem;
            }
            .nav-link {
                text-decoration: none;
                color: #666;
                font-size: 0.875rem;
                transition: color 0.2s;
            }
            .nav-link:hover {
                color: #1a1a1a;
            }
        </style>
    </head>
    <body>
        @if (Route::has('login'))
            <nav class="nav">
                <div class="nav-links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
                        @if (Route::has('login'))
                            <a href="{{ url('/login') }}" class="nav-link">Log in</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ url('/register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif

        <main class="container">
            <h1 class="product-name">Larast</h1>
            <p class="description">Laravel 12 starter kit with popular and essential packages pre-installed.</p>

            <div class="links">
                <a href="https://github.com/kanekescom/larast" class="link">Repository</a>
                <a href="https://github.com/kanekescom/larast/wiki" class="link">Documentation</a>
            </div>
        </main>
    </body>
</html>
