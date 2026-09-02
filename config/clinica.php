<?php
/**
 * Configuração do site — Clínica Odontológica Modelo
 * Edite AQUI todos os dados e textos. O HTML (index.php) não precisa mudar.
 */
return [
  // ====== Identidade ======
  'name'    => 'Clínica Odontológica Modelo',
  'clinic'  => 'Clínica Odontológica Modelo',
  'short'   => 'Odonto Modelo',
  'tagline' => 'Odontologia · Centro',
  'logo'    => 'img/logo.svg',

  // ====== Contato ======
  'phone'           => '(00) 00000-0000',
  'phone_raw'       => '+5500000000000',
  'whatsapp_numero' => '5500000000000',
  'whatsapp_msg'    => 'Olá! Vim pelo site da Clínica Odontológica Modelo e gostaria de agendar uma avaliação.',

  // ====== Endereço ======
  'address'    => 'Rua Exemplo, 000 · 1º Andar',
  'district'   => 'Centro',
  'city'       => 'Cidade Exemplo',
  'state'   => 'UF',
  'maps_query' => 'Rua Exemplo, 000, Centro, Cidade Exemplo · UF',
  'geo_lat'    => 0,
  'geo_lng'    => 0,

  // ====== Avaliações ======
  'rating'     => '5,0',
  'rating_num' => 5.0,
  'reviews'    => 9,

  // ====== Horário ======
  'horario_semana' => 'Seg a Sex · 08h às 18h',
  'horario_sabado' => 'Sábado · sob agendamento',

  // ====== Redes sociais ======
  'instagram' => '',

  // ====== SEO ======
  'seo_title' => 'Clínica Odontológica Modelo — Dentista em Centro, Cidade Exemplo | Implantes e Periodontia',
  'seo_desc'  => 'Clínica Clínica Odontológica Modelo em Centro, Cidade Exemplo. Referência em Implantodontia e Periodontia, com Ortodontia, próteses, reabilitação oral e cirurgias. Nota 5,0 no Google. Agende sua avaliação pelo WhatsApp.',

  // ====== Hero ======
  'hero_titulo_1'  => 'Um novo padrão de cuidado',
  'hero_titulo_2'  => 'para o seu sorriso.',
  'hero_subtitulo' => 'Tratamentos modernos, profissionais qualificados e uma experiência pensada para proporcionar conforto e confiança em cada etapa.',

  // ====== Diferenciais ======
  'diferenciais' => [
    ['icon' => 'anchor',          'title' => 'Especialistas em Implantes', 'desc' => 'Reabilitação com implantes planejada digitalmente, do diagnóstico à finalização, com segurança e resultado natural.'],
    ['icon' => 'clipboard-check', 'title' => 'Planejamento individual',    'desc' => 'Cada caso é estudado em detalhe. Você recebe um plano claro, com prioridades e etapas bem definidas.'],
    ['icon' => 'microscope',      'title' => 'Tecnologia atualizada',      'desc' => 'Equipamentos modernos para diagnósticos precisos, procedimentos seguros e resultados previsíveis.'],
    ['icon' => 'sofa',            'title' => 'Ambiente moderno',           'desc' => 'Um espaço acolhedor e contemporâneo, pensado para o seu conforto do início ao fim do tratamento.'],
    ['icon' => 'users',           'title' => 'Equipe qualificada',         'desc' => 'Profissionais especializados e em constante atualização, dedicados a cada detalhe do seu cuidado.'],
    ['icon' => 'heart-handshake', 'title' => 'Atendimento humanizado',     'desc' => 'Escuta atenta e acolhimento em todas as etapas — do primeiro contato ao acompanhamento final.'],
  ],

  // ====== Especialidades (navegação por categorias) ======
  // A primeira e a segunda são os principais diferenciais (implantodontia e periodontia)
  'especialidades' => [
    [
      'key' => 'implantes', 'icon' => 'anchor', 'featured' => true,
      'title' => 'Implantes Dentários',
      'img' => 'img/esp-implantes.svg',
      'desc' => 'Nossa principal especialidade. Repomos dentes perdidos com implantes de titânio biocompatível, planejados digitalmente para devolver mastigação, fala e estética com firmeza e naturalidade.',
      'benef' => ['Planejamento digital do implante', 'Resultado firme e natural', 'Reabilitação de um ou vários dentes', 'Solução definitiva e duradoura'],
    ],
    [
      'key' => 'periodontia', 'icon' => 'activity', 'featured' => true,
      'title' => 'Periodontia',
      'img' => 'img/esp-periodontia.svg',
      'desc' => 'Referência da clínica no cuidado da gengiva e das estruturas de suporte dos dentes. Tratamos gengivite e periodontite e preparamos uma base saudável para todo o seu sorriso.',
      'benef' => ['Tratamento de gengivite e periodontite', 'Raspagem e controle de placa', 'Saúde gengival de longo prazo', 'Base sólida para implantes e próteses'],
    ],
    [
      'key' => 'ortodontia', 'icon' => 'align', 'featured' => false,
      'title' => 'Ortodontia',
      'img' => 'img/esp-ortodontia.svg',
      'desc' => 'Aparelhos convencionais e estéticos para alinhar os dentes e equilibrar a mordida, com acompanhamento próximo e previsível em cada fase do tratamento.',
      'benef' => ['Alinhamento dos dentes', 'Correção da mordida', 'Opções estéticas', 'Acompanhamento contínuo'],
    ],
    [
      'key' => 'proteses', 'icon' => 'layers', 'featured' => false,
      'title' => 'Próteses & Dentaduras',
      'img' => 'img/esp-proteses.svg',
      'desc' => 'Próteses fixas, removíveis e dentaduras planejadas sob medida para devolver função e naturalidade, com conforto e acabamento cuidadoso.',
      'benef' => ['Próteses fixas e removíveis', 'Dentaduras confortáveis', 'Estética natural', 'Ajuste sob medida'],
    ],
    [
      'key' => 'cirurgias', 'icon' => 'stethoscope', 'featured' => false,
      'title' => 'Cirurgias Odontológicas',
      'img' => 'img/esp-cirurgias.svg',
      'desc' => 'Procedimentos cirúrgicos conduzidos com técnica, segurança e biossegurança rigorosa, incluindo extrações e preparo para reabilitações.',
      'benef' => ['Extrações e cirurgias', 'Protocolos de segurança', 'Anestesia eficaz', 'Recuperação orientada'],
    ],
    [
      'key' => 'geral', 'icon' => 'tooth', 'featured' => false,
      'title' => 'Clínica Geral',
      'img' => 'img/esp-geral.svg',
      'desc' => 'Cuidado completo do dia a dia: avaliações, limpezas, restaurações e prevenção para manter a sua saúde bucal sempre em ordem.',
      'benef' => ['Avaliação e prevenção', 'Limpeza e restaurações', 'Orientação personalizada', 'Acompanhamento periódico'],
    ],
    [
      'key' => 'reabilitacao', 'icon' => 'sparkles', 'featured' => false,
      'title' => 'Reabilitação Oral',
      'img' => 'img/esp-reabilitacao.svg',
      'desc' => 'Recuperação completa do sorriso combinando implantes, próteses e periodontia num plano integrado que devolve função, estética e autoestima.',
      'benef' => ['Plano integrado e completo', 'Combinação de especialidades', 'Função e estética restauradas', 'Resultado harmônico'],
    ],
  ],

  // ====== Processo (linha do tempo horizontal) ======
  'jornada' => [
    ['n' => '01', 'icon' => 'message-circle', 'title' => 'Primeiro contato',   'desc' => 'Você fala com a gente pelo WhatsApp, tira dúvidas e agenda no melhor horário para você.'],
    ['n' => '02', 'icon' => 'stethoscope',    'title' => 'Avaliação',          'desc' => 'Fazemos um exame cuidadoso da sua saúde bucal, ouvindo suas queixas e objetivos.'],
    ['n' => '03', 'icon' => 'clipboard-check','title' => 'Diagnóstico',        'desc' => 'Apresentamos um diagnóstico claro e um plano de tratamento com prioridades e orçamento.'],
    ['n' => '04', 'icon' => 'tooth',          'title' => 'Tratamento',         'desc' => 'Conduzimos cada etapa com técnica, segurança e o seu conforto sempre em primeiro lugar.'],
    ['n' => '05', 'icon' => 'heart-handshake','title' => 'Acompanhamento',     'desc' => 'Acompanhamos os resultados ao longo do tempo, com manutenção e cuidado contínuo.'],
  ],

  // ====== Galeria (placeholders editáveis) ======
  'galeria' => [
    ['img' => 'img/galeria-consultorio.svg', 'alt' => 'Consultório da Clínica Odontológica Modelo', 'label' => 'Consultório', 'span' => 'lg:col-span-2 lg:row-span-2'],
    ['img' => 'img/galeria-recepcao.svg',    'alt' => 'Recepção acolhedora',                'label' => 'Recepção',    'span' => ''],
    ['img' => 'img/galeria-equipamentos.svg','alt' => 'Equipamentos odontológicos modernos', 'label' => 'Equipamentos','span' => ''],
    ['img' => 'img/galeria-atendimento.svg', 'alt' => 'Atendimento ao paciente',             'label' => 'Atendimento', 'span' => ''],
    ['img' => 'img/galeria-detalhes.svg',    'alt' => 'Detalhes do ambiente',                'label' => 'Detalhes',    'span' => ''],
  ],

  // ====== Depoimentos ======
  'depoimentos' => [
    ['name' => 'Marcos Vinícius',  'role' => 'Implante dentário', 'initials' => 'MV', 'text' => 'Fiz um implante na Odonto Modelo e o resultado ficou perfeito, idêntico aos meus outros dentes. Explicaram cada etapa com calma e o pós foi tranquilo. Recomendo muito.'],
    ['name' => 'Juliana Ferreira', 'role' => 'Periodontia',       'initials' => 'JF', 'text' => 'Minha gengiva vivia inflamada e ninguém tinha resolvido. O tratamento periodontal foi cuidadoso e finalmente estou com a boca saudável. Equipe atenciosa do início ao fim.'],
    ['name' => 'Roberto Almeida',  'role' => 'Reabilitação oral', 'initials' => 'RA', 'text' => 'Recuperei meu sorriso por completo. Planejaram tudo com muito cuidado, combinando implantes e prótese. Ambiente moderno e atendimento de altíssimo nível.'],
    ['name' => 'Camila Ribeiro',   'role' => 'Ortodontia',        'initials' => 'CR', 'text' => 'Estou no tratamento ortodôntico e me sinto muito segura. São pontuais, atenciosos e sempre tiram todas as minhas dúvidas. A clínica é linda e organizada.'],
    ['name' => 'Anderson Souza',   'role' => 'Prótese dentária',  'initials' => 'AS', 'text' => 'Minha prótese ficou muito natural e confortável. Fui super bem recebido e senti confiança em cada consulta. Profissionalismo do começo ao fim.'],
    ['name' => 'Patrícia Gomes',   'role' => 'Clínica geral',     'initials' => 'PG', 'text' => 'Atendimento humano de verdade. Me senti acolhida em todas as consultas e o cuidado com os detalhes faz toda a diferença. Indico de olhos fechados.'],
  ],

  // ====== Sobre ======
  'sobre_eyebrow' => 'Sobre a clínica',
  'sobre_titulo'  => 'Experiência, ética e tecnologia a favor do seu sorriso',
  'sobre_p1' => 'A Clínica Odontológica Modelo nasceu de uma convicção simples: cada paciente é único e merece ser ouvido antes de ser tratado. Aqui o atendimento começa pela escuta — entender a sua história, as suas queixas e os seus objetivos para então construir um plano que faça sentido de verdade.',
  'sobre_p2' => 'Com forte atuação em implantodontia e periodontia, trabalhamos com ética e transparência em todas as etapas, apresentando cada procedimento com clareza. O compromisso com a atualização constante e com protocolos rigorosos de segurança garante uma experiência confortável, segura e com foco total no paciente.',
  'sobre_stats' => [
    ['v' => '5,0', 'l' => 'nota no Google'],
    ['v' => '9',   'l' => 'avaliações de pacientes'],
    ['v' => '100%','l' => 'foco no paciente'],
  ],
  'sobre_valores' => [
    'Escuta atenta e plano sob medida',
    'Transparência em cada orçamento',
    'Atualização técnica constante',
    'Biossegurança em todos os passos',
  ],

  // ====== CTA final ======
  'cta_titulo' => 'Agende sua avaliação e descubra o tratamento ideal para o seu sorriso.',
  'cta_sub'    => 'Fale agora com a nossa equipe pelo WhatsApp e dê o primeiro passo para um sorriso mais saudável.',
];
