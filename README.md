João Vitor Mouro Barboza

Event Management API

Uma API completa para gerenciamento de eventos, desenvolvida com Laravel seguindo boas práticas de arquitetura e design. Este projeto implementa autenticação JWT, sistema de filas, relacionamentos entre modelos e recursos robustos para manipulação de dados.

Funcionalidades:

Gestão de Eventos

CRUD completo para eventos.
Cada evento possui:

 -Título.
 
 -Descrição.

 -Data e hora de início e término.
 
 -Relacionamento com notificações, assinaturas e templates de mensagens.


 Gestão de Assinaturas

 CRUD completo para gerenciar assinaturas.

 Permite que usuários se inscrevam ou cancelem a inscrição em eventos.

Relacionamento direto com eventos.

Notificações Automatizadas

CRUD completo para notificações.

-Notificações associadas a eventos.

Suporte a notificações baseadas em templates personalizáveis.

Templates de Mensagens

CRUD completo para modelos de mensagens.

Templates dinâmicos para personalizar notificações com variáveis, como:

-Nome do usuário.

-Nome do evento.

-Data e hora.



Sistema de filas utilizando Laravel Queues para processar notificacoes assíncronas.




Relacionamentos entre Modelos

Event: Relaciona-se com notificações, assinaturas e templates de mensagens.

Subscription: Registra as inscrições de usuários em eventos.

Notification: Gerencia notificações para usuários sobre eventos.

MessageTemplate: Modelos reutilizáveis para enviar notificações customizadas.

Autenticação

JWT (JSON Web Token): Controle de acesso seguro para endpoints da API.


