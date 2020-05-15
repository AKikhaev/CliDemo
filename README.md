# CliDemo
Demo project. Recomend to start your travell from that

### Get starting 
Follow that steps to fastest start...
* is your terminal bash? if it is not - please switch

run: 
* composer install
* source vendor/akikhaev/Cli/register.sh
* put content of vendor/akikhaev/Cli/register.sh to /etc/bash_completion.d/acli or to ~/.bash_aliases

demo:
* acli
* acli i[tab]
* acli [tab][tab]
* acli info
* acli info [tab]
* acli info folderSize
* acli info folderSize vendor
* acli demo longProcess
* acli demo longProcess abc
run parallel: (open 3 terminals to do that) 
* acli demo longProcess 1000
* acli demo longProcess 1000
* acli demo longProcess 1000

###### example:
![header image](https://raw.githubusercontent.com/AKikhaev/CliDemo/master/demo.jpg)
###### todo:
* zsh complete support

