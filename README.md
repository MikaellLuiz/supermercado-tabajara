# Sistema de Registro de Clientes - Projeto de Aprendizado em PHP

Este é um projeto simples desenvolvido para iniciantes que desejam aprender PHP e criar um sistema de registro de clientes para um supermercado. O sistema permitirá que os clientes se cadastrem, façam login e visualizem outros clientes cadastrados.

## Funcionalidades

### Página de Login

Na página de login, o cliente deve informar seu nome de usuário e senha para acessar o sistema. As informações serão verificadas da seguinte forma:

- Se as informações estiverem corretas, o cliente será levado à página de gerenciamento de usuários.
- Caso contrário, uma mensagem de erro será exibida, indicando que o login não foi bem-sucedido.

### Página de Cadastro de Usuário

Na página de cadastro de usuário, o cliente deve preencher um formulário com os seguintes campos:

- Nome de usuário
- Endereço de e-mail
- Senha

O sistema realizará as seguintes verificações:

- Verificar se o endereço de e-mail é válido.
- Verificar se a senha tem pelo menos 8 caracteres.

Depois de preencher corretamente o formulário:

- O cliente será cadastrado no sistema.
- Será redirecionado para a página de login.

Se houver algum erro durante o processo de cadastro, uma mensagem de erro será exibida.

### Página de Gerenciamento de Usuários

Na página de gerenciamento de usuários, o cliente poderá:

- Visualizar todos os usuários cadastrados no sistema.
- Excluir usuários individuais, caso deseje remover seus dados do sistema.

Para implementar essas funcionalidades, utilizaremos:

- Estruturas condicionais e laços para verificar se os dados de entrada estão corretos.
- Solicitações POST e GET para transmitir informações entre as páginas.
