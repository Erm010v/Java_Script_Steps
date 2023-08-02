async function submitForm(event) {
    // event  - не обновлять страницу
    event.preventDefault();
    // переменная URL, по которой делаем POST запрос
    let url = "https://jsonplaceholder.typicode.com/users";
    // считываем то, что ввели
    let text = document.getElementsByTagName('input')[0].value;
    // отправление запроса
    let response = await fetch(url,
        {
            // HTTP - метод
            method: 'POST',
            // заголовки
            headers: {
                'Content-type': 'application/json'
            },
            // тело запроса
            body: JSON.stringify({ text })
        });
    // смотрим статус
    alert(response.status);
}
// находим форму по ID
let form = document.getElementById('form');
// слушаем событие Отправка форм
form.addEventListener('submit', submitForm)