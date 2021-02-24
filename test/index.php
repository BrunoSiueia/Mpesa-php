<?php
require_once '../pay/mpesa.php';

use Karson\MpesaPhpSdk;

$pagar = new \App\Mpesa();

$pagar->setApiKey("crfv9fjcgbwsbrfg46os5wkssby3ren3");
$pagar->setPublicKey("MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDX
SVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcK
ncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd
5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35Yul
prMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2s
Yxt+Kt5OxQqC1MCAwEAAQ==
");

// declarando as variaveis

    $gera = rand(1000, 100000);
    $invoice_id = "$gera";
    $phone_number = "258849542512";
    $amount = "10";
    $reference_id = "11114";
    $shortcode = "171717";

    $result = $pagar->c2b($invoice_id, $phone_number, $amount, $reference_id, $shortcode);

    if ($result->status == "200" or $result->status == "201") {
        $status = 'success';

    } else {
        $status = 'error';
    }

    echo $status;
