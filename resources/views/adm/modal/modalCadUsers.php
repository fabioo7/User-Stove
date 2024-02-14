<form method="post" action="{{ url('api/insertProdutos')}}" class="ajax_form2" enctype="multipart/form-data">
    <input type="hidden" name="origin" value="site">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nome Usuário" name="name" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="E-mail" name="name" required>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-12">
    <input type="text" class="form-control" placeholder="Endereço" name="name" required>

    <label for="endereco">Endereço:</label>
<select id="endereco" style="width: 300px;"></select>


    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-6">
        <select  name="brand" class="form-control" required>
        <option value="" > Estado</option>
        @foreach ($brand as $b)
        <option value="{{$b->id_brand}}" >{{$b->name_brand}}</option>
        @endforeach  
        </select>    
        </div>
        <div class="col-sm-6">
        <select  name="brand" class="form-control" required>
        <option value="" > Cidade</option>
        @foreach ($brand as $b)
        <option value="{{$b->id_brand}}" >{{$b->name_brand}}</option>
        @endforeach  
        </select>    
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <textarea name="" class="form-control" id="" cols="15" rows="5" name="description"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"> <br>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</form><br><br>