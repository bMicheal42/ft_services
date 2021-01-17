minikube start --driver=virtualbox
eval $(minikube docker-env)
docker build -t nginx_image srcs/nginx/
minikube addons enable dashboard
minikube dashboard&
kubectl apply -f srcs/nginx/nginx.yaml