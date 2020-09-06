CURRENT_ID=$([[ $(id -u) -gt 9999 ]] && echo "root" || id -u)
CURRENT_GROUP=$([[ $(id -g) -gt 9999 ]] && echo "root" || id -g)

SUDO := CURRENT_USER=${CURRENT_ID}:${CURRENT_GROUP}
DC := CURRENT_USER=${CURRENT_ID}:${CURRENT_GROUP} docker-compose
FPM := $(DC) exec php-fpm
ARTISAN := $(FPM) php artisan

env:
	cp ./.env.example ./.env

build:
	@$(DC) build

start:
	@$(DC) up -d

stop:
	@$(DC) down

keygen:
	@$(ARTISAN) key:generate

migrate:
	@$(ARTISAN) migrate

composer-install:
	@$(FPM) composer install

dump-autoload:
	@$(FPM) composer dump-autoload

npm-install:
	@$(FPM) npm i

frontend:
	@$(FPM) npm run watch-poll

restart: stop build start frontend

deploy: env build start composer-install dump-autoload keygen migrate npm-install frontend
