@extends('backend/header')
@section('page') Druhy inzercie @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Druhy inzercie</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table  id=usertable class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Číslo druhu</th>
                                    <th>Názov druhu</th>
                                    <th>Skupina</th>
                                    <th>Editovať</th>
                                    <th>Zmazať</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>



                        <style>
                            .buttons-pdf {
                                background-color: #3c8dbc;
                                color: white;
                                margin-right: 5px;
                            }
                            .buttons-excel {
                                background-color: #3c8dbc;
                                color: white;
                            }
                        </style>





<script>
    $(function() {
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
        $('#usertable').DataTable({

            dom: 'Blfrtip',
            lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
            buttons: [
                { extend: 'excel', text: 'Export do excelu', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1,2]
                    }
                },
                { extend: 'pdf', text: 'Export do PDF', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1,2]
                    }
                }
            ],

            serverSide: true,
            ajax: '{{ url('/specifications/data') }}',
            columns: [
                { data: 'id_specification', name: 'id_specification' },
                { data: 'title', name: 'title' },
                { data: 'group', name: 'group' },
                { data: 'edit'},
                { data: 'delete' },


            ],

            stateSave: true,

            language: {
                search: "Hľadať:",
                info:"Zobrazujem _END_ zo _TOTAL_ záznamov",
                lengthMenu:     "Zobraziť _MENU_ záznamov",
                infoEmpty:      "Zobrazujem 0 z 0 záznamov",
                infoFiltered:   "(filtrované z _MAX_ celkových záznamov)",
                zeroRecords:    "Neboli nájdené žiadne zodpovedajúce záznamy",
                paginate: {
                    next:       "Ďaľšia",
                    previous:   "Predchádzajúca",
                }
            }

        });

    });

</script>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection


