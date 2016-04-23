<section>

<h2 class="mb15">参加フォーム</h2>

<fieldset>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('entry'); ?>
  <table class="ta1 mb15">
    <thead></thead>
    <tbody>
      <tr>
        <th>名前</th>
        <td><input type="text" name="name" value="<?php echo set_value('name'); ?>"></td>
      </tr>
     <tr>
        <th>所属サーバ</th>
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
        <th>コメント</th>
        <td><textarea name="comment"><?php echo set_value('comment'); ?></textarea></td>
      </tr>
      <tr>
        <th>エントリー用の画像</th>
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
</section>
