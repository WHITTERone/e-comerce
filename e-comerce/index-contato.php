<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="contato/style.css">
    <title>Document</title>
</head>
<body>
    <div class="arrow-back">
        <a href="index-vitrine.php"><i class='bx bx-arrow-back'></i></a>
    </div>
    <section>
        <h2>Contatos</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite Seu Nome" autocomplete="off" required>

            <label>Email</label>
            <input type="Email" name="Email" placeholder="Digite seu Email" required>

            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit">Enviar</button>

            <input type="hidden" name="accessKey" value="32e07f30-5ca1-443f-bd7a-e835642c91ff">
            <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.html">
        </form>
    </section>
</body>
</html>