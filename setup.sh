#!/bin/bash
#Copies php files over to www and inject the db schema into mysql.  Should change password in use before deploying to production.
cp -R `dirname $0`/www/* /var/www/html
mysql -u root -pgoodyear123!@# < `dirname $0`/dbschema.sql
