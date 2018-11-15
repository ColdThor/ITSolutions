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
                    <div class="box-body">
                        <table  id=usertable class="table table-bordered table-hover" style="">
                            <thead>
                            <tr>
                                <th>Číslo inzerátu</th>
                                <th>Názov</th>
                                <th>Popis</th>
                                <th>Dátum zverejnenia</th>
                                <th>Inzerent</th>
                                <th>Inzerent2</th>
                                <th>Emailový kontakt</th>
                                <th>Telefonný kontakt</th>
                                <th>Cena</th>
                                <th>Výmera</th>
                                <th>Lokalita</th>
                                <th>Druh</th>
                                <th>Typ</th>
                                <th>Stav</th>
                                <th>Počet prezretí</th>
                                <th>Editovať</th>
                                <th>Zmazať</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>



                        <script>
                            $(function() {
                                $('#usertable').DataTable({

                                    dom: 'Blfrtip',
                                    lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
                                    buttons: [
                                        'copy', 'excel', 'pdf'
                                    ],
                                    scrollX: true,
                                    responsive: true,
                                    serverSide: true,
                                    ajax: '{{ url('/inzercia/data') }}',
                                    columns: [
                                        { data: 'id_advertisement', name: 'id_advertisement' },
                                        { data: 'title', name: 'title' },
                                        { data: 'description', name: 'description' },
                                        { data: 'date', name: 'date' },
                                        { data: 'user', name: 'user.first_name' },
                                        { data: 'user', name: 'user.last_name', visible:false },
                                        { data: 'contact_mail', name: 'contact_mail' },
                                        { data: 'contact_phone', name: 'contact_phone' },
                                        { data: 'price', name: 'price' },
                                        { data: 'area', name: 'area' },
                                        { data: 'location', name: 'location.region' },
                                        { data: 'specification', name: 'specification.title' },
                                        { data: 'type', name: 'type.title' },
                                        { data: 'condition', name: 'condition.title' },
                                        { data: 'views', name: 'views' },
                                        { data: 'edit'},
                                        { data: 'delete' }
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




