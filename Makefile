install: ## Install the application
	docker-compose -f docker-compose.yml build
	docker-compose -f docker-compose.yml up -d

restart: ## Re-run the application
	docker-compose -f docker-compose.yml  up -d --build

stop: ## Stop the application
	docker stop hayrapetyan-http hayrapetyan-app hayrapetyan-db

start: ## Stop the application
	docker start hayrapetyan-http hayrapetyan-app hayrapetyan-db

bash: ## Open the app container
	 docker exec -it hayrapetyan-app bash

migrate:
	docker exec -it hayrapetyan-app bash -c "mysql -u hayrapetyan -h hayrapetyan-db -p hayrapetyan < ./database/migrate.sql"