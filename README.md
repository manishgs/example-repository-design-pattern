# Example - Repository Design Pattern
This is sample code for implementing repository design pattern in laravel. Plus basic CRUD (create, retrieve, update and delete) operation.

## How to install?
* `git clone https://github.com/manishgs/example-repository-design-pattern.git`
* cd example-repository-design-pattern
* update app dependencies : `composer install`
* copy .env.example to .env and update your database configurations
* run migration : `php artisan migrate`
* generate key : `php artisan key:generate`
* run `php artisan serve` and access http://localhost:8000


## Structure

There are three folders added in `app/` folder. which are described as follow.
- Repositories: Contains all the classes for storage and retrieval from database. 
- Models: Contains all the eloquent model classes.
- Services: Contains the classes which serves as the intermediate for Controllers and Repositories. 
All the application logic are handled here. Logger is also implemented inside services. 
The purpose of using services is to keep our controllers slim.

