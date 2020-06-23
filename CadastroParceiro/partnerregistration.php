<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="partnerregistration.css">
        <title>Buyhood - Cadastro de Parceiro</title>
</head>
<body>

  <?php require_once('../Header,footer,index/header.php')?>

    <div class="container">
        <div class="titlemain">
            <h1 class="title">Cadastro de Parceiro</h1>
            <span class="titledescription">Complete o formulário para poder oferecer seus produtos no nosso site!</span>
        </div>
        <div class="registration-form">
            <form>
                <div class="form-group">
                    <label for="inputAddress">Nome completo do responsável</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Telefone</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="00 00000000">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Endereço do negócio</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Exemplo: Avenida Paulista, 1200 - Bela Vista">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Complemento</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, bloco, escritório">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Nome do negócio</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="O nome que será exibido para os usuários">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Tipo de serviço</label>
                    <select id="inputState" class="form-control">
                      <option selected disabled>Selecione</option>
                      <option>Restaurante</option>
                      <option>Comida Caseira</option>
                      <option>Experiências Gastronômicas</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">CNPJ</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="XX.XXX.XXX/XXX-XX">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Eu li aceito os <a href="#">Termos e condições</a> e concordo com a <a href="#">Política de Privacidade.</a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="button" class="btn btn-danger">Voltar</button>
              </form>           
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <?php require_once('../Header,footer,index/footer.php')?>
    
</body>
</html>