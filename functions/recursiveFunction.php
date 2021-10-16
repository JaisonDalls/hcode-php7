<?php

    $hierarquia = array(
        array(
            'setor'=>'Consumo Ciclico',
            'subsetor'=>array(
                array(
                    'subsetor'=>'Tecidos, Vetuario e Calcados',
                    'segmento'=>array(
                        array(
                            'segmento'=>'Acessorios',
                            'ativo'=>array(
                                array(
                                    'ativo'=>'MNDL3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Mundial',
                                        'valor_atual'=>57.95
                                    )
                                ),
                                array(
                                    'ativo'=>'VIVA3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Vivara',
                                        'valor_atual'=>29.41
                                    )
                                ),
                                array(
                                    'ativo'=>'TECN3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Technos',
                                        'valor_atual'=>3.64
                                    )
                                ),
                            )
                        ),
                        array(
                            'segmento'=>'Calcados',
                            'ativo'=>array(
                                array(
                                    'ativo'=>'CAMB3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Cambuci',
                                        'valor_atual'=>4.70
                                    )
                                ),
                                array(
                                    'ativo'=>'ALPA3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Alpargatas',
                                        'valor_atual'=>40.00
                                    )
                                ),
                                array(
                                    'ativo'=>'GRND3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Grandene',
                                        'valor_atual'=>9.20
                                    )
                                ),
                                array(
                                    'ativo'=>'VULC3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Vulcabras',
                                        'valor_atual'=>9.54
                                    )
                                )
                            )
                        ),

                    )
                )
            )
        ),
        array(
            'setor'=>'Consumo Nao Ciclico',
            'subsetor'=>array(
                array(
                    'subsetor'=>'Tecidos, Vetuario e Calcados',
                    'segmento'=>array(
                        array(
                            'segmento'=>'Acessorios',
                            'ativo'=>array(
                                array(
                                    'ativo'=>'MNDL3',
                                    'detalhamento'=>array(
                                        'nome_empresa'=>'Mundial',
                                        'valor_atual'=>57.95
                                    )
                                )
                            )
                        )
                    )
                )
            )
        ),
        array(
            'setor'=>'Utilidade Publica'
        ),
        array(
            'setor'=>'Bens Industriais'
        ),
        array(
            'setor'=>'Materiais Basicos'
        ),
        array(
            'setor'=>'Financeiros e Outros'
        ),
        array(
            'setor'=>'Tecnologia da Informacao'
        ),
        array(
            'setor'=>'Saude'
        ),
        array(
            'setor'=>'Petroleo, Gas e Biocombustiveis'
        ),
        array(
            'setor'=>'Comunicacoes'
        )
    );

    function showJob(array $data){
        $html="<ul>";
        $setores = $data;
        foreach($setores as $setor){
            $html.="<li>".$setor['setor']."</li>";
            if(isset($setor['subsetor']) && count($setor['subsetor']) > 0 ){
                $html.="<ul>";
                $subsetores = $setor['subsetor'];
                foreach($subsetores as $subsetor){
                    $html.="<li>".$subsetor['subsetor']."</li>";
                    if(isset($subsetor['segmento']) && count($subsetor['segmento']) > 0 ){
                        $html.="<ul>";
                        $segmentos = $subsetor['segmento'];
                        foreach($segmentos as $segmento){
                            $html.="<li>".$segmento['segmento']."</li>";
                            if(isset($segmento['ativo']) && count($segmento['ativo']) > 0 ){
                                $html.="<ul>";
                                $ativos = $segmento['ativo'];
                                foreach($ativos as $ativo){
                                    $html.="<li>".$ativo['ativo']."</li>";
                                    if(isset($ativo['detalhamento']) && count($ativo['detalhamento']) > 0 ){
                                        $html.="<ul>";
                                        $detalhamento = $ativo['detalhamento'];
                                        foreach($detalhamento as $detalhe){
                                            $html.="<li>".$detalhe."</li>"; 
                                        }
                                        $html.="</ul>";
                                    }
                                }
                                $html.="</ul>";
                            }
                        }
                        $html.="</ul>";  
                    } 
                }
                $html.="</ul>";
            }
        }
        $html.="</ul>";

        return $html;
    }

    // echo json_encode($hierarquia['nome_cargo']);
    echo showJob($hierarquia);

?>