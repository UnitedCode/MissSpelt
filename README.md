# MissSpelt!
This project was an entry into the FBLA website design competition for the year 2016. The project took 10th place at the national level. Recently the backend of the project has been rewritten to follow MVC paradigms.

## Running
1. Download a copy of the repo and place it within your server root. 
2. Make a copy of the `config.php.example` file and rename it to `config.php` Then alter the file to include your MySQL database name, username, and password
3. There are several `.sql` files in the `db schema` folder. Each file must be imported into your database as a table.
3. Start your php server. If you have the php cli you can run the command `php -S localhost:8000` from anywhere to start the server