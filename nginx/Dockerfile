FROM nginx:1.15.7-alpine

RUN apk --no-cache update && \
  apk --no-cache add \
  sudo \
  vim 

COPY ./nginx/docker-initialize.sh /

CMD [ "/bin/sh" ]