<?

# alterar a variavel abaixo colocando o seu email

$to = "RAYX.vendas@gmail.com";
$subject = "CADASTRO - RAYX COMERCIAL.";
$message = 'CADASTRO';
$headers = 'From: RAYX.vendas@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$nomeCompleto = $_REQUEST['nomeCompleto'];
$razaoSocial = $_REQUEST['razaoSocial'];
$nomeFantasia = $_REQUEST['nomeFantasia'];
$telCelular = $_REQUEST['telCelular'];
$telFIxo = $_REQUEST['telFixo'];
$cnpj = $_REQUEST['cnpj'];
$inscricaoEstadual = $_REQUEST['inscricaoEstadual'];
$suframa = $_REQUEST['suframa'];
$cnae = $_REQUEST['cnae'];
$regimeTributario = $_REQUEST['regimeTributario'];
$regimeApuracao = $_REQUEST['regimeApuracao'];
$email = $_REQUEST['email'];
$confirmEmail = $_REQUEST['confirmEmail'];
$inputAddress1 = $_REQUEST['inputAddress1'];
$inputAddress2 = $_REQUEST['inputAddress2'];
$inputAddress3 = $_REQUEST['inputAddress3'];
$observacao = $_REQUEST['observacao'];


 // monta o e-mail na variavel $body
$body = "===================================" .  "\n\n";
$body = $body . "CADASTRO - RAYX COMERCIAL LTDA" .  "\n\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome Completo: " . $nomeCompleto .  "\n\n";
$body = $body . "Razão Social: " . $razaoSocial .  "\n\n";
$body = $body . "Nome Fantasia: " . $nomeFantasia .  "\n\n";
$body = $body . "Telefone Celular: " . $telCelular .  "\n\n";
$body = $body . "Telefone Fixo" . $telFIxo .  "\n\n";
$body = $body . "CPNJ: " . $cnpj .  "\n\n";
$body = $body . "Inscrição Estadual: " . $inscricaoEstadual .  "\n\n";
$body = $body . "Suframa: " . $suframa .  "\n\n";
$body = $body . "CNAE: " . $cnae .  "\n\n";
$body = $body . "Regime Tributário: " . $regimeTributario .  "\n\n";
$body = $body . "Regime de Apuração: " . $regimeApuracao .  "\n\n";
$body = $body . "E-mail: " . $email .  "\n\n";
$body = $body . "Confirmação de E-mail: " . $confirmEmail .  "\n\n";
$body = $body . "Endereço de Faturamento: " . $inputAddress1 .  "\n\n";
$body = $body . "Endereço de Cobrança: " . $inputAddress2 .  "\n\n";
$body = $body . "Endereço de Entrega: " . $inputAddress3 .  "\n\n";
$body = $body . "Transportadoras & Referências Comerciais: " . $observacao . "\n\n";


// envia o email
mail($to, $subject , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");


?>