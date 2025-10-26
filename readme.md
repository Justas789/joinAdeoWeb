1.Atsidarote terminalą ir nueinate i projekto aplanką: cd uzduotisORAI
2.Tada terminale idiegiate: composer install
3.Susikuriate .env failą (jei jo nėra) su komanda: cp .env.example .env
4.Sugeneruojat raktą su komanda: php artisan key:generate.
5.per phpMyAdmin sukuriate DB: db pavadinimas weather
6.Atnaujinkit .env failą : 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=weather
DB_USERNAME=root
DB_PASSWORD=

7.Paleiskit migracijas ir seeders: php artisan migrate --seed
8.Paleiskit Laravel serverį: php artisan serve
9.Eikit į adresą: http://127.0.0.1:8000/products/recommended/vilnius