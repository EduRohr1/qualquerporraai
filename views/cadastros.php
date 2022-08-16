<?php  include 'menu-layout.php'; ?>

<style>

.card-header{
    background:#494ca2;
    color:white;
}

.card-footer{
    background:#494ca2;
    color:white;
}

.form-control{
    border: 1px solid #ced4da;
}

</style>

<link rel="stylesheet" href="/doc/Content/menu-content/css/cadastro.css">

<div id="content" class="p-4 p-md-5 pt-5">

<h2>Cadastro de usuários !</h2>

<div class="row">
<div class="col-md-6">
<div class="card text-center">
  <div class="card-header">
    Cadastro do usuário
  </div>
  <div class="card-body">

  <form>

  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefone</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEstado">CEP</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">CPF</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEstado">Sexo</label>
      <select id="inputEstado" class="form-control">
        <option>Masculino</option>
        <option>Feminino</option>
        <option selected>Outros</option>
      </select>
    </div>
  </div>

<div class="form-group">

</div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Administrador
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
<div class="col-md-6">
<div class="card text-center">
  <div class="card-header">
  Lista dos últimos 5 cadastros
  </div>
  <div class="card-body">
  <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action table-credit">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Nome</th>
                            <th class="column-title">CPF</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Telefone</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="even pointer">
                            <td>Fulano</td>
                            <td>XXX.XXX.XXX.XX</td>
                            <td>3p@3p.com</td>
                            <td>(xxx) xxxxx-xxxx</td>
                          </tr>
                          <tr class="odd pointer">
                          <td>Fulano</td>
                            <td>XXX.XXX.XXX.XX</td>
                            <td>3p@3p.com</td>
                            <td>(xxx) xxxxx-xxxx</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
</div>
</div>
