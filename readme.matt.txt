
>>> Instructions

cd to project folder
to start server enter:

$ php artisan serve



>>> Instructions for setting up Foundation 6 with Laravel 5

http://somethingnewtutorial.blogspot.com/2017/07/using-foundation-6-with-laravel-5.html


// Good Laravel video (laravel cast)
https://www.youtube.com/watch?v=bHpyWTjVU1I

https://laracasts.com/skills/laravel


LARAVEL MIGRATION NOTES
When its time to move code to host gator

1. Setup Database on server
- get SQL to add tables to existing db on server

2. Edit .env

change APP_URL to http://www.mysite.com

change DB info

3. Move contents of public folder to app root
(put the files in mysiteroot folder)

4. Edit index.php to reflect public folder change

5. Upgrade server PHP to v7 
