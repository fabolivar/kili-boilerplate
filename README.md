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
* PHP >= 5.6
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
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`

If you want to automatically generate the security keys you can cut and paste from the [api.wordpress.org](https://api.wordpress.org/secret-key/1.1/salt/)) 

## Starting the app
You can start the app with Composer, 
this will launch the required containers:
  
  ```
  $ composer install
  ```
  
## Staging Deploy

## Production Deploy

## Troubleshooting


## License

Copyright 2016 Koombea. https://www.koombea.com/