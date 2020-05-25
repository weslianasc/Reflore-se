selectInst.onchange = function() {
    var selectedOption = this.querySelector('option:checked');
    
    displayValue.innerHTML = selectedOption.value;
    displayValue.value = selectedOption.value;
    this.value = selectedOption.value;

    // aqui você pega o conteúdo do option selecionado e guarda em uma variável
    var valor = selectedOption.id;
    // aqui você joga o valor no input que esta escondido
    $("#nome2").val(valor);
}