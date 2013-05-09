

### Nginx rewrites

rewrite ^/tgniter/([',A-Za-z0-9+-]+)/([',A-Za-z0-9+-]+)/(['.,A-Za-z0-9+-]+)$ /tgniter/?id=$1/$2&args=$3 last;
rewrite ^/tgniter/([',A-Za-z0-9+-]+)/([',A-Za-z0-9+-]+)$ /tgniter/?id=$1/$2 last;
rewrite ^/tgniter/([',A-Za-z0-9+-]+)$ /tgniter/?id=$1 last;