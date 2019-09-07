FROM php:alpine

RUN php -r "copy('https://getcomposer.org/composer.phar', 'composer.phar');"
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

#docker build -t php:compose .
#docker run -it --rm php:compose sh
#docker run --rm -it -v $PWD:/app -w /app php:composer composer require kahlan/kahlan --dev
#docker run --rm -it -v $PWD:/app -w /app php:composer php vendor/bin/kahlan --spec=spec/
