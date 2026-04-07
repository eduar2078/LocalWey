// Obtener los municipios cuando se seleccione un departamento
function getMunicipalityxDepartment(event) {
  let id = $(event.target).val();

  if (id !== "") {
    $.ajax({
      url: `${PATH_BASE}Admin/getMunicipalityxDepartment/${id}`,
      type: "GET",
    })
      .done((response) => {
        let data = JSON.parse(response);
        $("#slt-create-municipality").empty();
        $("#slt-create-municipality").append(
          '<option value="">Seleccione una opción</option>',
        );
        data.forEach((element) => {
          $("#slt-create-municipality").append(
            `<option value="${element.f104_id}">${element.f104_municipio}</option>`,
          );
        });
      })
      .fail((error) => {
        console.log(error);
      });
  } else {
    $("#slt-create-municipality").empty();
    $("#slt-create-municipality").append(
      '<option value="">Seleccione una opción</option>',
    );
  }
}
// Obtener los corregimientos o barrios cuando se seleccione un municipio
function getNeighborhoodsxMunicipality(event) {
  let id = $(event.target).val();

  if (id !== "") {
    $.ajax({
      url: `${PATH_BASE}Admin/getNeighborhoodsxMunicipality/${id}`,
      type: "GET",
    })
      .done((response) => {
        let data = JSON.parse(response);
        $("#slt-create-neighborhood").empty();
        $("#slt-create-neighborhood").append(
          '<option value="">Seleccione una opción</option>',
        );
        data.forEach((element) => {
          $("#slt-create-neighborhood").append(
            `<option value="${element.f106_id}">${element.f106_corregimiento_barrio}</option>`,
          );
        });
      })
      .fail((error) => {
        console.log(error);
      });
  } else {
    $("#slt-create-neighborhood").empty();
    $("#slt-create-neighborhood").append(
      '<option value="">Seleccione una opción</option>',
    );
  }
}
// Recolectamos la información y registramos el negocio
function createBusiness() {
    $("#btn-create-business").empty();
    $("#btn-create-business").append(`<div class="spinner-grow spinner-grow-sm" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>`);

    if (validateForm("form-create-business")) {
        let form = new FormData(document.getElementById("form-create-business"));
        $.ajax({
            url: `${PATH_BASE}Admin/createBusiness`,
            type: "POST",
            data: form,
            processData: false,
            contentType: false,
        }).done((response) => {
            let result = JSON.parse(response);
            if (result.code === 200) {
                Swal.fire({
                    title: "Registro exitoso",
                    html: "El negocio ha sido registrado correctamente",
                    icon: "success",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 5000,
                }).then(() => {
                    location.reload();
                });
            } else if (result.code === 400) {
                Swal.fire({
                    title: "Extensión de archivo invalido",
                    html: "La extensión de la imagen de portada no es valida",
                    icon: "info",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 5000,
                }).then(() => {
                    $("#btn-create-business").empty();
                    $("#btn-create-business").append(`Guardar`);
                });
            } else if (result.code === 401) {
                Swal.fire({
                    title: "Extensión de archivo invalido",
                    html: "La extensión de la imagen de principal no es valida",
                    icon: "info",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 5000,
                }).then(() => {
                    $("#btn-create-business").empty();
                    $("#btn-create-business").append(`Guardar`);
                });
            } else if (result.code === 500) {
                Swal.fire({
                    title: "Error al registrar",
                    html: "Ocurrio un problema al intentar registrar el negocio",
                    icon: "error",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 5000,
                }).then(() => {
                    $("#btn-create-business").empty();
                    $("#btn-create-business").append(`Guardar`);
                });
            }
        })
        .fail((error) => {
            console.log(error);
        });
    } else {
        Swal.fire({
            title: "Campos vacíos",
            html: "Todos los campos con <span class='text-danger'>*</span> son obligatorios, verifica la información ingresada e intenta nuevamente",
            icon: "info",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 5000,
        }).then(() => {
            $("#btn-create-business").empty();
            $("#btn-create-business").append(`Guardar`);
        });
    }
}
