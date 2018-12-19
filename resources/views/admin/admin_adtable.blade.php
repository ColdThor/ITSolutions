@extends('backend/header')
@section('page') Inzeráty @endsection
@section('content')



    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Zoznam inzerátov</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table  id=usertable class="table table-striped table-hover" style="">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nadpis</th>
                                <th>Inzerent</th>
                                <th>Email</th>
                                <th>Telefón</th>
                                <th>Cena (€)</th>
                                <th>Výmera (m<sup>2</sup>)</th>
                                <th>Zverejnený</th>
                                <th>Lokalita</th>
                                <th>Druh</th>
                                <th>Typ</th>
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

                                $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
                                $('#usertable').DataTable({

                                    dom: 'Blfrtip',
                                    lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
                                    buttons: [
                                        { extend: 'excel', text: 'Export do excelu',
                                            exportOptions: {
                                                columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
                                            }
                                        },
                                        { extend: 'pdfHtml5', text: 'Export do PDF',
                                            exportOptions: {
                                                columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
                                            }
                                        }
                                    ],


                                    scrollX: true,
                                    responsive: true,
                                    serverSide: true,
                                    ajax: '{{ url('/it-admin/inzercia/data') }}',
                                    columns: [
                                        { data: 'id_advertisement', name: 'id_advertisement' },
                                        { data: 'title', name: 'title' },
                                        { data: 'user', name: 'user.first_name' },
                                        { data: 'contact_mail', name: 'contact_mail' },
                                        { data: 'contact_phone', name: 'contact_phone' },
                                        { data: 'price', name: 'price' },
                                        { data: 'area', name: 'area' },
                                        { data: 'date', name: 'date' },
                                        { data: 'location', name: 'location.region' },
                                        { data: 'specification', name: 'specification.title' },
                                        { data: 'type', name: 'type.title' },
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



