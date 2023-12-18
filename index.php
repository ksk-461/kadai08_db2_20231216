<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>見積もり依頼</title>
</head>
<body>
   <div id="wrap">
        <form method="post" action="./confirm.php">

            <div class="user_info">
                <h1 class="heading_label">見積もり依頼フォーム</h1>
                <label>
                    <span class="text_label">会社名</span>
                    <input type="text" class="text_box" name="company" placeholder="会社名を入力してください。個人の方は「なし」と入力願います。"/>
                </label>
                <label>
                    <span class="text_label">お名前</span>
                    <input type="text" class="text_box" name="name" placeholder="名前を入力してください"/>
                </label>
                <label>
                    <span class="text_label">メール</span>
                    <input type="email" class="text_box" name="email" placeholder="example@mail.com"/>
                </label>
                <label>
                    <span class="text_label">折込日／デリバリー開始日</span>
                    <input type="date" id="del_day" class="text_box" value="2023-12-01" name="date"/>
                </label>
                <label>
                    <span class="text_label">サイズ</span>
                    <select id="size" class="text_box" name="size">
                        <option value="B4">B4</option>
                        <option value="B3">B3</option>
                        <option value="B2">B2</option>
                        <option value="B1">B1</option>
                    </select>
                </label>
            </div>
            
            <div id="map">
                <div class="map">
                    <img src="./img/hok_00.png" class="h_all" alt="">
                    <img src="./img/hok_01.png" class="h_center" alt="">
                    <img src="./img/hok_02.png" class="h_south" alt="">
                    <img src="./img/hok_03.png" class="h_north" alt="">
                    <img src="./img/hok_04.png" class="h_east" alt="">
                </div>
            </div>

            <div class="tab_menu">
                <label class="district_tab" id="tab_all">
                    <input type="radio" name="tab-menu" checked>
                    全道
                </label>
                <div>
                    <label>
                        <span class="text_label"><p>折込枚数：全地域</p><p>※ご希望の枚数をご入力ください。担当者よりご連絡差し上げます。</p></span>
                        <input type="number" class="text_box num_inp all" name="all" value="0" min="0" step="10"/>
                    </label>
                </div>

                <label class="district_tab" id="tab_center">
                    <input type="radio" name="tab-menu">
                    道央
                </label>
                <div class="district_content">
                    <label>
                        <span class="text_label">折込枚数：Ａ地区（札幌・石狩・江別・北広島市）</span>
                        <input type="number" class="text_box num_inp center_a" name="center_a" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">折込枚数：Ｂ地区（恵庭・千歳・苫小牧・小樽市）</span>
                        <input type="number" class="text_box num_inp center_b" name="center_b" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">折込枚数：Ｃ地区（Ａ、Ｂ地区に該当しない地域）</span>
                        <input type="number" class="text_box num_inp center_c" name="center_c" value="0" min="0" step="10"/>
                    </label>
                </div>

                <label class="district_tab" id="tab_south">
                    <input type="radio" name="tab-menu">
                    道南
                </label>
                <div class="district_content">
                    <label>
                        <span class="text_label">折込枚数：Ｃ地区（函館・北斗市、七飯町）</span>
                        <input type="number" class="text_box num_inp south_c" name="south_c" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">折込枚数：Ｅ地区（Ｃ地区に該当しない地域）</span>
                        <input type="number" class="text_box num_inp south_e" name="south_e" value="0" min="0" step="10"/>
                    </label>
                </div>

                <label class="district_tab" id="tab_north">
                    <input type="radio" name="tab-menu">
                    道北
                </label>
                <div class="district_content">
                    <label>
                        <span class="text_label">折込枚数：Ｄ地区（旭川市）</span>
                        <input type="number" class="text_box num_inp north_d" name="north_d" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">折込枚数：Ｅ地区（Ｄ地区に該当しない地域）</span>
                        <input type="number" class="text_box num_inp north_e" name="north_e" value="0" min="0" step="10"/>
                    </label>
                </div>

                <label class="district_tab" id="tab_east">
                    <input type="radio" name="tab-menu">
                    道東
                </label>
                <div class="district_content">
                    <label>
                        <span class="text_label">折込枚数：Ｂ地区（釧路・帯広市、釧路・幕別・音更・芽室町）</span>
                        <input type="number" class="text_box num_inp east_b" name="east_b" value="0" min="0" step="10"/>
                    </label>
                    <label>
                        <span class="text_label">折込枚数：Ｅ地区（Ｂ地区に該当しない地域）</span>
                        <input type="number" class="text_box num_inp east_e" name="east_e" value="0" min="0" step="10"/>
                    </label>
                </div>

                
            </div>

            <input type="submit" class="confirm" value="確認">

            <!-- 確認モーダルを表示して、一度試算したかったが時間間に合わず次回に持ち越し -->
            <!-- このまま使用するとSQLに二重に登録されてしまう。 -->
            <!-- <div class="modal-002__wrap">
                <input type="radio" id="modal-002__open" class="modal_inp_none modal-002__open-input" name="modal-002__trigger tri"/>
                <label for="modal-002__open" class="modal-002__open-label">確認</label>
                <input type="radio" id="modal-002__close" class="modal_inp_none" name="modal-002__trigger tri"/>
                <div class="modal-002">
                    <div class="modal-002__content-wrap">
                        <label for="modal-002__close" class="modal-002__close-label">×</label>
                        <div class="modal-002__content">
                            <p>A地区合計：<span class="sum_a"></span>枚</p>
                            <p>B地区合計：<span class="sum_b"></span>枚</p>
                            <p>C地区合計：<span class="sum_c"></span>枚</p>
                            <p>D地区合計：<span class="sum_d"></span>枚</p>
                            <p>E地区合計：<span class="sum_e"></span>枚</p>
                            <p>全地区合計：<span class="sum_all"></span>枚</p>
                            <p></p> 
                            ☆ここにinput挿入☆
                        </div>
                    </div>
                    <label for="modal-002__close">
                        <div class="modal-002__background"></div>
                    </label>
                </div>
            </div> -->
            
        </form> 

   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="./js/index.js"></script>
</body>
</html>