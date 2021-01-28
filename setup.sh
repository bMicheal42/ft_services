minikube start --vm-driver=virtualbox
eval $(minikube docker-env)

docker build -t nginx_image srcs/nginx/
docker build -t php_image srcs/php/
docker build -t wordpress_image srcs/wordpress/
docker build -t mdb_image srcs/mdb/
docker build -t ftps_image srcs/ftps/
docker build -t influxdb_image srcs/influxdb/
docker build -t grafana_image srcs/grafana/
docker build -t telegraf_image srcs/telegraf/

minikube addons enable dashboard
minikube addons enable metallb

kubectl apply -f srcs/configmap.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/php/php.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/mdb/mdb.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl apply -f srcs/telegraf/telegraf.yaml

minikube dashboard &
