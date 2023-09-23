<?php get_header(); ?>

    <main>
    <div id="News">
            <h2>NEWS</h2>
            <div>

            <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
                <dl>
                    <a href="<?php echo get_permalink(); ?>">
                        <dd><?php the_time('Y・n・j'); ?></dd>
                        <dd><?php echo get_the_category()[0]->name; ?></dd>
                        <dt><?php  echo wp_trim_words( get_the_title(), 20, '…' ); ?></dt>
                    </a>  
                </dl>
            <?php 
                endwhile;
                endif;
            ?>
            
            </div>
        </div>
        <div id="Topic">
            <div id="Coffee-topic">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/coffee-pc-topic.jpg" media="(min-width: 1100px)">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tab-img/coffee-tab-topic.jpg" media="(min-width: 700px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/coffee-sp-topic.jpg" alt="">
                </picture>
                <div>
                    <h2>Coffee</h2>
                    <p>当店のコーヒーは豆の香りと鮮度を保つために
                        お客様の注文が入ってから豆を挽き、抽出を行
                        います。
                        そうすることで香り豊かで味わい深いコーヒー
                        を厨述することができます。</p>
                </div>
            </div>
            <div id="Shop-topic">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photo/pc-img/shop-pc-topic.jpg" media="(min-width: 1100px)">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photo/tab-img/shop-tab-topic.jpg" media="(min-width: 700px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/photo/sp-img/shop-sp-topic.jpg" alt="">
                </picture>
                <div>
                    <h2>shop</h2>
                    <p>店内の内装では暗めの色合いの木材を
                        多用し、より一層、居心地の良い落ち
                        着いた空間に仕上げました。
                        心行くまでこのゆったりした空間をお
                        楽しみください。
                    </p>
                </div>
            </div>
        </div>
        <div id="Menu">
            <h2>GRANDMENU</h2>
            <div>
                <h3>drink</h3>
                <ul>
                    <li>コーヒー<span></span>各 350円</li>
                    <li>モカブレンド                 <span></span>350円</li>
                    <li>アメリカン                   <span></span> 350円</li>
                    <li>カフェラテ<span></span>各 350円</li>
                </ul>
            </div>
            <div>
                <h3>snacks</h3>
                <ul>
                    <li>たまごサンド<span></span>各 600円</li>
                    <li>ハムサンド<span></span>各 600円</li>
                    <li>イチゴサンド<span></span>各 550円</li>
                    <li>バナナサンド<span></span>各 550円</li>
                </ul>
                <ul>
                    <li>ホットドック<span></span>各 700円</li>
                    <li>ハンバーガー<span></span>各 500円</li>
                    <li>フライドポテト<span></span>各 500円</li>

                </ul>
            </div>
        </div>
        <div id="Reserve">
            <h2>予約フォーム</h2>
            <form action="">
            <label for="">
                <div>
                    <h3>代表様氏名</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>氏名フリガナ</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>メールアドレス</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>電話番号</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>人数</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>日時</h3>
                </div>
                <input type="text">
            </label>
            <label for="">
                <div>
                    <h3>備考</h3>
                </div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </label>
            <button type="submit">送信</button>
            </form>
        </div>
        <div id="Access">
            <h2>ACCESS</h2>
            <div id="Map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4122.049880352923!2d141.34794616507605!3d43.06815801040526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2974d2c3f903%3A0xa5e2b18cdd4a47a5!2z5pyt5bmM6aeF!5e0!3m2!1sja!2sjp!4v1683459156812!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <h2>店舗情報</h2>
                <ul>
                    <li>
                        <p>所在地</p>
                        <p>北海道札幌市中央区北○○条○○丁目〇号〇番</p>
                    </li>
                    <li>
                        <p>アクセス</p>
                        <p>地下鉄札幌駅から徒歩10分</p>
                    </li>
                    <li>
                        <p>駐車場</p>
                        <p>店内駐車スペース(10台有り)</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
   

<?php get_footer(); ?>