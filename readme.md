## To instantiate the project

use `docker-compose up -d` where the `docker-compose.yml` file is located
Then use `docker-compose run composer composer install` to install laravel project on the container

**If you use windows you will have to put `winpty` before the command line **

To generate a laravel web key use `docker-compose exec php php artisan key:generate`

To create migrations use `docker-compose exec php php artisan migrate`
to generate seeds use `docker-compose exec php php artisan db:seed`
