# SystemeExpert

## installation

### cloner le répertoire
	git clone https://github.com/brahim-chaouchi/SystemeExpert.git

### mettre en place .env
	cd SystemeExpert/www
	cp .env.example .env

remplir dans .env :
* DB_DATABASE
* DB_USERNAME
* DB_PASSWORD

### installer les packages php
	cd SystemeExpert/www
	composer install

### finition
	cd SystemeExpert/www
	php artisan key:generate
	php artisan vendor:publish --tag="adminlte"
	php artisan migrate
