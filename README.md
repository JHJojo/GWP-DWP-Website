## Setup

* setup xampp server
* clone repo into xampp folder
* rename git repo folder to htdocs(delete old one)
* Apache Config
>In `/apache/conf/httpd.conf` comment out lines 295-297:
``` xml
<Files ".ht*">
    Require all denied
</Files>
```
>To
``` xml
#<Files ".ht*">
#    Require all denied
#</Files>
```

### Login Website
* Email: root@root.de
* Passwort: rootroot
* oder Registrierung eines eigenen Accounts

## Custom Apache Settings
* add them to the `.htaccess` file
