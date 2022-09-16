build: docker-build
up: docker-up
down: docker-down
shell: docker-shell
ps: docker-ps

# @ - позволяет не выводить название командыр в консоль
docker-build:
	@docker-compose build

docker-up:
	@docker-compose up -d

docker-down:
	@docker-compose down

docker-shell:
	@docker-compose exec php-fpm /bin/bash

docker-ps:
	@docker ps
