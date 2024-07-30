-- SIHADIR BACKEND --

Langkah-langkah pertama kali saat menjalankan laravel
1. Jalankan perintah berikut
    composer update
2. Instalasi Paket JWT
    composer require php-open-source-saver/jwt-auth
3. Jalankan perintah berikut
    php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
4. Generate jwt key
    php artisan jwt:secret

