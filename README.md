# Treejective
Laravel based website to make environment handling a task based fun activity.

---

## Description

The website provides a set of objectives to every user, they will complete the objective and then **mark them as completed**. These tasks would be related to planting trees, some objectives can be **specific to some type of common trees** however, most of them won’t be restricted. With each completed objective the user will **receive a badge**. These badges will showcase the efforts a person is made for the nature. The badges will be distributed into **certain categories** to represent the **level of the user**. A certain number of points will be provided to each user. This is a small step towards environment conservation.

The user login/signup functionalities are present and the authentication is being managed using laravel/ui.


## Final objective of the project

The main features of the website is to provide the user with several objectives and then trying to just complete that quest the users will add some value to the environment they breathe in. The objectives page keeps the objective completion in check and stores the data. These completed objectives are displayed on the common wall for completed objectives giving the user a chance to flaunt their contribution to the environment. Based on the number of objectives completed scores are assigned to each user. The scores are the aspect of rank calculation as well as they are the essential component for providing the badge. The badges are custom designed for each experience category, which is obviously decided using the scores. Howsoever, all this information is useless if not stored somewhere, where database comes into play and the data regarding each player is stored separately. A highly interactive and stunning yet light-weight front-end will complement the implementation of it all.

---  

### Requirements

Some required tools to run the project are:
    1. PHP (7.4.1)
    2. Composer (version 1.9.1) *check out how to [install composer](https://getcomposer.org/download/)*
    3. XAMPP *or similar hosting service*

### Steps to run the project

- Host an apache and a mySql server at the localhost.  
- Create a Database name **dbcon** *(It just felt cool.)*

Download the project, extraxt and then open the visual studio code *(I prefer)* inside the folder **treejective_F**.

Now open the poweshell/terminal in the same folder and run the following commands:

- `composer install or php composer.phar install`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan serve`

### You should now be able to use the project at localhost:8000

## ENJOY! :)
