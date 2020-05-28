FROM ubuntu:18.04

ENV TZ=America/Guatemala
ENV APACHE_USER_UID=1000

RUN apt update -y  \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone \
    && apt install -y git curl wget zip unzip apache2 \
       php libapache2-mod-php php-pgsql php-common php-cli php-gd php-curl php-intl php-mbstring php-bcmath php-imap php-xml php-zip \
    && a2enmod rewrite \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/bin \
    && php -r "unlink('composer-setup.php');" \\
    && usermod -u ${APACHE_USER_UID} www-data


EXPOSE 80

ENTRYPOINT [ "/usr/sbin/apachectl", "-D", "FOREGROUND" ]