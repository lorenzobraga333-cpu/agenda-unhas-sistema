document.addEventListener("DOMContentLoaded", function(){
    flatpickr("#data", {
        locale: "pt",
        minDate: "today",
        maxDate: new Date().fp_incr(365),
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "d/m/Y",
        disableMobile: true
    });
const selectServico = document.getElementById("servico");
const selectTipo = document.getElementById("valor");
const selectLabelTipo = document.getElementById("label-tipo");
selectServico.addEventListener("change", function(){
    selectTipo.innerHTML = ""
    selectTipo.style.display = "block"
    selectLabelTipo.style.display = "block"
    if(selectServico.value == "Manicure Tradicional"){
        selectTipo.required = false
        selectTipo.style.display = "none"
        selectLabelTipo.style.display = "none"
        selectTipo.innerHTML = '<option value="" disabled selected>Selecione o tipo</option>';
        selectTipo.innerHTML += '<option value="Valor">Valor único</option>';
        selectTipo.value = "Valor"
    }else{
        selectTipo.required = true
        selectTipo.innerHTML = '<option value="" disabled selected>Selecione o tipo</option>';
        selectTipo.innerHTML += '<option value="Aplicação">Aplicação</option>';
         selectTipo.innerHTML += '<option value="Manutenção">Manutenção</option>';
    }
});
const params = new URLSearchParams(window.location.search);
const toast = document.getElementById("toast");
const erro = params.get("erro");
const sucesso = params.get("sucesso");
const mensagens = {
    "sucesso": "Agendamento realizado com sucesso!",
    "celular": "Celular inválido. Use apenas números com 10 a 11 dígitos.",
    "campos": "Preencha todos os campos.",
    "data": "Data inválida.",
    "passado": "A data informada está no passado. Insira uma data atual.",
    "horario": "O horário escolhido já está agendado.",
    "antecedencia": "Este horário não está mais disponível para agendamento."
};
if(sucesso){
    toast.textContent = mensagens["sucesso"];
    toast.style.display = "block";
    setTimeout(function(){
        toast.style.display = "none";
    }, 4000);
}else if(erro && mensagens[erro]){
    toast.textContent = mensagens[erro];
    toast.style.display = "block";
    setTimeout(function(){
        toast.style.display = "none";
    }, 4000);
}
});