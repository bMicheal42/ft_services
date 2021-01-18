minikube start --driver=virtualbox
eval $(minikube docker-env)
docker build -t nginx_image srcs/nginx/
minikube addons enable dashboard
minikube addons enable metallb
minikube dashboard &
kubectl apply -f srcs/configmap.yaml
kubectl apply -f srcs/nginx/nginx.yaml