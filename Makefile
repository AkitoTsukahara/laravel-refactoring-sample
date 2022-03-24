up:
	docker-compose up -d
build:
	docker-compose build
ssh:
	docker-compose exec php bash
create-project:
	docker-compose up -d --build
	docker-compose exec app composer create-project --prefer-dist laravel/laravel .
	docker-compose exec app composer require predis/predis
install:
	docker-compose up -d --build
	docker-compose exec php composer install
	docker-compose exec php cp .env.example .env
	docker-compose exec php php artisan key:generate
	docker-compose exec php php artisan migrate:fresh --seed
reinstall:
	@make destroy
	@make install
stop:
	docker-compose stop
restart:
	docker-compose down
	docker-compose up -d
down:
	docker-compose down
destroy:
	docker-compose down --rmi all --volumes
ps:
	docker-compose ps
app:
	docker-compose exec php bash
migrate:
	docker-compose exec app php artisan migrate
fresh:
	docker-compose exec app php artisan migrate:fresh --seed
seed:
	docker-compose exec app php artisan db:seed
tinker:
	docker-compose exec app php artisan tinker
dump:
	docker-compose exec app php artisan dump-server
test:
	docker-compose exec app php ./vendor/bin/phpunit
cache:
	docker-compose exec app composer dump-autoload -o
	docker-compose exec app php artisan optimize:clear
	docker-compose exec app php artisan optimize
cache-clear:
	docker-compose exec app php artisan optimize:clear
cs:
	docker-compose exec app ./vendor/bin/phpcs
cbf:
	docker-compose exec app ./vendor/bin/phpcbf
db:
	docker-compose exec db bash
sql:
	docker-compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD -D $$MYSQL_DATABASE'
node:
	docker-compose exec node ash
npm:
	docker-compose exec node npm install
	docker-compose exec node npm run dev
yarn:
	docker-compose exec node yarn
	docker-compose exec node yarn dev
