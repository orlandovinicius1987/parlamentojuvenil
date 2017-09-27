<?php

namespace App\Data\Entities;

use Illuminate\Support\Collection;

class Training
{
    public static function find($id)
    {
        return static::all()->where('id', $id)->first();
    }

    public static function all()
    {
        return Collection::make([
            2017 => [
                [
                    'name' => 'Aula 1',

                    'id' => '2017.1',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 1- Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/files/pj2017/images/video-aula1.jpg',
                                'video-url' => 'https://www.youtube.com/embed/RgrZeM9CK7Q',
                                'document-url' => '/files/pj2017/images/video-aula1.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' => '01 - Introdução aos Poderes Constituídos e ao Processo Legislativo',
                                'type' => 'document',
                                'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/pj2017/images/capacitacao/apostila01.jpg',
                                'video-url' => 'https://www.youtube.com/watch?v=RgrZeM9CK7Q',
                                'document-url' => '/files/apps/parlamentojuvenil/site/2017/capacitation/ApresentacaoParlamentoJuvenil2017-ParteI.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.1.001',
                                'type' => 'quiz',
                                'questions' =>
                                    [
                                        [
                                            'question' => 'Quais são os três Poderes da República Federativa do Brasil?',
                                            'answers' => [
                                                'a' => 'Administrativo, Executivo e Parlamentar.',
                                                'b' => 'Legislativo, Executivo e Administrativo.',
                                                'c' => 'Judiciário, Executivo e Parlamentar.',
                                                'd' => 'Executivo, Judiciário e Legislativo. ',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.1.002',
                                            'type' => 'quiz',
                                            'question' => 'O Deputado Estadual possui competência para legislar sobre:',
                                            'answers' => [
                                                'a' => 'Salário de servidores.',
                                                'b' => 'Polícia Militar.',
                                                'c' => 'Criação de cargos.',
                                                'd' => 'Educação e cultura.',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.1.003',
                                            'type' => 'quiz',
                                            'question' => 'Qual destas não se enquadra no conceito de proposição legislativa:',
                                            'answers' => [
                                                'a' => 'Projeto de Lei.',
                                                'b' => 'Projeto de Resolução.',
                                                'c' => 'Projeto de Indicação Legislativa.',
                                                'd' => 'Atas.',
                                            ],
                                            'correct' => 'a',
                                        ],


                                        [
                                            'id' => 'quiz.1.004',
                                            'type' => 'quiz',
                                            'question' => 'Não serão admitidas proposições:',
                                            'answers' => [
                                                'a' => 'Que contenham expressões ofensivas.',
                                                'b' => 'Que seja redigidas de forma concisa. ',
                                                'c' => 'Que sejam redigidas de forma coesa.',
                                                'd' => 'Que sejam redigidas em termos explícitos e claros. ',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.1.005',
                                            'type' => 'quiz',
                                            'question' => 'Qual a sequência básica correta do processo legislativo:',
                                            'answers' => [
                                                'a' => 'Criação da proposição - protocolo - sanção - tramitação pelas comissões - aprovação',
                                                'b' => 'Publicação - discussão - criação da proposição - votação - sanção',
                                                'c' => 'Criação da proposição - protocolo - tramitação pelas comissões - inclusão na ordem do dia - Votação',
                                                'd' => 'Discussão - publicação - criação da proposição - iniciativa',
                                            ],
                                            'correct' => 'a',
                                        ],
                                    ],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Aula 2',

                    'id' => '2017.2',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 2 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => '',
                                'thumb-url' => '/files/pj2017/images/video-aula2.jpg',
                                'video-url' => 'https://www.youtube.com/embed/_sgtPTi-1z4',
                                'document-url' => '/files/pj2017/images/video-aula2.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' => '02 - Introdução à Técnica Legislativa',
                                'type' => 'document',
                                'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/pj2017/images/capacitacao/apostila02.jpg',
                                'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                                'document-url' => '/files/apps/parlamentojuvenil/site/2017/capacitation/ApresentacaoParlamentoJuvenil2017-ParteII.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.2.001',
                                'type' => 'quiz',
                                'questions' =>
                                    [
                                        [
                                            'question' => 'O que é proposição legislativa?',
                                            'answers' => [
                                                'a' => 'Proposição é toda matéria sujeita à deliberação da Assembleia ou de suas comissões, conforme o caso.',
                                                'b' => 'Proposição é todo texto arquivado pelo Poder Legislativo. ',
                                                'c' => 'Proposição é todo ato do Executivo que objetiva a criação de direitos. ',
                                                'd' => 'Proposição é todo andamento processual aprovado na Assembleia Legislativa.',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.2.002',
                                            'type' => 'quiz',
                                            'question' => 'Qual a divisão obrigatória das proposições legislativas?',
                                            'answers' => [
                                                'a' => 'Artigos, periódicos e seções.',
                                                'b' => 'Linhas, parágrafos e artigos.',
                                                'c' => 'Artigos, parágrafos e incisos.',
                                                'd' => 'Incisos, artigos e numeros. ',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.2.003',
                                            'type' => 'quiz',
                                            'question' => 'Como são divididas as leis?',
                                            'answers' => [
                                                'a' => 'Parte preliminar - Corpo da Lei - Parte Final',
                                                'b' => 'Parte inicial - Meio - Fim',
                                                'c' => 'Início - Capítulo - Encerramento',
                                                'd' => 'Endereçamento - Preâmbulo - Encerramento',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.2.004',
                                            'type' => 'quiz',
                                            'question' => 'O que é Ementa?',
                                            'answers' => [
                                                'a' => 'É o mesmo que artigo de lei.',
                                                'b' => 'É a parte de encerramento da lei.',
                                                'c' => 'É o resumo da ideia do Projeto de Lei.',
                                                'd' => 'É o número da lei. ',
                                            ],
                                            'correct' => 'a',
                                        ],

                                        [
                                            'id' => 'quiz.2.005',
                                            'type' => 'quiz',
                                            'question' => 'O que deve conter na Parte Final de um Projeto de Lei?',
                                            'answers' => [
                                                'a' => 'Cláusula de Vigência e Revogação.',
                                                'b' => 'Cláusula de abertura e inovação.',
                                                'c' => 'Vigência e protocolo.',
                                                'd' => 'Cláusula de encerramento. ',
                                            ],
                                            'correct' => 'a',
                                        ],
                                    ],
                            ],
                        ],
                    ],
                ],
            ],

            2016 => [
                [
                    'name' => 'Aula 1',

                    'id' => '2016.1',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 1- Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/files/pj2016/images/video-aula1.jpg',
                                'video-url' => 'https://www.youtube.com/embed/RgrZeM9CK7Q',
                                'document-url' => '/files/pj2016/images/video-aula1.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' => '01 - Introdução aos Poderes Constituídos e ao Processo Legislativo',
                                'type' => 'document',
                                'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/pj2016/images/capacitacao/apostila01.jpg',
                                'video-url' => 'https://www.youtube.com/watch?v=RgrZeM9CK7Q',
                                'document-url' => '/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil2016-ParteI.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.1.001',
                                'type' => 'quiz',
                                'questions' =>
                                [
                                    [
                                        'question' => 'Quais são os três Poderes da República Federativa do Brasil?',
                                        'answers' => [
                                            'a' => 'Administrativo, Executivo e Parlamentar.',
                                            'b' => 'Legislativo, Executivo e Administrativo.',
                                            'c' => 'Judiciário, Executivo e Parlamentar.',
                                            'd' => 'Executivo, Judiciário e Legislativo. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.002',
                                        'type' => 'quiz',
                                        'question' => 'O Deputado Estadual possui competência para legislar sobre:',
                                        'answers' => [
                                            'a' => 'Salário de servidores.',
                                            'b' => 'Polícia Militar.',
                                            'c' => 'Criação de cargos.',
                                            'd' => 'Educação e cultura.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.003',
                                        'type' => 'quiz',
                                        'question' => 'Qual destas não se enquadra no conceito de proposição legislativa:',
                                        'answers' => [
                                            'a' => 'Projeto de Lei.',
                                            'b' => 'Projeto de Resolução.',
                                            'c' => 'Projeto de Indicação Legislativa.',
                                            'd' => 'Atas.',
                                        ],
                                        'correct' => 'a',
                                    ],


                                    [
                                        'id' => 'quiz.1.004',
                                        'type' => 'quiz',
                                        'question' => 'Não serão admitidas proposições:',
                                        'answers' => [
                                            'a' => 'Que contenham expressões ofensivas.',
                                            'b' => 'Que seja redigidas de forma concisa. ',
                                            'c' => 'Que sejam redigidas de forma coesa.',
                                            'd' => 'Que sejam redigidas em termos explícitos e claros. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.005',
                                        'type' => 'quiz',
                                        'question' => 'Qual a sequência básica correta do processo legislativo:',
                                        'answers' => [
                                            'a' => 'Criação da proposição - protocolo - sanção - tramitação pelas comissões - aprovação',
                                            'b' => 'Publicação - discussão - criação da proposição - votação - sanção',
                                            'c' => 'Criação da proposição - protocolo - tramitação pelas comissões - inclusão na ordem do dia - Votação',
                                            'd' => 'Discussão - publicação - criação da proposição - iniciativa',
                                        ],
                                        'correct' => 'a',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Aula 2',

                    'id' => '2016.2',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 2 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => '',
                                'thumb-url' => '/files/pj2016/images/video-aula2.jpg',
                                'video-url' => 'https://www.youtube.com/embed/_sgtPTi-1z4',
                                'document-url' => '/files/pj2016/images/video-aula2.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' => '02 - Introdução à Técnica Legislativa',
                                'type' => 'document',
                                'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' => '/pj2016/images/capacitacao/apostila02.jpg',
                                'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                                'document-url' => '/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil2016-ParteII.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.2.001',
                                'type' => 'quiz',
                                'questions' =>
                                [
                                    [
                                        'question' => 'O que é proposição legislativa?',
                                        'answers' => [
                                            'a' => 'Proposição é toda matéria sujeita à deliberação da Assembleia ou de suas comissões, conforme o caso.',
                                            'b' => 'Proposição é todo texto arquivado pelo Poder Legislativo. ',
                                            'c' => 'Proposição é todo ato do Executivo que objetiva a criação de direitos. ',
                                            'd' => 'Proposição é todo andamento processual aprovado na Assembleia Legislativa.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.002',
                                        'type' => 'quiz',
                                        'question' => 'Qual a divisão obrigatória das proposições legislativas?',
                                        'answers' => [
                                            'a' => 'Artigos, periódicos e seções.',
                                            'b' => 'Linhas, parágrafos e artigos.',
                                            'c' => 'Artigos, parágrafos e incisos.',
                                            'd' => 'Incisos, artigos e numeros. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.003',
                                        'type' => 'quiz',
                                        'question' => 'Como são divididas as leis?',
                                        'answers' => [
                                            'a' => 'Parte preliminar - Corpo da Lei - Parte Final',
                                            'b' => 'Parte inicial - Meio - Fim',
                                            'c' => 'Início - Capítulo - Encerramento',
                                            'd' => 'Endereçamento - Preâmbulo - Encerramento',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.004',
                                        'type' => 'quiz',
                                        'question' => 'O que é Ementa?',
                                        'answers' => [
                                            'a' => 'É o mesmo que artigo de lei.',
                                            'b' => 'É a parte de encerramento da lei.',
                                            'c' => 'É o resumo da ideia do Projeto de Lei.',
                                            'd' => 'É o número da lei. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.005',
                                        'type' => 'quiz',
                                        'question' => 'O que deve conter na Parte Final de um Projeto de Lei?',
                                        'answers' => [
                                            'a' => 'Cláusula de Vigência e Revogação.',
                                            'b' => 'Cláusula de abertura e inovação.',
                                            'c' => 'Vigência e protocolo.',
                                            'd' => 'Cláusula de encerramento. ',
                                        ],
                                        'correct' => 'a',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }

    public static function byYear($year)
    {
        $values = self::all()[get_current_year($year)];

        foreach ($values as $key => $value)
        {
            $values[$key]['year'] = $year;
        }

        return Collection::make($values);
    }
}
