A task:
=======
PHP
There are several types of workers: programmer, designer, tester, manager.
1. Each employee knows how to do his job in his own way: 
- a programmer can: 1) write code, 2) test code, 3) communicate with a manager 
- a designer can: 4) draw, 3) communicate with a manager 
- a tester can: 2) test the code, 3) communicate with the manager, 5) set tasks 
- the manager can: 5) set tasks
2. In turn, they cannot: 
- programmer: 4) draw 5) set tasks 
- designer: 1) write code 2) test code 5) set tasks 
- tester: 1) write code 4) draw - manager: 1) write code 4) draw 2) test code
task: - you need to describe the skill of each employee using the principles of OOP; 
- write a console command using Symfony tools (Symfony console commands). 
The team should take the title of the job as a parameter. 
The result of the team's work should be a list of the employee's skills. 
Use services to write your logic.
	example launch:
    php bin / console company: employee programmer 
        should get something like this:
                - code writing 
                - code testing 
                - communication with manager 
                - also realize whether an employee can do certain actions. 
                An example for implementation:
    command:
    php bin/console employee: can programmer writeCode 
    result:
        true
    command:
    php bin/console employee: can programmer draw result:
    false
    Requirements 
    1. php 7 and higher 
    2. Symfony 4 
    3. Use the psr-2 style code https://www.php-fig.org/psr/psr-2/ 
    4. Create a new repository at https://bitbucket.org / and upload there 
    5. Using composer https://getcomposer.org/


MySQL

1. For a given list of products get the names of all categories in which are presented
products.
	Selection for several products (example: ids = (9, 14, 6, 7, 2)).
2. For a given category get a list of offers of all products from this category.
Each category can have several subcategories.
	Example:
	I select all products from the category computers (id = 2) and subcategories (id = 3 (laptops),
	id = 4 (tablets), id = 5 (hybrids)).
3. For a given list of categories, get the number of unique products in each
categories.
	Selection for several categories (example: ids = (2, 3, 4)).
4. For a given list of categories, get the number of units of each product that
enters the specified categories.
	Selection for several categories (example: ids = (3, 4, 5)).

Note:
The database schema is created independently based on the above requirements. As a result
You must provide a database schema and SQL queries.

Actions on deployment of the project:
=====================================

1. `git clone << project path >>`

2. `сomposer install`

3. configure domain settings:
  
* ***on Windows***
 
`hosts` file, `httpd.conf`.

4. database settings in `.env` file:

```php
DATABASE_URL="mysql://root:@127.0.0.1:3306/keyua_test1"?serverVersion=5.7
```
5. make a new database by command php bin/console doctrine:database:create 

6. starting migrations

`php bin/console doctrine:migrations:migrate`

7. starting seeding

`php bin/console doctrine:fixtures:load`

MySQL

Download a database dump( - database dump contains CREATE/USE DATABASE statement ):

- Database schema and SQL-queries. Located in the /public folder in a file:

`SQL-queries.txt`
`dbShema.PNG`
