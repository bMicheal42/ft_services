FROM alpine:3.11

RUN apk update && apk upgrade &&\
    apk add -X http://dl-cdn.alpinelinux.org/alpine/edge/community telegraf

COPY telegraf.conf /etc/

CMD telegraf --config /etc/telegraf.conf