
# Install dependencies
composer install

# Run the project
php artisan serve

# Add in .env file 
QUEUE_CONNECTION=database
QUEUE_RETRY_AFTER=90

# And add mailtrap credentials
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=code
MAIL_PASSWORD=code 
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}" 

# Run URL in browser 
http://127.0.0.1:8000/send-mail

# Run in a terminal
php artisan queue:work

# if not importing DB Run in a terminal
php artisan migrate
php artisan db:seed
