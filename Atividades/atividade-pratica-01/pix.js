var trans=[];
var transf= document.getElementById('transacao')
var valor= document.getElementById('valorpix')

var quant=0;

function selecionarBanco(){
    fetch("https://brasilapi.com.br/api/banks/v1")
    .then(response => response.json())
    .then(dado=> carregarBank(dado))
    .catch(error => console.error(error))

}
function carregarBank(dado){

    let bank = document.getElementById('bank');
    
  
    for (let index in dado){
      const {code, fullName} = dado[index];
  
      let option = document.createElement("option");
      option.innerHTML = fullName;
      option.value = code;
    
  
      bank.appendChild(option);
    }
  }

  function Transferencia( transf, valor) {
    this.valorpix = valor;
    this.transf = transf;
  }
  


  function tab() {   

    if ( validarbanco(bank) && validarPix(chave)  && validarcpix(chavepix) && validartransacao(transf) &&validarcampovalor(valor)) {
        var tabela = document.createElement('tr');
        tabela.insertCell(0).innerHTML = transf.value;
        tabela.insertCell(1).innerHTML = valor.value;
    
        var valortotal = new Transferencia(transf.value, valor.value);
        trans.push(valortotal);
       
  
        document.getElementById('tb').appendChild(tabela);

        valorpix.value="";
        chavepix.value = "";




      }
  }



  function atual(valoratual){
    this.valoratual = valoratual;
  }



  function calculo() {

        let valotransf = 0;
        let valorpag = 0;
        let saldo= 0;
        

    for(quant = 0; quant < trans.length; quant++){

        if (trans[quant].transf == 'Receber'){
        valorpag += parseFloat(trans[quant].valor);
    
         }else if(trans[quant].transf== 'Pagamento'){
        valotransf += parseFloat(trans[quant].valor);

        }

        
    }

            saldo = valorpag-valotransf;
        

        var tab2 = document.createElement('tr');
        tab2.insertCell(0).innerHTML = saldo;
        

        var valorfinal = new Saldo(saldo);
        trans.push(valorfinal);
        document.getElementById('saldofinal').appendChild(tab2);



        document.getElementById("confirma").disabled = true       
        document.getElementById("saldof").disabled = true


 }
    
 

 function Saldo (saldo){
    this.saldo = saldo;

}

  function validarcpix(campo) {
    let n = campo.value;
    if (n.length === 0) {
      window.alert("Insira a chave pix!")  
      campo.value = "";
      campo.focus();    
      
      
      return false;
    }
    
    return true;
  }


  function validartransacao() {
    let transf = document.getElementById("transacao");
        if (transf.value == "") {
          window.alert("Selecione o tipo de transação!");
          transacao.focus();
        }else{
          
          return true;
        }
  }


  function validarcampovalor(campo) {
    let n = campo.value;
    if (n.length === 0 || isNaN(parseFloat(n)))  {
      window.alert("Insira o valor da transação!")  
      campo.focus();    
      campo.value = "";
      
      return false;
    }
    
    return true;
  }


  
  
    function validarbanco() {
      let bank = document.getElementById("bank");
          if (bank.value == "") {
            window.alert("Selecione o banco!");
            bank.focus();
          }else{
            
            return true;
          }
      }


      function validarPix() {
        let chave = document.getElementById("chave");
            if (chave.value == "") {
              window.alert("selecione o tipo da chave pix");
              chave.focus();
            }else{
              
              return true;
            }
        }


