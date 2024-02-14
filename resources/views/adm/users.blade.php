@extends('layouts.templateAdm.master')
@section('css')
<!-- Internal Data table css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>




@endsection
@section('page-header')

  

<br><br>
<!-- breadcrumb -->
@endsection
@section('content')

@if(Session::has('message'))
    <div class="alert alert-{{Session::get('class')}} alert-dismissible fade show w-50 ml-auto alert-custom"
        role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if(session('erro'))
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Ohh!</strong> {{session('erro')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif 

<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-primary-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Total de Usuários</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">{{$total_users}}</h4>
                                                    <span class="mb-0 tx-12 text-white op-7">Geral</span>
                                                </div>
                                               </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-danger-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">xxx</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">..</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">--</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-success-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">xxxx</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">..</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">--</p>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-warning-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Log de Atividades</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">10</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">Geral</p>
                                                </div>
                                                <span class="float-end my-auto ms-auto">
                                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                                    <span class="text-white op-7"> -</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Usuários Cadastrados</h4>
                    <i class="mdi  text-gray">
                        <a href="#" id="btn_cad" data-id="10" class="btn btn-primary btn-sm mb-1k"><i
                                class="typcn typcn-plus"></i> Cadastrar</a>
                       
                    </i>
                </div>
                <p class="tx-12 tx-gray-500 mb-2">Listagem de Usuários Ativos <a href="">Ajuda</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Cidade</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>


                    <script type="text/javascript">
                    $(function() {

                        var table = $('.data-table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('users.datatables') }}",
                            columns: [{
                                    data: 'id',
                                    name: 'id'
                                },
                                {
                                    data: 'name',
                                    name: 'name'
                                },
                                {
                                    data: 'email',
                                    name: 'email'
                                },
                                {
                                    data: 'city',
                                    name: 'city'
                                },
                                {
                                    data: 'action',
                                    name: 'action',
                                    orderable: false,
                                    searchable: false
                                },
                            ]
                        });

                    });
                    </script>





                </div>
            </div>
        </div>
    </div>
    <!--/div-->

    <!--div-->

</div>

















<!-------------------------------------Modal Cadastro------------------------------------------------>
<script>
jQuery("i").on('click', "#btn_cad", function() {
    var id = jQuery(this).attr('data-id'); // pega o id do botão
    jQuery.post('{{ url("modalCadUsers")}}', {
        acao: 'alterar',
        
        id: id
    }, function(retorno) {
        jQuery("#modalCad").modal({
            backdrop: 'static'
        });
        jQuery("#detalhes2").html(retorno);
    });
});
</script>
<div class="modal" id="modalCad" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header" style="background-color: #34b5b8">
                <h6 class="modal-title">Cadastrar Novo Usuário</h6><button aria-label="Close" class="close"
                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div id="detalhes2"></div>
            </div>

        </div>
    </div>
</div>



<!-------------------------------------Modal Editar------------------------------------------------>
<script>
jQuery("table").on('click', "#btnEdit", function() {
    var id = jQuery(this).attr('data-id'); // pega o id do botão
    jQuery.post('{{ url("modalEditUsers")}}', {
        acao: 'alterar',
        _token: '{{ csrf_token() }}',
        id: id
    }, function(retorno) {
        jQuery("#modalEdit").modal({
            backdrop: 'static'
        });
        jQuery("#detalhes3").html(retorno);
    });
});
</script>
<div class="modal" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header" style="background-color: #34b5b8">
                <h6 class="modal-title">Editar Produto</h6><button aria-label="Close" class="close"
                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div id="detalhes3"></div>
            </div>

        </div>
    </div>
</div>




<!-- main-content closed -->
@endsection

@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('public/assets/js/table-data.js')}}"></script>






@endsection