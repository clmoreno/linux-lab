#!/bin/bash

backends="";
for backend in "$@"; do
  backends+="server $backend; ";
done

sed -i "s/#LOAD_BALANCER_BACKENDS/${backends}/" /etc/nginx/sites-enabled/default

nginx -g 'daemon off;'