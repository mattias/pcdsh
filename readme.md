## Project Cars Dedicated Server History

### Installation

> git clone https://github.com/mattias/pcdsh.git
> composer install
> cp .env.example .env

Edit .env to your specific configuration.

> php artisan migrate
> php artisan serve

### Upgrading

> cd /path/to/pcdsh
> git pull
> composer install
> php artisan migrate
> php artisan server
