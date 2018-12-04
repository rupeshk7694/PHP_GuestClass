**Guest Class**

* Shared was having lots of problem and not following any PSR standards
* I have update Guest Class and introduced Wedding namespace as I am taking a use-case where user is preparing a Wedding Guests List 
* Moved Database connection at single responsible file as per SOLID principle
* I used PDO for all database related operations
* Introduced exception handling for database connection and operations both




**Steps to Setup Code**

* Minimum System Pre-requisites: PHP (5.x or higher), MySQL (5.x or higher) and Apache2 or you may user WAMP/MAMP/LAMP
* Extract code and copy GuestClass folder into your *www* folder of apache
* Create an empty database of your choice I am using `wedding_guests`  
* Now change Wedding/Process/DBConnector.php file with your local database details
* Than visit http://127.0.0.1/GuestClass you may use vhost like http://GuestClass.loc


**How to Use**

```
use Wedding\Guest;

$guest = new Wedding\Guest();

$guest->addGuest(array('name'=> 'Friend', 'address' => 'Address of Friend', 'phone' => '+1-567-343-wxyz', 'email' => 'friend@gmail.com'));
$guest->addGuests(array(array('name'=> 'Friend1', 'address' => 'Address of Friend1', 'phone' => '+1-753-5673-6735', 'email' => 'friend1@gmail.com'),
array('name'=> 'Friend2', 'address' => 'Address of Friend2', 'phone' => '+1-542-532-7844', 'email' => 'friend2@gmail.com')));
```


**Dry Run**
You can also execute it by hitting http://127.0.0.1/GuestClass/DryRun.php or run

```
$ php DryRun.php
```
