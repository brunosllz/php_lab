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
wsl -l -v                             //Listar as distribuições instaladas e sua versão
wsl --setdefault <DistributionName>   //Definir uma Distro padrão
wsl --shutdown                        //Finalizar todas as Distros que estão rodando
wsl --terminate, -t <Distro>          //Finalizar uma Distros específica
wsl --unregister <DistributionName>   //Desinstalar uma Distro
```



#### Mudar permissâo Linux 
- sudo chmod 777 -R .
