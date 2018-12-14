@extends('backend/header')
@section('page') Používatelia @endsection
@section('content')

    <section class="content-header">
        <h1>Používatelia</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Zoznam používateľov</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table  id=usertable class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Meno a priezvisko</th>
                                <th>Email</th>
                                <th>Telefón</th>
                                <th>Rola</th>
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
                                        { extend: 'excel', text: 'Export do excelu',
                                            exportOptions: {
                                                columns: [0,1,2,3,4]
                                            }
                                        },
                                        { extend: 'pdf', text: 'Export do PDF',
                                            exportOptions: {
                                                columns: [0,1,2,3,4]
                                            }
                                        }
                                    ],


                                    serverSide: true,
                                    ajax: '{{ url('it-admin/users/data') }}',
                                    columns: [
                                        { data: 'id_user', name: 'id_user' },
                                        { data: 'full_name', name: 'first_name' },
                                        { data: 'email', name: 'email' },
                                        {
                                            data: 'telephone',
                                            name: 'telephone',
                                        },
                                        { data: 'title', name: 'user_group.title' },
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
