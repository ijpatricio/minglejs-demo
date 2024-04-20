FROM composer:2 as build_composer
WORKDIR /app
COPY . /app
RUN composer install --ignore-platform-reqs --no-interaction

FROM node:20 as build_frontend
WORKDIR /app
COPY --from=build_composer /app /app
RUN npm ci
RUN npm run build
RUN rm -rf node_modules

FROM ghcr.io/ijpatricio/keg-php-83

WORKDIR /var/www/html

COPY --from=build_frontend --chown=alfredo:alfredo /app /var/www/html

USER alfredo

RUN touch database/database.sqlite ; php artisan migrate --force

USER root
