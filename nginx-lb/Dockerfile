FROM ubuntu:18.04

COPY ./entrypoint.sh /root/entrypoint.sh

RUN apt update -y \
    && apt install nginx -y \
    && chmod +x /root/entrypoint.sh

COPY ./default.cfg /etc/nginx/sites-available/default

EXPOSE 80

STOPSIGNAL SIGTERM

ENTRYPOINT [ "/root/entrypoint.sh" ]