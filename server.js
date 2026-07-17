const express = require('express');
const path = require('path');
const app = express();

// Middleware
app.use(express.static(path.join(__dirname, 'mega_pizza/public')));
app.use(express.urlencoded({ extended: true }));

// Traduções (mantidas do PHP original)
const traducoes = {
  pt: {
    nav_home: 'Home',
    nav_menu: 'Especialidades',
    nav_reservas: 'Reservas',
    nav_contactos: 'Contactos',
    hero_title: 'Arte em forma de <span class="text-accent">Pizza</span>',
    hero_subtitle: 'Sabores autênticos, ingredientes selecionados a dedo e a paixão de sempre. Redescubra o verdadeiro sabor da Itália.',
    hero_btn: 'Explorar Menu',
    menus_title: 'Os Nossos <span class="text-gold">Menus & Sanduíches</span>',
    menus_desc: 'Explore as nossas opções de refeição e as deliciosas sanduíches preparadas com a mesma massa fresca das nossas pizzas.',
    pizzas_title: 'As Nossas <span class="text-gold">Pizzas</span>',
    btn_pedir: 'Pedir Agora',
    pizza1_title: 'Margherita Clássica',
    pizza1_desc: 'Molho San Marzano, Mozzarella di Bufala DOP, manjericão fresco e azeite extra virgem.',
    pizza2_title: 'Pepperoni Suprema',
    pizza2_desc: 'Dupla dose de pepperoni artesanal, queijo mozzarella derretido e orégãos selvagens.',
    pizza3_title: 'Jardim de Outono',
    pizza3_desc: 'Pimentos assados, cebola roxa caramelizada, cogumelos frescos, azeitonas e milho doce.',
    pizza4_title: 'Quattro Formaggi',
    pizza4_desc: 'Mozzarella fior di latte, gorgonzola piccante, parmesão reggiano e provolone envelhecido.',
    pizza6_title: 'Rústica da Casa',
    pizza6_desc: 'Bacon fumado, chouriço ibérico, ovo escalfado, cebola roxa e azeitonas pretas.',
    pizza7_title: 'Oceano Profundo',
    pizza7_desc: 'Camarão tigre, delícias do mar, atum fresco e um toque subtil de molho de alho assado.',
    tradicao_tag: 'A Nossa Tradição',
    tradicao_title: 'A Verdadeira<br>Experiência Italiana',
    tradicao_p1: 'Na Mega Pizza, acreditamos que o segredo de uma obra de arte está na sua tela. A nossa massa é preparada diariamente com farinha importada de Nápoles e deixada a fermentar lentamente durante 48 horas.',
    tradicao_p2: 'O resultado? Uma textura incrivelmente leve, crocante por fora e macia por dentro, finalizada no nosso forno a lenha tradicional para aquele toque fumado inconfundível.',
    tradicao_btn: 'Faça a sua Reserva',
    cont_tag: 'Estamos à sua espera',
    cont_title: 'Fale Connosco',
    cont_subtitle: 'Quer fazer uma reserva para um grupo grande ou tem alguma dúvida? Envie-nos uma mensagem ou venha visitar o nosso espaço.',
    cont_form_title: 'Envie uma Mensagem',
    cont_form_name: 'O Seu Nome',
    cont_form_name_ph: 'Ex: João Silva',
    cont_form_email: 'Email de Contacto',
    cont_form_email_ph: 'Ex: joao@email.com',
    cont_form_msg: 'A Sua Mensagem',
    cont_form_msg_ph: 'Como podemos ajudar?',
    cont_form_btn: 'Enviar Mensagem',
    cont_visit: 'Visite-nos',
    cont_hours: 'Horário',
    cont_hours_desc: 'Terça a Sábado: 08:00 – 23:00<br>Domingo: 11:00 – 23:00',
    cont_space: 'O Nosso Espaço',
    footer_desc: 'A excelência da verdadeira pizza servida num ambiente acolhedor. Ingredientes frescos, massa de fermentação lenta e muito amor em cada fatia.',
    footer_nav: 'Navegação',
    footer_cont: 'Contacte-nos',
    footer_rights: 'Mega Pizza. Todos os direitos reservados.'
  },
  en: {
    nav_home: 'Home',
    nav_menu: 'Specialties',
    nav_reservas: 'Reservations',
    nav_contactos: 'Contacts',
    hero_title: 'Art in the form of <span class="text-accent">Pizza</span>',
    hero_subtitle: 'Authentic flavors, hand-picked ingredients and our usual passion. Rediscover the true taste of Italy.',
    hero_btn: 'Explore Menu',
    menus_title: 'Our <span class="text-gold">Menus & Sandwiches</span>',
    menus_desc: 'Explore our meal options and delicious sandwiches prepared with the same fresh dough as our pizzas.',
    pizzas_title: 'Our <span class="text-gold">Pizzas</span>',
    btn_pedir: 'Order Now',
    pizza1_title: 'Classic Margherita',
    pizza1_desc: 'San Marzano tomato sauce, DOP Buffalo Mozzarella, fresh basil and extra virgin olive oil.',
    pizza2_title: 'Supreme Pepperoni',
    pizza2_desc: 'Double dose of artisanal pepperoni, melted mozzarella cheese and wild oregano.',
    pizza3_title: 'Autumn Garden',
    pizza3_desc: 'Roasted peppers, caramelized red onions, fresh mushrooms, olives and sweet corn.',
    pizza4_title: 'Quattro Formaggi',
    pizza4_desc: 'Fior di latte mozzarella, spicy gorgonzola, reggiano parmesan and aged provolone.',
    pizza6_title: 'House Rustic',
    pizza6_desc: 'Smoked bacon, iberian chorizo, poached egg, red onion and black olives.',
    pizza7_title: 'Deep Ocean',
    pizza7_desc: 'Tiger shrimp, crab sticks, fresh tuna and a subtle touch of roasted garlic sauce.',
    tradicao_tag: 'Our Tradition',
    tradicao_title: 'The True<br>Italian Experience',
    tradicao_p1: 'At Mega Pizza, we believe the secret to a masterpiece lies in its canvas. Our dough is prepared daily with flour imported from Naples and left to rise for 48 hours.',
    tradicao_p2: 'The result? An incredibly light texture, crispy on the outside and soft on the inside, finished in our traditional wood-fired oven for that unmistakable smoky touch.',
    tradicao_btn: 'Make a Reservation',
    cont_tag: 'We are waiting for you',
    cont_title: 'Talk to Us',
    cont_subtitle: 'Want to make a reservation for a large group or have any questions? Send us a message or come visit our space.',
    cont_form_title: 'Send a Message',
    cont_form_name: 'Your Name',
    cont_form_name_ph: 'Ex: John Smith',
    cont_form_email: 'Contact Email',
    cont_form_email_ph: 'Ex: john@email.com',
    cont_form_msg: 'Your Message',
    cont_form_msg_ph: 'How can we help?',
    cont_form_btn: 'Send Message',
    cont_visit: 'Visit Us',
    cont_hours: 'Opening Hours',
    cont_hours_desc: 'Tuesday to Saturday: 08:00 – 23:00<br>Sunday: 11:00 – 23:00',
    cont_space: 'Our Space',
    footer_desc: 'The excellence of true pizza served in a welcoming environment. Fresh ingredients, slow fermentation dough and a lot of love in every slice.',
    footer_nav: 'Navigation',
    footer_cont: 'Contact Us',
    footer_rights: 'Mega Pizza. All rights reserved.'
  }
};

function traduzir(lang, chave) {
  return traducoes[lang] && traducoes[lang][chave] ? traducoes[lang][chave] : chave;
}

// Helper para renderizar template
function renderTemplate(filePath, locals) {
  let html = require('fs').readFileSync(filePath, 'utf8');
  Object.keys(locals).forEach(key => {
    html = html.replace(new RegExp(`{{\\s*${key}\\s*}}`, 'g'), locals[key]);
  });
  return html;
}

// Rota HOME
app.get(['/', '/index.html', '/index.php'], (req, res) => {
  const lang = req.query.lang || 'pt';
  const baseURL = '/';
  
  try {
    let headerHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/components/header.php'), 'utf8');
    let homeHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/views/home.php'), 'utf8');
    let footerHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/components/footer.php'), 'utf8');

    // Converter PHP para HTML substituindo variáveis
    const html = headerHtml + homeHtml + footerHtml;
    
    let rendered = html
      .replace(/\<\?=\s*BASE_URL\s*\?\>/g, baseURL)
      .replace(/\<\?=\s*\$lang\s*\?\>/g, lang)
      .replace(/\<\?=\s*traduzir\('([^']+)'\)\s*\?\>/g, (match, key) => traduzir(lang, key))
      .replace(/\<\?php[\s\S]*?\?\>/g, '') // Remove PHP tags
      .replace(/\<\?=[\s\S]*?\?\>/g, (match) => {
        const content = match.replace(/\<\?=\s*|\s*\?\>/g, '');
        return traduzir(lang, content);
      });

    res.send(rendered);
  } catch (err) {
    console.error(err);
    res.status(500).send('Erro ao carregar página');
  }
});

// Rota CONTACTOS
app.get(['/contactos.php', '/contactos'], (req, res) => {
  const lang = req.query.lang || 'pt';
  const baseURL = '/';
  
  try {
    let headerHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/components/header.php'), 'utf8');
    let contactHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/views/contactos.php'), 'utf8');
    let footerHtml = require('fs').readFileSync(path.join(__dirname, 'mega_pizza/components/footer.php'), 'utf8');

    const html = headerHtml + contactHtml + footerHtml;
    
    let rendered = html
      .replace(/\<\?=\s*BASE_URL\s*\?\>/g, baseURL)
      .replace(/\<\?=\s*\$lang\s*\?\>/g, lang)
      .replace(/\<\?=\s*traduzir\('([^']+)'\)\s*\?\>/g, (match, key) => traduzir(lang, key))
      .replace(/\<\?php[\s\S]*?\?\>/g, '')
      .replace(/\<\?=[\s\S]*?\?\>/g, (match) => {
        const content = match.replace(/\<\?=\s*|\s*\?\>/g, '');
        return traduzir(lang, content);
      });

    res.send(rendered);
  } catch (err) {
    console.error(err);
    res.status(500).send('Erro ao carregar página');
  }
});

// Rota para formulário de contacto
app.post('/api/contacto', (req, res) => {
  const { nome, email, mensagem } = req.body;
  // Aqui você pode adicionar lógica para enviar email ou salvar em BD
  console.log('Mensagem recebida:', { nome, email, mensagem });
  res.json({ sucesso: true, mensagem: 'Obrigado! A sua mensagem foi recebida.' });
});

// Servir CSS, JS e imagens
app.use('/public', express.static(path.join(__dirname, 'mega_pizza/public')));

// 404
app.use((req, res) => {
  res.status(404).send('<h1>404 - Página não encontrada</h1>');
});

// Iniciar servidor
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`🍕 Mega Pizza rodando em http://localhost:${PORT}`);
});
