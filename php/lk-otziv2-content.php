            <div class="g8">
                    <div class="w60 pr10">
                        <h1 class="uptitle">Дмитрий Таранов</h1>
                        <p class="stat">дата последнего посещения 11 января 2015</p>
                        <p><a href="#" class="btn-shadow">Ищу работу</a><span class="fright">c 11 января 2013</span></p>
                        <p><a href="#" class="btn-shadow">Больше не ищу работу</a></p>
                        <div class="clearfix"></div>
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
                                        <option value="sort_doc">дате добавления</option>
                                        <option value="rate">оценке</option>
                                        <option value="polez">полезности</option>
                                        <option value="summary">количеству комментариев</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="block">
                        <h2 class="title-block3">Мои отзывы</h2>
                             <div class="block">
                                    <p class="star s5"></p>
                                    <span class="date">27 октября 2015</span>
                                    <p><a href="ab-company.php">Первые n символов отзыва, являются ссылкой на страницу отдельного отзыва являются ссылкой на страницу отдельно </a></p>
                                    <p>Квазар — Таможенные услуги</p>
                                    <a href="#" class="fright pr20 btn2">Комментарии (10)</a>
                                    <div class="clearfix mb10"></div>
                                    <div class="buttons">
                                    <a href="#">Редактировать</a>
                                    <a href="#">Удалить</a>
                                    <span>Отзыв полезен? <a href="#">Да (4)</a>/ <a href="#">Нет (5)</a></span>
                                    
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
