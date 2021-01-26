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

RUN     apk update && apk upgrade && apk add vsftpd openssl && \
        echo "root:school21" | chpasswd

COPY    ftps.conf /etc/vsftpd/vsftpd.conf
COPY    ftps.sh .

RUN     openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/vsftpd/key.pem -out /etc/vsftpd/cert.pem -days 365  -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.example.com"

RUN     chmod 777 ./ftps.sh

ENTRYPOINT ["sh","/ftps.sh"]