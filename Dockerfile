FROM nginx:latest
COPY ./docker/default.conf /etc/nginx/conf.d/
