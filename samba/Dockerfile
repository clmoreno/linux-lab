FROM ubuntu:18.04

ENV SAMBA_USER=sadmin
ENV SAMBA_PASS=123456
ENV UID=1000

COPY ./entrypoint.sh /root/entrypoint.sh

RUN apt update  -y \
    && apt install samba -y \
    && mkdir /samba \
    && chgrp sambashare /samba \
    && chmod +x /root/entrypoint.sh


EXPOSE 137/udp 138/udp 139 445

ENTRYPOINT [ "/root/entrypoint.sh" ]