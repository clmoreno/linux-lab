FROM ubuntu:18.04

ENV PASSWORD=123456

RUN apt-get update \
    && apt-get install -y openssh-server \
    && mkdir /var/run/sshd \
    && echo "root:${PASSWORD}" | chpasswd \
    && sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config \
    && sed -i 's/#PermitRootLogin/PermitRootLogin/' /etc/ssh/sshd_config

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]
