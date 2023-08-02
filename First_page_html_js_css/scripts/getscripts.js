async function start() {
    // переменная URL по которой делаем GET запрос
    let url = "https://jsonplaceholder.typicode.com/users";
    // отправляем запрос
    let response = await fetch(url);
    // успешен ли запрос?
    if (response.ok) { // если HTTP-статус в диапазоне 200-299
        // получаем тело ответа (см. про этот метод ниже)
        let json = await response.json();
        // проверка переменной json - вывод
        console.log(json);
        // получаем секцию по id - куда мы выгрузим данные
        let section = document.getElementById("users");
        // переменная для накопления строки записи в секцию
        let html = " ";
        // перебор массива циклом foreach поэлементно
        json.forEach(element => {
            // берем конкретного одного user
            let htmlSegment = `<div class="card">
            <h2>${element.name}</h2>
            <h3>${element.phone}</h3>
            </div>`;
            // увеличиваем значение общей переменной html
            html += htmlSegment; // html = html + htmlSegment
        });
        // добавление в секцию того что накопили после цикла
        // вставка в строку открывающего и закрывающего тэга section
        section.innerHTML = html;

    } else {
        alert("Ошибка HTTP: " + response.status);
    }
}

start();

