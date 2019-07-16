<link rel="stylesheet" href="css/main.css">


<!--<p>Здесь данные из data файла</p>-->
<p>197376, ул. Профессора Попова, 2, Санкт-Петербург, Россия</p>
<p>тел: 8-800-888-55-55</p>
<p>Наша группа в социальных сетях</p>
<p>
    <a href="#"><img src="../img/facebook.png" width="5" height="5"> </a>
    <a href="#"><img src="../img/vkontakte.png" width="10" height="10"> </a>
    <a href="#"><img src="../img/odnoklassniki.png" width="10" height="10"> </a>
</p>
<div class="container">
    <h2>Форма обратной связи</h2>
    <!--Валидировать и отправлять форму будем асинхронно без перезагрузки страницы,
     используя Ajax, чтобы было проще с ним работать-->
    <form id="contactForm" action="handler.php" method="post">
        <div class="field-block">
            <label for="name">Ваше имя:</label>
            <input id="name" class="field" name="name" required type="text" placeholder="Иванов Иван Иванович">
        </div>
        <div class="field-block">
            <label for="email">Ваш E-mail:</label>
            <input id="email" class="field" name="email" required type="email" placeholder="ivanov@email.com">
        </div>
        <div class="field-block">
            <label for="phone">Ваш телефон:</label>
            <input id="phone" class="field" name="phone" required type="text" placeholder="+7 (800) 000-00-00">
        </div>
        <div class="field-block">
            <label for="message">Текст сообщения:</label>
            <textarea id="message" class="field" required name="message" rows="4"></textarea>
        </div>
        <div class="field-block">
            <input id="check" name="check" checked type="checkbox">
            <span class="check-text">Я добровольно отправляю свои данные</span>
        </div>
        <button id="button" class="button" type="submit">Отправить</button>
        <div class="result">
            <span id="answer"></span>
            <span id="loader"><img src="images/loader.gif" alt=""></span>
        </div>
    </form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/main.js"></script>