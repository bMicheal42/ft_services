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
        apk add --no-cache nginx openssl supervisor \
        php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl \
        php7-mbstring php7-json php7-session openrc

RUN     mkdir /run/nginx/

COPY    nginx.conf /etc/nginx/

COPY    supervisor.conf /etc/supervisord.conf

RUN     wget https://wordpress.org/latest.tar.gz

RUN     tar xf latest.tar.gz -C /var/www

COPY    wp-config.php /www/wordpress/

RUN     openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/nginx/key.pem -out /etc/nginx/cert.pem -days 365  -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.example.com"

CMD     usr/bin/supervisord -c /etc/supervisord.conf
