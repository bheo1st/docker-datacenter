FROM phpdockerio/php73-fpm


MAINTAINER Andika Jaring <dika@4solusi.com>

WORKDIR "/application"

RUN echo "Asia/Jakarta" > /etc/timezone

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.3-pgsql php7.3-redis php7.3-ssh2 php7.3-cli php7.3-common php7.3-xml php7.3-mbstring php7.3-json php7.3-zip php7.3-pgsql php7.3-gd \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*