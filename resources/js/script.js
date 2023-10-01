
departmentChange =  $("#departament");

$('document').ready(function(){

    departmentChange.on('change', function(event){

        csrfValue = $("input[name = '_token']").val();
        departamentId = departmentChange.val();
        url = "{{url('/api/departments')}}";

        params = { department : departamentId, _token : csrfValue };
        console.log(params);
        $.get(url, params, function(response){
            addTableNewRow(response);
        }).fail(function(response){
            $('#myModaltwo').attr('disdata-dismiss', 'modal');
            console.log("Fail: "+ response);
        })
    });

});

function addTableNewRow(data){
    console.log(data.name);
}
