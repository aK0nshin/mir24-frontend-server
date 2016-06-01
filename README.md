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
##Manifest
####Third party libraries used  
[Laravel](https://laravel.com) as a server side framework  
[jQuery](https://jquery.com/) as a client side frontend framework  
[React](https://facebook.github.io/react/) as a client side backend framework  

####Tools used 
[LAMP](https://en.wikipedia.org/wiki/LAMP_(software_bundle)) as a server-side environment  
[nginx](http://nginx.org/) as Apache's front  
[Composer](https://getcomposer.org/) as a PHP dependencies manager  
[npm](https://www.npmjs.com/) as a JS package manager  
[git](https://git-scm.com/) as a VCS  
[JIRA](https://mir24tv.atlassian.net/secure/RapidBoard.jspa?projectKey=MIR24) as an issue tracker  
[PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) as coding standarts guard  
[travis-ci](https://travis-ci.org/) as build and testing service  
[apiary](https://apiary.io/) as API Design Stack  
[Swagger](http://swagger.io/) as REST API planner  
[Valentina Studio](https://www.valentina-db.com/en/download-valentina-studio) as DB planner and basic DB editor

####Basic concepts
[MVC](https://docs.phalconphp.com/en/latest/reference/mvc.html) as a primary pattern  
[Agile](http://agilemanifesto.org/iso/en/) as a development workflow framework  
[TDD](https://en.wikipedia.org/wiki/Test-driven_development) all over the public API  
[Material design](https://www.google.com/design/spec/material-design/introduction.html) as UI guidance
