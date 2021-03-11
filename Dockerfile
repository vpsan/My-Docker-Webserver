FROM debian:buster

RUN apt -y update && \
	apt -y upgrade && \
	apt -y install 	nginx \
					mariadb-server \ 
					php7.3 php-mysql php-fpm \
					wordpress \
					openssl \
					vim
  
# nginx config
COPY 	./srcs/nginx_config /etc/nginx/sites-available/default

# set up working dir
WORKDIR /var/www/html/

# download phpMyAdmin
ADD		https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz phpMyAdmin-5.0.1-english.tar.gz
RUN		tar -xf phpMyAdmin-5.0.1-english.tar.gz && \
		rm -rf phpMyAdmin-5.0.1-english.tar.gz && \
		mv phpMyAdmin-5.0.1-english /var/www/html/phpmyadmin

# phpmyadmin config
# setup phpMyAdmin to nginx
COPY 	./srcs/config.inc.php /var/www/html/phpmyadmin

# wordpress config
COPY    ./srcs/wp-config.php /usr/share/wordpress/wp-config.php

# setup wordpress to nginx
RUN		cp -r  /usr/share/wordpress /var/www/html

# certificate for ssl, key for ssl
COPY 	./srcs/ssl_generation.sh /
RUN		bash /ssl_generation.sh

# db_init.sql
COPY    ./srcs/db_init.sql .

# open ports
EXPOSE	80 443

# script for starting service
COPY 	./srcs/server_init.sh /usr/local/bin
CMD 	bash server_init.sh

#end of Dockerfile
