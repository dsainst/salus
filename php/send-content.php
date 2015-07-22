<div class="g6">
                <p class="mt20">Здравствуйте! Здесь вы можете отправить заявку на любую услугу по морским грузоперевозкам, представленную на нашем портале компаниями-партнёрами. Для начала оставьте информацию о вашем грузе. </p>
                <h1 class="title-block3">Информация о грузе</h1>
                <div class="text-body">
                <div class="paginate">
                            <ul>
                                <li class="prev">
                                    <a href="#"></a>
                                </li>
                                <li><a href="send.php" class="current">1</a></li>
                                <li><a href="send2.php">2</a></li>
                                <li class="next">
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    <form action="send2.php">
                        <p></p>
                        <div class="form-group">
                            <label for="gruz">Название груза</label>
                            <input type="text" id="gruz" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="pass">Время отправки</label>
                            <span>с</span>
                            <input type="date" id="time" class="itext" >
                            <span>по</span>
                            <input type="date" id="time" class="itext" >
                        </div>
                        <div class="form-group3">
                            <label for="gruz2">Место загрузки</label>
                            <input type="text" id="gruz2" class="itext v2" placeholder="Регион">
                            <input type="text" id="gruz2" class="itext v2" placeholder="Город">
                        </div>
                        <div class="form-group3">
                            <label for="gruz3">Место разгрузки</label>
                            <input type="text" id="gruz3" class="itext v2" placeholder="Регион">
                            <input type="text" id="gruz3" class="itext v2" placeholder="Город">
                        </div>
                        <div class="form-group">
                            <label for="tip">Тип груза</label>
                            <input type="text" id="tip" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="weight">Вес (тонн)</label>
                            <input type="text" id="weight" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="ob">Объём (м3)</label>
                            <input type="text" id="ob" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="opis">Описание груза</label>
                            <textarea type="text" id="opis" class="itext"></textarea>
                        </div>
                        <div class="form-group3">
                        <div class="fblock">
                            <label for="stav">Ставка</label>
                            <input type="text" id="stav" class="itext">
                        </div>
                            <div class="fblock">
                            <label for="pred">Предоплата %</label>
                            <input type="text" id="pred" class="itext">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="val">Валюта</label>
                            <input type="text" id="val" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="forma">Форма оплаты</label>
                            <input type="text" id="forma" class="itext">
                        </div>
                        

                        <div class="form-group">
                            <input type="submit" class="btn-shadow" value="Далее">
                        </div>
                        <div class="form-group">
                            <p class="error">Место для вывода сообщений об ошибках</p>
                        </div>
                    </form>
                </div>
            </div>