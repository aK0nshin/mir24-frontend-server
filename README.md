mir24.tv 2016 website development

##Start guide
1. fork this repository
2. git clone "your fork"
3. cd "clonned repository"
4. sh deploy.sh
5. create database mir24
6. php artisan migrate
7. configure apache2 server example:
```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /path/to/mir24/public

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    <Directory /path/to/mir24>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
</VirtualHost>
```
