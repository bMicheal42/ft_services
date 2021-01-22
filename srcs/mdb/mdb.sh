#! /bin/sh

mysql_install_db --user root

mysqld --user root & sleep 5

mysql -u root --execute="CREATE DATABASE bmicheal_db;"
mysql -u root bmicheal_db < bmicheal_db.sql
mysql -u root --execute="CREATE USER 'bmicheal'@'%' IDENTIFIED BY 'school21';"
mysql -u root --execute="GRANT ALL PRIVILEGES ON *.* TO 'bmicheal'@'%' WITH GRANT OPTION;"
mysql -u root --execute="FLUSH PRIVILEGES;"

pkill -9 mysqld
mysqld_safe