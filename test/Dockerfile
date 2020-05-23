# Caual es la imagen base (analogo de iso del sistema)
FROM ubuntu:18.04

# copiar
COPY ./script.sh /root/script.sh

# que ejecutar
RUN apt update -y
RUN apt install vsftp
RUN ....

# Que quiero ejecutar
ENTRYPOINT [ "vsftpd" ]