cd /var/www/deliveryclub/
git pull
app/console  cache:clear --env=dev
app/console  cache:clear --env=prod
chmod -R 777 app/cache/
chmod -R 777 app/logs/


