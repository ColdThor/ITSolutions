
@include('template.header')
@include('template/navigation')
@include('template/footer')

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
        <th>Číslo používateľa</th>
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
            serverSide: true,
            ajax: '{{ url('data') }}',
            columns: [
                { data: 'id_user', name: 'id_user' },
                { data: 'full_name', name: 'full_name' },
                { data: 'email', name: 'email' },
                {

                    data: 'telephone',
                    name: 'telephone',

                    render: function (data, type, full, meta) {
                        var phone = full[3];
                        if(phone == null) {
                            phone = "Používateľ nemá definované tel. číslo";
                        }
                        return phone;

                    }


                },
                { data: 'title', name: 'user_group.title' },
                { data: 'edit'},
                { data: 'delete' },


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









