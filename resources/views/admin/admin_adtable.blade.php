
@include('admin-template/header')
@include('admin-template/navigation')
@include('admin-template/footer')


<br />



<table  id=usertable style="margin-left: 20px; width: 98%;float:left; "   bgcolor="#02318e" >

    <thead>
    <!--  <style>
        table.dataTable td, table.dataTable th  {
            border-top: 1px solid #d9d9d9;
            border-bottom: 1px solid #ffffff;
            border-left: 1px solid #d9d9d9;
            border-right: 1px solid #ffffff;
            border-collapse: collapse;
        }


    </style> -->
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

</div>



<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/api/sum().js"></script>
<script src="vendor/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>





<script>
    $(function() {
        $('#usertable').DataTable({

            dom: 'Blfrtip',
            lengthMenu: [[10, 25, 50,100,200,300,400], [10, 25, 50,100,200,300,400]],
            buttons: [
                { extend: 'excel', text: 'Export do excelu', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13]
                    }
                },
                { extend: 'pdf', text: 'Export do PDF', className: 'excelbutton',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13]
                    }
                }
            ],

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
                info:"Zobrazujem _START_ do _END_ zo _TOTAL_ záznamov",
                lengthMenu:     "Zobraziť _MENU_ záznamov",
                infoEmpty:      "Zobrazujem 0 do 0 z 0 záznamov",
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




