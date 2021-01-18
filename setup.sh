minikube start --driver=virtualbox
eval $(minikube docker-env)

docker build -t nginx_image srcs/nginx/
docker build -t php_image srcs/php/

minikube addons enable dashboard
minikube addons enable metallb

kubectl apply -f srcs/configmap.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/php/php.yaml

minikube dashboard &
