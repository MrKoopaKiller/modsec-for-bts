FROM owasp/modsecurity-crs:nginx-alpine

RUN apk update --no-cache && apk upgrade --no-cache
RUN apk add -U --no-cache git php8-fpm py3-pip supervisor &&\
  pip install 'git+https://github.com/coderanger/supervisor-stdout.git'

COPY etc/ /etc/
COPY html/ /usr/share/nginx/html/

COPY sync-crs-rules.sh /sync-crs-rules.sh
COPY docker-entrypoint.sh /docker-entrypoint.sh

RUN cp /etc/nginx/templates/conf.d/modsecurity.conf.template /etc/nginx/conf.d/modsecurity.conf

ENTRYPOINT ["/docker-entrypoint.sh"]