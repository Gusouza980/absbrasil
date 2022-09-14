@include('site.includes.head')

<body class="cursos curso-detalhes" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        'classe' => 'brasil cursos',
        'adicional' =>
            '<div class="direita" style="top: -61px; padding-right: 150px;padding-bottom: 50px;">
                <div class="_headertitle">
                        <h2>' .
            $curso->titulo .
            '</h2>
                        <span class="chat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M9.66887 25.2345L5.64348 28.6184C5.49771 28.741 5.31998 28.8193 5.1312 28.8443C4.94241 28.8693 4.75042 28.8399 4.57779 28.7595C4.40516 28.6791 4.25908 28.551 4.15673 28.3905C4.05437 28.2299 4 28.0434 4 27.853V8C4 7.73478 4.10536 7.48043 4.29289 7.29289C4.48043 7.10536 4.73478 7 5 7H27C27.2652 7 27.5196 7.10536 27.7071 7.29289C27.8946 7.48043 28 7.73478 28 8V24C28 24.2652 27.8946 24.5196 27.7071 24.7071C27.5196 24.8946 27.2652 25 27 25H10.3123C10.0769 25 9.84907 25.0831 9.66887 25.2345Z" stroke="#E2B63A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="black"/>
                        <path d="M16 17.5C16.8284 17.5 17.5 16.8284 17.5 16C17.5 15.1716 16.8284 14.5 16 14.5C15.1716 14.5 14.5 15.1716 14.5 16C14.5 16.8284 15.1716 17.5 16 17.5Z" fill="black"/>
                        <path d="M22 17.5C22.8284 17.5 23.5 16.8284 23.5 16C23.5 15.1716 22.8284 14.5 22 14.5C21.1716 14.5 20.5 15.1716 20.5 16C20.5 16.8284 21.1716 17.5 22 17.5Z" fill="black"/>
                        <path d="M10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="#E2B63A"/>
                        <path d="M16 17.5C16.8284 17.5 17.5 16.8284 17.5 16C17.5 15.1716 16.8284 14.5 16 14.5C15.1716 14.5 14.5 15.1716 14.5 16C14.5 16.8284 15.1716 17.5 16 17.5Z" fill="#E2B63A"/>
                        <path d="M22 17.5C22.8284 17.5 23.5 16.8284 23.5 16C23.5 15.1716 22.8284 14.5 22 14.5C21.1716 14.5 20.5 15.1716 20.5 16C20.5 16.8284 21.1716 17.5 22 17.5Z" fill="#E2B63A"/>
                        </svg>
                        ' .
            $turma->texto_turma .
            '
                        </span>
                        <div class="_price">
                            ' .
            $turma->parcelas .
            '<span>X</span> <div class="_price" style="display: inline;">R$' .
            number_format($turma->preco / $turma->parcelas, 2, ',', '.') .
            '</div>
                        </div>
                    </div>
                </div>',
    ])

    <div class="termsBox">

        <div class="terms">
            <h4 class="title"> Termos de Regulamento </h4>
            <div class="main">
                <p><strong>ASSOCIA</strong><strong>&Ccedil;&Atilde;</strong><strong>O BRASILEIRA DE
                        SOMMELIERS-BRASIL</strong></p>
                <p><strong>Regulamento da Prova do Concurso da ABS-Brasil</strong></p>
                <p>&nbsp;</p>
                <ol>
                    <li><strong> INSCRI</strong><strong>&Ccedil;&Otilde;ES&nbsp;</strong></li>
                </ol>
                <p>1.1. &nbsp;As inscri&ccedil;&otilde;es dever&atilde;o ser feitas no site da ABS-Brasil, devendo a
                    documenta&ccedil;&atilde;o ser enviada para a para a secretaria da ABS-Brasil, pelo e-mail
                    contato@abs-brasil.com.</p>
                <p>&nbsp;</p>
                <p>1.2. S&oacute; ser&atilde;o admitidas inscri&ccedil;&otilde;es dos profissionais que se enquadrarem
                    nos seguintes requisitos:</p>
                <p>&nbsp;</p>
                <p>1.2.1. Que tenham idade superior a 18 anos;</p>
                <p>&nbsp;</p>
                <p>1.2.2. Que estejam exercendo ou que tenham exercido atividade profissional conforme disp&otilde;e a
                    Lei de Regulamenta&ccedil;&atilde;o do Exerc&iacute;cio da Profiss&atilde;o de Sommelier 12.467 de
                    26/08/2011, pelo per&iacute;odo m&iacute;nimo de 01 (um) ano, devidamente comprovada por documentos
                    legais.</p>
                <p>&nbsp;</p>
                <p>1.3. Fica vedada a inscri&ccedil;&atilde;o de candidatos que j&aacute; tenham sido campe&otilde;es de
                    Concursos Brasileiros anteriores.</p>
                <p>&nbsp;</p>
                <ol start="2">
                    <li><strong> PROVAS DO CONCURSO </strong></li>
                </ol>
                <p>&nbsp;</p>
                <p>O Concurso da ABS-BR englobar&aacute; tr&ecirc;s provas: prova escrita, prova de
                    degusta&ccedil;&atilde;o &agrave;s cegas e prova de servi&ccedil;o, de acordo com o que se segue:
                </p>
                <p>&nbsp;</p>
                <p><strong>2.1. PROVA ESCRITA</strong></p>
                <p>&nbsp;</p>
                <p>2.1.1. A prova escrita ser&aacute; aplicada no local onde for realizada o Concurso, devendo ser
                    preparada pela Comiss&atilde;o Did&aacute;tica da ABS-Brasil. Somente os 03 candidatos que obtiverem
                    as maiores notas na Prova Escrita, estar&atilde;o qualificados para se submeter &agrave; Prova de
                    Degusta&ccedil;&atilde;o e Servi&ccedil;o.</p>
                <p>&nbsp;</p>
                <p>2.1.2. A dura&ccedil;&atilde;o da prova ser&aacute; de uma hora e trinta minutos.</p>
                <p>&nbsp;</p>
                <p>2.1.3. O candidato que se atrasar para a prova, somente ser&aacute; autorizado a faz&ecirc;-la se
                    nenhum candidato tiver terminado a prova e se retirado da sala.</p>
                <p>&nbsp;</p>
                <p>2.1.4. A prova &eacute; individual e sem consulta.</p>
                <p>&nbsp;</p>
                <p>2.1.5. A quest&atilde;o que apresentar rasuras ou d&uacute;vidas em rela&ccedil;&atilde;o &agrave;
                    clareza da resposta poder&aacute; ser anulada, a crit&eacute;rio da Comiss&atilde;o Did&aacute;tica.
                </p>
                <p>&nbsp;</p>
                <p>2.1.6. N&atilde;o haver&aacute; possibilidade de recurso &agrave; nota da prova escrita.</p>
                <p>&nbsp;</p>
                <p>2.1.7. A prova escrita ser&aacute; constitu&iacute;da de quest&otilde;es de m&uacute;ltipla escolha
                    com 5 alternativas.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>2.1.8. O programa te&oacute;rico exigido segue abaixo:</p>
                <ul>
                    <li>Hist&oacute;ria do vinho varietais e cortes</li>
                    <li>T&eacute;cnicas de degusta&ccedil;&atilde;o</li>
                    <li>Viticultura</li>
                    <li>Uvas vin&iacute;feras</li>
                    <li>Vinifica&ccedil;&atilde;o brancos, ros&eacute;s e tintos 1</li>
                    <li>T&eacute;cnicas Especiais de Vinifica&ccedil;&atilde;o - Vinhos doces</li>
                    <li>T&eacute;cnicas Especiais - Vinhos do Porto, da Madeira e fortificados</li>
                    <li>Vinho e Sa&uacute;de: Fatores na decis&atilde;o de compra</li>
                    <li>Adegas, rolhas, garrafas e r&oacute;tulos</li>
                    <li>Terroir: conceito e influ&ecirc;ncia no vinho</li>
                    <li>A&ccedil;&otilde;es do amadurecimento e do envelhecimento</li>
                    <li>Uso de madeira na produ&ccedil;&atilde;o de vinhos e barricas</li>
                    <li>Qu&iacute;mica do vinho</li>
                    <li>Espumantes do mundo</li>
                    <li>Champagne - T&eacute;cnicas de degusta&ccedil;&atilde;o, vinifica&ccedil;&atilde;o e terroir
                    </li>
                    <li>Jerez: Uvas e t&eacute;cnicas de vinifica&ccedil;&atilde;o</li>
                    <li>No&ccedil;&otilde;es B&aacute;sicas de Servi&ccedil;o do Vinho</li>
                    <li>Estilos de vinhos</li>
                    <li>No&ccedil;&otilde;es b&aacute;sicas em enogastronomia</li>
                    <li>Degusta&ccedil;&atilde;o de alimentos</li>
                    <li>Harmoniza&ccedil;&otilde;es cl&aacute;ssicas em enogastronomia</li>
                    <li>M&eacute;todos de harmoniza&ccedil;&atilde;o em&nbsp;enogastronomia</li>
                    <li>Influ&ecirc;ncia da t&eacute;cnica de preparo na harmoniza&ccedil;&atilde;o</li>
                    <li>Etapas de uma compatibiliza&ccedil;&atilde;o</li>
                    <li>Arquitetura da refei&ccedil;&atilde;o</li>
                    <li>Avalia&ccedil;&atilde;o objetiva de enogastronomia</li>
                </ul>
                <p>&nbsp;</p>
                <ul>
                    <li>Austr&aacute;lia</li>
                    <li>&Aacute;frica do Sul</li>
                    <li>Nova Zel&acirc;ndia</li>
                    <li>Fran&ccedil;a - Origens, Hist&oacute;ria, Classifica&ccedil;&atilde;o e Evolu&ccedil;&atilde;o
                        do Sistema AOC, Estat&iacute;sticas</li>
                    <li>Fran&ccedil;a - Vale do Loire</li>
                    <li>Fran&ccedil;a - Als&aacute;cia</li>
                    <li>Fran&ccedil;a - Borgonha - Historia, Classifica&ccedil;&atilde;o, Chablis, C&ocirc;te
                        Chalonaise, Macon e Beaujolais</li>
                    <li>Fran&ccedil;a - Borgonha - C&ocirc;te des Nuits e C&ocirc;te de Beaunne</li>
                    <li>Fran&ccedil;a - Bordeaux I - Hist&oacute;ria, Legisla&ccedil;&atilde;o, Uvas e Margem E
                        (M&eacute;doc, Haut M&eacute;doc, Graves e Sauternes)</li>
                    <li>Fran&ccedil;a - Bordeaux II - Margem D (C&ocirc;tes, Fronsac, Canon-Fronsac, Pomerol, Lalande de
                        Pomerol, St Emilion e sat&eacute;lites)</li>
                    <li>Fran&ccedil;a - Rh&ocirc;ne</li>
                    <li>Fran&ccedil;a - Provence, Jura, Savoie e C&oacute;rsega</li>
                    <li>Fran&ccedil;a - Sudoeste da Fran&ccedil;a</li>
                    <li>Fran&ccedil;a - Languedoc-Roussillon</li>
                    <li>Argentina</li>
                    <li>Uruguai, Bol&iacute;via e Peru</li>
                    <li>Alemanha</li>
                    <li>Estados Unidos, M&eacute;xico e Canad&aacute;</li>
                    <li>Espanha I (Hist&oacute;ria, Estat&iacute;stica, principais uvas, classifica&ccedil;&atilde;o dos
                        vinhos - Gal&iacute;cia)</li>
                    <li>Espanha II (Rioja, Navarra, Somontano, Calatayud, Campo de Borja, Cari&ntilde;ena)</li>
                    <li>Espanha III (Castilla Y Le&oacute;n - Ribera del Duero, Toro, Rueda e outras DOS)</li>
                    <li>Espanha IV (Catalunha - Priorato, Pened&eacute;s, MontSant e outras DOs, Levante - Murcia -
                        Val&ecirc;ncia)</li>
                    <li>Espanha V ( La Mancha, Andaluzia)</li>
                    <li>Brasil - Conceitos gerais e Legisla&ccedil;&atilde;o</li>
                    <li>Brasil - Santa Catarina, S&atilde;o Paulo e outras regi&otilde;es produtoras</li>
                    <li>Brasil - Rio Grande do Sul</li>
                    <li>Portugal I - Lisboa, Tejo, Vinho Verde, Set&uacute;bal</li>
                    <li>Portugal II - D&atilde;o, Lef&otilde;es, Bairrada, T&aacute;vora-Varosa, Beira interior</li>
                    <li>Portugal III - Alentejo, Douro, Tr&aacute;s-Os-Montes, Algarve</li>
                    <li>Chile I - Hist&oacute;ria, Vitivinicultura, Perfis Geogr&aacute;ficos,
                        Zonifica&ccedil;&atilde;o, Atacama, Elqui, Limari, Aconc&aacute;gua, Casablanca, San Antonio
                    </li>
                    <li>Chile II Maipo Rapel, Curic&oacute;, Maule Itata, B&iacute;o-B&iacute;o, Malleco, Osorno</li>
                    <li>It&aacute;lia I (Piemonte)</li>
                    <li>It&aacute;lia II (Lombardia, Trentino Alto Adige, Friuli, Venezia Giulia, Abruzzo, Marche,
                        Lazio, Molise)</li>
                    <li>It&aacute;lia III (Veneto, Em&iacute;lia Romana, Abruzzo, Marche, Lazio, Molise)</li>
                    <li>It&aacute;lia IV (Toscana, &Uacute;mbria)</li>
                    <li>It&aacute;lia V (Campania, Puglia, Basilicata, Cal&aacute;bria, Sic&iacute;lia, Sardegna)</li>
                    <li>Turquia, S&iacute;ria, L&iacute;bano, Palestina, Israel</li>
                    <li>&Aacute;ustria e Hungria</li>
                    <li>Gr&eacute;cia, Luxemburgo, Reino Unido, Servia, Montenegro, Kosovo, Maced&ocirc;nia,
                        Mold&aacute;via, Ge&oacute;rgia, Ucr&acirc;nia, China, &Iacute;ndia, Jap&atilde;o, Marrocos,
                        Tun&iacute;sia, Arg&eacute;lia</li>
                    <li>Su&iacute;&ccedil;a, Rom&ecirc;nia, Bulg&aacute;ria, Rep&uacute;blica Checa, Eslov&aacute;quia,
                        Eslov&ecirc;nia, Cro&aacute;cia</li>
                </ul>
                <p>&nbsp;</p>
                <ul>
                    <li>Organiza&ccedil;&atilde;o de uma carta de vinhos</li>
                    <li>Conhaques e brandies</li>
                    <li>Servi&ccedil;o Vinho / Cristais e Ta&ccedil;as - Mise en place</li>
                    <li>Sakes</li>
                    <li>Sommelier na Importadora</li>
                    <li>&Aacute;guas</li>
                    <li>Servi&ccedil;o Vinho / Abertura de Espumante</li>
                    <li>Coquetelaria</li>
                    <li>Queijos</li>
                    <li>Caf&eacute;s</li>
                    <li>Servi&ccedil;o Vinho / Abertura de Garrafas</li>
                    <li>Cervejas</li>
                    <li>Cacha&ccedil;as</li>
                    <li>P&atilde;es</li>
                    <li>Servi&ccedil;o Vinho / Decanta&ccedil;&atilde;o</li>
                    <li>Chocolates</li>
                    <li>Servi&ccedil;o Vinho / Aera&ccedil;&atilde;o</li>
                    <li>Vinagres</li>
                    <li>Whiskys</li>
                    <li>Ch&aacute;s</li>
                    <li>Azeites</li>
                    <li>Destilados</li>
                    <li>Charutos</li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Para cada um dos pa&iacute;ses e regi&otilde;es, al&eacute;m dos aspectos inerentes ao vinho,
                    devem-se incluir conhecimentos e conceitos relacionad</p>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><br />os &agrave; sua gastronomia e turismo que possam auxiliar no melhor entendimento dos
                    &ldquo;terroirs&rdquo; e de uma compatibiliza&ccedil;&atilde;o mais adequada.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>2.2. PROVA DE DEGUSTA&Ccedil;&Atilde;</strong><strong>O E DE
                        SERVI</strong><strong>&Ccedil;</strong><strong>O</strong></p>
                <p>&nbsp;</p>
                <p>2.2.1. Os candidatos selecionados pela Prova Escrita do Concurso ser&atilde;o colocados numa sala,
                    sem qualquer meio de comunica&ccedil;&atilde;o com o exterior, devendo os telefones celulares serem
                    entregues a um membro da Comiss&atilde;o Did&aacute;tica.</p>
                <p>&nbsp;</p>
                <p>2.2.2. A Comiss&atilde;o Did&aacute;tica proceder&aacute;, na presen&ccedil;a de todos os candidatos,
                    ao sorteio que indicar&aacute; a ordem de apresenta&ccedil;&atilde;o para a prova de
                    degusta&ccedil;&atilde;o e de servi&ccedil;o.</p>
                <p>&nbsp;</p>
                <p>2.2.3. A prova de degusta&ccedil;&atilde;o e de servi&ccedil;o, realizada diante do J&uacute;ri de
                    Concurso, constar&aacute; de duas etapas:</p>
                <p>&nbsp;</p>
                <p>2.2.3.1. Prova de degusta&ccedil;&atilde;o t&eacute;cnica &agrave;s cegas de 05 (cinco) liquidos,
                    selecionados previamente pela Comiss&atilde;o Did&aacute;tica e que ter&aacute; a
                    pondera&ccedil;&atilde;o 3 (tr&ecirc;s) para a composi&ccedil;&atilde;o da nota final do Concurso;
                </p>
                <p>&nbsp;</p>
                <p>2.2.3.2. Prova de servi&ccedil;o, em que ser&aacute; simulado o servi&ccedil;o de um restaurante e
                    que ter&aacute; a pondera&ccedil;&atilde;o 6 (seis) para a nota final do Concurso. Durante a prova
                    de servi&ccedil;o ser&atilde;o efetuadas pelos convivas tr&ecirc;s perguntas ao candidato.
                    Ser&aacute; ainda apresentada ao candidato uma Carta de Vinhos que apresentar&aacute; at&eacute; 10
                    (dez) incorre&ccedil;&otilde;es a serem identificadas e, se for o caso, corrigidas. A Prova da Carta
                    ter&aacute; a pondera&ccedil;&atilde;o 1 (um) para apura&ccedil;&atilde;o da nota final (0,1 para
                    cada resposta certa).</p>
                <p>&nbsp;</p>
                <p>2.2.4. O candidato dispor&aacute; de 30 (trinta) minutos para a realiza&ccedil;&atilde;o da
                    degusta&ccedil;&atilde;o t&eacute;cnica e da prova de servi&ccedil;o.</p>
                <p>&nbsp;</p>
                <p>2.2.5. Decorridos trinta minutos, o Presidente do J&uacute;ri encerrar&aacute; a
                    participa&ccedil;&atilde;o do candidato que receber&aacute; a pontua&ccedil;&atilde;o apenas
                    at&eacute; aquele momento.</p>
                <p>&nbsp;</p>
                <p>2.2.6. A partir de 15 minutos, um dos membros do J&uacute;ri alertar&aacute; o candidato, a cada
                    cinco minutos, do tempo ainda dispon&iacute;vel para conclus&atilde;o de sua
                    participa&ccedil;&atilde;o.</p>
                <p>&nbsp;</p>
                <p>2.2.7. Durante a realiza&ccedil;&atilde;o da prova de degusta&ccedil;&atilde;o e de servi&ccedil;o a
                    plateia dever&aacute; permanecer em sil&ecirc;ncio.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>2.2.8. A prova de servi&ccedil;o dever&aacute; obedecer a seguinte sistem&aacute;tica:<br /><br />
                </p>
                <ol>
                    <li>ser&aacute; colocada uma mesa em frente ao j&uacute;ri;</li>
                    <li>os convivas estar&atilde;o sentados &agrave; mesa e o concorrente dever&aacute; montar a mesa,
                        apresentar o menu, aguardar a pedida da comida pelos convivas e recomendar as bebidas mais
                        indicadas para cada prato escolhido; explicando ao J&uacute;ri do Concurso as raz&otilde;es de
                        sua escolha, justificando-a tecnicamente &agrave; luz dos preceitos de enogastronomia da ABS e
                        da ASI;</li>
                    <li>o concorrente dever&aacute; fazer o servi&ccedil;o dos vinhos tendo em conta os preceitos que
                        devem ser seguidos para cada tipo de vinho, incluindo a escolha adequada das ta&ccedil;as, antes
                        e depois de os abrir;</li>
                    <li>necessariamente dever&aacute; ser aberto um espumante, aberto e decantado um vinho tinto, e
                        poder&aacute; ser solicitada a realiza&ccedil;&atilde;o de um cocktail cl&aacute;ssico (ver
                        lista abaixo), de acordo com as normas da ABS-Brasil;</li>
                    <li>durante o servi&ccedil;o dever&atilde;o ser respondidas as perguntas feitas pelos convivas.</li>
                </ol>
                <p>&nbsp;</p>
                <ol start="3">
                    <li><strong> APURA</strong><strong>&Ccedil;&Atilde;</strong><strong>O DAS NOTAS</strong></li>
                </ol>
                <p>&nbsp;</p>
                <p>3.1. Ap&oacute;s o t&eacute;rmino da apresenta&ccedil;&atilde;o do &uacute;ltimo candidato, os
                    jurados se reunir&atilde;o para apurar o resultado da Prova do Concurso:</p>
                <p>&nbsp;</p>
                <ol>
                    <li>ser&aacute; apurada a nota da prova de degusta&ccedil;&atilde;o</li>
                    <li>ser&aacute; apurada a nota da prova de servi&ccedil;o</li>
                    <li>ser&atilde;o avaliadas as respostas &agrave;s perguntas dos convivas</li>
                </ol>
                <p>&nbsp;</p>
                <p>3.2. O vencedor ser&aacute; o candidato que obtiver a melhor nota, medida pela m&eacute;dia ponderada
                    das notas das provas realizadas pelo candidato &agrave; Concurso.</p>
                <p>&nbsp;</p>
                <ol start="4">
                    <li><strong> CORPO DE JURADOS</strong></li>
                </ol>
                <p>&nbsp;</p>
                <p>4.1. O j&uacute;ri ser&aacute; de total responsabilidade da Associa&ccedil;&atilde;o Brasileira de
                    Sommelier regional organizadora do Concurso em conjunto com a Comiss&atilde;o Did&aacute;tica e
                    Comit&ecirc; Diretor&nbsp;da ABS- Brasil.</p>
                <p>&nbsp;</p>
                <p>4.1.1. Os jurados devem fazer parte da Diretoria da ABS-Brasil, da ABS Regional ou de suas sub-sedes,
                    devendo ter comprovada experi&ecirc;ncia no julgamento de concursos organizados pela ABS-Brasil e
                    suas Regionais.</p>
                <p>&nbsp;</p>
                <ol start="5">
                    <li><strong> DISPOSI</strong><strong>&Ccedil;&Otilde;ES FINAIS</strong></li>
                </ol>
                <p>&nbsp;</p>
                <p>5.1. O valor da taxa de inscri&ccedil;&atilde;o ser&aacute; estipulado pela ABS Regional com
                    jurisdi&ccedil;&atilde;o no local do Concurso, respeitadas as peculiaridades regionais e as despesas
                    necess&aacute;rias para a realiza&ccedil;&atilde;o da prova.</p>
                <p>&nbsp;</p>
                <p>5.2.&nbsp; As taxas de inscri&ccedil;&atilde;o dever&atilde;o ser revertidas igualmente para a ABS
                    regional e a ABS-Brasil.</p>
                <p>5.3.&nbsp; As justificativas, inclusive m&eacute;dicas, para eventuais aus&ecirc;ncias de candidatos
                    previamente inscritos, ser&atilde;o recebidas e julgadas pela Diretoria da ABS-Brasil, visando
                    futuras inscri&ccedil;&otilde;es, mas n&atilde;o implicar&aacute; em devolu&ccedil;&atilde;o da taxa
                    j&aacute; efetuada.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>Lista de cocktails cl&aacute;ssicos</strong></p>
                <p>&nbsp;</p>
                <p><strong>MOSCOW MULE</strong></p>
                <p>50 ml de vodka e top-up com ginger beer</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de lim&atilde;o Tahiti</p>
                <p>&nbsp;</p>
                <p><strong>DRY MARTINI</strong></p>
                <p>60 ml de gim 15 ml de vermute dry</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: azeitona e/ ou twist de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>WHITE LADY </strong></p>
                <p>50 ml gim,15 ml triple sec, 15 ml lim&atilde;o siciliano e 15 ml clara de ovo</p>
                <p>T&eacute;cnica de Preparo: batido</p>
                <p>Tipo de Copo; ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>NEGRONI </strong></p>
                <p>30 ml de gim, 30 ml vermute aperitivo e 30 ml vermute rosso</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo rocks</p>
                <p>Guarni&ccedil;&atilde;o: twist de laranja bahia</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>PALOMA</strong></p>
                <p>50 ml de tequila, 30 ml de grapefruit, 20 ml de lim&atilde;o tahiti,15 ml de xarope de a&ccedil;ucar,
                    1 drop de orange bitter e top-up com club soda</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de grapefruit</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong>MARGARITA</strong></p>
                <p>50 ml de tequila, 30 ml de triple sec e 30 ml de lim&atilde;o tahiti</p>
                <p>T&eacute;cnica de Preparo: batido</p>
                <p>Tipo de Copo: ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o</p>
                <p>&nbsp;</p>
                <p><strong>TEQUILA SUNRISE</strong></p>
                <p>50 ml de tequila com suco de laranja bahia e um dash de grenadine</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de laranja</p>
                <p>&nbsp;</p>
                <p><strong>BLOODY MARY</strong></p>
                <p>50 ml de vodka, 80 ml de suco de tomate, 20 ml de suco de lim&atilde;o tahiti, 03 drops de tabasco,
                    06 drops de molho ingles, 1 pitada de sal e 1 pitada de mix de pimentas</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: copo rocks</p>
                <p>Guarni&ccedil;&atilde;o: sals&atilde;o e talo de aipo</p>
                <p>&nbsp;</p>
                <p><strong>BLOODY MARIA</strong></p>
                <p>50 ml de tequila, 100 ml de suco de tomate, 30 ml de suco de lim&atilde;o tahiti, 03 drops de
                    tabasco, 6 drops de molho ingles, 1 pitada de sal, 1 pitada de mix de pimentas</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de lim&atilde;o siciliano ou tahiti e tomates cereja</p>
                <p>&nbsp;</p>
                <p><strong>DAIQUIRI </strong></p>
                <p>50 ml de rum, 30 ml de lim&atilde;o tahiti e 20 ml xarope de a&ccedil;&uacute;car</p>
                <p>T&eacute;cnica de Preparo: batido</p>
                <p>Tipo de Copo: ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o tahiti</p>
                <p>&nbsp;</p>
                <p><strong>MOJITO</strong></p>
                <p>50 ml de rum, 30 ml de lim&atilde;o tahiti, 15 ml xarope de a&ccedil;&uacute;car, folhas de
                    hortel&atilde; e top-up com club soda</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: ramo de hortel&atilde; e fatia de lim&atilde;o tahiti</p>
                <p>&nbsp;</p>
                <p><strong>DARK STORM </strong></p>
                <p>50 ml de rum e top-up com ginger beer</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de lim&atilde;o Tahiti</p>
                <p>&nbsp;</p>
                <p><strong>ROB ROY </strong></p>
                <p>60 ml de Whisky, 30 ml vermute rosso, 3 drops de angustura bitter</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: cereja e/ou twist de laranja bahia</p>
                <p>&nbsp;</p>
                <p><strong>BLOOD AND SAND</strong></p>
                <p>30 ml de Whisky, 30 ml de licor de cereja, 30 ml de vermute rosso, 30 ml de suco de laranja bahia</p>
                <p>T&eacute;cnica de Preparo: batido</p>
                <p>Tipo de Copo: ta&ccedil;a coupe</p>
                <p>Guarni&ccedil;&atilde;o: twist de laranja bahia</p>
                <p>&nbsp;</p>
                <p><strong>HORS E'S NECK </strong></p>
                <p>50 ml de whisky e top-up com com ginger ale</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo longo</p>
                <p>Guarni&ccedil;&atilde;o: fatia de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>RUSTY NAIL </strong></p>
                <p>60 ml de whisky e 15 ml licor de whisky, mel e ervas</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo rocks</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>MANHANTTAN</strong></p>
                <p>60 ml de Whiskey, 30 ml de vermute rosso, 3 drops de angustura bitter</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: ta&ccedil;a martini</p>
                <p>Guarni&ccedil;&atilde;o: cereja e/ou twist de laranja bahia</p>
                <p>&nbsp;</p>
                <p><strong>BOULEVARD|ER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </strong></p>
                <p>45 ml de Whiskey, 30ml vermute aperitivo e 30ml vermute rosso</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: ta&ccedil;a coupe</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>OLD FASHIONED </strong></p>
                <p>60 ml de Whiskey, 01 torr&atilde;o de a&ccedil;&uacute;car, 3 drops de angustura bitter</p>
                <p>T&eacute;cnica de Preparo: mexido</p>
                <p>Tipo de Copo: copo rocks</p>
                <p>Guarni&ccedil;&atilde;o: twist de lim&atilde;o siciliano</p>
                <p>&nbsp;</p>
                <p><strong>MINT JULEP</strong></p>
                <p>60 ml de Whiskey, 5 ml xarope de a&ccedil;&uacute;car e 0-12 folhas de hortel&atilde;</p>
                <p>T&eacute;cnica de Preparo: montado</p>
                <p>Tipo de Copo: copo julep</p>
                <p>Guarni&ccedil;&atilde;o: ramo de hortel&atilde;</p>


            </div>
            <label>
                <input type="checkbox">
                <span>Li e concordo com os termos do Regulamento</span>
            </label>

            {!! $turma->botao_comprar !!}
        </div>

        <div class="termsclose"></div>
    </div>

    <main class="main">
        <section class="container-fluid s_detail">
            <div class="container-fav">
                <div class="card-button">
                </div>
                <div class="card-area">
                    <div class="card-relative">
                        <div class="_card">
                            <div class="_top">
                                @if ($turma->aberto)
                                    Inscrições Abertas
                                @else
                                    Inscrições Encerradas
                                @endif
                            </div>
                            <main>
                                <div class="row">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/calendar.svg') }}" alt="">
                                    </div>
                                    {{ date('d.m.Y', strtotime($turma->data)) }}
                                </div>

                                <div class="row">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/user_2.svg') }}" alt="">
                                    </div>
                                    {{ $turma->vagas }} vagas
                                </div>
                                <div class="row">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/alarm.svg') }}" alt="">
                                    </div>
                                    {{ config('globals.periodos')[$turma->periodo] }},
                                    {{ date('H:i', strtotime($turma->horario)) }}
                                </div>
                                <div class="row">
                                    <div class="svg">
                                        <img src="{{ asset('site/img/MapPin.svg') }}" alt="">
                                    </div>
                                    {{ $turma->local }}
                                </div>
                                <div class="row">
                                    @if ($turma->aberto)
                                        <img style="cursor: pointer" id="showterms"
                                            src="{{ asset('site/img/sistema/button_aulas-1.svg') }}">
                                    @else
                                        <button>Encerrado</button>
                                    @endif
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav-component @if ($aba == 'detalhes') _active @endif">
                        <a href="{{ route('site.curso', ['slug' => $curso->slug]) }}">
                            <div class="svg">
                                @if ($aba == 'detalhes')
                                    <img src="{{ asset('site/img/TextAlignLeftActive.svg') }}" alt="">
                                @else
                                    <img src="{{ asset('site/img/TextAlignLeft.svg') }}" alt="">
                                @endif
                            </div>
                            <span>Detalhes</span>
                        </a>
                    </div>
                    <div class="nav-component @if ($aba == 'programacao') _active @endif">
                        <a href="{{ route('site.curso.programacao', ['slug' => $curso->slug]) }}">
                            <div class="svg">
                                @if ($aba == 'programacao')
                                    <img src="{{ asset('site/img/FolderActive.svg') }}" alt="">
                                @else
                                    <img src="{{ asset('site/img/FolderNotchOpen.svg') }}" alt="">
                                @endif
                            </div>
                            <span>Programação</span>
                        </a>
                    </div>
                    <div class="nav-component @if ($aba == 'instrutores') _active @endif">
                        <a href="{{ route('site.curso.instrutores', ['slug' => $curso->slug]) }}">
                            <div class="svg">
                                @if ($aba == 'instrutores')
                                    <img src="{{ asset('site/img/UserActive.svg') }}" alt="">
                                @else
                                    <img src="{{ asset('site/img/user.svg') }}" alt="">
                                @endif
                            </div>
                            <span>Instrutores</span>
                        </a>
                    </div>
                    <div class="nav-component @if ($aba == 'local') _active @endif">
                        <a href="{{ route('site.curso.local', ['slug' => $curso->slug]) }}">
                            <div class="svg">
                                @if ($aba == 'local')
                                    <img src="{{ asset('site/img/PinActive.svg') }}" alt="">
                                @else
                                    <img src="{{ asset('site/img/MapPinLine.svg') }}" alt="">
                                @endif
                            </div>
                            <span>Local</span>
                        </a>
                    </div>
                </nav>
            </div>

            @switch($aba)
                @case('detalhes')
                    @include('site.curso-detalhes')
                @break;
                @case('local')
                    @include('site.curso-local')
                @break;
                @case('programacao')
                    @include('site.curso-programacao')
                @break;
                @case('instrutores')
                    @include('site.curso-instrutores')
                @break;

                @default
            @endswitch

        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
