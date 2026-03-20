function getInfoxBusiness(id){
    $("#entityModal").modal("show");

    $.ajax({
        url: `${PATH_BASE}Business/GetInfoxId/${id}`,
        type: "GET",
        headers: {
            "Accept": "application/json"
        }
    }).done((response) => {
        $("#name-business-entity-modal").empty().append(response["Information"][0].f200_nombre);
        typeBusinessLowerCase = response["Information"][0].f102_tipo_negocio.toLowerCase()
        typeBusiness = typeBusinessLowerCase.charAt(0).toUpperCase() + typeBusinessLowerCase.slice(1)
        $("#span-entity-type-business").empty().append(typeBusiness.substr(0, response["Information"][0].f102_tipo_negocio.length - 1));
        $("#span-entity-address").empty().append(response["Information"][0].f200_direccion);
        $("#modal-entity-description").empty().append(response["Information"][0].f200_descripcion);

        $("#modal-entity-image").attr("src", `${PATH_IMG}business/${response["Information"][0].f200_imagen_principal}`);
        $("#modal-entity-gallery").empty();
        response["Gallery"].forEach(element => {
            $("#modal-entity-gallery").append(`<div class="col-4">
                <img src="${PATH_IMG}business/${element.f201_imagen}" class="img-fluid rounded">
            </div>`);
        });
    }).fail((error) => {
        console.log(error)
    })
}