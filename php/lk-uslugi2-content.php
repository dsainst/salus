            <div class="g8">
                    <div class="w60 pr10">
                        <h1 class="title-block3">Платные услуги портала</h1>
                        <div class="block-grey">
                            <div class="item">
                            <p><b>Перечень приобретенных услуг</b></p>
                            <p class="head">Личные:</p>
                                <table class="polosa">
                                    <tr>
                                        <td width="140">Все грузы</td>
                                        <td><i>Осталось 39 дней</i></td>
                                        <td><a href="#" class="btn2">продлить</a></td>
                                    </tr>
                                </table>
                                <table class="polosa">
                                    <tr>
                                        <td width="140">Свои грузы для всех</td>
                                        <td><i>Осталось 39 дней</i></td>
                                        <td><a href="#" class="btn2">продлить</a></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item">
                            <p class="head">Компания Автотранссервис, ООО</p>
                                <table class="polosa">
                                    <tr>
                                        <td width="140">Все грузы</td>
                                        <td><i>Осталось 39 дней</i></td>
                                        <td><a href="#" class="btn2">продлить</a></td>
                                    </tr>
                                </table>
                                <table class="polosa">
                                    <tr>
                                        <td width="140">Свои грузы для всех</td>
                                        <td><i>Осталось 39 дней</i></td>
                                        <td><a href="#" class="btn2">продлить</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div> <!-- end block-grey -->
                        <div class="block-white">
                            <p><b>Перечень платных услуг, которые вы можете приобрести</b></p>
                            <div class="item">
                                <table class="polosa2">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td width="200">Все грузы</td>
                                        <td>2300 руб.</td>
                                        <td width="10"><div class="form-group2">
                                        <div class="radio-group">
                                            <input type="checkbox" id="m1" name="m1">
                                            <label for="m1" class="mb0">&nbsp;</label>
                                        </div>
                                        </div></td>
                                    </tr>
                                </table>
                                <p class="small"><i>Возможность видеть контактную информацию по всем грузам</i></p>
                                <table class="polosa2">
                                <tr></tr>
                                    <tr>
                                        <td width="200">Свои грузы для всех</td>
                                        <td>1200 руб.</td>
                                        <td width="10"><div class="form-group2">
                                        <div class="radio-group">
                                            <input type="checkbox" id="m1" name="m1">
                                            <label for="m1" class="mb0">&nbsp;</label>
                                        </div>
                                        </div></td>
                                    </tr>
                                </table>
                                <p class="small"><i>Открыть контактную информацию по добавляемым вами грузам для всех посетителей портала</i></p>
                                <table class="polosa2">
                                <tr></tr>
                                    <tr>
                                        <td width="200">Весь транспорт</td>
                                        <td>3500 руб.</td>
                                        <td width="10"><div class="form-group2">
                                        <div class="radio-group">
                                            <input type="checkbox" id="m1" name="m1">
                                            <label for="m1" class="mb0">&nbsp;</label>
                                        </div>
                                        </div></td>
                                    </tr>
                                </table>
                                <p class="small"><i>Возможность видеть контактную информацию по всем транспортам</i></p>
                            </div>
                        </div><!-- end block-white -->
                         <form action="lk-uslugi3.php">
                             <div class="form-group">
                                 <label for="period">Выберите оплачиваемый период</label>
                                 <div class="strelka">
                                 <select name="period" id="period">
                                     <option value="1 месяц" data-price="12000">1 месяц</option>
                                     <option value="2 месяца" data-price="20000">2 месяца</option>
                                     <option value="3 месяца" data-price="26000">3 месяца</option>
                                 </select>
                                 </div>
                                 <p>Итого:</p>
                                 <div class="itogo">
                                    <span class="summ">12000</span> руб.
                                 </div>
                             </div>
                             <div class="form-group2">
                                 <p>Начало оплачиваемого периода</p>
                                 <div class="radio-group">
                                     <input type="checkbox" id="ch1" name="ch1">
                                     <label for="ch1">С момента прихода денег</label>
                                 </div>
                                 <div class="radio-group">
                                     <input type="checkbox" id="ch2"  name="ch2">
                                     <label for="ch2">С даты</label>
                                         <div class="form-group">
                                            <input type="date" id="ch3" name="ch3">
                                         </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="pay">Способ оплаты</label>
                                 <div class="strelka">
                                 <select name="pay" id="pay">
                                     <option value="Наличные">Наличные</option>
                                     <option value="Безналичная оплата">Безналичная оплата</option>
                                 </select>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="face">От чьего лица вы хотите произвести оплату?</label>
                                 <div class="strelka">
                                 <select name="face" id="face">
                                     <option value="От своего">От своего</option>
                                     <option value="От доверенного лица">От доверенного лица</option>
                                 </select>
                                 </div>
                             </div>
                             <div class="form-group">
                            <input type="submit" class="btn-shadow w180" value="Приобрести платные услуги">
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
