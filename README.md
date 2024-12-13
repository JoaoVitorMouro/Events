João Vitor Mouro Barboza

Event Management API

Uma API completa para gerenciamento de eventos, desenvolvida com Laravel seguindo boas práticas de arquitetura e design. Este projeto implementa autenticação JWT, sistema de filas, relacionamentos entre modelos e recursos robustos para manipulação de dados.

Funcionalidades
CRUD Completo
Eventos: Gerencie eventos com detalhes como título, descrição, horário de início e fim.
Assinaturas: Permite que usuários se inscrevam em eventos.
Relacionamentos entre Modelos
Event: Relaciona-se com notificações, assinaturas e templates de mensagens.
Subscription: Registra as inscrições de usuários em eventos.
Notification: Gerencia notificações para usuários sobre eventos.
MessageTemplate: Modelos reutilizáveis para enviar notificações customizadas.
Autenticação
JWT (JSON Web Token): Controle de acesso seguro para endpoints da API.
Sistema de Filas
Job para enviar notificações por e-mail de forma assíncrona, melhorando o desempenho e escalabilidade.
