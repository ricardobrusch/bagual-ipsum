<?php

$texto = array(
    'Os pares vão marcando e logo desvirando, e a prenda do meu lado faz voltinhas pela mão! O chotes carreirinho é um chotes bonitinho e todos vão cantando a marcação. A gaita vai gemendo meu coração querendo maricota mais faceira das chinocas do rincão; o chotes carreirinho é um chotes arrastadinho e todos vão cantando a marcação!',
    'Uma vaneira da campanha ou da fronteira trás a alma galponeira de quem vive no rigor. O pouco importa se é serrana ou missioneira, se levanta polvadeira nos fandangos do interior. Uma bailanta sem vaneira vira em nada, é uma estância sem eguada meu patrão, é rodeio sem gineteada meu amigo gaúcho sem chimarrão. Mas quando salta uma vaneira da cordeona a alma fica redomona meu irmão, e a peonada se embala e vai pra sala já começa o calorão.',
    'Não me perguntes onde fica o alegrete, segue o rumo do teu próprio coração. Cruzarás pela estrada algum ginete e ouvirás toque de gaita e de violão. Pra quem chega de rosário ao fim da tarde ou quem vem de uruguaiana de manhã, tem o sol como uma brasa que ainda arde mergulhado no rio Ibirapuitã. Ouve o canto gauchesco e brasileiro desta terra que eu amei desde guri, flor de tuna, camoatim de mel campeiro, pedra moura das quebradas do Inhanduí',
    'Das pedras da beira da sanga da cor da pitanga eu vi uma flor, tão linda mas nem sabe ainda que é flor de menina promessa de amor. Morena da cor da sucena tem pena do guasca que vem te espiar, do guasca que a noite levanta te chama e te canta na ânsia de amar. Morena tu és tão charmosa tão linda e cheirosa que a flor do jardim. Morena da querência minha, tu és a rainha que eu quero pra mim.',
    'Vejo uma tropa que passa naquela estrada no passo leva a boiada vai descendo o chapadão, e o madrinheiro na frente com o cargueiro pra fazer o carreteiro naquele fogo de chão. Vai o tropeiro na imensidão desse pampa, bebendo canha na guampa e o amargo chimarrão. Finda a tarefa, deixa o gado na charqueada, levanta de madrugada e faz o fogo de chão. Volta o tropeiro rever a sua gaúcha , tem um laço que lhe puxa pra um baile de galpão, e o gaiteiro puxa o fole da cordeona, e a peonada canta verso perto do fogo de chão.',
    'Boleio a perna e vou direto pro retoço, quanto mais quente o alvoroço, muito mais me sinto afoito. E o chinaredo, que de muito me conhece, sabe que pedindo desce, meu facão na "28". Remancheio num boteco ali nos trilhos, enquanto no bebedouro mato a sede do tordilho, ouço mugindo o barulho da cordeona, e a velha porca rabona, repousando no salão. Quem nunca falta é um índio curto e grosso, de apelido Pescoço, de rabona ao querendão.',
    'A tropa vinha estendida pastando no corredor, eu empurrava a culatra também fazia fiador num bagual gordo e delgado arisco e corcoveador que se assustava da estaca e da sombra do maneador. É brabo a vida de um taura que só trabalha de peão, nisso uma lebre dispara debaixo de um macegão meu pingo só deu um coice escondendo a cara nas mãos, saiu sacudindo o toso e cravou o focinho no chão.',
    'Quem vê de longe diz que é o taura da campanha, traz na figura a própria estampa do rincão. Mate cevado e uma madera a meia espalda e bem pilchado pra dizer que é gauchão. Mas quando está sozinho em seu apartamento esquece o mate, se veste igual maloquero. Só bota pilcha quando é dia de rodeio, estufa o peito e fala alto: Eu sou campeiro! Cheio de manha, estiloso e malandrão, cento por cento é o gauchão de apartamento.',
    'Aprendi a ginetear no balanço da canoa e dar meu tiro de laço tarrafeando na lagoa. Cada onda que se vem e uma lembrança que vôa, então eu sorvo um amargo com aquela caninha boa. Trago a cultura açoriana no meu jeito de cantar, mas quando ronca a cordeona já saio tirando par. Asso no mesmo braseiro a tainha e o costilhar, toldo o pingo e puxo a ponta nas cavalgadas do mar. E quando alguém me pergunta donde vem este bagual, com pegadas de marujo couro curtido de sal, respondo meio cantado por favor não leve a mal, mas reponto o gauchismo pras bandas do litoral.',
    'E madrugada ganho o rumo do potreiro, que o bragado piqueteiro sabe aonde dorme a tropilha. Começa o dia na fresca da escuridão mas logo o sol de verão, nos vem rachando o sombreiro. O capataz ! Me chamo aqui da estancia que sou de toda confiança, e me vim pra ganha uns pila de peão por dia. Com boia arreio e galpão nesta parelha de alazão, eu não vejo hora ou distância. ',
    'Vou contar de um casamento que eu fui lá pra Mussum, a cumadre Nheca Nheca e o cumpadre Vari Fum. Nasceu um guri bem lindo, o problema era só um: Qual é o nome desse sem vergonha de sobrenome Nheco Fum. Nheco, nheco vari, nheco nheco fum! Isso que é gaiteiro bom,seu, é não aquelas porquera que eu tenho lá em casa! Vi uma cruza de araganu mistura com xirum, nasceu um gaiteiro guapo pra tocar num sururu, sapecava um acordeona sem escutar o zum zum, mas quando ele abria o peito só se ouvia nheco nheco fum.',
    'Esta mocinha cocota já pisou nas minhas bota, nestes bailes de fronteira com seu vestido de prenda cheia de flores e renda, era louca de faceira. Mas agora desgarrada, já não anda engarupada sobre as anca do meu flete pois se perdeu por aí dentro duma calça Lee. Sempre mascando chiclete, ô guria te endireita, tu já ta uma moça feita pra bancar americana. Por causa do tal de rock, tu vives em Nova York, sem sair de Uruguaiana. Ela é cheia de fluflu, pois não dança com xiru nNem índio de calça larga.',
);

$nroParagrafos = $_GET['nroParagrafos'];

if ($nroParagrafos < 1) { $nroParagrafos = 1; }
if ($nroParagrafos > 12) { $nroParagrafos = 12; }

$chavesTexto = array_rand($texto, $nroParagrafos);

$paragrafosEscolhidos = array();

foreach ($chavesTexto as $chave) {
    $paragrafosEscolhidos[] = $texto[$chave];
}

echo json_encode(array('resultado' => $paragrafosEscolhidos));