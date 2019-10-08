* composer create-project symfony/skeleton app

* docker build -t app:dev .

* docker run -it --rm -v $(pwd):/var/www/html/project -p 8000:8000 app:dev sh

* php bin/console server:run *:8000 

visit site on : http://localhost:8000/accueil
