<form method="post" action="{{ url('api/insertUsers')}}" class="ajax_form2" enctype="multipart/form-data">
    {{ csrf_field() }}
   
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nome Usuário" name="name" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="E-mail" name="email" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">

            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" placeholder="Endereço" name="address" required>



        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <label for="endereco">City:</label>
            <select name="city" class="form-control" required>
                @foreach ($city as $b)
                <option value="{{$b->id}}">{{$b->city_name}} - Estado: {{$b->state_name}}</option>
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