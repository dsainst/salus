            <div class="g8">
                    <div class="w60 pr10">
                        <h1 class="title-block3">Платные услуги портала</h1>
                        <form action="#">
                            <p><b>Банковский перевод для юридических лиц</b></p>
                            <table>
                                <tr>
                                    <td width="140">Сумма платежа</td>
                                    <td>12 000 руб.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="form-group2">
                                            <div class="radio-group">
                                                <input type="checkbox" id="ch12" name="ch12">
                                                <label for="ch12"><b>Выделить в счёте НДС</b></label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Услуги</td>
                                    <td>Все грузы</td>
                                </tr>
                                <tr>
                                    <td>Период</td>
                                    <td>90 дней</td>
                                </tr>
                                <tr>
                                    <td>Начало периода</td>
                                    <td>С момента окончания предыдущего оплаченного периода</td>
                                </tr>
                                <tr>
                                    <td>Способ оплаты</td>
                                    <td>Банковский перевод юр. лиц в рублях</td>
                                </tr>
                            </table>
                            <fieldset class="form-group2">
                                <legend>Реквизиты</legend>
                                <div class="form-group inpsmall">
                                    <label for="org">Название организации</label>
                                    <input type="text" id="org" name="org">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="inn">ИНН</label>
                                    <input type="text" id="inn" name="inn">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="kpp">КПП</label>
                                    <input type="text" id="kpp" name="kpp">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="ogrn">ОГРН</label>
                                    <input type="text" id="ogrn" name="ogrn">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="rs">р/с</label>
                                    <input type="text" id="rs" name="rs">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="bank">Банк</label>
                                    <input type="text" id="bank" name="bank">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="bik">БИК</label>
                                    <input type="text" id="bik" name="bik">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="ks">к/с</label>
                                    <input type="text" id="ks" name="ks">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="name">ФИО контактного лица</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="phone">Телефон (не забудьте указать код города)</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                            </fieldset>
                            <fieldset class="form-group2">
                                <legend>Юридический адрес</legend>
                                <div class="form-group inpsmall">
                                    <label for="indeks">Индекс</label>
                                    <input type="text" id="indeks" name="indeks">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="punkt">Населенный пункт</label>
                                    <input type="text" id="punkt" name="punkt">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="address">Адрес</label>
                                    <input type="text" id="address" name="address">
                                </div>
                            </fieldset>
                            <fieldset class="form-group2">
                                <legend>Почтовый адрес</legend>
                                <div class="form-group inpsmall">
                                    <label for="indeks2">Индекс</label>
                                    <input type="text" id="indeks2" name="indeks2">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="punkt2">Населенный пункт</label>
                                    <input type="text" id="punkt2" name="punkt2">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="address2">Адрес</label>
                                    <input type="text" id="address2" name="address2">
                                </div>
                                <div class="form-group inpsmall">
                                    <label for="addresat">Кому</label>
                                    <input type="text" id="addresat" name="addresat">
                                </div>
                            </fieldset>
                            <div class="form-group">
                            <input type="button" class="btn-shadow save" value="Выписать счет">
                            <input type="button" class="btn-shadow cancel" value="Назад">
                        </div>
                        </form>
                    </div>
                    <div class="w40">
                        <div class="wrap">
                        <?php
                        include 'php/lk-rpanel.php'; // боковая панель в ЛК
                        ?>
                        </div>
                    </div>
            </div>
