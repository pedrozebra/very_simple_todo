# Very Simple Laravel Todo

##### Server Requirements
##### You will need to make sure your server meets the following requirements:

[Laravel 5.8 Requirements](https://laravel.com/docs/5.8#server-requirements)


### Step 1

#####Begin by cloning this repository to your machine, and installing all Composer dependencies.

```bash
git clone https://github.com/pedrozebra/very_simple_todo.git
cd very_simple_todo
composer install
cp .env.example .env
rm -rf .env.example
```

Edit `.env` file and set database access variables

* DB_CONNECTION=mysql
* DB_HOST=your_host
* DB_PORT=3306
* DB_DATABASE=your_db_name
* DB_USERNAME=your_db_username
* DB_PASSWORD=your_db_password

Create your own database and launch migrations & Seed

This command generate your own schema details
```bash
php artisan migrate --seed
```

Next: generate the application key
```bash
php artisan key:generate
```

There's no need to configure anything to run the application. 

Just execute this command to run the built-in web server and access the application in your browser at `http://127.0.0.1:8000`
```bash
php artisan serve
```
