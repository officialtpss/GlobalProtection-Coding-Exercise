## Global Protection Coding Exercise

To proceed, clone the repository from Git. Follow the instructions below.


### Installation
* Run `git clone https://github.com/officialtpss/GlobalProtection-Coding-Exercise.git`
* `cd GlobalProtection-Coding-Exercise` 
* Run `composer install` (install composer beforehand)
* Run `php artisan key:generate`
* Run `npm install && npm run dev`

* Start the Laravel server `php artisan serve --port=8000`

### After Installation

Following that, you will be able to navigate the site via http://localhost:8000.


You must click on the menu option Shop under the Full catalog menu. After that, you will see the Product catalog page. 
By clicking on the product title, you will be taken to the product detail page. You can view the product's details here.

I have also included the pages' URLs for your convenience.


Homepage: http://localhost:8000 or http://localhost:8000/home 

Catalog: http://localhost:8000/catalog

Product: http://localhost:8000/product

Additionally, I have created some unit test cases to verify the api's response. For checking the unit test cases.You just have to run the below command.

* Run `php artisan test`