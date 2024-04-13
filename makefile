up: ## Start project
	@echo "⏳ Starting development server"
	docker-compose up -d

stop: ## Stop project
	docker-compose stop
	
down: ## Stop project and remove containers
	docker-compose down

dup: down up ## make down && make up
sup: stop up ## make stop && make up

restart: ## Restart project
	docker-compose restart

connect: ## Run bash in the app service.
	docker-compose exec app bash

dev-server:  ## Generate spritesheet
	docker-compose exec -T php yarn run dev-server