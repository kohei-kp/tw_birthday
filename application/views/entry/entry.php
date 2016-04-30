<section>

<h2 class="mb15">参加フォーム</h2>

<fieldset>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('entry'); ?>
  <table class="ta1 mb15">
    <thead>
        <tr><td colspan="2">*は必須項目</td></tr>
    </thead>
    <tbody>
      <tr>
        <th>名前*</th>
        <td><input type="text" name="name" value="<?php echo set_value('name'); ?>"></td>
      </tr>
      <tr>
        <th>所属サーバー*</th>
        <td><select name="server_name">
        <?php
            foreach ($server_list as $server)
            {
                echo '<option value=' . $server['id'] . '>' . $server['name'] . '</option>';
            }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <th>TwitterID</th>
        <td><input type="text" name="twitter_id" value="<?php echo set_value('twitter_id'); ?>"></td>
      </tr>
      <tr>
        <th>一言</th>
        <td><textarea name="comment" rows="7" cols="48"><?php echo set_value('comment'); ?></textarea></td>
      </tr>
      <tr>
        <th>エントリー用の画像*</th>
        <td><input type="file" name="entry-image"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="参加する"></td>
      </tr>
    </tbody>
  </table>
</form>
</fieldset>
<section>
  <p>
    <strong class="color1">■キャラクター名</strong><br>
    エントリーするマキシミンの名前を入力してください。<br>
    ランキング入賞時にアイテムが受け取れない場合がございますのでご注意ください。
  </p>
  <p>
    <strong class="color1">■拡張子について</strong><br>
    png,jpg,jpeg,gif,bmpのいずれかでお願いします。
  </p>
  <p>
    <strong class="color1">■画像のサイズ</strong><br>
    150px × 150px、もしくはSSフォルダからそのまま添付願います。<br>
    オプションのカスタマイズをしていなければ、
    「C」でチャット欄、「Ctrl + Q」でクイックスロットを非表示にすることが出来ます。<br>
    サイズサンプル<br>
    <img src="<?php echo base_url(); ?>/images/size150.png">
  </p>
  <p>
    <strong class="color1">■画像撮影について</strong><br>
    極力、周りに誰もいない場所での撮影をお願いします。<br>
    キャラクターの向きの指定はありません。<br>
    一番、可愛い！格好良い！美しい！と思う角度で問題ありません。
  </p>
  <p>
    <strong class="color1">■エントリーについて</strong><br>
    サブキャラの複数エントリーも可能です。<br>
    見た目、キャラクター名が異なっており、マキシミンであれば問題ありません。<br>
    "マキシミン"の生誕祭です。
  </p>
</section>
</section>
