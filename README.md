## Estrutura MVC

app -> models -> ORM -> Eloquent (nativo do laravel)

app -> resources -> views

app -> http -> controllers



## Comandos utilizados

composer create-project laravel/laravel crud-supermarket

php artisan make:model Product -m

php artisan migrate

php artisan make:controller ProductController --resource

php artisan route:list

php artisan make:factory ProductFactory --model=Product


**** comands for populate with seeds ////

php artisan tinker

Product::factory()->create();

Product::factory()->count(10)->create();

****


php artisan make:seeder ProductSeeder

php artisan db:seed --class=ProductSeeder

php artisan serve


## API TEST URL

http://localhost:8000/api/products


## JSON INSERT READY 

{"name":"Produto Teste","description":"Descrição do produto","price":10.99,"stock":100}

{"name":"Novo Nome","description":"Nova descrição","price":10.99,"stock":100}

support https://www.phind.com/search?cache=j90zeohapgbvqk8zg1glnhgm
