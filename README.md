# Magento 2 Boilerplate

## Table of contents
- [Magento 2 Boilerplate](#magento-2-boilerplate)
  - [Table of contents](#table-of-contents)
  - [Warning](#warning)
  - [Quick start](#quick-start)
  - [Related Docs](#related-docs)

## Warning
- Make sure docker installed in your system
- tested on linux (ubuntu)

## Quick start

- Clone repo : `git clone --depth 1 --branch <tag_name> git@github.com:dekiakbar/magento-dev.git local-dev`
  - [see available tags](https://github.com/dekiakbar/magento-dev/tags)
- Navigate to project root: `cd local-dev`
- Build and install container : `./manager rebuild-container`
- run composer install: `./manager composer install -vvv`
- install magento: `./manager install`
- add domain to your host: `echo "127.0.0.1       magento.docker" | sudo tee -a /etc/hosts`
- open ypur browser and navigate to `https://magento.docker/`
- (optional) install sample data : `./manager install-sample-data`
- (optional) developer mode : `./manager dev-mode`
  - Set magento developer mode
  - Set cookie to 1 year
  - Set session to 1 year
  - Enable static symlink
  - Disable static sign
- list available custom command : `./manager`


## Related Docs
- [Magento Cloud docker](https://developer.adobe.com/commerce/cloud-tools/docker/)
- [Docker](https://www.docker.com/get-started/)
