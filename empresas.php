<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <div class="container" id="nav-container">
      <?php
       include('navbar.php');
      ?>
      <link rel="stylesheet" href="css/empresa.css">
</head>
<body>
     <!--Link para o arquivo de estilo próprio do projeto-->
  <header >
    <div class="container" id="nav-container">
      <nav class="navbar shadow-sm navbar-expand-lg fixed-top">
        <!--Logo do NITE-->
        <a href="#" class="navbar-brand">
          <img id="logo" src="img/simb_nite-removebg-preview_1.svg" alt="Nite">
    
        </a>
        <!--Botão para o menu responsivo-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <!--links do menu de navegação-->
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link" id="home-menu">Home</a>
            <a href="empresas.php" class="nav-item nav-link" id="about-menu">Empresas</a>
            <a href="pages.php" class="nav-item nav-link" id="news-menu">Notícias</a>
            <a href="#portfolio-area" class="nav-item nav-link" id="portifolio-menu">Projetos</a>
            <a href="contato.php" class="nav-item nav-link" id="contact-menu">Contato</a>

          </div>
        </div>
  </header>
  <main>
  <!-- Notícias sobre as Empresas -->
  <section id="notciais" >
  <div class="container">
  <div class="cards-noticias">

  <!-- Edificare -->
    <div class="row">
      <div class="card">      
        <img src="img/edificare.jpg" alt="Logo da Edificare">
        <div class="conteudo">
          <h3 class="main-title">Sobre a Edificare</h3>
          <p>A <strong>Edificare</strong> é a empresa júnior dos cursos de Engenharia Civil e Arquitetura. Fundada em <strong>abril de 2020</strong>, a Edificare tem como missão oferecer soluções inovadoras, sustentáveis e acessíveis para o setor da construção civil, promovendo o desenvolvimento acadêmico e profissional dos seus membros.</p>
          <p>Entre os serviços oferecidos estão o desenvolvimento de projetos arquitetônicos e estruturais, acompanhamento de obras, regularizações, consultorias técnicas, modelagem 3D e planejamento urbano. A empresa já realizou dezenas de projetos em parceria com ONGs, pequenos empreendedores e órgãos públicos da região.</p>
          <h5>Diretoria Executiva 2025</h5>
          <ul>
            <li><strong>Presidente:</strong> Lucas Martins</li>
            <li><strong>Vice-Presidente:</strong> Amanda Ribeiro</li>
            <li><strong>Diretora de Marketing:</strong> Carla Menezes</li>
            <li><strong>Diretor Técnico:</strong> Eduardo Silveira</li>
          </ul>
          <p>Com foco em inovação, responsabilidade social e qualidade técnica, a ConstruiArq Jr. é uma ponte entre o ambiente universitário e o mercado de trabalho, preparando futuros engenheiros e arquitetos para desafios reais da profissão.</p>
        </div>  
      </div>
    </div>
<!-- Seeds -->
  <div class="card">
    <img src="img/img seeds.jpg" alt="Logo da Seeds">
    <div class="conteudo">
      <h3 class="main-title">Sobre a Seeds</h3>
      <p>A <strong>Seeds</strong> é a empresa júnior do curso de Engenharia da Computação, fundada em <strong>março de 2022</strong>. Seu objetivo é proporcionar experiências práticas aos alunos por meio da realização de projetos reais na área de tecnologia e inovação.</p>
      <p>Desde a sua criação, a Seeds tem atuado no desenvolvimento de sistemas web, aplicativos móveis, automação residencial e soluções baseadas em inteligência artificial, atendendo pequenas empresas, startups e projetos acadêmicos.</p>

      <h5>Diretoria Executiva 2025</h5>
      <ul>
        <li><strong>Presidente:</strong> Ana Beatriz Souza</li>
        <li><strong>Vice-Presidente:</strong> Gabriel Ferreira</li>
        <li><strong>Diretor de Marketing:</strong> Larissa Monteiro</li>
        <li><strong>Diretor de Tecnologia:</strong> Vinícius Almeida</li>
      </ul>

      <p>Com um time comprometido e em constante aprendizado, a Seeds busca unir teoria e prática para impactar positivamente a comunidade e preparar os membros para o mercado de trabalho.</p>
      </div>
    </div>

<!-- fonoaudiologia -->
       <div class="card">
            <img src="img/fontec.png" alt="Logo da Fonotec" >
            <div class="conteudo">
              <h3 class="main-title">Sobre a Fonatec</h3>
              <p>A <strong>Fonatec</strong> é a empresa júnior do curso de Fonoaudiologia. Fundada em <strong>agosto de 2021</strong>, a Fonatec nasceu com o propósito de integrar os conhecimentos acadêmicos à prática profissional, promovendo atendimentos e projetos com foco em comunicação humana e qualidade de vida.</p>
              <p>Com atuação em áreas como linguagem, voz, motricidade orofacial e audiologia, a Fonatec desenvolve atividades de conscientização, triagens, palestras e consultorias em instituições públicas e privadas, sempre com responsabilidade social e ética profissional.</p>
              <h5>Diretoria Executiva 2025</h5>
              <ul>
                <li><strong>Presidente:</strong> Juliana Costa</li>
                <li><strong>Diretora de Marketing:</strong> Bruna Tavares</li>
                <li><strong>Diretora de Projetos:</strong> Mariana Oliveira</li>
                <li><strong>Vice-Presidente:</strong> Rafael Almeida</li>
              </ul>
              <p>A Fonatec acredita no potencial transformador da fonoaudiologia e busca contribuir ativamente para a formação de profissionais mais preparados e conscientes do seu papel social.</p>
          </div>
          </div>      
<!-- Faro -->       
  <div class="card">
    <img src="img/img far.jpg" alt="Logo da Faro Comunicações">
    <div class="conteudo">
        <h3 class="main-title">Sobre a Faro Comunicações</h3>
        <p>A <strong>Faro Comunicações</strong> é a empresa júnior do curso de Publicidade e Propaganda. Fundada em <strong>julho de 2021</strong>, a Faro atua com foco em estratégias de comunicação integradas, oferecendo soluções criativas e inovadoras para organizações públicas, privadas e do terceiro setor.</p>
        <p>A empresa desenvolve projetos nas áreas de marketing digital, branding, assessoria de imprensa, produção audiovisual, planejamento de campanhas, redes sociais e comunicação institucional. Seus trabalhos unem a visão acadêmica à prática de mercado, sempre com compromisso ético e foco em resultados.</p>
        <h5>Diretoria Executiva 2025</h5>
        <ul>
          <li><strong>Presidente:</strong> Ana Almeida</li>
          <li><strong>Vice-Presidente:</strong> Vanessa Rocha</li>
          <li><strong>Diretora de Marketing:</strong> Bruna Tavares</li>
          <li><strong>Diretora de Projetos:</strong> Mariana Gomes</li>
        </ul>
      </iv>
    </div>
  </div>
<!-- Psiwork -->
  <div class="card">
    <img src="img/img psico.jpg" alt="Logo da Psiwork">
    <div class="conteudo">
      <div class="container">
        <h3 class="main-title">Sobre a Psiwork</h3>
        <p>A <strong>Psiwork</strong> é a empresa júnior do curso de Psicologia. Fundada em <strong>setembro de 2020</strong>, a Psiwork tem como missão promover saúde mental e desenvolvimento pessoal por meio de projetos, eventos e consultorias na área da psicologia aplicada.</p>
        <p>A empresa oferece serviços como rodas de conversa, workshops sobre inteligência emocional, escuta psicológica inicial, ações de saúde mental em empresas e escolas, além de apoio a projetos de extensão voltados ao bem-estar da comunidade.</p>
        <h5>Diretoria Executiva 2025</h5>
        <ul>
          <li><strong>Presidente:</strong> Camila Duarte</li>
          <li><strong>Vice-Presidente:</strong> Lucas Santana</li>
          <li><strong>Diretora de Marketing:</strong> Isabela Martins</li>
          <li><strong>Diretora de Projetos:</strong> Letícia Gomes</li>
        </ul>
        <p>Com base nos princípios da empatia, ética e responsabilidade social, a Psiwork busca impactar positivamente a comunidade e preparar seus membros para uma atuação consciente</p>       
      </div>
    </div>
  </div>

       <div class="card">
            <img src="img/img valor.jpg" alt="Logo da Valor">
            <div class="conteudo">
              <h3 class="main-title">Sobre a Valor</h3>
              <p>A <strong>Valor</strong> é a empresa júnior do curso de Administração. Criada em <strong>fevereiro de 2019</strong>, tem como objetivo capacitar estudantes por meio de vivências práticas em gestão, consultoria e planejamento estratégico.</p>
              <p>A empresa atua em áreas como plano de negócios, análise de mercado, planejamento financeiro, gestão de pessoas e marketing estratégico. Já prestou consultorias para micro e pequenas empresas da região, além de ONGs e empreendimentos sociais.</p>
              <h5>Diretoria Executiva 2025</h5>
              <ul>
                <li><strong>Presidente:</strong> Fernanda Lima</li>
                <li><strong>Vice-Presidente:</strong> Thiago Mendes</li>
                <li><strong>Diretora de Marketing:</strong> Bianca Rocha</li>
                <li><strong>Diretor de Projetos:</strong> Ricardo Nogueira</li>
              </ul>
              <p>Com base em valores como ética, inovação e impacto social, a Valor. busca transformar a realidade local e formar líderes preparados para os desafios do mundo empresarial.</p>
            </div>
          </div>
          </div>
</div>
</section>
</main>
</body>
</html>