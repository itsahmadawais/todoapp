# To Do App Laravel
[![N|Solid](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)](https://laravel.com/)

To Do App is a web application built with Laravel. It has a CRUD for the tasks and shows all the tasks to the public by localizing to their local timezones.
## Live Preview
Find the live preview of the Todo App on the following link:
[https://todoapp.itsahmadawais.com/](https://todoapp.itsahmadawais.com/)
***Username:*** admin@gmail.com
***Password:*** password
Check the video [Video Link](https://video.com)
## Third Party API/Endpoint
This web application is using third-party services to find the local timezone using the GEOIP.
http://ip-api.com/json/<user_ip_address>
## Features
- Login/Registeration System
- CRUD Implementation for the tasks
- Tasks Personalization
- Timezone Localization according to the user's local timezone
- Error Handling - If user timezone is not deteacted, it shows the list in "America/New_York" timezone

## Technologies Used
The following technologies are used in building in this web application:
- [HTML] - HTML enhanced for web apps!
- [CSS] - Styling Web Pages!
- [Laravel 9.x] - Awesome backend scripting framework for PHP.
- [Bootstrap 5] - An awesome framework for css.
- [Sass] - Awesome css pre-processor to genrate css stylesheet.
- [Bootstrap Admin Template] - A ready-made bootstrap Admin Template Theme Kit. - https://github.com/ThemeKit/BootstrapAdmin
- [JS] - To Cerate Interactive UI.
- [jQuery] - JS library to create awesome UIs.

And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

## Installation
You need composer to run the application.

```sh
cd application_folder
composer upadte
```

Enter the database details in the .env file and run the following commands:

```sh
php artisan migrate
php artisan db:seed
```
Run the application:
```sh
php artisan serve
```