#!/bin/bash

if cat /etc/passwd | grep -q ${UID}; then
    deluser $(cat /etc/passwd | grep ${UID} | awk 'BEGIN {FS=":"};{ print $1}')
fi

useradd -M -d /samba -s /usr/sbin/nologin -u ${UID} -G sambashare ${SAMBA_USER}

(echo ${SAMBA_PASS}; echo ${SAMBA_PASS}) | smbpasswd -sa ${SAMBA_USER}
smbpasswd -e ${SAMBA_USER}

for share in $(cat /etc/samba/smb.conf | grep '\[' | grep -v ';\|#\|global\|print' | tr -d '[' | tr -d ']'); do
  mkdir -pv /samba/${share}
done


chown -R ${SAMBA_USER}:sambashare /samba
chmod -R 2770 /samba

smbd  --foreground --log-stdout