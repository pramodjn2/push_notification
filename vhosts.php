http://foundationphp.com/tutorials/apache_vhosts.php

sudo gedit /etc/hosts then enter

127.0.0.1   addypin.com  
127.0.1.1    api.addypin.com

<VirtualHost *:80>
   ServerName http://addypin.com
   ServerAlias https://addypin.com
   DocumentRoot "E:/xampp/htdocs/addypin"
  <Directory  "E:/xampp/htdocs/addypin">
        AllowOverride All
        Require local
    </Directory>
</VirtualHost>


httpd-vhosts.conf

hosts
