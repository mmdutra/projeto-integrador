$('#cod_estado').on('change', function () {
    const codEstado = $(this).val();

    const url = `http://localhost:8000/estado/${codEstado}/cidades`;

    $.get(url)
        .done(function (data) {
            clearCitySelect();
            data.forEach((item) => {
                $('#cod_cidade').append(`<option value="${item.id}">${item.name}</option>`);
            });
        })
        .fail(function (error) {
            alert(error);
        });

    function clearCitySelect() {
        $('#cod_cidade').empty();
        $('#cod_cidade').append('<option value="0" selected disabled>Selecione uma opção</option>');
    }
});
