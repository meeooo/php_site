function toggleZapisi(id)
{
    document.getElementById(id).classList.toggle("rabota-hidden");
}

function sendZapis()
{
    var name = `${document.signame.Фамилия.value} ${document.signame.Имя.value} ${document.signame.Отчество.value}`;

    var inputs = document.getElementsByName('Контроль');
    var КонтрольValue = "";
    for (var i=0;i<inputs.length;i++){
        if (inputs[i].checked) {
            КонтрольValue += inputs[i].value + " ";
        }
    }

    document.signame.text.value = `Уважаемый ${name}!
    Ждем вас на экзамен по ${document.signame.Предмет.value} в ${document.signame.Время.value}.
    Экзамен пройдет в форме ${КонтрольValue}.`;
}