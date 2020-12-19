
/*******************************************************************
*                 ICA MEMORANDUM MONITORING SYSTEM                 |
*__________________________________________________________________|
*                          User Manual                             |
*                                                                  |
*******************************************************************/
Requierements before installing:
1. mysql
2. xampp/wamp
3. react
4. php latest version
5. composer
6. apache

Installation:
1. Download the file from https://github.com/Fistpop/ICA-Memorandum-Monitoring-System.
2. Create a database named laravel.
3  Use command php artisan migrate to create tables.
if(migration error || choose to import sql file)
{
	1. import .sql file called laravel.sql located at the downloaded file directory.
	2. Proceed to step 6.
}
4. Insert categories(e.g. 'colleges', 'department', 'university') in categories table.
5. Open resources/views/memorandum/creatememo.blade.php and edit the select form if you added or change different categpories, if not proceed to the next step.
6. Check .env file if database connection is correct.
7. Installation done.

Admin account: (Only if you import the laravel.sql to your database)
email: admin@mail.com
Password: 12345678

How to create admin account:
1. Register
2. Change user type in database as "admin"

Registration:
1. User registration is automatically stored as "user" type privilege.




