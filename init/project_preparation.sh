#/bin/bash

PROJ_NAME=`echo $1 | awk -F'/' '{print $2}'  | tr '[:upper:]' '[:lower:]' | tr '_' '-'`
read -r WP_PORT_FORWARD DB_PORT_FORWARD < <(comm -23 <(seq 49152 65535 | sort) <(ss -Htan | awk '{print $4}' | cut -d':' -f2 | sort -u) | shuf | head -n 2 | awk 'BEGIN { ORS = " " } { print }')
#       find 2 free ports on server                        ##                                                                                  number of ports      convert column to row      

sed -i "s/template_wp_port/$WP_PORT_FORWARD/g" docker-compose.yml
sed -i "s/template_db_port/$DB_PORT_FORWARD/g" docker-compose.yml
sed -i "s/template_name/$PROJ_NAME/g" init/nginx.conf
sed -i "s/template_port/$WP_PORT_FORWARD/g" init/nginx.conf
sudo cp init/nginx.conf /etc/nginx/sites-available/$PROJ_NAME.stage.webmedia.ge
sudo ln -s /etc/nginx/sites-available/$PROJ_NAME.stage.webmedia.ge /etc/nginx/sites-enabled/$PROJ_NAME.stage.webmedia.ge
sudo systemctl reload nginx
sudo certbot --nginx --agree-tos --non-interactive -m dmitry.korchik@webmedia.ge -d $PROJ_NAME.stage.webmedia.ge

echo "MYSQL_DATABASE=`grep "DB_NAME" wp-config.php | awk -F"'" '{print $4}'`" > .env
echo "WORDPRESS_DB_NAME=`grep "DB_NAME" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "MYSQL_USER=`grep "DB_USER" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "WORDPRESS_DB_USER=`grep "DB_USER" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "MYSQL_ROOT_PASSWORD=`grep "DB_PASSWORD" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "MYSQL_PASSWORD=`grep "DB_PASSWORD" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "WORDPRESS_DB_PASSWORD=`grep "DB_PASSWORD" wp-config.php | awk -F"'" '{print $4}'`" >> .env
echo "WORDPRESS_TABLE_PREFIX=`grep "table_prefix" wp-config.php | awk -F"'" '{print $2}'`" >> .env
echo "OLD_DOMAIN=`grep "wp_options" -A 1 mysql-dump/*.sql | grep "siteurl" | awk -F"'" '{print $4}'`" >> .env
echo "NEW_DOMAIN=https://$PROJ_NAME.stage.webmedia.ge" >> .env
