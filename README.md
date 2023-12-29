

## Api Sorteio para clientes

Essa Api permite cadastrar, listar excluir e atualizar clientes

Através de uma seed o banco é populado com alguns sorteios, e o sistema possui um comando que verifica a cada minuto se existe um sorteios para acontecer
Caso exista um sorteio, ele escolhe um usuário aleatoriamente e envia um email com as informações do prêmio

## EndPoints

| Tipo | Endpoint |
| ------ | ------ |
| post | /clients 
| get | /clients
| put | /clients/{id}
| delete | /clients/{id}

