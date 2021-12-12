<?php

abstract class getProducts {
    public $jsonArray;

    public function arrayJson($data)
    {
        $data = json_encode($data);

        $tabCount = 0;
        $result = '';
        $quotes = false;
        $separator = "\t";
        $newLine = "\n";

        for($i=0;$i<strlen($data);$i++){
            $c = $data[$i];
            if($c=='"' && $data[$i-1]!='\\') $quotes = !$quotes;
            if($quotes){
                $result .= $c;
                continue;
            }
            switch($c){
                case '{':
                case '[':
                    $result .= $c . $newLine . str_repeat($separator, ++$tabCount);
                    break;
                case '}':
                case ']':
                    $result .= $newLine . str_repeat($separator, --$tabCount) . $c;
                    break;
                case ',':
                    $result .= $c;
                    if($data[$i+1]!='{' && $data[$i+1]!='[') $result .= $newLine . str_repeat($separator, $tabCount);
                    break;
                case ':':
                    $result .= $c . ' ';
                    break;
                default:
                    $result .= $c;
            }
        }
        return  $result;
    }
}

class product extends getProducts {

    public $product = array(
        array(
            "id"        => 1,
            "name"      => "Galletas de Cordero y arroz Laika by Raush",
            "stars"     => 5,
            "price"     => 5942,
            "discount"  => 0.1
        ),
        array(
            "id"        => 2,
            "name"      => "Galletas de Cordero y arroz Laika by Raush",
            "stars"     => 5,
            "price"     => 5942,
            "discount"  => 0.1
        ),
        array(
            "id"        => 3,
            "name"      => "Galletas de Cordero y arroz Laika by Raush",
            "stars"     => 5,
            "price"     => 5942,
            "discount"  => 0.1
        ),
        array(
            "id"        => 4,
            "name"      => "Galletas de Cordero y arroz Laika by Raush",
            "stars"     => 5,
            "price"     => 5942,
            "discount"  => 0.1
        ),
        array(
            "id"        => 5,
            "name"      => "Galletas de Cordero y arroz Laika by Raush",
            "stars"     => 5,
            "price"     => 5942,
            "discount"  => 0.1
        )
    );


}
