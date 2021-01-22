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

FROM alpine:3.7

RUN apk update && apk upgrade && apk add vsftpd openssl

COPY my.cnf /etc/
COPY mdb.sh /
COPY bmicheal_db.sql /

RUN chmod 777 ./mdb.sh

CMD	["./mdb.sh"]