## Book Ticket LaraDusk


- Actually, the project aim is to book IRCTC train tickets.

- Here, I have tested the laravel Jetstream Register,Logout,Login using laravel dusk and remains will update soon.


To test entire class

````
php artisan dusk 

````

You can test single **class** by below command

````
php artisan dusk --filter AuthTest

````

You can test single **function/method** by below command

````
php artisan dusk --filter testRegister tests/Browser/AuthTest.php 

````