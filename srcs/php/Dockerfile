# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bmicheal <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/17 13:27:44 by bmicheal          #+#    #+#              #
#    Updated: 2020/12/17 13:30:08 by bmicheal         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM    alpine:3.7

RUN     apk update && apk upgrade && \
        apk add --no-cache nginx openssl php7-fpm openrc\
        php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli \
        php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc \
        php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom

RUN     mkdir /run/nginx/
COPY    nginx.conf /etc/nginx/
RUN     wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN     tar xf phpMyAdmin-5.0.4-all-languages.tar.gz -C /var/www && \
        mv /var/www/phpMyAdmin-5.0.4-all-languages /var/www/pma

COPY    phpmyadmin.inc.php /www/pma/config.inc.php

RUN openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/nginx/key.pem -out \
    /etc/nginx/cert.pem -days 365  -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.example.com"

CMD nginx -g "daemon off;"
