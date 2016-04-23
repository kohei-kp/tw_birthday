<section>

<h2 class="mb15">投票</h2>
<?php echo validation_errors(); ?>

<fieldset>
<?php echo form_open('vote'); ?>
<?php if (! $show_form_flag) { ?>
  <section>
    <h3>投票フォーム設置まで暫くお待ち下さい</h3>
    <p>フォームは5月上旬設置予定です</p>
  </section>
<?php } else { ?>

<table class="ta1 mb15">
  <tbody>
    <tr>
      <th>参加者リスト</th>
      <td>
        <select name="entry_name">
            <?php foreach ($entry_list as $entry) { echo '<option value=' . $entry['id'] . '>' . $entry['name'] . '</option>'; } ?>
        </select>
      </td>
    </tr>
    <tr>
        <th>コメント</th>
        <td><textarea name="comment"> <?php echo set_value('comment'); ?></textarea></td>
    </tr>
    <tr>
      <th>&nbsp;</th><td><input type="submit" value="投票"></td>
    </tr>
  </tbody>
</table>

<?php } ?>
</form>
</fieldset>

<div id="entry-info">
<?php
foreach ($entry_list as $entry)
{
    // エントリーした人の一覧(2015年版とくくりは同じ)
    $content = '<article><figure>';
    $content.= '<img src="' . base_url() . 'entry/' . $entry['id'] . '.jpg" width="140" height="140" >';
    $content.= '</figure>';
    $content.= '<h1>' . $entry['name'] . '</h1>';
    $content.= '<p>' . $entry['comment'] . '</p>';
    $content.= '</article>';

    echo $content;
}
?>
</div>
</section>
