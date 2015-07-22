            <div class="g8">
                    <div class="w60">
                        <h1 class="uptitle">Дмитрий Таранов</h1>
                        <p class="stat">дата последнего посещения 11 января 2015</p>
                        <div class="info-block">
                        <div class="paginate">
                            <ul>
                                <li class="prev">
                                    <a href="#"></a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" class="current">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li class="next">
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <form action="#" id="mysort">
                            <div class="sort-block">
                                <label for="sortby">Сортировать по: </label>
                                <div class="strelka2">
                                    <select name="sortby" id="sortby" onchange="this.form.submit();">
                                        <option value="sort_doc">по дате добавления</option>
                                        <option value="pagetitle">названию</option>
                                        <option value="price">цене</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <h2 class="title-block3">Мои заявки</h2>
                        <div id="result">
                            <div class="block">
                                <p class="date">27 апреля 2015</p>
                                <p class="numb">№ 1289324</p>
                                <div class="ocenka">
                                    <span>Санкт-Петербург Владивосток </span>
                                    <span>12.03.2012 — 12.07.2012 </span>
                                    <span>80 т., 33 м3</span>
                                    <p>340 000 руб.
                                        <br>предоплата: 100%</p>
                                </div>
                                <div class="contact">
                                    <p><b>Фирма:</b> OOO Амир</p>
                                    <p><b>Контакты:</b> Константинопольский Константин, 8 921 390-02-12, <a href="mailto:kests@front.ru">kests@front.ru</a></p>
                                </div>
                                <div class="buttons">
                                    <a href="#">Подробнее</a>
                                    <a href="#">Скрыть</a>
                                    <a href="#" class="noactive">Заявка уже закрыта</a>
                                    <a href="#">Пожаловаться</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="w40">
                        <div class="wrap">
                        <?php
                        include 'php/lk-rpanel.php'; // боковая панель в ЛК
                        ?>
                        </div>
                    </div>
            </div>
