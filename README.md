# Basic Computer Based Testing Application

Quite typical project where user goes through some set of questions - quiz, survey, assessment or similar.

They get the result of how many points they've got, and then get the PDF report via email.

- - - - -



- - - - -

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__
- Click __Register__ to register as new user and start the test
- The Category,Questions and Options was generated at random


- - - - -

## License

Basically, feel free to use and re-use any way you want.


