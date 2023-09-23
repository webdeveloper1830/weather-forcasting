## About Setup Instruction

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- Simply clone the project using git clone command.
- Copy .env.example and paste it with .env name
- php artisan key: generate
- put the env variable "OPENWEATHERMAP_KEY" into the .env file
- composer install
- npm install
- create databse with the name of laravel
- php artisan migrate
- php artisan db:seed --class=CitySeeder
- npm run dev


## About workflow

Go to (http://127.0.0.1:8000/register) and register your account with any email and password.
Go to dashboard (http://127.0.0.1:8000/dashboard) and select any city.

and you will see the forcast of next couple of hours.


## What we can do if we spend more time on it

- write the test cases for livewire component.
- improve the UI and group by date 
- loader we can implement on change event
- make seprate class for api if we knows we will use at many places.
