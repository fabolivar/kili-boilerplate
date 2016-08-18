# Koombea Wordpress Boilerplate (KWB)

KWB is a modern WordPress stack that helps you get started with the best theme development tools and project structure.

## Features
* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Requirements
* PHP >= 5.6 [Install Mamp Pro](https://www.mamp.info/en/downloads/)
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)


## Installation

1. Clone the repository and setup.

    ``` 
    $ git clone https://github.com/koombea/wordpress-boilerplate

    $ cd wordpress-boilerplate 
    ```
    
2. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.dev)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
    If you want to automatically generate the security keys you can cut and paste from the [Koombea Salts Generator](http://koombea.com/salts.html) 

## Starting the app
1. You can start the app with Composer, this will launch the required containers:

 ```
 $ composer install
 ```

2. Open and Run "Mamp pro", start the Apache and MySQL. 
    * General tab, click the button "Set the Apache and MySQL ports 80, 443, 3306" if you are not using Pow or other local server.
    * PHP tab, choose the default version version 5.6.10.
    * MySql tab, change the default password root. In the same tab click on the icon phpMyAdmin and create the database
    * Tab host, in the bottom right of the window click the button with the symbol + and add a new virtualhost, on the right side enter the server name and choose the directory root for example ```wordpress-boilerplate/web/```
    * Save the configuration
    
3. Go to the url server for example ```http://example.dev``` to start installing WordPress

## Staging Deploy

## Production Deploy

## Troubleshooting


## License

Copyright 2016 Koombea. https://www.koombea.com/
