initEventFind()

function initEventFind() {
    $('#buscar').keyup(function () {
        var nomeFiltro = $(this).val().toLowerCase();
        $('.tabs').find('.conteudo').each(function () {
            var conteudoCelula = $(this).text()
            var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
            $(this).css('display', corresponde ? '' : 'none');
        });
    });
}

function confirmarDelete(idcliente) {
    if (confirm('Você realmente deseja excluir esta registro?')) location.href = '../deletarCad.php?idcliente=' + idcliente
}

function formatData() {
    let datas = $('.data');
    for (let data in datas) {
        if (datas[data].innerText) {
            novodia = new Date(datas[data].innerText);
            datas[data].innerText = (novodia.toLocaleDateString('pt-BR', { timeZone: 'UTC' }))
        }
    }
}

formatData()

function formataCPF(cpf, lg) {
    if (lg == 11) {
        cpf = cpf.replace(/[^\d]/g, "");
        return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");

    } else if(lg == 14) {
        return cpf.replace(/\D/g, '')
            .replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, "$1.$2.$3/$4-$5");
    }
}

function formatAll() {
    let cpfs = $('.formatCpf');

    for (let cpf in cpfs) {
        if (cpfs[cpf].innerText) {
            cpfs[cpf].innerText = (formataCPF(cpfs[cpf].innerText, cpfs[cpf].innerText.length))
        }
    }
}
formatAll()