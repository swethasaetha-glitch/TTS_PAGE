FROM richarvey/nginx-php-fpm:3.1.6

ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV ERRORS 0
ENV TOKEN 1
ENV RUN_SCRIPTS 1

WORKDIR /var/www/html

COPY . .

RUN apk add --no-cache nodejs npm \
    && composer install --no-dev --optimize-autoloader \
    && npm install \
    && npm run build \
    && touch database/database.sqlite \
    && chown -R nginx:nginx /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 80

CMD ["/start.sh"]
