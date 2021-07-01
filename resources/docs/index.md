

### Docker forward ports

To avoid collisions with default ports, defaults are:
- HTTP on 80
- mysql on 33060

After the environment is running, you can access your site on your host machine,
by pointing your browser to https://localhost:8000
Also, if you want to connect to MySQL database with a client software, use
localhost as server and 33060 as port.

### First run

1. Clone repo
1. Copy `.env.example` to `.env`
1. Composer install # maybe replaced with sail procedure, for not having to install php and composer on host machine
1. Run `docker-compose up -d`
1. Database and user should be created
1. Run `docker-compose exec laravel.test php artisan migrate`
1. Visit `localhost:<port>` on your browser.
   - Default port is 8000, which gives [http://localhost:8000](http://localhost:8000)

