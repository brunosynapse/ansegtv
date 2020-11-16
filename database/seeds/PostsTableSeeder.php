<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => ' Por que no Brasil não tem arranha-céus?',
        'image' => 'porque-brasil-nao-tem-arranha-ceus.jpeg',
        'content' => `Quem vê a imponência do edifício Burj Khalifa Bin Zayid, o prédio mais alto do mundo com 828 metros de altura e 160 andares e que está no coração de Dubai, uma cidade dos Emirados Árabes Unidos, não imagina que esse tipo de construção tem muito mais a ver com a qualidade de vida das pessoas, com mais sustentabilidade e respeito ao meio ambiente, do que, propriamente, com o luxo.
Os arranha-céus são considerados pela arquitetura moderna uma das formas mais eficientes para criar moradias às famílias e escritórios, pois estimulam o adensamento urbano. Quanto mais pessoas ocuparem uma mesma área, mais espaço haverá para elas nos centros das capitais com a criação de áreas verdes e parques, permitindo também maior permeabilidade do solo para o escoamento da água da chuva.
A verticalização das cidades tem mais a ver com meio ambiente do que a criação de habitações longe dos centros urbanos, segundo o engenheiro civil José Carlos Martins, presidente da Câmara Brasileira da Indústria da Construção (CBIC). Em setembro, ele discutiu os desafios do setor da construção na live promovida pelo Grupo de Economia da Infraestrutura e Soluções Ambientais da Fundação Getúlio Vargas (FGV).
“Ao construir habitações longe do centro, você está fazendo as pessoas se deslocarem todos os dias, gerando mais emissão de carbono”, diz Martins. “Agora quando se fala em verticalização, em construir um prédio mais alto, há um viés ideológico que não enxerga isso pelo lado efetivo, mas pelo lado capitalista, que seria a ideia de simplesmente faturar em cima das pessoas”. Para o presidente do CBIC, não é o viés ideológico que está em jogo, mas a solução para a melhor qualidade de moradia e de trabalho da população, por isso, os mitos da verticalização dos centros urbanos devem ser combatidos.
Todos ganham com mais oportunidades de verticalização no País. Hoje, as pessoas que mais podem desfrutar de uma cidade com mais infraestruturas e aliada ao meio ambiente é o município de Balneário Camboriú, em Santa Catarina. É nela que está localizado o prédio mais alto do País, com 66 andares e 234 metros de altura, e além de uma série de outros arranha-céus construídos ou em fase de construção. Aos habitantes de São Paulo, essa oportunidade está esquecida. A cidade brasileira mais populosa da América Latina possui o seu prédio mais alto com 171 metros e construído na década de 1950. Sem o adensamento adequado, a qualidade de vida das pessoas é baixa, pois o que mais se vê pela capital paulista é a maior ocupação por concreto, ausência de áreas verdes e menor poder infiltração de água. As pessoas merecem uma cidade com mais avanço. Acompanhe Cidades e Meio Ambiente e descubra novidades e curiosidades para melhoria das pessoas.
`,
        'description' => 'Verticalização e construções mais altas podem garantir às pessoas mais qualidade de vida porque são formas mais eficiente de adensamento urbano e porque contribui para a ampliação as áreas verdes',
        'category_id' => 5,
        'path' => 'porque-brasil-nao-tem-arranha-ceus',
        'status' => 'Publicado'
        ]);

        Post::create([
            'title' => 'Por que São Paulo tem tantos postos de gasolina abandonados?',
            'image' => 'porque-sao-paulo-tem-tantos-postos-abandonados.jpeg',
            'content' => `<p>O setor de postos de combust&iacute;veis &eacute; uma das atividades econ&ocirc;micas que concentra o maior risco aos moradores vizinhos a eles e ao meio ambiente. Isso porque esses estabelecimentos podem causar vazamentos de contaminantes do petr&oacute;leo no solo. O risco &eacute; maior porque o setor possui o maior n&uacute;mero de empresas entre os demais setores com potencial de risco ao meio ambiente.</p>
<p>No Estado mais populoso do Pa&iacute;s, S&atilde;o Paulo, at&eacute; o fim de dezembro de 2019, foram listados 4.475 postos de combust&iacute;veis sob a vigil&acirc;ncia ambiental, segundo o relat&oacute;rio da Companhia Ambiental do Estado de S&atilde;o Paulo (Cetesb). Esse n&uacute;mero de postos corresponde a 71% do n&uacute;mero de todos os estabelecimentos que podem impactar o meio ambiente. No total, existem no Estado, 8.529 postos de abastecimento, segundo a Ag&ecirc;ncia Nacional do Petr&oacute;leo (ANP).</p>
<p><strong>Recupera&ccedil;&atilde;o &eacute; poss&iacute;vel</strong></p>
<p>As pessoas merecem estar seguras em seus lares e por passam, por isso &eacute; necess&aacute;ria uma fiscaliza&ccedil;&atilde;o permanente para evitar a contamina&ccedil;&atilde;o do solo desse tipo de estabelecimento que est&aacute; sempre pr&oacute;ximo &agrave;s moradias das pessoas. Para garantir o bom conv&iacute;vio com a vizinhan&ccedil;a, h&aacute; um plano de recupera&ccedil;&atilde;o e reabilita&ccedil;&atilde;o para reduzir ao m&aacute;ximo os n&iacute;veis de contamina&ccedil;&atilde;o provocado pela atividade dos postos.</p>
<p>Segundo o balan&ccedil;o da Cetesb, foram reabilitadas 1.775 &aacute;reas em 2019. O crescimento &eacute; de 23,18% em compara&ccedil;&atilde;o com 2018. A evolu&ccedil;&atilde;o &eacute; crescente, pois em 2014, o &oacute;rg&atilde;o contabilizou apenas 563 reabilita&ccedil;&otilde;es. Isso significa que, mesmo com atividades com potencial risco ao meio ambiente, h&aacute; um trabalho sendo feito para tornar mais seguras essas &aacute;reas.</p>
<p>Acompanhe o Cidades e Meio Ambiente para mais informa&ccedil;&otilde;es sobre o tema.</p>`,
            'description' => 'Até o final de 2019, 4.475 estabelecimentos estão sob vigilância da Companhia Ambiental do Estado de São Paulo (Cetesb)',
            'category_id' => 3,
            'path' => 'porque-sao-paulo-tem-tantos-posts',
            'status' => 'Publicado'
        ]);
        Post::create([
            'title' => 'Coleta seletiva no Brasil é complexa e para público seleto',
            'image' => 'coleta-seletiva-no-brasil-e-complexa-e-seleta.jpeg',
            'content' => `No Brasil, 73,1% do total de 5.570 municípios afirmam adotar algum tipo de coleta seletiva, segundo o estudo “Panorama dos resíduos sólidos no Brasil – 2018/2019”, da Associação Brasileira de Empresas de Limpeza Pública e Resíduos Especiais (Abrelpe). Parece uma boa notícia para as pessoas, mas nem tanto. Por trás desse alto porcentual, a verdade é que embora o serviço exista nas cidades, ele não é oferecido a todos os seus moradores. O serviço, em geral, é feito em regiões nobres das grandes capitais e muito distante da periferia.
“Enquanto o mundo fala em economia circular e avança na energia renovável a partir do resíduo, nós ainda temos um déficit no Brasil de lixão a céu aberto em todas as regiões e pouca coleta seletiva na cidade”, afirmou Carlos Silva Filho, diretor presidente da Abrelpe à reportagem do Estado de S.Paulo, no artigo “Os descaminhos do lixo”.
As pessoas ganhariam muito mais, primeiro, com a descomplicação da tarefa de separar o lixo. Para começar, segundo especialistas, poderíamos simplesmente esquecer os cinco tipos de lixeira coloridas de coleta (metal, vidro, plástico, papel e lixo orgânico) que estão espalhadas em estabelecimento como shoppings, escolas, supermercados e edifícios residenciais.
Para o País poder garantir às pessoas o direito à coleta seletiva eficiente bastaria apenas dois tipos de lixeira: uma para os resíduos secos e outra para os resíduos orgânicos.
Simplificar o processo de separação ajudaria a população a criar o hábito de separação. O lixo seco é composto por materiais potencialmente recicláveis, como papel, vidro, metal e plástico. O orgânico é o resíduo que não pode ser reciclado, mas pode ser reaproveitável na transformação em adubo para a agricultura e até geração de energia.
Continue acompanhado Cidades e Meio Ambiente para conhecer essas técnicas de reciclagem!`,
            'description' => 'As pessoas ganham mais só separando o lixo em apenas dois tipos – seco e orgânico! Esse é o primeiro passo para que todos possam ter direito a um serviço de coleta seletiva e não apenas os moradores de áreas nobres em algumas cidades',
            'category_id' => 9,
            'path' => 'coleta-seletiva-no-brasil-e-complexa-e-seleta',
            'status' => 'Publicado'
        ]);

        Post::create([
            'title' => 'Número preocupante: 40,5% do lixo ainda não possui destino correto e ameaça a saúde das pessoas no Brasil',
            'image' => 'lixo-nao-possui-destino-correto-e-ameaca-saude.jpeg',
            'content' => `<p>O Brasil produziu 79 milh&otilde;es de toneladas de lixo em 2018, segundo o estudo &ldquo;Panorama dos res&iacute;duos s&oacute;lidos no Brasil &ndash; 2018/2019&rdquo;, da Associa&ccedil;&atilde;o Brasileira de Empresas de Limpeza P&uacute;blica e Res&iacute;duos Especiais (Abrelpe). Em compara&ccedil;&atilde;o a 2017, o Pa&iacute;s produziu 1% a mais de lixo. Do total, 72,7 milh&otilde;es de toneladas foram devidamente coletadas, o que representa 92% do total.</p>
<p>Apesar da taxa expressiva de coleta, h&aacute; um dado que impacta e muito a qualidade de vida das pessoas, pois, a destina&ccedil;&atilde;o final ainda apresenta problemas graves. Dos 72,7 milh&otilde;es de toneladas coletadas, 59,5% tiveram destina&ccedil;&atilde;o correta &ndash; 43,3 milh&otilde;es de toneladas de lixo foram descartados em aterros sanit&aacute;rios. J&aacute; os 40,5% restantes &ndash; 29,5 milh&otilde;es de toneladas &ndash; foram despejados em locais inadequados, como lix&otilde;es ou aterros controlados.</p>
<p>E qual &eacute; a diferen&ccedil;a? O lix&atilde;o &eacute; uma &aacute;rea sem nenhum tipo de prepara&ccedil;&atilde;o ou tratamento. Com o tempo, as toneladas de res&iacute;duos acumuladas contaminam a &aacute;gua, o ar, o solo, o len&ccedil;ol fre&aacute;tico e atraem vetores de doen&ccedil;as, como germes patol&oacute;gicos, moscas, mosquitos, baratas e ratos.</p>
<p>Os aterros controlados s&atilde;o locais onde os res&iacute;duos s&atilde;o acumulados com algum tipo de controle, mas ainda assim contra as normas ambientais brasileiras. S&atilde;o &aacute;reas com um m&iacute;nimo de gest&atilde;o ambiental como isolamento, acesso restrito, cobertura dos res&iacute;duos com terra e controle de entrada de res&iacute;duos, mas n&atilde;o atendem &agrave;s recomenda&ccedil;&otilde;es da Pol&iacute;tica Nacional de Res&iacute;duos S&oacute;lidos. As duas modalidades, os lix&otilde;es e os aterros controlados, est&atilde;o com os dias contados e j&aacute; deveriam ter sido extintos, pois s&oacute; trazem risco &agrave; sa&uacute;de das pessoas e ao meio ambiente.</p>
<p>J&aacute; os aterros sanit&aacute;rios s&atilde;o locais espec&iacute;ficos, constru&iacute;dos para receber o lixo urbano. S&atilde;o &aacute;reas preparadas onde existe um sistema de impermeabiliza&ccedil;&atilde;o do solo, cobertura di&aacute;ria dos res&iacute;duos e tratamento de chorume. No Brasil, &eacute; o sistema mais adequado, de acordo com o Minist&eacute;rio do Meio Ambiente. Sabia que no futuro, as pessoas ganhar&atilde;o muito pois n&atilde;o conviver&atilde;o mais com nenhuma dessas estruturas? Quer saber sobre isso? Continue acompanhando <strong>Cidades e Meio Ambiente</strong>.</p>`,
            'description' => 'São 29,5 milhões de toneladas de resíduos sólidos urbanos que acabam sendo descartados em lugares inapropriados',
            'category_id' => 9,
            'path' => 'lixo-nao-possui-destino-correto-e-ameaca-saude',
            'status' => 'Publicado'
        ]);


    }
}
