<section>

<h2>ランキング / 集計までお待ち下さい</h2>

<ul class="navmenu">
  <li><a href="#ranking1">1位～3位</a></li>
  <li>4位～10位</li>
  <li>10位～</li>
</ul>

<?php
    $content = '';
    foreach ($entry_list as $entry)
    {
        $content.= '<section id="entry-' . $entry['id'] . '" class="list">';
        $content.= '<figure>';
        $content.= '<img src="' . base_url() . 'entry/' . $entry['id'] . '.jpg" width=200 height=133 alt"">';
        $content.= '</figure>';
        $content.= '<h4>' . $entry['name'] . '</h4>';
        $content.= '<p>投票コメント</p>';

        //{
        //    // entry_idのコメント回す
        //    foreach ($vote_list[$entry['id']] as $comment)
        //    {
        //        $content.= '<p>' . $comment . '</p>';
        //    }
        //}
        $content.= '</section>';
    }
    echo $content;
?>

</section>
