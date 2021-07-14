#!/bin/bash

# permissions
if [ "$(whoami)" != "root" ]; then
	echo "Root privileges are required to run this, try running with sudo..."
	exit 2
fi

current_directory="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
hosts_path="/etc/hosts"
vhosts_path="/etc/apache2/sites-available/"
vhost_skeleton_path="$current_directory/vhost.skeleton.conf"
web_root="/var/www/"


# user input passed as options?
site_url=0
relative_doc_root=0

while getopts ":u:d:" o; do
	case "${o}" in
		u)
			site_url=${OPTARG}
			;;
		d)
			relative_doc_root=${OPTARG}
			;;
	esac
done

# prompt if not passed as options
if [ $site_url == 0 ]; then
	read -p "Please enter the desired URL: " site_url
fi

if [ $relative_doc_root == 0 ]; then
	read -p "Please enter the site path relative to the web root: $web_root_path" relative_doc_root
fi

# construct absolute path
absolute_doc_root=$web_root$relative_doc_root

# create directory if it doesn't exists
if [ ! -d "$absolute_doc_root" ]; then

	# create directory
	`mkdir "$absolute_doc_root/"`
	`chown -R $SUDO_USER:staff "$absolute_doc_root/"`

	# create index file
	indexfile="$absolute_doc_root/index.html"
	`touch "$indexfile"`
	echo "<html><head></head><body>Welcome!</body></html>" >> "$indexfile"

	echo "Created directory $absolute_doc_root/"
fi

# update vhost
vhost=`cat "$vhost_skeleton_path"`
vhost=${vhost//@site_url@/$site_url}
vhost=${vhost//@site_docroot@/$absolute_doc_root}

`touch $vhosts_path$site_url.conf`
echo "$vhost" > "$vhosts_path$site_url.conf"
echo "Updated vhosts in Apache config"

# update hosts file
echo 127.0.0.1    $site_url >> $hosts_path
echo "Updated the hosts file"

# restart apache
echo "Enabling site in Apache..."
echo `a2ensite $site_url`

echo "Restarting Apache..."
echo `/etc/init.d/apache2 restart`

echo "Process complete, check out the new site at http://$site_url"

exit 0
