#/bin/bash

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/bin/composer
chmod +x /usr/bin/composer