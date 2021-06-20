

## Set up:

***
1- clone project from github by running the command:
``` git clone https://github.com/HammudElHammud/ProjxTasks.git```

2- open your terminal and run command :
composer install 3- set up .env file as it has set in env.example file



3- after setting .env file you must run command  
``` php artisan install ``` this command has set manually to avoid run below command every time when you need, this
command contains

```
    install:
	
	php artisan db:wipe
	php artisan migrate:install
	php artisan migrate
	php artisan db:seed

```
"# test" 
"# ProjxTasks" 
