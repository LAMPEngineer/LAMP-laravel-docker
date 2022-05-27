# LAMP-laravel-docker
- Ubuntu 20.04
- Docker 20.10.12
- Apache 2.0
- PHP 8.1.2
- MySQL 8.0.27
- PhpMyAdmin
- Laravel 8
- MongoDB 5.0
- Mongo-Express

# **[Docker Compose](https://docs.docker.com/compose/)**
Using Compose is a three-step process:
 1. Define app’s environment with a **[Dockerfile](https://docs.docker.com/engine/reference/builder/)** so it can be reproduced anywhere.
 2. Define the services that make up app in **[docker-compose.yml](https://docs.docker.com/compose/compose-file/)** so they can be run together in an isolated environment.
 3. Run **[docker compose up](https://docs.docker.com/compose/reference/up/)** and the Docker compose command starts and runs entire app. We can alternatively run docker-compose up using the docker-compose binary.


# **[Docker commands](https://docs.docker.com/engine/reference/commandline/docker/)** 

- **[$docker ps -a](https://docs.docker.com/engine/reference/commandline/ps/)**  :(--all) Show both running and stopped containers
- **[docker-compose ps](https://docs.docker.com/compose/reference/ps/)** : Lists containers
- **[$docker pull](https://docs.docker.com/engine/reference/commandline/pull/)** : Pulls images from the repository to local environment
- **[$docker run](https://docs.docker.com/engine/reference/run/)**  : Docker runs processes in isolated containers.  
- **[$docker run -d](https://docs.docker.com/engine/reference/run/)**  : (--detach) Run container in background and print container ID 
- **[$docker run -p](https://docs.docker.com/engine/reference/run/)**  : (--publish) Publish a container's port(s) to the host
- **[$docker start](https://docs.docker.com/engine/reference/commandline/start/)**  : Start one or more stopped containers
- **[$docker stop](https://docs.docker.com/engine/reference/commandline/stop/)**  : Stop one or more running containers
- **[$docker restart](https://docs.docker.com/engine/reference/commandline/restart/)**  : Restart one or more containers 
- **[$docker ps](https://docs.docker.com/engine/reference/commandline/ps/)**  : List all running containers
- **[$docker ps -s](https://docs.docker.com/engine/reference/commandline/ps/)**  :(--size) Show disk usage by container
- **[$docker history](https://docs.docker.com/engine/reference/commandline/history/)**  : Show the history of an image
- **[$docker images](https://docs.docker.com/engine/reference/commandline/images/)**  : List docker images
- **[$docker logs](https://docs.docker.com/engine/reference/commandline/logs/)**  : Fetch the logs of a container
- **[$docker exec](https://docs.docker.com/engine/reference/commandline/exec/)**  : Run a command in a running container
- **[$docker network](https://docs.docker.com/engine/reference/commandline/network/)**  : Manage networks
- **[$docker network create](https://docs.docker.com/engine/reference/commandline/network_create/)**  : Create a network
- **[$docker volume](https://docs.docker.com/storage/volumes/)**  : Persisting data generated by and used by Docker containers.

- **[]()** 

# SSH to Docker
- Go to docker dir
- Run - sudo docker -ps [Find the container name]
- Run - sudo docker exec -it container_name bash
- Now we are inside the container - root@54278f6cb8dd:/var/www#
- Run composer - root@54278d6bb8dd:/var/www# composer

   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/

Composer 2.3.1 2022-03-30 15:41:28



