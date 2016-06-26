@extends('layouts.master')
<!--                                                                        -->
@section('title', '| Gerenciar tickets')
<!--                                                                        -->
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}">
@endsection
<!--                                                                        -->
@section('topbar')
<header id="topbar" class="alt affix">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-active">
                <a href="#">UCP</a>
            </li>
            <li class="crumb-icon">
                <a href="/">
                <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li class="crumb-trail"><a href="/ticket">Tickets</a></li>
            <li class="crumb-trail">Gerenciar Tickets</li>
        </ol>
    </div>
</header>
@endsection
<!--                                                                        -->
@section('content')
<div class="col-md-12">
    <div class="panel panel-primary panel-border top animated fadeInUp">
        <div class="panel-heading">
            <span class="panel-title">
            <span class="fa fa-support"></span>Tickets</span>
        </div>
        <div class="panel-body pn">
            <div class="bs-component">
                <table class="table table-hover" id="datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="ticket_details_admin.html">Meu pinto bugou, o que eu faço?</a></td>
                            <td><a href="user_profile.html">Los</a></td>
                            <td>Bug</td>
                            <td><span class="label label-danger">fechado</span></td>
                        </tr>
                        <tr>
                            <td><a href="ticket_details_admin.html">Meu pinto bugou de novo, o que eu faço?</a></td>
                            <td><a href="user_profile.html">Los</a></td>
                            <td>Bug</td>
                            <td><span class="label label-alert">pendente</span></td>
                        </tr>
                        <tr>
                            <td><a href="ticket_details_admin.html">Meu pinto bugou de novo e de novo, to cansado, o que eu faço?</a></td>
                            <td><a href="user_profile.html">Los</a></td>
                            <td>Bug</td>
                            <td><span class="label label-primary">aberto</span></td>
                        </tr>
                        <tr class="warning">
                            <td><a href="ticket_details_admin.html">Se bugar de novo, eu tiro ele fora</a></td>
                            <td><a href="user_profile.html">Los</a></td>
                            <td>Bug</td>
                            <td><span class="label label-success">respondido</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
<!--                                                                        -->
@section('scripts')
<!-- Datatables -->
<script src="{{ URL::asset('vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
<script src="{{ URL::asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
<script src="{{ URL::asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#datatable').dataTable({
            "sDom": 't<"dt-panelfooter clearfix"ip>',
            "scrollY": 270,
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "info": "Mostrando _START_ até _END_ de _TOTAL_ registros",
                "infoEmpty": "Não há entradas para serem mostradas",
                "emptyTable": "Nenhuma denúncia encontrada",
                "paginate": {
                    "first":      "Primeiro",
                    "previous":   "Anterior",
                    "next":       "Próximo",
                    "last":       "Último"
                }
            }
        });
    });
</script>
@endsection
