<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoria de TI - Miguel😊</title>
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