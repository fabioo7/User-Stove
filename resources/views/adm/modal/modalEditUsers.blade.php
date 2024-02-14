@foreach ($user as $p)
<form method="post" action="{{ url('api/updateUsers')}}" class="ajax_form2" enctype="multipart/form-data">
<input type="hidden" name="origin" value="site">
<input type="hidden" name="id" value="{{$p->id}}">     
{{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nome Usuário" name="name" value="{{$p->name}}" required>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{$p->email}}" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">

            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" placeholder="Endereço" name="address" value="{{$p->address}}" required>



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
@endforeach 