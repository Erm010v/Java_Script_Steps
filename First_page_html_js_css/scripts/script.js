// создаем функцию
function changedColor() {
    // создаем переменную element2 и находим htmlElement по id=el
    let element2 = document.getElementById("el");
    //выводим в консоль
    console.log(element2);
    // //проверка на наличие класса
    // if (element2.classList.contains("ice"))
    //     //удаляем класс ice
    //     element2.classList.remove("ice");
    // else
    //     //добавляем класс ice
    //     element2.classList.add("ice");
    // //проверка на наличие класса (как условие выше)
    element2.classList.toggle("ice");
    element2.textContent = element2.textContent == "Давайте изучим далее :" ? "Хотите Изучать ИИ ?" : "Разберем пример Алисы :";
}

//Создание переменной btn2 и находим HtmlElement по id=btn1
let btn2 = document.getElementById("btn1");
// выводим в консоль
console.log(btn2);
// добавляем слушатель события 'клик' на кнопку
// нажали на кнопку -> работает функция changedColor
btn2.addEventListener('click', changedColor);

let age = 18;
switch (age) {
    case 17: {
        alert("Доступ Запрещен")
        break;
    }

    case 18: {
        alert("Подтверди ID")
        break;
    }

    case 21: {
        alert("Скинь ID")
        break;
    }
    default: {
        alert("Введи Возраст")
        break;
    }
}