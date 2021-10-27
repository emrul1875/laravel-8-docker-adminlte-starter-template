# docker-compose-laravel-8-adminLte-starter-template
A pretty simplified Docker Compose workflow that sets up a LEMP network of containers for local Laravel development with Admin Lte Template.

## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose build` and once build is done successfully then run `docker-compose up`.

After that completes, follow the steps below:
Navigate to the root folder.
Run `docker-compose exec dockerapp composer install`.
If composer install failed then run `docker-compose exec dockerapp composer update`.

So The following are built for our web server, with their exposed ports detailed:

- **nginx** - `:8000`
- **mysql** - `:3302`

Copy .env.example to .env in your root folder.
Run `docker-compose exec dockerapp php artisan migrate`.
Run `docker-compose exec dockerapp php artisan db:seed`.

To access the site run localhost:8000 in your browser and you will see the login page. Check Database and pick one email from list. Use 12345678 as password. You should login and navigate to dashboard.

