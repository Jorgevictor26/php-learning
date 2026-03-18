<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Vagas - GreenBlue Medical Center</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container hero-content">
            <div class="hero-flex">
                <div class="hero-text">
                    <h1>Junte-se à Nossa Equipa</h1>
                    <p>Procuramos profissionais talentosos e dedicados para integrar nossa equipa de saúde de excelência.</p>
                    <a href="#vagas" class="btn-primary">Ver Vagas</a>
                </div>
                <div class="hero-image">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="100" fill="#E6F9F4" opacity="0.3" />
                        <circle cx="100" cy="60" r="25" fill="#1ba4a6" />
                        <path d="M70 95L70 130L90 130L90 95C90 85 95 75 100 75C105 75 110 85 110 95L110 130L130 130L130 95C130 75 118 60 100 60C82 60 70 75 70 95Z" fill="#1ba4a6" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- Formulário de Cadastro de Vagas -->
    <section id="candidatura" class="candidatura">
        <div class="container">
            <h2>Cadastrar Vagas</h2>
            <p class="section-subtitle">Preencha os dados abaixo para adicionar uma nova oportunidade</p>

            <form action="<?=  $_SERVER['PHP_SELF'] ?>" method="POST" class="form-candidatura">
                <div class="form-group">
                    <label for="titulo">Título da Vaga *</label>
                    <input
                        type="text"
                        id="titulo"
                        name="titulo"
                        required
                        placeholder="Ex: Médico Generalista">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição *</label>
                    <textarea
                        id="descricao"
                        name="descricao"
                        required
                        placeholder="Descreva a vaga, responsabilidades e requisitos..."
                        rows="5"></textarea>
                </div>

                <div>
                    <label for="status">Status </label>
                    <div class="form-group">
                        <label for="status">Activo</label>
                        <input type="radio" id="ativo" name="status" value="s" checked>
                        <label for="status">Inactivo </label>
                        <input type="radio" id="inativo" name="status" value="n">
                    </div>
                </div>

                <button type="submit" class="btn-primary">Cadastrar Vaga</button>
            </form>
        </div>
    </section>
    <!-- Vagas Disponíveis Section -->
    <section id="vagas" class="vagas">
        <div class="container">
            <h2>Vagas Disponíveis</h2>
            <p class="section-subtitle">Explore as oportunidades de carreira na GreenBlue Medical Center</p>

            <div class="vagas-list">
                <!-- Vaga 1 -->
                <div class="vaga-card">
                    <div class="vaga-header">
                        <h3>Médico Generalista</h3>
                        <span class="vaga-tipo">Tempo Integral</span>
                    </div>
                    <div class="vaga-info">
                        <p><strong>Localização:</strong> Lisboa</p>
                        <p><strong>Experiência:</strong> 2+ anos</p>
                    </div>
                    <p class="vaga-descricao">
                        Procuramos médico generalista com experiência em atendimento clínico, diagnóstico e tratamento de pacientes. Deve ter boa comunicação e empatia.
                    </p>
                    <div class="vaga-requisitos">
                        <strong>Requisitos:</strong>
                        <ul>
                            <li>Licenciatura em Medicina</li>
                            <li>Cédula Profissional válida</li>
                            <li>Experiência em consultório clínico</li>
                        </ul>
                    </div>
                    <a href="#candidatura" class="btn-secondary">Candidatar-se</a>
                </div>

                <!-- Vaga 2 -->
                <div class="vaga-card">
                    <div class="vaga-header">
                        <h3>Enfermeiro/a</h3>
                        <span class="vaga-tipo">Tempo Integral</span>
                    </div>
                    <div class="vaga-info">
                        <p><strong>Localização:</strong> Porto</p>
                        <p><strong>Experiência:</strong> 1+ ano</p>
                    </div>
                    <p class="vaga-descricao">
                        Buscamos enfermeiro/a para integrar nossa equipa de cuidados. Responsável pelo cuidado direto ao paciente e apoio médico.
                    </p>
                    <div class="vaga-requisitos">
                        <strong>Requisitos:</strong>
                        <ul>
                            <li>Licenciatura em Enfermagem</li>
                            <li>Registo na Ordem dos Enfermeiros</li>
                            <li>Conhecimentos em primeiros socorros</li>
                        </ul>
                    </div>
                    <a href="#candidatura" class="btn-secondary">Candidatar-se</a>
                </div>

                <!-- Vaga 3 -->
                <div class="vaga-card">
                    <div class="vaga-header">
                        <h3>Auxiliar de Farmácia</h3>
                        <span class="vaga-tipo">Tempo Parcial</span>
                    </div>
                    <div class="vaga-info">
                        <p><strong>Localização:</strong> Covilhã</p>
                        <p><strong>Experiência:</strong> 6 meses</p>
                    </div>
                    <p class="vaga-descricao">
                        Auxiliar para apoiar na farmácia, gestão de stock, atendimento ao cliente e preparação de medicamentos.
                    </p>
                    <div class="vaga-requisitos">
                        <strong>Requisitos:</strong>
                        <ul>
                            <li>Certificado de Auxiliar de Farmácia</li>
                            <li>Conhecimentos de informática</li>
                            <li>Orientação ao cliente</li>
                        </ul>
                    </div>
                    <a href="#candidatura" class="btn-secondary">Candidatar-se</a>
                </div>

                <!-- Vaga 4 -->
                <div class="vaga-card">
                    <div class="vaga-header">
                        <h3>Técnico de Laboratório</h3>
                        <span class="vaga-tipo">Tempo Integral</span>
                    </div>
                    <div class="vaga-info">
                        <p><strong>Localização:</strong> Lisboa</p>
                        <p><strong>Experiência:</strong> 3+ anos</p>
                    </div>
                    <p class="vaga-descricao">
                        Procuramos técnico de laboratório para realizar análises clínicas, manutenção de equipamentos e controlo de qualidade.
                    </p>
                    <div class="vaga-requisitos">
                        <strong>Requisitos:</strong>
                        <ul>
                            <li>Diploma de Técnico de Laboratório</li>
                            <li>Experiência em análises clínicas</li>
                            <li>Conhecimentos de equipamentos laboratoriais</li>
                        </ul>
                    </div>
                    <a href="#candidatura" class="btn-secondary">Candidatar-se</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section id="sobre" class="sobre">
        <div class="container">
            <h2>Por que trabalhar na GreenBlue Medical Center?</h2>
            <div class="sobre-grid">
                <div class="sobre-card">
                    <div class="sobre-icon">🏥</div>
                    <h3>Ambiente Moderno</h3>
                    <p>Instalações de última geração e equipamento de ponta para o melhor atendimento.</p>
                </div>
                <div class="sobre-card">
                    <div class="sobre-icon">👥</div>
                    <h3>Equipa Unida</h3>
                    <p>Trabalhe ao lado de profissionais qualificados e dedicados à excelência.</p>
                </div>
                <div class="sobre-card">
                    <div class="sobre-icon">📈</div>
                    <h3>Crescimento Profissional</h3>
                    <p>Oportunidades de formação contínua e desenvolvimento de carreira.</p>
                </div>
                <div class="sobre-card">
                    <div class="sobre-icon">💚</div>
                    <h3>Bem-estar do Colaborador</h3>
                    <p>Benefícios competitivos, seguro de saúde e programa de bem-estar.</p>
                </div>
            </div>
        </div>
    </section>