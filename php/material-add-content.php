            <div class="g8">
                    <div class="w60">
                    <h1 class="title-c">Отправить свой материал</h1>
                    <div class="text-body">
                    <p><i>Любой посетитель портала может испытать себя в качестве журналиста. Если ваша статья понравится нашему редактору, мы опубликуем её в отраслевом журнале и укажем вас как автора!</i></p>
                    <p><b>Обратите внимание: все поля обязательны для заполнения!</b></p><br>
                    <form action="material-success.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inp1">В какой рубрике вы бы хотели опубликовать свою статью?</label>
                        <input type="text" name="inp1" id="inp1">
                    </div>
                    <div class="form-group">
                        <label for="inp2">Заголовок</label>
                        <input type="text" name="inp2" id="inp2">
                    </div>
                    <div class="form-group">
                        <label for="txt1">Аннотация</label>
                        <textarea name="txt1" id="txt1" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="txt2">Текст статьи</label>
                        <textarea name="txt2" id="txt2" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                    <p>Добавить изображения</p>
                    <p>Размер картинки не должен превышать 3 Мб.</p>
                        <div class="fjblock btn-shadow">
                            <label for="fileme">Обзор</label>
                            <input type="file" class="" id="fileme" value="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="inp3">Автор</label>
                        <input type="text" name="inp3" id="inp3">
                    </div>
                    <div class="form-group">
                        <label for="inp4">Контактный email</label>
                        <input type="text" name="inp4" id="inp4">
                    </div>
                    <div class="form-group">
                        <label for="inp5">Введите текст с картинки</label>
                        <input type="text" name="inp5" id="inp5" class="captcha input40">
                        <img src="tpl/images/captcha.jpg" alt="">
                    </div>
                    <div class="form-group">
                                    <input type="submit" value="Отправить" class="btn-submit">
                                </div>
                    </form>
                    </div>
                    </div>
                    <div class="w40">
                        <div class="wrap">
                            <form action="material-success.php" id="myopt">
                                <div class="form-group2">
                                    <input type="submit" value="Отправить свой материал" class="btn-submit">
                                </div>
                                <fieldset class="form-group2">
                                <p><i>Выберите, какие компании отображать в списке </i></p>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="us1" value="us" />
                                        <label for="us1">Новости портала</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="us2" value="gruz" />
                                        <label for="us2">Интервью</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="us3" value="disp" />
                                        <label for="us3">Аналитические обзоры</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="us4" value="strah" />
                                        <label for="us4">Фото-репортажи</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="us5" value="disp2" />
                                        <label for="us5">События в отрасли</label>
                                    </div>
                                    <div class="radio-group">
                                        <input type="checkbox" name="uslugi" id="usall" value="disp8" />
                                        <label for="usall" class="active">Все компании</label>
                                    </div>
                                    <br>
                                </fieldset>
                                
                            </form>
                        </div>
                    </div>
            </div>