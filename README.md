![Docker Image Size (latest by date)](https://img.shields.io/docker/image-size/moeinfatehi/xss_vulnerability_challenges)
![Docker Pulls](https://img.shields.io/docker/pulls/moeinfatehi/xss_vulnerability_challenges)
# XSS Vulnerability Scenarios (challenges)
This repository is a Dockerized php application containing some XSS vulnerability challenges.<br>
The ideas behind challenges are:</br>
* Javascript validation bypass
* html entities bypass
* WAF bypass
* Black-list validation bypass
* Basic XSS validation bypass
* Double encode bypass of WAF to exploit XSS
* Exploiting XSS by bypassing escape characters


# Quick Start Using Docker
**Using docker hub (Quickest):**
1. To access the challenges, you need <a href="https://docs.docker.com/install">docker</a> installed.</br>
2. Run this command to pull and run the image from docker hub:</br>`sudo docker run -d -p 9003:80 moeinfatehi/xss_vulnerability_challenges`
3. Access the challenges with this URL: <a href="http://localhost:9003">http://localhost:9003</a></br></br>

Help:
```
-d: detached mode (You can use terminal after running command
-p: specifies port (you can change 8008 to whatever you want. If you don't have a web server on your host, set it to 80)
```

**Using docker-compose:**  
1. To access the challenges, you need <a href="https://docs.docker.com/install">docker</a> and <a href="https://docs.docker.com/compose/install/">docker-compose</a> installed.</br>
2. Clone the repository</br>`git clone https://github.com/moeinfatehi/xss_vulnerability_challenges.git`
3. Open the main directory of the project (where docker-compose.yml file exists) and run: `docker-compose up`
4. Access the challenges with this URL: <a href="http://localhost:9003">http://localhost:9003</a>



</br>
<img src="https://i.imgur.com/UTAVmoG.png">

# Disclaimer
This project is for Educational purpose ONLY. The usual disclaimer applies, especially the fact that I'm not liable for any damages caused by direct or indirect use of the information or functionality provided by these programs. The author or any Internet provider bears NO responsibility for content or misuse of these programs or any derivatives thereof. By using these project you accept the fact that any damage (dataloss, system crash, system compromise, etc.) caused by the use of this program is not my responsibility.

# Hack and have fun !
If you have any further questions, please don't hesitate to contact me via my <a href="https://twitter.com/MoeinFatehi">twitter</a> account.
