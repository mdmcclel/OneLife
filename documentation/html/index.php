<?php include( "header.php" ); ?>

<?php include( "reviewPages/reviewCount.php" ); ?>


<center>


<table border=0 width=100%>
<tr>
<td><img src=portraitLeft.png border=0 width=197 height=414></td>
<td>
<center><?php include( "lifeStats.php" ); ?></center>



<img src=logo558x305_border.png border=0 width=558 height=305>

<br>
<center>a multiplayer survival game of parenting<br>and civilization building by <a href=http://hcsoftware.sf.net/jason-rohrer>Jason Rohrer</a></center>

</td>
<td><img src=portraitRight.png border=0 width=196 height=418></td>

</tr>
</table>

     
<?php
if( $rs_reviewCount > 0 ) {
    $reviewWord = "Reviews";
    if( $rs_reviewCount == 1 ) {
        $reviewWord = "Review";
        }
?>

<a href="#reviews"><?php echo $rs_reviewCount;?> Player <?php echo $reviewWord;?></a>, <?php echo $rs_positivePercent;?>% Positive

<?php
    }
?>

<br>
<br>

<center><iframe title="YouTube video player" width="640" height="390" src="http://www.youtube.com/embed/riqu2eszsIg?rel=0" frameborder="0" allowfullscreen></iframe></center>

<br>
<br>
<center><img src=lifeLine.png border=0 width=712 height=222></center>

<table border=0><tr><td align=justify>
<font size=5>This game is about playing one small part </font>in a much larger story.  You only live an hour, but time and space in this game is infinite.  You can only do so much in one lifetime, but the tech tree in this game will take hundreds of generations to fully explore.  This game is also about family trees.  Having a mother who takes care of you as a baby, and hopefully taking care of a baby yourself later in life.  And your mother is another player.  And your baby is another player.  Building something to use in your lifetime, but inevitably realizing that, in the end, what you build is not for YOU, but for your children and all the countless others that will come after you.  Proudly using your grandfather's ax, and then passing it on to your own grandchild as the end of your life nears.  And looking at each life as a unique story.  I was this kid born in this situation, but I eventually grew up.  I built a bakery near the wheat fields.  Over time, I watched my grandparents and parents grow old and die.  I had some kids of my own along the way, but they are grown now... and look at my character now!  She's an old woman.  What a life passed by in this little hour of mine.  After I die, this life will be over and gone forever.  I can be born again, but I can never live this unique story again.  Everything's changing.  I'll be born as a different person in a different place and different time, with another unique story to experience in the next hour...
</td></tr></table>

<center><img src=arrowLine.png border=0 width=712 height=219></center>

     
<br>
<br>
     

<table border=0 cellpadding=5><tr><td>     <font size=5>....Progress Report....</font>
     </td></tr></table>
     <table border=1 cellspacing=0 cellpadding=10 width=100%><tr><td>
<?php include( "objectsReport.php" ); ?>

     </td></tr></table>
<br>
<br>
     

<br>
<br>

<form action="http://northcountrynotes.org/releaseList/server.php" 
      method="post">
<input type="hidden" name="action" value="subscribe">
<input type="hidden" name="timeStamp" value="<?php echo file_get_contents( 'http://northcountrynotes.org/releaseList/server.php?action=timestamp' ); ?>">
Sign up for release announcement emails: <input type="text" name="email" value="">
<input type="submit" value="Subscribe"><br>
(A few brief emails a year, at most.)
</form>
<br>

</center>

     
<center>     
<table border=0 cellspacing=0><tr>

<?php
if( $rs_reviewCount > 0 ) {
?>


<td>
<font size=6 id="reviews">Recent Reviews:</font><br><br>
<?php
include( "reviewPages/recentReviews.html" );
?>
</td>

<?php
    }
if( $rs_reviewCount > 16 ) {
?>
<td width=80></td>    
<td>
<font size=6>Top Playtime Reviews:</font><br><br>
<?php
include( "reviewPages/playtimeReviews.html" );
?>
</td>

<?php
    }
?>
      
</tr>
</table>
</center>

<br>

<br>

<br>
     

<?php 
$artSummaryOnly = 1;
$numArtPerPage = 1;

include( "artLog.php" );
echo "<center>[<a href=artLogPage.php>More Artwork...</a>]</center>";
?>

<br><br><br>

     
<?php

$numNewsPerPage = 1;
$newsSummaryOnly = 1;
include( "news.php" );

?>
<br>

<br>

<br>

<br>


<center>
<font size=5>The thinking behind One Hour One Life</font><br>

<?php include( "youTubePlaylist.php" ); ?>


    <br>
    <br>
    <br>
    <br>

    <iframe src="https://discordapp.com/widget?id=328215300279500800&theme=dark" width="480" height="320" allowtransparency="true" frameborder="0"></iframe>

</center>


    
<?php include( "footer.php" ); ?>
