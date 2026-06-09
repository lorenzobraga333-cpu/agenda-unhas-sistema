# 💅 Agenda de Unhas — Vitória da Rosa

![PHP](https://img.shields.io/badge/PHP-8.2.12-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.2.12-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Composer](https://img.shields.io/badge/Composer-2.10.1-885630?style=for-the-badge&logo=composer&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Sistema completo de agendamento online para nail designer, desenvolvido com PHP puro, MySQL e JavaScript.

![Preview do site](https://raw.githubusercontent.com/lorenzobraga333-cpu/agenda-unhas-sistema/main/preview.png)

---

## 🌐 Acesso

- **Site:** [vitoria-nail-designer-agenda.site.je](https://vitoria-nail-designer-agenda.site.je)
- **Painel Admin:** `/app/admin/login.php`

---

## 📋 Funcionalidades

### 🌸 Site público
- Apresentação dos serviços e preços
- Galeria de modelos de unhas
- Formulário de agendamento com validação completa
- Bloqueio automático de horários já ocupados
- Proteção CSRF no formulário
- Responsivo para mobile, tablet e desktop

### 🖥️ Painel Administrativo
- Login seguro com senha criptografada (bcrypt)
- Listagem de todos os agendamentos
- Confirmação e cancelamento de agendamentos
- Métricas: total, confirmados, pendentes e faturamento
- Botão de contato direto via WhatsApp para cada cliente

---

## 🛠️ Tecnologias

| Tecnologia | Uso |
|------------|-----|
| PHP 8.2 | Backend e lógica do servidor |
| MySQL | Banco de dados |
| HTML5 + CSS3 | Estrutura e estilo |
| JavaScript | Interatividade e validações |
| Flatpickr | Calendário customizado |
| Font Awesome | Ícones |
| Composer | Gerenciador de pacotes |
| vlucas/phpdotenv | Variáveis de ambiente |
| Git + GitHub | Versionamento |
| InfinityFree | Hospedagem |

---

## 📁 Estrutura do projeto

```
agenda_unhas/
├── app/
│   ├── admin/
│   │   ├── login.php
│   │   ├── logout.php
│   │   ├── painel.php
│   │   ├── painel-layout.php
│   │   ├── painel.css
│   │   └── alterar-status.php
│   ├── agendamento/
│   │   ├── agendamento.js
│   │   └── salvar.php
│   └── config/
│       └── conexao.php
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── font/
│   │   └── img/
│   └── index.php
├── vendor/
├── .env          ← não versionado
├── .gitignore
├── composer.json
└── composer.lock
```

---

## ⚙️ Como rodar localmente

### Pré-requisitos
- XAMPP (PHP 8.2 + MySQL)
- Composer

### Passo a passo

**1. Clone o repositório dentro do `htdocs` do XAMPP:**
```bash
git clone https://github.com/lorenzobraga333-cpu/agenda-unhas-sistema
```

**2. Instale as dependências:**
```bash
composer install
```

**3. Crie o arquivo `.env` na raiz:**
```env
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=agenda_unhas
```

**4. Crie o banco de dados pelo phpMyAdmin e importe a estrutura das tabelas**

**5. Acesse:**
```
http://localhost/agenda_unhas/public/
```

---

## 🔒 Segurança

| Proteção | Implementação |
|----------|---------------|
| SQL Injection | Prepared Statements com `bind_param` |
| XSS | `htmlspecialchars` nos dados exibidos |
| CSRF | Token de sessão validado no servidor |
| Senhas | `password_hash` bcrypt + `password_verify` |
| Credenciais | Variáveis de ambiente via `.env` |
| Dados sensíveis | Fora do repositório via `.gitignore` |

---

## 🤖 Ferramentas de IA utilizadas

- **Claude (Anthropic)** — orientação técnica, resolução de bugs, boas práticas de segurança e arquitetura do projeto
- **ChatGPT (OpenAI)** — apoio inicial na estruturação do projeto

---

## 👨‍💻 Desenvolvido por

Projeto desenvolvido por **Lorenzo Castagnetti**.
