<?php
$extrato = array(
    "signowMSG" => array(
        "sonRS" => array(
            "fi" => array(
                "org" => "Ju Pagamento",
                    "fid"=> 260,
                ),
            ),
        ),
    'banknonMSG' => array(
        "STMTRRS" => array(
            "bankList" => array(
                "SMMTRRN" => array      (
                    array   (
                        "type"=>"debit",
                        "data"=>"2023-06-01",
                        "value"=> -100,
                        "memo"=>"tranfefenciaPIX"),
                    array(
                        "type"=>"credit",
                        "data"=>"2023-06-01",
                        "value"=>200.00,
                        "memo"=>"tranferenciaPIX" )
                )
            )
        )
    ),
);
?>