<div class="container py-5 ">

<div class="card" style="">
  <div class="card-header">
    <h3 class="py-4">Entre em Contato</h3>
  </div>
  <div class="card-body">
    <form>
      @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Nome</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="João da Silva">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput2">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="nome@exemplo.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Assunto</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Dúvidas/Informações</option>
        <option>Sugestões</option>
        <option>Suporte</option>
        <option>Outros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensagem</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-center">
      <button class="btn btn-primary green-bg-tn" type="button" name="button">Enviar</button>
    </div>

  </form>
  </div>
</div>
</div>
