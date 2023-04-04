SHELL := /bin/bash

tests:
	symfony console doctrine:database:drop --force --env=test || true
	symfony console doctrine:database:create --env=test
	symfony console doctrine:migrations:migrate -n --env=test
	symfony console doctrine:schema:update --dump-sql --env=test
	symfony console doctrine:fixtures:load -n --env=test
	symfony console doctrine:schema:drop --force --env=test
	symfony console doctrine:schema:create --env=test
	symfony console doctrine:fixtures:load -n --env=test
	symfony php bin/phpunit $@
.PHONY: tests