# Devops challenge júnior

Objetivo é demonstrar inteligência, capacidade e organização para realizar tarefas básicas para o cargo.

### Critérios de avaliação:

✔ Organização <br>
✔ Esforço <br>
✔ Entrega em si dos 2 Challenges <br>
✔ Documentação da entrega <br>

### → Challenge Dev:
> Resolva os 3 erros no plugin<br>
[Plugin DevOps Challenge](devops_challenge.php)

> Erros encontrados:

1. Adicionado tag de abertura do PHP -> Linha 1<br>
![](./imgs/Erro1.png)<br>
![](./imgs/Correcao1.png)

2. Adicionado ponto e vírgula (;) -> Linha 34<br>
![](./imgs/Erro2.png)<br>
![](./imgs/Correcao2.png)<br>

3. Adicionado método "admin_notices" -> Linha 55<br>
![](./imgs/Erro3.png)<br>
![](./imgs/Correcao3.png)<br>


### → Challenge Ops:

<li>Instalação e configuração de uma instância do serviço Amazon Lightsail<br></li>
<li>Configuração do ambiente<br></li> 
<li>Adicionando plugin ao WordPress<br></li>
<li>Arquitetura do sistema<br></li><br> 

<h2>1. Criar a instância<h2>
<br>
<h3>Considere:<h3>
<li>Região em que se encontra, para hospedar sua instância;</li>
<li>Sistema desejado;</li>
<li>Com qual aplicação deseja criar no ambiente;</li>

![](./imgs/Passo1.png)
<br>

2. Escolher um nome único.
No nosso caso, utilizaremos *Apiki-Wordpress*
![](./imgs/Passo2.png)
<br>

3. Conecte-se à sua instância via SSH.
![](./imgs/Passo3.png)
<br>

4. Obter sua senha de acesso.
Com o comando *cat $HOME/bitnami_application_password* você pode vizualizar sua senha de acesso.
![](./imgs/Passo4.png)
<br>

5. Na aba de *Redes*, crie um IP Estático.
![](./imgs/Passo5.png)
<br>

6. Marque a instância criada e defina um nome único.
![](./imgs/Passo6.png)
<br>

7. Já no Wordpress da aplicação, adicione um novo plugin.
![](./imgs/Passo7.png)
<br>

*Obs: Você pode alterar o idioma do seu Wordpress em:*
![](./imgs/Passo7.1.png)
<br>

8. Na aba de pesquisa procure pelo plugin *Code Snippet*.
![](./imgs/Passo8.png)
<br>

9. Em seguida, adicione um novo trecho de código.<br>
![](./imgs/Passo9.png)

10. Adicione um nome ao plugin e o respectivo código.
![](./imgs/Passo10.png)
<br>

11. Plugin ativado e funcionando, com o cabeçalho das páginas podemos vizualizar.
![](./imgs/Passo11.png)
<br>

*Acesso:*
URL: http://3.233.58.246/wp-login.php<br>
Usuário: admin-apiki<br>
Senha: nI4lpo7bKVua<br>
