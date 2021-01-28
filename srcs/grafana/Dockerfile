FROM    alpine:3.11

RUN     apk update && apk upgrade && apk add openssl &&\
        apk add -X http://dl-cdn.alpinelinux.org/alpine/edge/community grafana

RUN     mkdir	            /usr/share/grafana/conf/dashboards

COPY    datasources.yaml    /usr/share/grafana/conf/provisioning/datasources/
COPY    dashboards.yaml     /usr/share/grafana/conf/provisioning/dashboards/
COPY    jsons/*		        /usr/share/grafana/conf/dashboards/

CMD     grafana-server -homepath /usr/share/grafana
