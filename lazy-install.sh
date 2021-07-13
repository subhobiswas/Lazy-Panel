#!/bin/bash
clear
printf "#################################################################\n"
printf "#                                                               #\n"
printf "#                    Welcome to Lazy Panel                      #\n"
printf "#                                                               #\n"
printf "#################################################################\n"
echo -n "Do you wish to continue? [Y/n]: "

read continue

case $continue in
n* | N*) exit ;;
esac
################################################################################
# Check if script is being run by root
if [[ $EUID -ne 0 ]]; then
   printf "This script must be run as root!\n"
   exit 1
fi
##############################################################################
DIVIDER="\n***************************************\n\n"
################################################################################
# setup passwor
PASSWORD=$(openssl rand -base64 14)
USERNAME='admin'
DB_PASSWORD=$(openssl rand -base64 14)
################################################################################
# Welcome and instructions
printf $DIVIDER
printf "It will take a few minits to complate all the installation \n"
printf $DIVIDER
################################################################################
# update repo
sudo apt-get upadate
sudo apt-get upgrade -y
################################################################################
#PHP7.4 PPA
sudo apt-get install software-properties-common
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
################################################################################
#Update the repositories
sudo apt-get update
################################################################################
#Apache, Php, MySQL and required packages installation
sudo apt-get -y install apache2 php7.4 libapache2-mod-php7.4 php7.4-mcrypt php7.4-curl php7.4-mysql php7.4-gd php7.4-cli php7.4-dev mysql-client
sudo apt-get install php7.4-xml
sudo apt-get install php7.4-zip -y
pear install File_Archive
#this is another package
sudo pecl install mcrypt-1.0.2
################################################################################
#The following commands set the MySQL root password to MYPASSWORD123 when you install the mysql-server package.
sudo debconf-set-selections <<<'mysql-server mysql-server/root_password password '${DB_PASSWORD}
sudo debconf-set-selections <<<'mysql-server mysql-server/root_password_again password '${DB_PASSWORD}
################################################################################
# install mysql server
sudo apt-get -y install mysql-server
################################################################################
#Restart all the installed services to verify that everything is installed properly
printf "\n"
service apache2 restart && service mysql restart >/dev/null
################################################################################
#configure virtual host for lazy
printf "\n"
php -v
################################################################################
# check for error
if [ $? -ne 0 ]; then
   printf "Please Check the Install Services, There is some $(tput bold)$(tput setaf 1)Problem$(tput sgr0)"
else
   #configure v host for lazy ip:3000
   ip_add=($(hostname -I))
   declare -p ip_add
   echo '
   #configure v host for lazy ip:3000
   Listen '${ip_add[0]}':3000
   <VirtualHost '${ip_add[0]}':3000>
      DocumentRoot "/var/www/lazy/"
   </VirtualHost>' >'/etc/apache2/sites-available/lazy.conf'
   sudo a2ensite lazy
   printf "\n"
   echo "
   <?php
   // this is main config page for lazy
   define('USERNAME','admin');
   define('PASSWORD','"${PASSWORD}"');" >"config.php"
   clear
   printf "#################################################################\n"
   printf "#                                                                \n"
   printf "#                    Lazy Panel Is Installed                     \n"
   printf "#                                                                \n"
   printf "#                    server - http://localhost/lazy/             \n"
   printf "#                    username - admin                            \n"
   printf "#                    username - $PASSWORD                        \n"
   printf "#                    MySql User - root                           \n"
   printf "#                    MySql Password - $DB_PASSWORD               \n"
   printf "#                                                                \n"
   printf "#################################################################\n"
fi
