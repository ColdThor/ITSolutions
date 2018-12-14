@extends('backend/header')
@section('page') Typy inzercie @endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Typy inzercie</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table  id=usertable class="table table-bordered table-striped">
                            <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Názov typu</th>
                                    <th>Editovať</th>
                                    <th>Zmazať</th>
                                 </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>




<script>
    $(function() {
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
        $('#usertable').DataTable({

            dom: 'Blfrtip',
            lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
            buttons: [
                { extend: 'excel', text: 'Export do excelu', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1]
                    }
                },
                { extend: 'pdf', text: 'Export do PDF', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1]
                    }
                }
            ],

            serverSide: true,
            ajax: '{{ url('/it-admin/types/data') }}',
            columns: [
                { data: 'id_type', name: 'id_type' },
                { data: 'title', name: 'title' },
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



