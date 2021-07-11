#!/bin/bash
clear
echo "#################################################################\n"
echo "#                                                               #\n"
echo "#                    Welcome to Lazy Panel                      #\n"
echo "#                                                               #\n"
echo "#################################################################\n"
# Check if script is being run by root
if [[ $EUID -ne 0 ]]; then
   printf "This script must be run as root!\n"
   exit 1
fi

DIVIDER="\n***************************************\n\n"

# Welcome and instructions
printf $DIVIDER
printf "It will take a few minits to complate all the installation \n"
printf $DIVIDER
sudo apt-get upadate
sudo apt-get upgrade -y
#PHP7 PPA
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
#Update the repositories
sudo apt-get update
#Apache, Php, MySQL and required packages installation
sudo apt-get -y install apache2 php7.4 libapache2-mod-php7.4 php7.4-mcrypt php7.4-curl php7.4-mysql php7.4-gd php7.4-cli php7.4-dev mysql-client
#this is another package
sudo pecl install mcrypt-1.0.2
#The following commands set the MySQL root password to MYPASSWORD123 when you install the mysql-server package.
sudo debconf-set-selections <<<'mysql-server mysql-server/root_password password SECRAT@123subho'
sudo debconf-set-selections <<<'mysql-server mysql-server/root_password_again password SECRAT@123subho'
sudo apt-get -y install mysql-server
#Restart all the installed services to verify that everything is installed properly
echo -e "\n"
service apache2 restart && service mysql restart >/dev/null
echo -e "\n"
php -v
if [ $? -ne 0 ]; then
   echo "Please Check the Install Services, There is some $(tput bold)$(tput setaf 1)Problem$(tput sgr0)"
else
   clear
   echo "#################################################################\n"
   echo "#                                                               #\n"
   echo "#                    Lazy Panel Is Installed                    #\n"
   echo "#                                                               #\n"
   echo "#                    server - http://localhost:8088             #\n"
   echo "#                    username - admin                           #\n"
   echo "#                    username - admin@123                       #\n"
   echo "#                                                               #\n"
   echo "#################################################################\n"
fi
echo -e "\n"
