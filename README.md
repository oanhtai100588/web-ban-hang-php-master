# web-ban-hang-php-master
web bán hàng php, sử dụng framework Codeigniter, Bootstrap

Hướng dẫn sử dụng:

1. import SQL từ file web-ban-hang-php.sql trong thư mục web-ban-hang-php-master/db

2. add đoạn sau vô file xampp/apache/conf/httpd-vhosts.conf

NameVirtualHost *:80
<VirtualHost *> 
DocumentRoot "E:\xampp\htdocs\web-ban-hang-php-master"
ServerName web-ban-hang-php-master.dev
</VirtualHost>

3. add đoạn sau vô file host trong C:\Windows\System32\drivers\etc

127.0.0.1		web-ban-hang-php-master.dev

4. 
Truy cập theo đường dẫn: http://web-ban-hang-php-master.dev
Enjoy it!
