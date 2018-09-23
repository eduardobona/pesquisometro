# Pesquisômetro

## Inspirado no [Impostômetro](https://impostometro.com.br) a meta aqui é tabular os dados de pesquisas majoritárias e comparar com a realidade após as eleições.

Roadmap de implementação:

- [x] Criação do Repositório
- [ ] Estruturação de diretórios para armazenar pesquisas por tipo e estado
- [ ] Estruturação de JSON para metadata de pesquisa bem como as intenções de votos levantadas
- [ ] Estruturação de JSON com os resultados em si da eleição
- [ ] Frontend para mostrar resultados baseado nos dados
- [ ] Frontend de apresentação do app
- [ ] Colocar em produção
- [ ] Popular dados atualizados e deixar ambiente preparado para eleições 2018 para Presidente
- [ ] Popular dados atualizados e deixar ambiente preparado para eleições 2018 para governador
- [ ] Popular dados atualizados e deixar ambiente preparado para eleições 2018 para senador

Como enviar/atualizar as pesquisas:

- Faça o fork do projeto
- Localize a pasta desejada e crie/atualize os dados da pesquisa mais recente de acordo com o nome do instituto de pesquisa
- Para o nome do arquivo use o nome do instituto de pesquisa abreviado. (leia mais sobre os nomes abreviados)
- Para presidente, use a unidade federativa (UF) BR
- Para eleições majoritárias, as pastas ainda estõa divididas para governador e senador
- Os dados esperados para cada pesquisa serão sempre os últimos (mais atualizados) antes do primeiro e do segundo turno

Como enviar/atualizar os resultados da eleição:

- Faça o processo anterior mas ao criar o arquivo, localize a pasta e crie um arquivo com o nome resultado.json
