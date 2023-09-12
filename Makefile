up:
	sudo docker compose up

down:
	sudo docker compose down

reset:
	make down;
	sudo rm -rf volumes/mysql/data;