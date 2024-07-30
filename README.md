# theJ website

## Tools
Vite + SASS + PHP

## Install
```
npm install
```
## Build (include Watch)
```
npm run build
```
## Update files
- PHP파일은 root 폴더에서 직접 수정합니다.
- CSS와 JS는 build시 watch 옵션을 주어 src폴더에서 수정하면 assets 폴더로 자동으로 저장됩니다. 
- 이미지 등 기타 리소스는 root에 직접 추가합니다.

## XAMPP Setting

- Local 에서 PHP를 사용하기 위해 [XAMPP](https://www.apachefriends.org/index.html)를 다운로드 받습니다.
- 설치 시, Server > Apache와 Program Language > PHP만 체크하고, 설치 폴더 변경 후 (D:/xampp 추천) 설치합니다.
- 설치가 끝나면 XAMPP를 실행 하고, Apache > Config > httpd.conf 를 클릭하여 파일을 열어주세요.
- 메모장이 열리면 'Listen'으로 검색해서 해당 영역에 아래와 같이 추가한 후 저장합니다.
  ~~~
  Listen 9001
  ~~~
- XAMPP의 'Apache > Config > &lt;Browse&gt; [APache] 를 클릭합니다. 
- 윈도우 탐색기가 열리면, ./conf/extra 폴더로 들어가서 httpd-vhosts.conf 파일을 텍스트 에디터로 열어주세요.
- 하단에 다음 텍스트를 붙여 넣고 저장합니다. 
~~~
<VirtualHost *:9001>
    ServerAdmin phoebe@the-jey.com
    DocumentRoot "C:\Users\user\Desktop\spring\spring-sensee\root"
    ServerName localhost
    ServerAlias localhost
    <Directory C:\Users\user\Desktop\spring\spring-sensee\root>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
    ErrorLog "logs/localhost-error.log"
    CustomLog "logs/localhost-access.log" combined
</VirtualHost>
~~~
- XAMPP에서 'Apache > Start' 를 클릭합니다. 
- 브라우저에서 볼 수 있도록 http://localhost:9001 를 클릭하세요.
