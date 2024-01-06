#!/bin/bash

##############
# migrate.sh #
##############
#
# Description: 
# Updates URL in database
#

mysql -uroot -p$MYSQL_ROOT_PASSWORD -D$MYSQL_DATABASE -e "
UPDATE ${WORDPRESS_TABLE_PREFIX}options SET option_value = REPLACE(option_value, '${OLD_DOMAIN}', '${NEW_DOMAIN}') WHERE option_name = 'home' OR option_name = 'siteurl'; 
UPDATE ${WORDPRESS_TABLE_PREFIX}posts SET guid = REPLACE(guid, '${OLD_DOMAIN}', '${NEW_DOMAIN}'); 
UPDATE ${WORDPRESS_TABLE_PREFIX}posts SET post_content = REPLACE(post_content, '${OLD_DOMAIN}', '${NEW_DOMAIN}'); 
UPDATE ${WORDPRESS_TABLE_PREFIX}posts SET post_content = REPLACE(post_content, 'src=\"${OLD_DOMAIN}\"', 'src=\"${NEW_DOMAIN}\"'); 
UPDATE ${WORDPRESS_TABLE_PREFIX}posts SET guid = REPLACE(guid, '${OLD_DOMAIN}', '${NEW_DOMAIN}') WHERE post_type = 'attachment'; 
UPDATE ${WORDPRESS_TABLE_PREFIX}postmeta SET meta_value = REPLACE(meta_value, '${OLD_DOMAIN}', '${NEW_DOMAIN}');" 
