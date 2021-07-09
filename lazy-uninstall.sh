#!/bin/bash

# This will remove Apache
sudo service apache2 stop
sudo apt-get purge apache2 apache2-utils apache2.2-bin 
sudo apt remove apache2.*
sudo apt-get autoremove
whereis apache2
sudo rm -rf /etc/apache2

# This will remove php
sudo apt-get purge `dpkg -l | grep php7.4| awk '{print $2}' |tr "\n" " "`
sudo apt-get purge php7.*
sudo apt-get autoremove --purge
whereis php
sudo rm -rf /etc/php

# This will remove MYSql
sudo service mysql stop
sudo apt-get remove --purge *mysql\*
sudo apt-get remove --purge mysql-server mysql-client mysql-common -y
rm -rf /etc/mysql
sudo apt-get autoremove
sudo apt-get autoclean

sudo reboot
