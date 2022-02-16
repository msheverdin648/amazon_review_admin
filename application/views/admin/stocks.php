    <div class="page page--lg">
        <div class="page-add-action">
            <div class="page-add-action__header"><a class="btn btn--add" href="/admin/step1" role="button">
                    <svg class="icon icon--plus ">
                        <use xlink:href="/static/images/icons.svg#icon--plus"></use>
                    </svg><span class="btn__text">Добавить акцию</span></a>

            </div>
            <div class="table-wrapper">
                <table class="table table--add-action" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <thead class="table-head">
                        <tr>
                            <th>Домен</th>
                            <th width="74">Ссылка</th>
                            <th width="108">Маркетплейс</th>
                            <th width="230">Заходы&nbsp;|&nbsp;Формы&nbsp;|&nbsp;Отзывы&nbsp;|&nbsp;CV</th>
                            <th width="102">Запуск/Стоп</th>
                            <th width="122">Статус</th>
                            <th width="256">Действия</th>
                        </tr>
                    </thead>
                    <? foreach ($reviewers as $review) : ?>
                        <tr class="table-item table-add-action-item">
                            <td class="text"><a href="https://<?= $review['review_link'] ?>" target="_blank"><?= $review['review_link'] ?></a></td>
                            <!-- <td class="text"><a href="https://eurodo.org/<?=$review['opinion']?>" target="_blank"><?= $review['review_link'] ?></a></td> -->

                            <td class="text">/<?= $review['opinion']  ?></td>
                            <td class="text"><span style="text-transform: uppercase;"><?= $review['id_marketplace']; ?></span></td>
                            <?
                            if ($review['visits'] != 0) {
                                $stat = $review['reviews'] / $review['visits'] * 100;
                            } else {
                                $stat = 0;
                            }
                            ?>
                            <td class="text"><?= $review['visits'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $review['forms'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $review['reviews'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?= round($stat, 2) ?>%</td>
                            <td class="text">
                                <div class="table-add-action-item__buttons">
                                    <a href="/admin/change_status" data-opinion="<?=$review['opinion']?>" class="action-btn start <? if ($review['id_status'] == 3) : ?>action-btn--active<? endif; ?>">
                                        <svg class="icon icon--play ">
                                            <use xlink:href="/static/images/icons.svg#icon--play"></use>
                                        </svg>
                                    </a>
                                    <a href="/admin/change_status" data-opinion="<?=$review['opinion']?>" class="action-btn stop <? if ($review['id_status'] == 1 || $review['id_status'] == 2) : ?>action-btn--active<? endif; ?>">
                                        <svg class="icon icon--stop ">
                                            <use xlink:href="/static/images/icons.svg#icon--stop"></use>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            <td class="text">
                                <? $status = $review['id_status'];
                                switch ($status) {
                                    case 1:
                                        echo 'Черновик';
                                        break;
                                    case 2:
                                        echo 'Стоп';
                                        break;
                                    case 3:
                                        echo 'Запущено';
                                        break;
                                        
                                } ?>
                            </td>
                            <td class="text">
                                <div class="table-add-action-item__buttons">
                                    <a href="/admin/edit/<?= $review['opinion'] ?>" class="btn btn--sm" type="button"><span class="btn__text">Правка</span>
                                    </a>
                                    <a class="btn btn--sm btn--red delete" id="" data-value="<?=$review['opinion'] ?>" href="/admin/delete" type="button"><span class="btn__text">Удалить</span>
                                    </a>
                                    <a class="btn btn--sm btn--dashed" href="/admin/table/<?=$review['opinion'] ?>" type="button"><span class="btn__text">Отчёты</a>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    <? endforeach; ?>

                              

                </table>
            </div>
        </div>
    </div>
    <script src="/static/js/form.js"></script>