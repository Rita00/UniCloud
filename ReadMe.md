# UniCloud
##  Study materials sharing website for FCTUC
This is a simple website where people can share their study materials. By default it uses the courses available on FCTUC (Faculdade de Ciências e Tecnologia da Universidade de Coimbra) but can easily be adapted by adding entries to the database.

It was written in Laravel with a MySQL database and has been dockerized so you can easily preview it. If you have Docker and git installed you can easily run this website locally by cloning the repository and activating the docker-compose file. To do that open a terminal and run the following commands:
 - git clone https://github.com/Rita00/UniCloud.git
 - cd UniCloud
 - docker compose up -d

It may take a minute to load up the database, even after Docker says it's up and running, please be patient. Once it's ready you can view the website at http://localhost.
