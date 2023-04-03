

docker-compose up --build 

docker container ps 

docker exec -it {containerID} sh

composer create-project laravel/laravel example-app

cp -rf example-app/ ../ 

rm -rf example-app
chmod -R 777 storage
chmod -R 775 bootstrap/cache

npm install -g npm@latest
npm update
composer config --global process-timeout 2000
composer install 
composer update

php artisan key:generate
php artisan cache:clear
php artisan config:cache

docker exec -it php_laravel /bin/bash


docker exec -it mysql_laravel /bin/bash
mysql -u rootUser -p rootDB 
root_password 
