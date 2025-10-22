<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Consultoria de TI - Miguel</title>
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
            background-color: #f8f9fa;
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

        /* Seção de Contato */
        .contact-section {
            padding: 80px 20px;
            min-height: calc(100vh - 200px);
        }

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 1rem;
        }

        .contact-header p {
            font-size: 1.1rem;
            color: #666;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        /* Informações de Contato */
        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .contact-info h2 {
            color: #1e3c72;
            margin-bottom: 2rem;
            font-size: 1.5rem;
        }

        .info-item {
            margin-bottom: 2rem;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .info-icon {
            font-size: 1.5rem;
            color: #2a5298;
            min-width: 30px;
        }

        .info-content h3 {
            color: #1e3c72;
            margin-bottom: 0.5rem;
        }

        .info-content p {
            color: #666;
        }

        /* Formulário */
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .contact-form h2 {
            color: #1e3c72;
            margin-bottom: 2rem;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #1e3c72;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="phone"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-family: inherit;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="phone"]:focus,
        textarea:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(30, 60, 114, 0.3);
        }

        .btn-back {
            display: inline-block;
            margin-top: 2rem;
            padding: 12px 30px;
            background-color: #e0e0e0;
            color: #1e3c72;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background-color: #d0d0d0;
        }

        /* Mensagem de sucesso */
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 1.5rem;
            border-radius: 5px;
            margin-bottom: 2rem;
            border-left: 4px solid #28a745;
        }

        /* Mensagem de erro */
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 1.5rem;
            border-radius: 5px;
            margin-bottom: 2rem;
            border-left: 4px solid #f5c6cb;
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
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-header h1 {
                font-size: 2rem;
            }

            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
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
                    <li><a href="index.php">Início</a></li>
                    <li><a href="index.php#servicos">Serviços</a></li>
                    <li><a href="index.php#sobre">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Seção de Contato -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h1>Entre em Contato Conosco</h1>
                <p>Estamos prontos para ajudar você com suas necessidades de TI</p>
            </div>

            <div class="contact-content">
                <!-- Informações -->
                <div class="contact-info">
                    <h2>Informações de Contato</h2>
                    
                    <div class="info-item">
                        <div class="info-icon">📧</div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p><a href="mailto:contato@miguelti.com.br" style="color: #2a5298; text-decoration: none;">contato@miguelti.com.br</a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📱</div>
                        <div class="info-content">
                            <h3>Telefone</h3>
                            <p><a href="tel:+5511999999999" style="color: #2a5298; text-decoration: none;">+55 (11) 9 9999-9999</a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Localização</h3>
                            <p>São Paulo, SP - Brasil</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">⏰</div>
                        <div class="info-content">
                            <h3>Horário de Atendimento</h3>
                            <p>Segunda a Sexta: 9h às 18h</p>
                        </div>
                    </div>
                </div>

                <!-- Formulário -->
                <div class="contact-form">
                    <h2>Envie uma Mensagem</h2>
                    
                    <?php
                    $mensagem_sucesso = '';
                    $mensagem_erro = '';

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
                        $email = htmlspecialchars(trim($_POST['email'] ?? ''));
                        $telefone = htmlspecialchars(trim($_POST['telefone'] ?? ''));
                        $mensagem = htmlspecialchars(trim($_POST['mensagem'] ?? ''));

                        // Validação básica
                        if (empty($nome) || empty($email) || empty($mensagem)) {
                            $mensagem_erro = 'Por favor, preencha todos os campos obrigatórios (Nome, Email e Mensagem).';
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $mensagem_erro = 'Por favor, insira um email válido.';
                        } else {
                            // Aqui você pode adicionar lógica para enviar o email
                            // Por enquanto, apenas exibimos mensagem de sucesso
                            $mensagem_sucesso = 'Obrigado! Sua mensagem foi recebida com sucesso. Entraremos em contato em breve.';
                        }
                    }

                    if (!empty($mensagem_sucesso)) {
                        echo '<div class="success-message">' . $mensagem_sucesso . '</div>';
                    }

                    if (!empty($mensagem_erro)) {
                        echo '<div class="error-message">' . $mensagem_erro . '</div>';
                    }
                    ?>

                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nome">Nome *</label>
                            <input type="text" id="nome" name="nome" required value="<?php echo $_POST['nome'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="phone" id="telefone" name="telefone" value="<?php echo $_POST['telefone'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="mensagem">Mensagem *</label>
                            <textarea id="mensagem" name="mensagem" required><?php echo $_POST['mensagem'] ?? ''; ?></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Enviar Mensagem</button>
                    </form>

                    <a href="index.php" class="btn-back">← Voltar para Início</a>
                </div>
            </div>
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