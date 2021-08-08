# aloware.test #

This is the exam for Aloware using Laravel 5.5 Framework & VueJS 2.

## Installation

### Step 1.

> To run this project, you must have PHP 7.0+ installed, VUE JS, AXIOS, COMPOSER, NPM as a prerequisite

Begin by cloning this repository to your VM and install all Composer dependencies.

```bash
cd /var/www/html/
git clone git@github.com:achilesmercader/aloware.git
cd aloware && composer install
cp .env.example .env
php artisan key:generate
```

### Step 2.

Next, create a new database and reference its name and username/password within the project's `.env` file. In the example below, we've named the database "aloware"

```
APP_URL=https://aloware.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aloware
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3.

Lets run/import the database by running

```
$ php artisan migrate
```

### Step 4.

We need to enable File Storage Link to publish the /public/storage directory

```
$ php artisan storage:link
```

### Step 5. 

Run npm install && npm run dev

```
$ npm install
$ npm run dev
```

### Step 6.

Once finished, clear your server cache, and you're all set to go!

```
php artisan cache:clear
```

### Step 7.

Access the site using a browser (i.e. Chrome, Firefox, Safari etc.) `https://aloware.test`. 

* Create an account first by clicking the signup/register link
* Login the Site.
* Start commenting
* Enjoy browsing
