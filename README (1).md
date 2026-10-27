# Sistema de Login em PHP

## 📌 Descrição

Este projeto consiste em um sistema simples de **login desenvolvido em PHP**, com conexão a banco de dados MySQL.

O sistema permite que o usuário informe seu nome de usuário e senha para realizar o acesso. Além disso, o usuário pode **escolher a cor de fundo da página de login**.

Após o login realizado com sucesso, o usuário é direcionado para uma página de perfil, onde a cor escolhida anteriormente é mantida.

---

## 🚀 Funcionalidades

- Login utilizando usuário e senha.
- Verificação do usuário no banco de dados.
- Mensagem de erro caso o usuário ou senha estejam incorretos.
- Escolha da cor de fundo da página de login.
- Alteração da cor do fundo de forma imediata.
- Armazenamento da cor escolhida utilizando `$_SESSION`.
- Página de perfil protegida por sessão.
- Sistema de logout.
- Redirecionamento para o login quando o usuário não está autenticado.

---

## 🎨 Cores disponíveis

| Cor | Código |
|---|---|
| Branco | `#FFFFFF` |
| Verde | `#008000` |
| Amarelo | `#FFFF00` |
| Azul | `#87CEEB` |

---

## 📂 Estrutura do projeto

```text
projeto/
│
├── 15d_login.php
├── 15d_perfil.php
├── 15d_logout.php
└── README.md
```

### `15d_login.php`

É a página principal do sistema.

Nela o usuário pode:

- Informar o usuário;
- Informar a senha;
- Escolher uma cor de fundo;
- Realizar o login.

A cor escolhida é salva na sessão quando o login é realizado.

### `15d_perfil.php`

É a página protegida do sistema.

Para acessar essa página, o usuário precisa estar logado.

A página mostra o nome do usuário e utiliza a cor escolhida durante o login como cor de fundo.

### `15d_logout.php`

Responsável por encerrar a sessão do usuário.

Depois do logout, o usuário pode retornar para a página inicial de login.

---

## 🛠️ Tecnologias utilizadas

- **PHP** — desenvolvimento da lógica do sistema.
- **HTML** — estrutura das páginas.
- **JavaScript** — alteração da cor de fundo ao selecionar uma opção.
- **MySQL** — armazenamento e consulta dos usuários.
- **CSS** — utilizado para estilização, quando necessário.
- **Sessões PHP (`$_SESSION`)** — controle do usuário autenticado e armazenamento da cor escolhida.

---

## 🔐 Funcionamento do login

O sistema recebe o usuário e a senha preenchidos no formulário e realiza uma consulta no banco de dados.

Caso os dados estejam corretos:

```php
$_SESSION['usuario'] = $usuario;
$_SESSION['cor'] = $cor;
```

Essas informações são armazenadas na sessão.

Depois disso, o usuário é direcionado para:

```text
15d_perfil.php
```

---

## 🎨 Funcionamento da escolha de cor

A cor é escolhida através de um campo `<select>`:

```html
<select name="cor" id="cor" onchange="mudarCor()">
    <option value="#FFFFFF">Branco</option>
    <option value="#008000">Verde</option>
    <option value="#FFFF00">Amarelo</option>
    <option value="#87CEEB">Azul</option>
</select>
```

O JavaScript altera o fundo da página imediatamente após a escolha:

```javascript
function mudarCor() {
    let cor = document.getElementById("cor").value;
    document.body.style.backgroundColor = cor;
}
```

Depois que o login é realizado, a cor também é armazenada na sessão para ser utilizada na página de perfil.

---

## 🗄️ Banco de dados

O sistema utiliza um banco de dados MySQL chamado:

```text
exercicio
```

A conexão utilizada no projeto é feita através do `mysqli`.

A tabela utilizada para consultar os usuários é:

```text
usuarios
```

O sistema verifica se existe um usuário com o nome e a senha informados.

---

## ▶️ Como executar o projeto

1. Instale e execute um servidor local com suporte a PHP e MySQL, como o XAMPP.
2. Coloque os arquivos do projeto na pasta do servidor.
3. Inicie o Apache e o MySQL.
4. Crie o banco de dados `exercicio`.
5. Configure a tabela `usuarios`.
6. Verifique as informações de conexão com o banco no arquivo `15d_login.php`.
7. Abra o projeto pelo navegador através do servidor local.

Exemplo:

```text
http://localhost/seu-projeto/15d_login.php
```

---

## 📚 Objetivo do trabalho

O objetivo do projeto é aplicar conceitos básicos de desenvolvimento web utilizando PHP, incluindo:

- Formulários HTML;
- Requisições `POST`;
- Conexão com banco de dados;
- Consultas SQL;
- Sessões;
- Autenticação de usuários;
- Redirecionamento de páginas;
- JavaScript;
- Manipulação de estilos da página.

---

## 👨‍💻 Projeto acadêmico

Projeto desenvolvido para fins educacionais, com o objetivo de praticar conceitos de **PHP, MySQL, HTML, CSS e JavaScript**.
