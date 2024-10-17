de-php:
	docker exec -it example-php bash

de-node:
	docker compose exec node sh

du:
	docker compose up -d

dd:
	docker compose down

dr:
	docker compose down
	sudo rm -rf docker/storage/mysql

db:
	docker compose up --build -d

restart: dd du

rebuild: dr db
