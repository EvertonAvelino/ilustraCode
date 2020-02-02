window.onload = function() {
  var cep_o = document.querySelector("#cep-o");
  cep_o.addEventListener("keyup", () => {
    var val_cep = cep_o.value
      .replace(/[^0-9]/g, "")
      .replace(/^([\d]{2})?([\d]{3})?([\d]{3})?/, "$1.$2-$3");

    cep_o.value = val_cep;
  });
  var cep_d = document.querySelector("#cep-d");
  cep_d.addEventListener("keyup", () => {
    var val_cep = cep_d.value
      .replace(/[^0-9]/g, "")
      .replace(/^([\d]{2})?([\d]{3})?([\d]{3})?/, "$1.$2-$3");

    cep_d.value = val_cep;
  });
};

function mask(v) {
  var valor = v.value.replace(/\D/g, "");
  valor = (valor / 100).toFixed(2);
  valor = valor.replace(".", ".");
  valor = valor.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
  valor = valor.replace(/(\d)(\d{3}),/g, "$1.$2,");
  v.value = valor;
}
