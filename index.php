
Chat, estou fazendo o seguinte trabalho para a faculdade. Há apenas dois arquivos PHP, o index, que eu mandei a foto, e o contato, que é uma aba de contato apenas. Gostaria de manter esses dois, mas não quero deixar o index assim, "Bem vindo ao meu projeto" além de que ta muito feio a estética, gostaria de um site simples com alguma ideia mandando para uma página de contato, deu para entender?
Lite
Entendido! Vou iniciar o modo agente para te ajudar a refazer o layout do seu projeto PHP, deixando-o mais estético e funcional, mantendo os arquivos index.php e contato.php.
Lite
Entendi! Você quer melhorar a estética do seu site PHP e criar uma página inicial mais atraente que direcione para a página de contato. Para te ajudar melhor, preciso saber:
Qual tema/assunto você quer para o site? (Ex: portfólio pessoal, site de serviços, landing page de produto, site institucional, etc.)
Que estilo visual você prefere?
Minimalista e clean
Moderno e colorido
Profissional/corporativo
Criativo/artístico
O que você quer mostrar na página inicial? (Ex: uma apresentação sua, descrição de serviços, imagens, um call-to-action para contato, etc.)
Não quero que o site seja sobre "Meu projeto php", gostaria de uma ideia, tipo alguma consultoria online do Miguel? não sei, me da uma ideia boa e simples
Lite
Perfeito! Vou criar um site simples e profissional para você. Que tal uma Consultoria de TI do Miguel?
Vou fazer assim:
Página inicial (index.php): Landing page moderna apresentando os serviços de consultoria em tecnologia, com design clean e profissional
Página de contato (contato.php): Manterei sua página de contato existente, apenas melhorando o visual para combinar com o novo design
O site terá:
Design moderno e responsivo
Cores profissionais (azul/cinza)
Seções: Apresentação, Serviços, Call-to-action para contato
Navegação simples entre as páginas
Vou começar a criar agora!
Vou criar uma landing page moderna e profissional para a consultoria, com design clean, cores azul/cinza, e seções de apresentação e Serviços. A página de contato será aprimorada visualmente.

Criei um novo index.php com design moderno, alinhado ao tema de consultoria de TI, usando cores azul e cinza, seguindo o plano para uma landing page profissional.

Criei uma página de contato moderna e estilizada, alinhada ao tema de consultoria de TI, para melhorar a estética do site. Próximo passo: otimizar o layout e a funcionalidade.

Lite
Seu novo site de Consultoria de TI do Miguel está pronto!
Criei um index.php com um design moderno e profissional, apresentando os serviços de consultoria. A página contato.php também foi estilizada para seguir o mesmo padrão visual, mantendo a funcionalidade de formulário.
Você pode testar as páginas localmente em um servidor PHP. Basta colocar os dois arquivos na raiz do seu servidor web (como Apache ou Nginx com PHP habilitado).
Espero que goste!
index.php
Código · 9.23 KB
contato.php
Código · 12.06 KB

Ver todos os arquivos nesta tarefa
Tarefa concluída
Como foi este resultado?
Sugestões de acompanhamento
Enviar mensagem para Manus
index.php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria de TI - Miguel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header e Navegação */
        header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s ease;
            font-weight: 500;
        }

        nav a:hover {
            opacity: 0.8;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 100px 20px;
            text-align: center;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
        }

        /* Seção de Serviços */
        .services {
            padding: 80px 20px;
            background-color: #f8f9fa;
        }

        .services h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e3c72;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            color: #1e3c72;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .service-card p {
            color: #666;
            line-height: 1.8;
        }

        /* Seção Sobre */
        .about {
            padding: 80px 20px;
            background-color: white;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about h2 {
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 2rem;
        }

        .about p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 1.5rem;
            line-height: 1.9;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        /* Footer */
        footer {
            background-color: #1a2a3a;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        footer p {
            opacity: 0.8;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .services h2,
            .about h2,
            .cta h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">🖥️ Miguel TI</div>
                <ul>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Consultoria de TI Profissional</h1>
            <p>Soluções tecnológicas inovadoras para transformar seu negócio e potencializar seus resultados</p>
            <a href="contato.php" class="btn">Solicitar Consultoria</a>
        </div>
    </section>

    <!-- Serviços -->
    <section class="services" id="servicos">
        <div class="container">
            <h2>Nossos Serviços</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">💼</div>
                    <h3>Consultoria Estratégica</h3>
                    <p>Análise e planejamento de infraestrutura de TI alinhado com os objetivos do seu negócio</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Segurança da Informação</h3>
                    <p>Implementação de soluções robustas para proteger seus dados e sistemas contra ameaças</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">☁️</div>
                    <h3>Migração para Nuvem</h3>
                    <p>Transição segura e eficiente de seus sistemas para ambientes em nuvem</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3>Suporte Técnico</h3>
                    <p>Atendimento especializado e rápido para resolver problemas de infraestrutura</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Análise de Dados</h3>
                    <p>Transforme dados em insights valiosos para tomada de decisão estratégica</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3>Desenvolvimento Web</h3>
                    <p>Criação de aplicações web modernas e responsivas para sua empresa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre -->
    <section class="about" id="sobre">
        <div class="about-content">
            <h2>Sobre Nós</h2>
            <p>
                Somos uma equipe dedicada de profissionais de TI com anos de experiência em consultoria e implementação de soluções tecnológicas. 
                Nosso objetivo é ajudar empresas de todos os tamanhos a aproveitarem o poder da tecnologia para crescer e se destacar no mercado.
            </p>
            <p>
                Trabalhamos com metodologias ágeis, garantindo qualidade, eficiência e resultados mensuráveis em cada projeto.
            </p>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2>Pronto para Transformar sua TI?</h2>
            <p>Entre em contato conosco e descubra como podemos ajudar seu negócio</p>
            <a href="contato.php" class="btn">Fale Conosco Agora</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Consultoria de TI - Miguel. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>