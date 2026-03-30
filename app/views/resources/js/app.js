// Validación de campos de un formulario
function validateForm(formId) {
    const form = document.getElementById(formId);
    let fieldsValid = true;

    const fields = form.querySelectorAll('.field');

    fields.forEach(campo => {
        // Limpiar estado previo
        campo.classList.remove('is-invalid');

        // Validar solo si es required
        if (campo.hasAttribute('required')) {
            if (!campo.value.trim()) {
                campo.classList.add('is-invalid');
                fieldsValid = false;
            }
        }
    });

    return fieldsValid;
}
// Cuando el usuario empiece a escribir en el campo, la clase no valido desaparece
document.addEventListener('input', function(e) {
    if (e.target.classList.contains('field')) {
        e.target.classList.remove('is-invalid');
    }
});