FROM ubuntu:18.04

RUN apt update -y
RUN apt install apache2 -y

EXPOSE 80

ENTRYPOINT [ "/usr/sbin/apachectl", "-D", "FOREGROUND" ]