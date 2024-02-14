@foreach ($user as $p)
<form method="post" action="{{ url('api/atualizarProdutos')}}" class="ajax_form2" enctype="multipart/form-data">
<input type="hidden" name="origin" value="site">
<input type="hidden" name="id" value="{{$p->id}}">     
<div class="row">
        <div class="col-sm-6"><input type="text" class="form-control" placeholder="Nome do Produto" name="name"  value="{{$p->name}}" required></div>
        <div class="col-sm-3">
        <select  name="brand" class="form-control" required>
        <option value="{{$p->id}}" >{{$p->name}}</option>
        @foreach ($user as $b)
        <option value="{{$b->id}}" >{{$b->name}}</option>
        @endforeach  
        </select>    
        </div>    
        <div class="col-sm-3">
        <select  name="voltage" class="form-control" required>
       
        <option value="110" >110</option>
        <option value="220" >220</option>
        </select>  
        </div>
    </div>
 
    <br>
    <div class="row">
       <div class="col-md-12" >
       <textarea  class="form-control" id="" cols="15" rows="5" name="description"></textarea> 
        </div>
    </div>   
    <div class="row">
        <div class="col-md-12"> <br> 
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form><br><br>
@endforeach 