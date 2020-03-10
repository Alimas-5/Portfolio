<?php
exit("test");
class Quote {
    public $author;
    public $message;
}

$quote1 = new Quote();
$quote1->author = "Homer Simpson";
$quote1->message = "Just because I don’t care doesn’t mean I don’t understand.";

?>
<html>
<head></head>

<body>
<p>
&laquo; [message] &raquo;<br>
<em>[author]</em>
</p>
</body>

</html>