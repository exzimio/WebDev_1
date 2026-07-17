# 🍕 Mega Pizza - Website Premium

Website premium da Mega Pizza configurado para funcionar no **Glitch**.

## 🚀 Setup Rápido

### Opção 1: Glitch (Recomendado - Gratuito)

1. Vai a https://glitch.com
2. Clica em **"New Project"** → **"Import from GitHub"**
3. Cola: `exzimio/WebDev_1`
4. Glitch faz o deploy automático
5. O site estará em: `https://seu-projeto.glitch.me`

### Opção 2: Local (Node.js)

```bash
# Instalar dependências
npm install

# Iniciar servidor
npm start

# Aceder em http://localhost:3000
```

## 📋 Estrutura

```
mega_pizza/
├── public/
│   ├── css/
│   │   └── megapizza.css
│   ├── img/
│   │   ├── logo.png
│   │   ├── banner_1.png
│   │   ├── pizza_1.jpg
│   │   └── ...
│   └── js/
├── components/
│   ├── header.php
│   └── footer.php
├── views/
│   ├── home.php
│   └── contactos.php
├── config/
│   └── config.php
└── index.php
```

## 🌐 Rotas

- `/` - Home
- `/index.php` - Home (compatibilidade)
- `/contactos.php` - Página de contactos
- `?lang=pt` - Português (padrão)
- `?lang=en` - Inglês

## ✨ Características

- ✅ Multi-linguagem (PT/EN)
- ✅ Design Premium Dark Theme
- ✅ Totalmente Responsivo
- ✅ Otimizado para Glitch
- ✅ Bootstrap 5.3.2 + Bootstrap Icons
- ✅ Google Fonts (Montserrat + Inter)
- ✅ Suporte a Google Maps

## 📱 Páginas

### Home
- Hero Banner 100vh
- Seção de Menus & Sanduíches
- Carrossel de Pizzas
- Seção Tradição com imagem
- Newsletter

### Contactos
- Formulário de contacto
- Informações (Morada, Telefone, Email)
- Google Maps integrado
- Horário de funcionamento
- Galeria do espaço

## 🎨 Cores

- **Vermelho Premium**: #E53935
- **Dourado**: #F5B041
- **Fundo Escuro**: #0a0a0a
- **Superficie**: #171717

## 🔧 Customização

### Trocar Idioma
No header, muda `?lang=pt` para `?lang=en`

### Adicionar Pizzas
Edita `mega_pizza/views/home.php` e `server.js` (secção de traduções)

### Mudar Cores
Edita `mega_pizza/public/css/megapizza.css` (variáveis CSS)

### Actualizar Contacto
Em `mega_pizza/components/footer.php` e `mega_pizza/views/contactos.php`

## 📞 Contacto

**Mega Pizza**
- 📍 Av. Gonçalo Rodrigues Caldeira, 17 - 6100-732 Sertã
- 📞 274 603 714
- 📧 reservas@megapizza.pt
- 📱 Instagram: @m.pizzaserta
- 👍 Facebook: mpizzaserta

## 📄 Licença

MIT - Livre para usar e modificar

---

**Desenvolvido com ❤️ para Mega Pizza**
