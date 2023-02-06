#!/bin/sh
cd src
php -S localhost:3000 &
xdg-open http://localhost:3000/
cd ..