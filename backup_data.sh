#!/bin/sh

DATE=$(date "+%Y-%m-%d %H:%M:%S")

cd ./dokuwiki
git add .
git commit -m "Backup on $DATE"
git push origin master
cd ../farm
git add .
git commit -m "Backup on $DATE"
git push origin master
cd ..
