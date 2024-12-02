
SERVICES = adminer

all :
	make down
	make build
	make up

up :
	docker-compose up ${SERVICES}
down :
	docker-compose down ${SERVICES}
build :
	docker-compose build ${SERVICES}

#Upall voor het beginnen van de docker containers en de site
upall:
	docker-compose up
buildall:
	docker-compose build --progress=plain
downall:
	docker-compose down
#Cleanall niet echt te gebruiken
cleanall:
	docker-compose down --volumes --remove-orphans