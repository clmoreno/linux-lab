FROM ubuntu:18.04

ENV DB_USER=admin
ENV DB_PASSWORD=123456
ENV TZ=America/Guatemala

RUN apt update -y \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone \
    &&  apt install -y gnupg2 \
    && apt install -y wget \
    && wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc |  apt-key add - \
    && echo "deb http://apt.postgresql.org/pub/repos/apt/ bionic-pgdg main" > /etc/apt/sources.list.d/pgdg.list \
    && apt update -y \
    && apt install -y --no-install-recommends postgresql-12 \
    && echo "host   all all 0.0.0.0/0   md5" >> /etc/postgresql/12/main/pg_hba.conf \
    && echo "listen_addresses='*'" >> /etc/postgresql/12/main/postgresql.conf

USER postgres

RUN /etc/init.d/postgresql start \ 
    && psql --command "CREATE USER ${DB_USER} WITH SUPERUSER PASSWORD '${DB_PASSWORD}';"

VOLUME  ["/var/lib/postgresql"]

EXPOSE 5432

CMD ["/usr/lib/postgresql/12/bin/postgres", "-D", "/var/lib/postgresql/12/main", "-c", "config_file=/etc/postgresql/12/main/postgresql.conf"]