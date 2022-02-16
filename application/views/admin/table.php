
<div class="page-table">
        <div class="page-table__header">
          <div class="page-table__info">
            <div class="page-table__info-left"><a class="page-table__info-back" href="/admin"><img src="/static/images/icon--back.svg" alt="back"><span><?=$reviewer['review_link']?></span></a>
              <div class="page-table__info-desc">Статус: <? if($reviewer['id_status']==1): echo('Черновик'); elseif($reviewer['id_status']==2): echo('Стоп'); else: echo('Запущен'); endif; ?></div>
            </div>
            <div class="page-table__statistics">
              <div class="statistics">
                <div class="statistics__item">
                  <div class="statistics__name">Язык</div>
                  <div class="statistics__value">Все</div>
                </div>
                <div class="statistics__item">
                  <div class="statistics__name">Заходы</div>
                  <div class="statistics__value"><?=$reviewer['visits']?></div>
                </div>
                <div class="statistics__item">
                  <div class="statistics__name">Формы</div>
                  <div class="statistics__value"><?=$reviewer['forms']?></div>
                </div>
                <div class="statistics__item">
                  <div class="statistics__name">Отзывы</div>
                  <div class="statistics__value"><?=$reviewer['reviews']?></div>
                </div>
                <div class="statistics__item">
                  <div class="statistics__name">CV</div>
                  <? if($reviewer['visits']!=0): ?>
                    <div class="statistics__value"><?=$reviewer['reviews']/$reviewer['visits']*100?>%</div>
                  <? else: ?>
                    <div class="statistics__value">0%</div>
                  <? endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-table__tabs"><a class="page-table__tabs-link page-table__tabs-link--active">Активные (<?=$out?>)</a><a class="page-table__tabs-link" href="/admin/archive/<?=$reviewer['opinion']?>">Архив (<?=$in?>)</a></div>
        <div class="table-wrapper">
                <table class="table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <thead class="table-head">
                          <tr> 
                            <th width="82">Дата&nbsp;и&nbsp;время</th>
                            <th width="165">Номер&nbsp;заказа</th>
                            <th width="233">Имя,&nbsp;контакты,&nbsp;адрес</th>
                            <th width="188">Подарок,&nbsp;товар</th>
                            <th>Оценка,&nbsp;отзыв </th>
                            <th width="65">В&nbsp;архив</th>
                          </tr>
                        </thead>
                        <? foreach($form_query as $form): ?>
                            <?if($form['archive']==0):?>
                                <tr class="table-item">
                                  <td class="text"><?=$form['created_at']?></td>
                                  <td class="text"><?=$form['form']['amazon_order']?></td>
                                  <td class="text"><?=$form['form']['name']?><br><?=$form['form']['phone']?><br><?=$form['form']['mail']?><br><br><?=$form['form']['country']?><br><?=$form['form']['city']?><br><?=$form['form']['state']?><br><?=$form['form']['zip_code']?><br><?=$form['form']['address']?></td>
                                  <td class="text"><?=$form['form']['gift']?></td>
                                  <td class="text"><?=$form['star']?><br><br><? if($form['review'] != 'null'): ?><?=$form['review']?><?endif;?><? if(isset($form['img'])): ?><a href="/admin/fetch_image/<?=$form['review_id']?>" target="_blank"> /admin/fetch_image/<?=$form['review_id']?> </a><? elseif(!empty($form['link'])):?><a href="<?=$form['link']?>"><?=$form['link']?></a> <? endif; ?></td>
                                  <td class="text"><a href="/admin/to_archive/<?=$reviewer['opinion']?>/<?
                                    if(isset($form['review_id']))
                                    {echo 'review/'.$form['review_id']; 
                                    }else{
                                        echo 'form/'.$form['form']['id'];
                                        };?>" class="page-table__del to_archive"><img src="/static/images/icon--del.svg" alt="del" /></a></td>
                                </tr>
                            <? endif; ?>
                        <? endforeach; ?>
                </table>
        </div>
      </div>