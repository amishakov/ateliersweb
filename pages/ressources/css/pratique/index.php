<?php
    // config
    $title = "Ressources CSS → En pratique";
    $section="ressources";
    $subsection="css";
    $nav = "/web/snippets/ressources/css.php";
    $subsubsection="pratique";
    $mdfile = "./pratique.md";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>
<style>
    main h4 {
        margin:.5em 0;
        font-weight:normal;

    }
    main h4::before {
        font-size:1.5em;
        position:relative;
        top:.15em
    }
    main h4:nth-of-type(1)::before { content: "😀 " }
    main h4:nth-of-type(2)::before { content: "😬 " }
    main h4:nth-of-type(3)::before { content: "😁 " }
    main h4:nth-of-type(4)::before { content: "😊 " }
    main h4:nth-of-type(5)::before { content: "😂 " }
    main h4:nth-of-type(6)::before { content: "😳 " }
    main h4:nth-of-type(7)::before { content: "😆 " }
    main h4:nth-of-type(8)::before { content: "🤓 " }
    main h4:nth-of-type(9)::before { content: "😘 " }
    main h4:nth-of-type(10)::before { content: "😏 " }
    main h4:nth-of-type(11)::before { content: "😜 " }
    main h4:nth-of-type(12)::before { content: "😱 " }
    main h2, main pre {
        clear: both;
    }
    img {
        width: 200px;
        float: left;
        margin: 0 1em .25em 0;
        border:1px solid #ddd
    }
    li {
        list-style-position: inside
    }
</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
