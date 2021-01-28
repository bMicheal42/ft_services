FROM    lpine:3.7

RUN     apk update && apk upgrade && apk add mariadb mariadb-client && mkdir -p /run/mysqld/

COPY    my.cnf /etc/
COPY    mdb.sh /
COPY    bmicheal_db.sql /

RUN     chmod 777 ./mdb.sh

ENTRYPOINT ["sh","/mdb.sh"]