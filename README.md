# 💬 Ecommerce Rest Api with JWT

Rest API built with Laravel and Passport adding Json Web Token and endpoints for products and reviews of products.

## Getting Started 🎬

```
git clone https://github.com/ArielMejiaDev/Ecommerce-Restfull-API-with-JWT api 
```

### Prerequisites 🔍

    - PHP 7.2 
    - Server ready for Laravel environment recommended: [Valet](https://medium.com/ariel-mejia-dev/install-laravel-valet-on-mac-6e5229cba1e)

### Installing ⚙️

```
cd api
composer install 
cp .env.example .env 
php artisan key:generate
nano .env //edit your file as you want
```

## Running the tests 🧪

The project goes with test to all endpoints.

- all products.
- products/{productid}
- products/create
- products/{id}/update
- products/{id}

- reviews
```
vendor/bin/phpunit
```

### And coding style 💻

It is written using PSR-4 and PSR-12 standard.

## Deployment 🚀
```
echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile
heroku create apiname
heroku config:set APP_KEY=
```
* all env file settings can be added on Heroku app/settings section.

## Built With 🛠️

* [Laravel](https://github.com/laravel/laravel) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
* [Passport](https://laravel.com/docs/6.x/passport) - Passport
* [Postgres](https://www.postgresql.org/) - Postgres
* [Heroku](https://devcenter.heroku.com/articles/getting-started-with-laravel) - Heroku

## Versioning 🔢

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors 🧔

* **Ariel Mejia Dev** - [ArielMejiaDev](https://github.com/ArielMejiaDev)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
