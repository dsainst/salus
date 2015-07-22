            <div class="g8">
                    <div class="w60 pr10">
                        <h1 class="uptitle">Дмитрий Таранов</h1>
                        <p class="stat">дата последнего посещения 11 января 2015</p>
                        <div class="info-block">
                            <form action="#">
                        <h2 class="title-block3">Настройки</h2>
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" id="surname" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Отчество</label>
                            <input type="text" id="fullname" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="email">Email для авторизации</label>
                            <input type="text" id="email" class="itext">
                        </div>
                        <fieldset class="form-group2">
                                    <input type="checkbox" name="gruz" id="ex1" value="ex" />
                                    <label for="ex1">Присылать служебные уведомления</label>
                                    <br>
                                    <input type="checkbox" name="gruz" id="ex2" value="gruz" />
                                    <label for="ex2">Присылать уведомления о новых заявках</label>
                                    <br>
                                    <input type="checkbox" name="gruz" id="ex3" value="disp" />
                                    <label for="ex3">Подписаться на новостную рассылку</label>
                                    <br>
                                </fieldset>
                        <div class="form-group">
                            <label for="pass">Введите старый пароль</label>
                            <input type="text" id="pass" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="pass">Введите новый пароль</label>
                            <input type="text" id="pass" class="itext">
                        </div>
                        <div class="form-group">
                            <label for="pass">Введите новый пароль еще раз</label>
                            <input type="text" id="pass" class="itext">
                            <p class="error">Место для вывода сообщений об ошибках</p>
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn-shadow save" value="Сохранить изменения">
                            <input type="button" class="btn-shadow cancel" value="Отмена">
                        </div>
                    </form>
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
