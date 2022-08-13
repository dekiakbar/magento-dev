# Magento 2.4.4 docker local dev

Magento 2.4.4 with docker compose, just for custom module development purpose.

# Related documentation
- [Magento cloud docker](https://devdocs.magento.com/cloud/docker/docker-development.html)
- [Install docker](https://docs.docker.com/engine/install/)

# Install

Before using this, please install docker. 

## Build image, start container and install magento

> bin/manager composer install -vvv
> bin/manager install
> bin/manager dev-mode (developer mode : optionally)

# Available command
- bin/manager

# Note
- use in/manager to run any magento, ece-tools, ece-docker command.
- you can use docke command, i.e : docker-compose up
