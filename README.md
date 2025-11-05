# aula_php_docker

Pequena aplicação PHP com MySQL em Docker.

Como rodar (local):

1. Abra o Docker Desktop e aguarde o daemon ficar ativo.
2. Na pasta do projeto:

```powershell
cd 'C:\Users\ALUNO\Desktop\aula-5'
docker-compose up --build -d
```

3. Acesse: http://localhost:8080

Observações:
- O script `src/init.sql` é executado na primeira inicialização do volume do banco.
- Se precisar subir o MySQL para a máquina host, ajuste `docker-compose.yml`.