function getMunicipalityxDepartment(event){
    let id = $(event.target).val();

    if(id !== ""){
        $.ajax({
            url: `${PATH_BASE}Admin/getMunicipalityxDepartment/${id}`,
            type: "GET"
        }).done((response) => {
            let data = JSON.parse(response);
            data.forEach(element => {
                $("#slt-create-municipality").empty();
                $("#slt-create-municipality").append('<option value="">Seleccione una opción</option>');
                $("#slt-create-municipality").append(`<option value="${element.f104_id}">${element.f104_municipio}</option>`);
            });
        }).fail((error) => {
            console.log(error);
        })
    }else{
        $("#slt-create-municipality").empty();
        $("#slt-create-municipality").append('<option value="">Seleccione una opción</option>');
    }
}

function createBusiness(){
    if(validateForm('form-create-business')){
        console.log("Hola")
    }else{
        Swal.fire({
            title: "Campos vacíos",
            html: "Todos los campos con <span class='text-danger'>*</span> son obligatorios, verifica la información ingresada e intenta nuevamente",
            icon: "info",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 5000
        });
    }
}