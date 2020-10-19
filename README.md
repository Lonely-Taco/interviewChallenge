###Interview challenge app.

##Migrations
created migrations to create the customer and credit card tables.
## Database
-build database 'interviewchallange' to get started
set properties with username and password in .env 
(I placed the default in this .env since my mysql -u and -p are not the default anymore)

##Seed database
to run as background process, run the terminal commands:

-php artisan migrate -> to build the tables

-php artisan db:seed -> to seed data to the database

-halt the process with basic 'ctrl'+ 'C' shortcut and resume again with -php artisan db:seed.

