<h1 align="center"> PHP_Lab </h1>
<br/>

## 🐧 Instalar WSL2

Para fazer a instalação do WLS é bem simples, basta rodar este comandando como administrador no PowerShell ou Prompt de Comando do Windows.
```js
wsl --install
```
A seguir podemos listar as Distros do Linux disponíveis para fazer a instalação.
```js
wsl --list --online
wsl --install -d <DistroName>
```
<p>Troque o <strong>DistroName</strong> pelo nome da distrubuição que deseja instalar</p> 

Segue alguns comandos que podemos executar no wsl
```js
wsl -l -v                                             //Listar as distribuições instaladas e sua versão
wsl --setdefault <DistroName>                         //Definir uma Distro padrão
wsl --shutdown                                        //Finalizar todas as Distros que estão rodando
wsl --terminate, -t <DistroName>                      //Finalizar uma Distros específica
wsl --unregister <DistroName>                         //Desinstalar uma Distro
wsl --distribution <DistroName> --user <User Name>    //Iniciar Distro pelo Prompt de Comando do Windows
```

## 🌐 Configuração de ambiente
Neste laboratório iremos utilizar a Distro Linux Ubuntu, Apache e PHP 8.1 inicialmente, antes de prosseguir com a instalação certifique que esteja com o usuário root configurado no seu linux, para realizar a configuração tode o seguinte comando para atribuir uma senha ao root.
```js
sudo passwd root
```
Logo após rode este comando para subir o usuário root.
```js
sudo -
```

#### Apache2
Para fazer a instalação do Apache2 rode este comando.
```js
apt install apache2
```
Após a instalação para subir o serviço do Apache rode este comando.
```js
sudo service apache2 start
```
Certifique que o apache está rodando no seu linux com este comando.
```js
sudo service apache2 status
```

<br/>

#### PHP 8.1
Para fazer a instalação do PHP primeiro precisamos adicionar o repositório no linux.
```js
sudo add-apt-repository ppa:ondrej/php
```

Após adicionar o repositório rode este para fazer a instalação do pacote do PHP e do modulo do Apache.
```js
apt install php8.1 libapache2-mod-php8.1
```

Ao finalizar a instalação, reinicie o serviço do Apache.
```js
sudo service apache2 restart
```

Por último iremos realizar a instalação de alguns pacotes extras do PHP.
```js
apt install php8.1-cli php8.1-curl php8.1-mysqlnd php8.1-gd php8.1-opcache php8.1-zip php8.1-intl php8.1-common php8.1-bcmath php8.1-imap php8.1-imagick php8.1-xmlrpc php8.1-readline php8.1-memcached php8.1-redis php8.1-mbstring php8.1-apcu php8.1-xml php8.1-dom php8.1-redis php8.1-memcached php8.1-memcache php8.1-xdebug php8.1-pcov
```

#### VSCode


#### Mudar permissâo Linux 
- sudo chmod 777 -R .
