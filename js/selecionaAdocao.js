let ipt = document.getElementById('adocao')
let div_adotado = document.getElementById('div_adotado')

ipt.addEventListener('input', ()=>{
    if(ipt.checked){
        div_adotado.classList.remove('visually-hidden')
    } else {
        div_adotado.classList.add('visually-hidden')
    }
})