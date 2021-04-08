<?php

//Função recursiva

$hierarquia = array(

array(
    'nome_cargo' => 'CEO',
    'subordinados' => array(
        //inicio: Diretor comercial
        array(
            'nome_cargo' => 'Diretor comercial',
            'subordinados' => array(
        //inicio:  Gerente de vendas
                array(
                    'nome_cargo' => 'Gerente de vendas',

                )
         //termino: Gerente de vendas
            )
        ),
        //termino: Diretor comercial
        //inicio: Diretor financeiro
        array(
            'nome_cargo' => 'Diretor Financeiro',
            'subordinados' => array(
        //inicio:  Gerente de contas a pagar
                array(
                    'nome_cargo' => 'Gerente de contas a pagar',
                    'subordinados' => array(
                        // inicio: Supervisor de pagamentos
                        'nome_cargo' => 'Supervisor de pagamentos'
                        // termino: Supervisor de pagamentos
                    )
                    ),
         //termino: Gerente de contas a pagar
         //inicio: Gerente de compras
                array(
                    'nome_cargo' => 'Gerente de compras',
                    'subordinados'=>array(
                        // inicio: Supervisor de suprimentos
                        array(
                        
                        'nome_cargo' => 'Supervisor de suprimentos',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Comprador'
                            )
                        )
                        
                        )
                    )
                    // termino: Supervisor de suprimentos
                )
         //termino: Gerente de compras
            )
        )
        //termino: Diretor financeiro
            )
        )
    
);

function exibe($cargos){

    $html = "<ul>";

    foreach ($cargos as $cargo) {
    
        $html .= "<li>";

        $html .= $cargo["nome_cargo"];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>"; 

    return $html;

}

echo exibe($hierarquia);